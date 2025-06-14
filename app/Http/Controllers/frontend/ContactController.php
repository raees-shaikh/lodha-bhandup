<?php

namespace App\Http\Controllers\frontend;

use App\Models\Contact;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Http\services\GoogleSheetsServices;

class ContactController extends Controller
{

    public function submit(Request $request)
    {
        // dd($request);
        $formType = $request->input('page_name');
        // dd($formType);
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required|string|min:3|max:30',
                'phone' => 'required|string|digits:10',
                'email' => 'required|string|email:rfc,dns|min:5|max:40',
                'configuration_required' => 'required|in:2 bhk,2.5 bhk,3 bhk',
                'recaptcha_response' => 'required',
            ],
            [],
            [
                'recaptcha_response' => 'google recaptcha'
            ]
        );

        // if ($validator->fails()) {
        //     session()->flash('contact-from-error', true);
        //     return redirect()->back()->withErrors($validator->errors())->withInput();
        // }

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput()
                ->with('page_name', $formType);
        }

        $response = Http::get('https://www.google.com/recaptcha/api/siteverify' . '?secret=' . config('app.google_captcha_secret_key') . '&response=' . $request->recaptcha_response)->json();
        if ($response && $response['success'] == true && $response['score'] >= 0.5 && $response['action'] == 'submit') {
            $data = (object) array();
            $data->name = $request->get('name');
            $data->email = $request->get('email');
            $data->country_code = $request->get('country_code');
            $data->phone = $request->get('phone');
            $data->configuration_required = $request->get('configuration_required');

            $contact = new Contact;
            $contact->name = $request->name;
            $contact->email = $request->email;
            $contact->country_code = $request->country_code;
            $contact->phone = $request->phone;
            $contact->configuration_required = $request->configuration_required;
            $contact->page_name = $request->page_name;
            $contact->ip_address = $_SERVER['REMOTE_ADDR'];
            if ($contact->save()) {
                Mail::to(config('app.mail_to_address'))->send(new ContactMail($data));
                if (app()->environment('production')) {
                    (new GoogleSheetsServices)->appendSheet([
                        [
                            $contact->name,
                            $contact->email,
                            $contact->country_code,
                            $contact->phone,
                            $contact->configuration_required,
                            date('d/m/Y H:i')
                        ]
                    ]);
                }
                $url = URL::temporarySignedRoute(
                    'thank-you',
                    now()->addMinutes(3)
                );
                return redirect($url)->with([
                    "message" => "Message Sent Successfully",
                    "alert-type" => "success"
                ]);
            }
            return redirect()->back()->with([
                "message" => "Something went wrong",
                "alert-type" => "error"
            ]);
        } else {
            session()->flash('customer-form-error', true);
            return redirect(url()->previous() . "#contact")->with(['alert-type' => 'error', 'message' => 'Google Captcha is Invalid'])->withInput();
        }
    }
}
