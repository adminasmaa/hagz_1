<?php

namespace App\Http\Controllers\Frontend;
use Validator;
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
    public function index()
    {


        $HomeServices = HomeServices::all();
        $sliders = Slider::get();
        return view('frontend.index', compact('HomeServices', 'sliders'));


    }

    public function terms()
    {


        return view('frontend.terms');


    }

    public function contact(){

        return view('frontend.contacts');
    }


    public function faq()
    {

        $faqs = Freq_question::get();

        return view('frontend.faqs', compact('faqs'));
    }

    public function addContacts(Request $request){

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
}
