<?php

namespace App\Http\Controllers;
use App\Models\ApplicationData;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\User;

// SELECT id, JSON_UNQUOTE(JSON_EXTRACT(data, '$.post_name')) AS post_name FROM applicant_data; // 
class loginController extends Controller
{
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

        // create a user account first
        $user = new User();
        $user->name = $data['full_name'];
        $user->email = $data['email'];
        $user->phone = $data['mobile_no'];
        // generate a random password
        $password = Str::random(8);
        $user->show_password = $password;
        $user->password = bcrypt($password);
        $user->save();
        
        $applicantData = new ApplicationData();
        $applicantData->user_id = $user->id;
        $applicantData->data = json_encode($data);
        if($applicantData->save()) {
            // send email to user
            $to_name = $data['full_name'];
            $to_email = $data['email'];
            $data = array('name' => $to_name, "body" => "Your password is: ".$password);
            // \Mail::send('emails.mail', $data, function($message) use ($to_name, $to_email) {
            //     $message->to($to_email, $to_name)->subject('Registration successful');
            //     $message->from('test@gmail.com','Test');
            // });
        }

        return redirect()->route('welcome')->with('success', 'Registration successful. Please login to continue.');

    }

    public function login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        if ($username == "admin" && $password == "admin") {
            return redirect('home');
        } else {
            return redirect('login');
        }
    }

}
