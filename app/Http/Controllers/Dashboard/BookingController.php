<?php

namespace App\Http\Controllers\Dashboard;

use App\DataTables\BookingDataTable;
use App\Models\Booking;
use App\Repositories\Interfaces\BookingRepositoryInterface;
use Response;
use App\Http\Controllers\Controller;

use App\Services\TwoFactorService;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Alert;

class BookingController extends Controller
{


    private BookingRepositoryInterface $bookingRepository;

    public function __construct(BookingRepositoryInterface $bookingRepository)
    {
        $this->bookingRepository = $bookingRepository;
    }

    public function index(BookingDataTable $bookingDataTable)
    {
        return $this->bookingRepository->getAll($bookingDataTable);

    }


    public function show($id)
    {
        return $this->bookingRepository->show($id);


    }


    public function create()
    {

        return $this->bookingRepository->create();


    }//end of create


    public function store(Request $request)
    {
        return $this->bookingRepository->store($request);

    }//end of store

    /*----------------------------------------------------
      || Name     : redirect to edit pages          |
      || Tested   : Done                                    |
      ||                                     |
     ||                                    |
       -----------------------------------------------------*/

    public function edit($id)
    {
        return $this->bookingRepository->edit($id);


    }//end of user

    /*----------------------------------------------------
     || Name     : update data into database using users        |
     || Tested   : Done                                    |
       ||                                     |
        ||                                    |
           -----------------------------------------------------*/

    public function update(Request $request, Booking $booking)
    {
        return $this->bookingRepository->update($booking, $request);


    }//end of update

    /*----------------------------------------------------
 || Name     : delete data into database using users        |
 || Tested   : Done                                    |
 ||                                     |
 ||                                    |
   -----------------------------------------------------*/

    public function destroy(Booking $booking)
    {

        return $this->bookingRepository->destroy($booking);


    }//end of destroy


    public function updatestatusbooking($id)
    {
        $booking = Booking::find($id);
        $status = ($booking->status == 'accepted') ? 'canceled' : 'accepted';
        $booking->status = $status;
        $booking->save();

        Alert::success('Success', __('site.updated_status_successfully'));


        return back();

    }

}
