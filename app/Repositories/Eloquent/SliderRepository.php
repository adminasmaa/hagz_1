<?php

namespace App\Repositories\Eloquent;

use App\Models\Slider;
use App\Repositories\Interfaces\SliderRepositoryInterface as SliderRepositoryInterfaceAlias;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
use Alert;
class SliderRepository implements SliderRepositoryInterfaceAlias
{
    public function getAll($data)
    {


        return $data->render('dashboard.sliders.index', [
            'title' => trans('site.sliders'),
            'model' => 'sliders',
            'count' => $data->count(),

        ]);
    }

    public function create()
    {
        // TODO: Implement create() method.

        return view('dashboard.sliders.create');
    }

    public function edit($Id)
    {
        // TODO: Implement edit() method.

        $slider = Slider::find($Id);

        return view('dashboard.sliders.edit', compact('slider'));
    }

    public function show($Id)
    {
        // TODO: Implement show() method.

        $slider = Slider::find($Id);

        return view('dashboard.sliders.show', compact('slider'));
    }

    public function store($request)
    {
        // TODO: Implement store() method.

        $request_data = $request->all();
        $slider = Slider::create($request_data);

        if ($request->hasFile('image')) {

            UploadImage('images/sliders/','image', $slider, $request->file('image'));

        }

        if ($slider) {
           Alert::success('Success', __('site.added_successfully'));

            return redirect()->route('dashboard.sliders.index');

        }
    }

    public function update($slider, $request)
    {
        // TODO: Implement update() method.

        $request_data = $request->all();
        $slider->update($request_data);
        if ($request->hasFile('image')) {

            UploadImage('images/sliders/','image', $slider, $request->file('image'));

        }
        if ($slider) {
           Alert::success('Success', __('site.updated_successfully'));

            return redirect()->route('dashboard.deposits.index');
//            session()->flash('success', __('site.updated_successfully'));
        } else {
           Alert::error('Error', __('site.update_faild'));

            return redirect()->route('dashboard.sliders.index');

        }
    }


    public function destroy($slider)
    {
        // TODO: Implement destroy() method.
//        $result=DB::table('categories')->where('id',$category->id)->delete();
        $result = $slider->delete();
        if ($result) {
               Alert::toast('Success', __('site.deleted_successfully'));
        } else {
               Alert::toast('Error', __('site.delete_faild'));

//                session()->flash('error', __('site.delete_faild'));
        }

        return back();
    }
}
