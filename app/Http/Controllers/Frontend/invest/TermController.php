<?php

namespace App\Http\Controllers\Frontend\invest;


use App\Models\Policy;
use App\Models\Term;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Alert;

class TermController extends Controller
{

    public function index()
    {
        $polices = Policy::get();

        return view('frontend.invest.terms', compact('polices'));


    }

    public function addterm(Request $request)
    {

        $requestdata = $request->all();

        $requestdata['user_id'] = Auth::id() ?? null;

        $terms = Term::create($requestdata);
        if ($terms) {
            Alert::success('Success', __('site.added_successfully'));

            return redirect(route('invest.term'));

        }


    }


}
