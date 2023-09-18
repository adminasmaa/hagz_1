<?php

namespace App\Http\Controllers\Dashboard;

use App\DataTables\ConditionTypeDataTable;
use App\Http\Controllers\Controller;

use App\Models\ConditionType;
use App\Repositories\Interfaces\ConditionTypeRepositoryInterface;
use App\Services\TwoFactorService;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ConditionTypeController extends Controller
{


    private ConditionTypeRepositoryInterface $conditionTypeRepository;

    public function __construct(ConditionTypeRepositoryInterface $conditionTypeRepository)
    {
        $this->conditionTypeRepository = $conditionTypeRepository;
    }

    public function index(ConditionTypeDataTable $conditionTypeDataTable)
    {
        return $this->conditionTypeRepository->getAll($conditionTypeDataTable);

    }


    public function show($id)
    {
        return $this->conditionTypeRepository->show($id);


    }


    public function create()
    {

        return $this->conditionTypeRepository->create();


    }//end of create


    public function store(Request $request)
    {
        $request->validate([

                'name_ar' => 'required',

            ]
        );


        return $this->conditionTypeRepository->store($request);

    }//end of store

    /*----------------------------------------------------
      || Name     : redirect to edit pages          |
      || Tested   : Done                                    |
      ||                                     |
     ||                                    |
       -----------------------------------------------------*/

    public function edit($id)
    {
        return $this->conditionTypeRepository->edit($id);


    }//end of user

    /*----------------------------------------------------
     || Name     : update data into database using users        |
     || Tested   : Done                                    |
       ||                                     |
        ||                                    |
           -----------------------------------------------------*/

    public function update(Request $request, ConditionType $conditioningType)
    {
        $request->validate([
            'name_ar' => ['required'],

        ]);

        return $this->conditionTypeRepository->update($conditioningType, $request);


    }//end of update

    /*----------------------------------------------------
 || Name     : delete data into database using users        |
 || Tested   : Done                                    |
 ||                                     |
 ||                                    |
   -----------------------------------------------------*/

    public function destroy(ConditionType $conditioningType)
    {

        return $this->conditionTypeRepository->destroy($conditioningType);


    }//end of destroy

}
