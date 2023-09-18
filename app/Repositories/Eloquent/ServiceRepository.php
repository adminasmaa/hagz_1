<?php

namespace App\Repositories\Eloquent;


use App\Models\Service;
use App\Repositories\Interfaces\ServiceRepositoryInterface as IServiceRepositoryAlias;
use Illuminate\Support\Facades\Auth;

use Alert;

class ServiceRepository implements IServiceRepositoryAlias
{
    public function getAll($data)
    {
        return $data->render('dashboard.services.index', [
            'title' => trans('site.services'),
            'model' => 'services',
            'count' => $data->count(),
        ]);
    }

    public function create()
    {
        // TODO: Implement create() method.


        return view('dashboard.services.create');
    }

    public function edit($data)
    {
        // TODO: Implement edit() method.
        $data = Service::find($data);

        return view('dashboard.services.edit',compact('data'));
    }

    public function show($Id)
    {
        // TODO: Implement show() method.
        $data = Service::find($Id);

        return view('dashboard.services.show',compact('data'));
    }

    public function destroy($data)
    {
        // TODO: Implement destroy() method.


        $result = $data->delete();
        if ($result) {
            Alert::toast('Deleted', __('site.deleted_successfully'));
        } else {
            Alert::toast('Deleted', __('site.delete_faild'));
        }


        return redirect()->route('dashboard.roles.index');
    }

    public function store($request)
    {
        // TODO: Implement store() method.

        $request_data = $request->all();
        $data = Service::create($request_data);


        if ($data) {
            Alert::success('Success', __('site.added_successfully'));

            return redirect()->route('dashboard.services.index');

        }
    }

    public function update($data, $request)
    {
        // TODO: Implement update() method.


        $request_data = $request->all();

        $data->update($request_data);


        if ($data) {
            Alert::success('Success', __('site.updated_successfully'));
        } else {
            Alert::error('Error', __('site.update_faild'));

        }

        return redirect()->route('dashboard.services.index');
    }
}
