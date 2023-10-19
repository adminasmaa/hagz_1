<?php

namespace App\Http\Controllers\Frontend\invest;


use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{

    public function index()
    {

        return view('frontend.invest.booking.index');


    }


}
