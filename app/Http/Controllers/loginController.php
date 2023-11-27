<?php

namespace App\Http\Controllers;

use App\Models\ApplicationData;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

// SELECT id, JSON_UNQUOTE(JSON_EXTRACT(data, '$.post_name')) AS post_name FROM applicant_data; // 
class loginController extends Controller
{
    use AuthenticatesUsers;

    // protected $redirectTo = '/home';
    protected $redirectTo = '/user/dashboard';

    public function index()
    {
        return view('login');
    }

    public function registration()
    {
        return view('registration');
    }

    public function saveRegistration(Request $request)
    {
        $data = $request->all();

        $genrandom = rand(1000000000, 2000000000);
        $genrandom = substr($genrandom, 0, 15);

        // create a user account first
        $user = new User();
        $user->name = $data['full_name'];
        $user->email = $data['email'];
        $user->phone = $data['mobile_no'];
        $user->candidate_id = $data['candidate_id'];
        $user->registration_no = $genrandom;
        $user->form_step = 0;
        // generate a random password
        $password = Str::random(8);

        $user->show_password = $password;
        $user->password = bcrypt($password);
        $user->save();

        $applicantData = new ApplicationData();
        $applicantData->user_id = $user->id;
        $applicantData->data = json_encode($data);
        if ($applicantData->save()) {
            // send email to user
            $to_name = $data['full_name'];
            $to_email = $data['email'];
            $data = array('name' => $to_name, "body" => "Your password is: " . $password);
            // \Mail::send('emails.mail', $data, function($message) use ($to_name, $to_email) {
            //     $message->to($to_email, $to_name)->subject('Registration successful');
            //     $message->from('test@gmail.com','Test');
            // });
        }

        return redirect()->route('welcome')->with('success', 'Registration successful. Please login to continue.');

    }

    protected function username()
    {
        return 'candidate_id'; // Customize this to the field you want to use as the username
    }

    public function login(Request $request)
    {

        $username = $request->input('candidate_id');
        $password = $request->input('password');
        $request = new Request([
            'candidate_id' => $username,
            'password' => $password,
        ]);

        if ($this->attemptLogin($request)) {
            return $this->sendLoginResponse($request);
        }

        return $this->sendFailedLoginResponse($request);
    }

    // logout
    public function logout()
    {
        Auth::logout();
        return redirect()->route('welcome');
    }

    protected function validateLogin(Request $request)
    {
        $request->validate([
            $this->username() => 'required|string',
            'password' => 'required|string',
        ]);
    }

    protected function attemptLogin(Request $request)
    {
        return Auth::attempt(
            $request->only($this->username(), 'password'),
            $request->filled('remember')
        );
    }

    protected function sendLoginResponse(Request $request)
    {
        // $request->session()->regenerate();

        return $this->authenticated($request, Auth::user())
            ?: redirect()->intended($this->redirectPath());
    }

    protected function sendFailedLoginResponse(Request $request)
    {
        return redirect()->route('welcome')
            ->withInput($request->only($this->username(), 'remember'))
            ->withErrors(['error' => 'Invalid credentials']);
    }

}
