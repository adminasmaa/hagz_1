<?php

namespace App\Repositories\Eloquent;


use App\Models\Policy;
use App\Models\Term;
use App\Models\User;
use App\Repositories\Interfaces\PolicyRepositoryInterface as IPolicyRepositoryAlias;
use Illuminate\Support\Facades\Auth;

use Alert;

class PolicyRepository implements IPolicyRepositoryAlias
{
    public function getAll($data)
    {
        return $data->render('dashboard.policies.index', [
            'title' => trans('site.policies'),
            'model' => 'policies',
            'count' => $data->count(),
        ]);
    }

    public function create()
    {
        // TODO: Implement create() method.


        return view('dashboard.policies.create');
    }

    public function edit($data)
    {
        // TODO: Implement edit() method.
        $data = Policy::find($data);


        return view('dashboard.policies.edit',compact('data'));
    }

    public function show($Id)
    {
        // TODO: Implement show() method.
        $data = Policy::find($Id);


        return view('dashboard.policies.show',compact('data'));
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


        return redirect()->route('dashboard.policies.index');
    }

    public function store($request)
    {
        // TODO: Implement store() method.

        $request_data = $request->all();
        $data = Policy::create($request_data);


        if ($data) {
            Alert::success('Success', __('site.added_successfully'));

            return redirect()->route('dashboard.policies.index');

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

        return redirect()->route('dashboard.policies.index');
    }
}
