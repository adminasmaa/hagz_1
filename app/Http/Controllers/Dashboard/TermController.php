<?php

namespace App\Http\Controllers\Dashboard;
use App\DataTables\TermDataTable;
use App\Models\Term;
use App\Repositories\Interfaces\TermRepositoryInterface;
use Response;
use App\Http\Controllers\Controller;

use App\Services\TwoFactorService;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class TermController extends Controller
{


    private TermRepositoryInterface $termRepository;

    public function __construct(TermRepositoryInterface $termRepository)
    {
        $this->termRepository = $termRepository;
    }

    public function index(TermDataTable $termDataTable)
    {
        return $this->termRepository->getAll($termDataTable);

    }


    public function show($id)
    {
        return $this->termRepository->show($id);


    }


    public function create()
    {

        return $this->termRepository->create();


    }//end of create



    public function store(Request $request)
    {
        return $this->termRepository->store($request);

    }//end of store

    /*----------------------------------------------------
      || Name     : redirect to edit pages          |
      || Tested   : Done                                    |
      ||                                     |
     ||                                    |
       -----------------------------------------------------*/

    public function edit($id)
    {
        return $this->termRepository->edit($id);


    }//end of user

    /*----------------------------------------------------
     || Name     : update data into database using users        |
     || Tested   : Done                                    |
       ||                                     |
        ||                                    |
           -----------------------------------------------------*/

    public function update(Request $request, Term $term)
    {
        return $this->termRepository->update($term, $request);


    }//end of update

    /*----------------------------------------------------
 || Name     : delete data into database using users        |
 || Tested   : Done                                    |
 ||                                     |
 ||                                    |
   -----------------------------------------------------*/

    public function destroy(Term $term)
    {

        return $this->termRepository->destroy($term);


    }//end of destroy

}
