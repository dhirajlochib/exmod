<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ApplicationData;
use App\Models\User;
use Razorpay\Api\Api;

class DashbordController extends Controller
{

    public function ExperienceDetails(Request $request)
    {
        return view('User.exp');
    }

    // CenterChoiceNew
    public function CenterChoiceNew(Request $request)
    {
        return view('User.city');
    }

    // FeePayment
    public function FeePayment(Request $request)
    {
        $user = Auth::user();
        if ($user->payment_status == 0) {
            return view('User.feeNotDone');
        } else {
            return view('User.feeDone');
        }
    }


    public function paymentStore(Request $request)
    {
        $input = $request->all();
        $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));
        $payment = $api->payment->fetch($input['razorpay_payment_id']);
        if (count($input) && !empty($input['razorpay_payment_id'])) {
            try {
                $response = $api->payment->fetch($input['razorpay_payment_id'])->capture(array('amount' => $payment['amount']));
                $user = User::find(Auth::user()->id);
                $user->payment_status = 1;
                $user->payment_date = date('Y-m-d');
                $user->tx_id = $input['razorpay_payment_id'];
                $user->form_step = 3;
                $user->save();

                $applicantData = new ApplicationData();
                $applicantData->user_id = $user->id;
                $applicantData->form_step = 3;
                $applicantData->data = json_encode($input);
                $applicantData->save();

                return redirect()->back()->with('success', 'Payment Successful');
            } catch (Exception $e) {
                return $e->getMessage();
            }
        }
        return redirect()->back();
    }


    public function index()
    {
        // dd('hi user');
        return view('User.dashboard');
    }

    public function qualificationDetails()
    {
        $user = Auth::user();
        if ($user->form_step > 0) {
            return redirect()->route('user.experienceDetails');
        }
        return view('User.qualificationDetails');
    }

    public function redirectToStep()
    {
        $user = Auth::user();
        if ($user->form_step == 0) {
            return redirect()->route('user.qualificationDetails');
        } elseif ($user->form_step == 1) {
            return redirect()->route('user.experienceDetails');
        } elseif ($user->form_step == 2) {
            return redirect()->route('user.payment');
        } else {
            return redirect()->route('user.dashboard');
        }
    }

    // ExperienceDetailsStore
    public function ExperienceDetailsStore(Request $request)
    {
        $data = $request->all();
        if (Auth::user()->form_step == 2) {
            $applicantData = ApplicationData::where('user_id', Auth::user()->id)->where('form_step', 2)->first();
            $applicantData->data = json_encode($data);
            $applicantData->save();
        } else {
            $applicantData = new ApplicationData();
            $applicantData->user_id = Auth::user()->id;
            $applicantData->form_step = 2;
            $applicantData->data = json_encode($data);
            $applicantData->save();
            if ($applicantData->save()) {
                // send email to user
                // $to_name = Auth::user()->name;
                // $to_email = Auth::user()->email;
                // $data = array('name' => $to_name, "body" => "Your password is: " . $password);
                // \Mail::send('emails.mail', $data, function($message) use ($to_name, $to_email) {
                //     $message->to($to_email, $to_name)->subject('Registration successful');
                //     $message->from('
                //     @gmail.com','Test');
                // });
                $user = User::find(Auth::user()->id);
                $user->form_step = 2;
                $user->save();
                return redirect()->route('user.payment');
            }

        }
    }

    public function qualificationDetailsStore(Request $request)
    {

        $data = $request->all();
        if (Auth::user()->form_step == 1) {
            $applicantData = ApplicationData::where('user_id', Auth::user()->id)->where('form_step', 1)->first();
            $applicantData->data = json_encode($data);
            $applicantData->save();
        } else {
            $applicantData = new ApplicationData();
            $applicantData->user_id = Auth::user()->id;
            $applicantData->form_step = 1;
            $applicantData->data = json_encode($data);
            $applicantData->save();
            if ($applicantData->save()) {
                // send email to user
                // $to_name = Auth::user()->name;
                // $to_email = Auth::user()->email;
                // $data = array('name' => $to_name, "body" => "Your password is: " . $password);
                // \Mail::send('emails.mail', $data, function($message) use ($to_name, $to_email) {
                //     $message->to($to_email, $to_name)->subject('Registration successful');
                //     $message->from('
                //     @gmail.com','Test');
                // });
                $user = User::find(Auth::user()->id);
                $user->form_step = 1;
                $user->save();
            }
        }


        return redirect()->back()->with("success", "Qualification Details Saved Successfully");

    }
}
