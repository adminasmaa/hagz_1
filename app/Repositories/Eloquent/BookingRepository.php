<?php

namespace App\Repositories\Eloquent;



use App\Models\Booking;
use App\Repositories\Interfaces\BookingRepositoryInterface as IBookingRepositoryAlias;
use Illuminate\Support\Facades\Auth;
use Alert;

class BookingRepository implements IBookingRepositoryAlias
{
    public function getAll($data)
    {
        return $data->render('dashboard.booking.index', [
            'title' => trans('site.bookings'),
            'model' => 'bookings',
            'count' => $data->count(),
        ]);
    }

    public function create()
    {
        // TODO: Implement create() method.


        return view('dashboard.booking.create');
    }

    public function edit($id)
    {
        // TODO: Implement edit() method.
        $data = Booking::find($id);

        return view('dashboard.booking.edit',compact('data'));
    }

    public function show($id)
    {
        // TODO: Implement show() method.
        $data = Booking::find($id);


        return view('dashboard.booking.show',compact('data'));
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


        return redirect()->route('dashboard.booking.index');
    }

    public function store($request)
    {
        // TODO: Implement store() method.

        $request_data = $request->all();
        $booking = Booking::create($request_data);


        if ($booking) {
            Alert::success('Success', __('site.added_successfully'));

            return redirect()->route('dashboard.booking.index');

        }
    }

    public function update($booking, $request)
    {
        // TODO: Implement update() method.


        $request_data = $request->all();

        $booking->update($request_data);


        if ($booking) {
            Alert::success('Success', __('site.updated_successfully'));
        } else {
            Alert::error('Error', __('site.update_faild'));

        }

        return redirect()->route('dashboard.booking.index');
    }
}
