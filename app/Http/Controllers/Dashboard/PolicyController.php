<?php

namespace App\Http\Controllers\Dashboard;
use App\DataTables\PolicyDataTable;
use App\Models\Policy;
use App\Repositories\Interfaces\PolicyRepositoryInterface;
use Response;
use App\Http\Controllers\Controller;

use App\Services\TwoFactorService;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PolicyController extends Controller
{


    private PolicyRepositoryInterface $policyRepository;

    public function __construct(PolicyRepositoryInterface $policyRepository)
    {
        $this->policyRepository = $policyRepository;
    }

    public function index(PolicyDataTable $policyDataTable)
    {
        return $this->policyRepository->getAll($policyDataTable);

    }


    public function show($id)
    {
        return $this->policyRepository->show($id);


    }


    public function create()
    {

        return $this->policyRepository->create();


    }//end of create



    public function store(Request $request)
    {
        return $this->policyRepository->store($request);

    }//end of store

    /*----------------------------------------------------
      || Name     : redirect to edit pages          |
      || Tested   : Done                                    |
      ||                                     |
     ||                                    |
       -----------------------------------------------------*/

    public function edit($id)
    {
        return $this->policyRepository->edit($id);


    }//end of user

    /*----------------------------------------------------
     || Name     : update data into database using users        |
     || Tested   : Done                                    |
       ||                                     |
        ||                                    |
           -----------------------------------------------------*/

    public function update(Request $request, Policy $policy)
    {
        return $this->policyRepository->update($policy, $request);


    }//end of update

    /*----------------------------------------------------
 || Name     : delete data into database using users        |
 || Tested   : Done                                    |
 ||                                     |
 ||                                    |
   -----------------------------------------------------*/

    public function destroy(Policy $policy)
    {

        return $this->policyRepository->destroy($policy);


    }//end of destroy

}
