<?php

namespace App\Http\Controllers\Dashboard;

use App\DataTables\ServicesDataTable;
use App\Http\Controllers\Controller;

use App\Models\Service;
use App\Repositories\Interfaces\ServiceRepositoryInterface;
use App\Services\TwoFactorService;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ServiceController extends Controller
{


    private ServiceRepositoryInterface $serviceRepository;

    public function __construct(ServiceRepositoryInterface $serviceRepository)
    {
        $this->serviceRepository = $serviceRepository;
    }

    public function index(ServicesDataTable $servicesDataTable)
    {
        return $this->serviceRepository->getAll($servicesDataTable);

    }


    public function show($id)
    {
        return $this->serviceRepository->show($id);


    }


    public function create()
    {

        return $this->serviceRepository->create();


    }//end of create


    public function store(Request $request)
    {
        $request->validate([

                'name_ar' => 'required',

            ]
        );


        return $this->serviceRepository->store($request);

    }//end of store

    /*----------------------------------------------------
      || Name     : redirect to edit pages          |
      || Tested   : Done                                    |
      ||                                     |
     ||                                    |
       -----------------------------------------------------*/

    public function edit($id)
    {
        return $this->serviceRepository->edit($id);


    }//end of user

    /*----------------------------------------------------
     || Name     : update data into database using users        |
     || Tested   : Done                                    |
       ||                                     |
        ||                                    |
           -----------------------------------------------------*/

    public function update(Request $request, Service $service)
    {
        $request->validate([
            'name_ar' => ['required'],

        ]);

        return $this->serviceRepository->update($service, $request);


    }//end of update

    /*----------------------------------------------------
 || Name     : delete data into database using users        |
 || Tested   : Done                                    |
 ||                                     |
 ||                                    |
   -----------------------------------------------------*/

    public function destroy(Service $service)
    {

        return $this->serviceRepository->destroy($service);


    }//end of destroy

}
