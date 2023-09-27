<?php

namespace App\Http\Controllers\Dashboard;


use App\DataTables\SliderDataTable;
use App\Http\Controllers\Controller;

use App\Models\Slider;
use App\Repositories\Interfaces\SliderRepositoryInterface;
use App\Services\TwoFactorService;
use DB;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class SliderController extends Controller
{


    private SliderRepositoryInterface $sliderRepository;

    public function __construct(SliderRepositoryInterface $sliderRepository)
    {
        $this->sliderRepository = $sliderRepository;
    }

    public function index(SliderDataTable $sliderDataTable)
    {

        return $this->sliderRepository->getAll($sliderDataTable);

    }


    public function show($id)
    {
        return $this->sliderRepository->show($id);


    }


    public function create()
    {

        return $this->sliderRepository->create();


    }//end of create


    public function store(Request $request)
    {
        return $this->sliderRepository->store($request);

    }//end of store

    /*----------------------------------------------------
      || Name     : redirect to edit pages          |
      || Tested   : Done                                    |
      ||                                     |
     ||                                    |
       -----------------------------------------------------*/

    public function edit($id)
    {
        return $this->sliderRepository->edit($id);


    }//end of user

    /*----------------------------------------------------
     || Name     : update data into database using users        |
     || Tested   : Done                                    |
       ||                                     |
        ||                                    |
           -----------------------------------------------------*/

    public function update(Request $request, $id)
    {
        $slider = Slider::find($id);

        return $this->sliderRepository->update($slider, $request);


    }//end of update

    /*----------------------------------------------------
 || Name     : delete data into database using users        |
 || Tested   : Done                                    |
 ||                                     |
 ||                                    |
   -----------------------------------------------------*/

    public function destroy($id)
    {
        $slider = Slider::find($id);

        return $this->sliderRepository->destroy($slider);


    }//end of destroy

}
