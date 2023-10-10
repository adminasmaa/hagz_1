<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Country;
use App\Models\Freq_question;
use App\Models\HomeServices;
use App\Models\Setting;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Validator;
class HomeController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


    public function updateprofile($id)
    {

        $user = User::find($id);


        return view('frontend.updateprofile', compact('user'));

    }


    public function addContacts(Request $request)
    {

        $validation = Validator::make($request->all(), [
            'name' => 'required|string',
            'message' => 'required|string',
            'phone' => 'required|unique:contacts',
        ]);

        if ($validation->fails()) {
            return response()->json(['errors' => $validation->errors()], 422);
        }

        $request_data = $request->except('_token');
        $request_data['user_id'] = Auth::id() ?? '';

        $data=Contact::create($request_data);

        return response()->json(['status' => true, 'content' => 'success', 'data' => $data]);

    }

    public function index()
    {


        $HomeServices = HomeServices::all();
        $sliders = Slider::get();
        return view('frontend.index', compact('HomeServices', 'sliders'));


    }


    public function checklogin(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'phone' => 'required|unique:users|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',

            'password' => 'required|min:6',
        ]);

        if ($validation->fails()) {
            return response()->json(['errors' => $validation->errors()], 422);
        }
        if (auth()->attempt(['phone' => $request->phone, 'password' => $request->password])) {
            $user = Auth::user();
            Auth::login($user);
            return response()->json(['status' => true, 'content' => 'success', 'data' => $user]);

        } else {


            return response()->json(['status' => true, 'content' => 'error']);
        }

    }

    public function createaccount(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'email' => 'nullable|email|string|unique:users',
//            'phone' => 'required|string|unique:users',

            'phone' => 'required|unique:users|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',

            'password' => 'required|confirmed|min:6',
            'username' => 'required',
            'firstname' => 'required',
        ]);

        if ($validation->fails()) {
            return response()->json(['errors' => $validation->errors()], 422);
        }

        $request_data = $request->except(['password', 'password_confirmation', '_token']);

        $request_data['active'] = 1;
        $request_data['account_type'] = 'User';

        $request_data['password'] = bcrypt($request->password);
//        $request_data['lastname'] = $request->username;
        $request_data['username'] = $request->username;
        $request_data['firstname'] = $request->firstname;

        $user = User::create($request_data);

        Auth::login($user);

        return response()->json(['status' => true, 'content' => 'success', 'data' => $user]);

    }

    public function updateprofileuser(Request $request, $id)
    {
        $user = User::find($id);

        $validation = Validator::make($request->all(), [
            'email' => 'nullable|email|string',

            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',

            'password' => 'required|confirmed|min:6',
            'username' => 'required',
            'firstname' => 'required',
        ]);

        if ($validation->fails()) {
            return response()->json(['errors' => $validation->errors()], 422);
        }

        $request_data = $request->except(['password', 'password_confirmation', '_token']);

        $request_data['active'] = 1;
        $request_data['account_type'] = 'User';

        $request_data['password'] = bcrypt($request->password);
//        $request_data['lastname'] = $request->username;
        $request_data['username'] = $request->username;
        $request_data['firstname'] = $request->firstname;

        $user->update($request_data);

//

        return response()->json(['status' => true, 'content' => 'success', 'data' => $user]);

    }


    public function registers()
    {
        return view('frontend.registers');


    }

    public function sitelogin()
    {
        return view('frontend.login');


    }

    public function logout()
    {

        Auth::logout();

        return redirect(route('Home'));
    }

    public function terms()
    {


        return view('frontend.terms');


    }

    public function contact()
    {

        return view('frontend.contacts');
    }


    public function faq()
    {

        $faqs = Freq_question::get();

        return view('frontend.faqs', compact('faqs'));
    }

}
