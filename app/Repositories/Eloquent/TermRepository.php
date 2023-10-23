<?php

namespace App\Repositories\Eloquent;


use App\Models\Policy;
use App\Models\Term;
use App\Models\User;
use App\Repositories\Interfaces\TermRepositoryInterface as ITermRepositoryAlias;
use Illuminate\Support\Facades\Auth;

use Alert;

class TermRepository implements ITermRepositoryAlias
{
    public function getAll($data)
    {
        return $data->render('dashboard.terms.index', [
            'title' => trans('site.terms'),
            'model' => 'terms',
            'count' => $data->count(),
        ]);
    }

    public function create()
    {
        // TODO: Implement create() method.

        $users=User::get();
        $policies=Policy::get();
        return view('dashboard.terms.create',compact('users','policies'));
    }

    public function edit($data)
    {
        // TODO: Implement edit() method.
        $data = Term::find($data);
        $users=User::get();
        $policies=Policy::get();

        return view('dashboard.terms.edit',compact('data','users','policies'));
    }

    public function show($Id)
    {
        // TODO: Implement show() method.
        $data = Term::find($Id);
        $users=User::get();
        $policies=Policy::get();

        return view('dashboard.terms.show',compact('data','users','policies'));
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


        return redirect()->route('dashboard.terms.index');
    }

    public function store($request)
    {
        // TODO: Implement store() method.

        $request_data = $request->all();
        $data = Term::create($request_data);


        if ($data) {
            Alert::success('Success', __('site.added_successfully'));

            return redirect()->route('dashboard.terms.index');

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

        return redirect()->route('dashboard.terms.index');
    }
}
