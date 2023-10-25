<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Network;
use App\Models\Vendors;
use App\Models\Deposits;
use App\Models\ContactUs;
use App\Models\DailyPost;
use App\Models\CouponCode;
use Illuminate\Http\Request;
use App\Models\AffiliateBalance;
use Illuminate\Support\Facades\DB;

class GuestController extends Controller
{
    public function index()
    {
        return view('verify-coupon');
    }
    public function adverts()
    {
        $posts = DailyPost::all();
        return view('advert', compact('posts'));
    }

    public function terms()
    {
        return view('terms');
    }
    public function privacy()
    {
        return view('privacy');
    }
    public function topEarners()
    {
       $earners = User::with('affiliateBalance')->where('user_type',0)->get();
 
      // $earners = Network::with('user')->orderBy('created_at','DESC')->latest()->take(15)->get();
        return view('top-earners',compact('earners'));
    }
    public function contactUs()
    {
        return view('contact-us');
    }
    public function storeContact(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'content' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
        ]);
        ContactUs::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'content' => $request->content,
            'subject' => $request->subject,
        ]);
        return redirect()->back()->with('message','Request Submitted Successfully!');
    }
    public function howItWorks()
    {
        return view('howItWorks');
    }
    public function createVendor()
    {
        return view('create-vendor');
    }
    public function verifyCoupon(Request $request)
    {
        $request->validate([
            'coupon_code' => 'required|exists:coupon_codes,code',
        ]);
        $check = CouponCode::where('code', $request->coupon_code)->first();
        //dd($check);
        return view('verified_code', compact('check'));
    }
    public function vendors()
    {
      //  $vendors = Vendors::orderBy('created_at','DESC')->get();
       $vendors = User::where('user_type',2)->orderBy('created_at','DESC')->get();
        return view('vendors',compact('vendors'));
    }
}
