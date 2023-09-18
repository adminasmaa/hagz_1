<?php

namespace App\Repositories\Eloquent;


use App\Models\ConditionType;
use App\Repositories\Interfaces\ConditionTypeRepositoryInterface as IConditionTypeRepositoryAlias;
use Illuminate\Support\Facades\Auth;

use Alert;

class CondiotionTypeRepository implements IConditionTypeRepositoryAlias
{
    public function getAll($data)
    {
        return $data->render('dashboard.conditioning_types.index', [
            'title' => trans('site.conditioning_types'),
            'model' => 'conditioning_types',
            'count' => $data->count(),
        ]);
    }

    public function create()
    {
        // TODO: Implement create() method.


        return view('dashboard.conditioning_types.create');
    }

    public function edit($data)
    {
        // TODO: Implement edit() method.
        $data = ConditionType::find($data);

        return view('dashboard.conditioning_types.edit',compact('data'));
    }

    public function show($Id)
    {
        // TODO: Implement show() method.
        $data = ConditionType::find($Id);

        return view('dashboard.conditioning_types.show',compact('data'));
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


        return redirect()->route('dashboard.conditioning_types.index');
    }

    public function store($request)
    {
        // TODO: Implement store() method.

        $request_data = $request->all();
        $data = ConditionType::create($request_data);


        if ($data) {
            Alert::success('Success', __('site.added_successfully'));

            return redirect()->route('dashboard.conditioning_types.index');

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

        return redirect()->route('dashboard.conditioning_types.index');
    }
}
