<?php

namespace App\Http\Controllers\Frontend\invest;


use App\Models\Aqar;
use App\Models\AqarSections;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Alert;

//use RealRashid\SweetAlert\Facades\Alert;

class AdController extends Controller
{

    public function index()
    {

        return view('frontend.invest.ads.add');


    }


    public function show(Request $request)
    {

        $user = Auth::id();


        if (!empty($request->search)) {

            $aqars = Aqar::where('user_id', $user)->where('id', 'LIKE', '%' . $request->search . '%')
                ->orWhere('name_ar', 'LIKE', '%' . $request->search . '%')
                ->paginate(10);

        } else {
            $aqars = Aqar::where('user_id', $user)->paginate(10);

        }


        return view('frontend.invest.ads.show', compact('aqars'));

    }


    public function store(Request $request)
    {


        $request_data = $request->except(['main_image', 'images', 'videos', 'subservice']);

        $request_data['name_ar'] = $request['name_ar'];
        $request_data['name_en'] = $request['name_ar'];
        $request_data['description'] = $request['details'];
        $request_data['user_id'] = Auth::id();

        $aqar = Aqar::create($request_data);

        if ($request->hasFile('main_image')) {

            UploadImage('images/aqars/', 'main_image', $aqar, $request->file('main_image'));

        }


        if ($request->hasFile('images')) {
            $images = $request->file('images');
            foreach ($images as $key => $files) {
                $destinationPath = 'images/places/';
                $file_name = $_FILES['images']['name'][$key];
                $files->move($destinationPath, $file_name);
                $data[] = $_FILES['images']['name'][$key];
                $aqar->images = implode(',', $data);
                $aqar->save();
            }
        }


        if ($request->hasFile('videos')) {
            $thumbnail = $request->file('videos');
            $destinationPath = 'images/aqars/videos/';
            $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
            $thumbnail->move($destinationPath, $filename);
            $aqar->videos = $filename;
            $aqar->save();

        }
        if (!empty($request->subservice)) {

            foreach ($request->subservice as $subserv) {
                $arr = explode('-', $subserv);
                AqarSections::create([
                    'section_id' => $arr[0],
                    'sub_section_id' => $arr[1],
                    'aqar_id' => $aqar->id

                ]);

            }
        }
        if ($aqar) {
            Alert::success('Success', __('site.added_successfully'));

            return redirect(route('invest.addAds'));

        }


    }


}
