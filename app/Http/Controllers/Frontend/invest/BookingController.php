<?php

namespace App\Http\Controllers\Frontend\invest;


use App\Models\Aqar;
use App\Models\Booking;
use App\Models\Commission;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Alert;

class BookingController extends Controller
{

    public function index()
    {

        return view('frontend.invest.booking.index');


    }


    public function mybooking(Request $request)
    {

//        return $request;
        $user_id = Auth::id();

        if (!empty($request->search)) {

//return "search";
            $bookings = Booking::where('user_id', $user_id)
                ->orWhere('aqar_id', 'LIKE', '%' . $request->search . '%')
                ->orWhere('name', 'LIKE', '%' . $request->search . '%')
                ->orWhere('phone', 'LIKE', '%' . $request->search . '%')
                ->paginate(10);

//            return $bookings;

        } else {

            $bookings = Booking::where('user_id', '=', $user_id)->paginate(10);

        }

        if (!empty($request->type)) {


            if ($request->type == 2) {


                $bookings = Booking::where('user_id', '=', $user_id)->where('type', '=', 'application')->paginate(10);

            } elseif ($request->type == 3) {

                $bookings = Booking::where('user_id', '=', $user_id)->where('type', '=', 'website')->paginate(10);

            } elseif ($request->type == 4) {


                $bookings = Booking::where('user_id', '=', $user_id)->where('status', '=', 'canceled')->paginate(10);

            } else {

                $bookings = Booking::where('user_id', '=', $user_id)->paginate(10);

            }
        }


//        return $bookings;
        return view('frontend.invest.booking.mybooking', compact('bookings'));
    }


    public function addbooking($id)
    {

        $aqar = Aqar::find($id);

        return view('frontend.invest.booking.add', compact('aqar'));


    }

    public function confirmpayment(Request $request)
    {


        $commission = Commission::find($request->id);

        $commission->update([
            'type' => 'paid'
        ]);

        Alert::success('Success', __('site.confirmpayment_successfully'));

        return back();

    }


    public function commissions()
    {


        $commisionpaids = Commission::where('type', '=', 'paid')->where('user_id', '=', Auth::id())->get();
        $paidcount = Commission::where('type', '=', 'paid')->where('user_id', '=', Auth::id())->count();
        $commisionunpaids = Commission::where('type', '=', 'nopaid')->where('user_id', '=', Auth::id())->get();
        $unpaidscount = Commission::where('type', '=', 'nopaid')->where('user_id', '=', Auth::id())->count();

        return view('frontend.invest.booking.commissions', compact('commisionunpaids', 'commisionpaids', 'paidcount', 'unpaidscount'));

    }

    public function diffInDays($date1, $date2)
    {
        $diff = strtotime($date2) - strtotime($date1);
        return abs($diff / 86400);
    }


    public function addbookingAd(Request $request)
    {

        $reciept_date = Carbon::createFromFormat('d/m/Y', $request->reciept_date)
            ->format('d-m-Y');

        $delivery_date = Carbon::createFromFormat('d/m/Y', $request->delivery_date)
            ->format('d-m-Y');

        $comision = Auth::user()->comision ?? 0;

        $aqarprice = Aqar::find($request['aqar_id'])->first()->fixed_price ?? 0;

        $day_count = $this->diffInDays($delivery_date, $reciept_date);

        $total_price = $aqarprice * $day_count + $comision;

        $booking = Booking::updateOrCreate(['user_id' => Auth::id(), 'aqar_id' => $request['aqar_id']], [

            'user_id' => Auth::id(), 'aqar_id' => $request['aqar_id'],

            'reciept_date' => $reciept_date, 'delivery_date' => $delivery_date, 'day_count' => $day_count,

            'total' => $request->total, 'name' => $request['name'], 'phone' => $request['phone'],

            'total_price' => $total_price, 'price' => $aqarprice,

            'comision' => $comision,


        ]);

        $commission = Commission::create([

            'type' => 'nopaid',
            'value' => $comision,
            'user_id' => Auth::id(),
            'aqar_id' => $request['aqar_id'],
            'booking_id' => $booking->id
        ]);


        if ($booking) {
            Alert::success('Success', __('site.addedBooking_successfully'));

            return redirect(route('invest.mybooking'));

        }

    }


}
