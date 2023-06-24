<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use DB;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Redirect;


class TrackController extends Controller
{
    public function index()
    {
        return view("website.track.index");
    }
    public function getTrackingUrl($tracking_number){
        $order=DB::connection('portal')->table('orders')
            ->where('tracking_number',$tracking_number)
            ->where('active',1)->first();
     $carrier=  DB::connection('portal')->table('carriers')
            ->where('name',$order->carrier??'')->first();

        if($order && isset($carrier->tracking_link)) {
           $url= $carrier->tracking_link . $tracking_number;

                return \redirect($url);
        }
        return \redirect()->back()->with('error', __('home.your_tracking_number_is_not_found'));

    }
}
