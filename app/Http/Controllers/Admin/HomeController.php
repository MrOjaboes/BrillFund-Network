<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use App\Models\DailyPost;
use App\Models\Deposits;
use App\Models\History;
use App\Models\Withdrawals;

class HomeController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $users = User::where('user_type',0)->count();
        $deposits = Deposits::all()->sum('balance');
        $withdrawals = Withdrawals::where('status',1)->sum('amount');
        $posts = DailyPost::all()->count();
        $activities = History::all();
        return view('Admin.index',compact('users','activities','deposits','withdrawals','posts'));
    }
    public function getusers()
    {
        return view('Admin.Users.index');
    }
    public function contactUs()
    {
        return view('Admin.contact-us');
    }
    public function contactUsDetails(ContactUs $contact)
    {
        return view('Admin.contact-us-details',compact('contact'));
    }
    public function userDetails(User $user)
    {
        return view('Admin.Users.user_details',compact('user'));
    }
    public function coupons()
    {
        return view('Admin.coupons');
    }
    public function packages()
    {
        return view('Admin.packages');
    }
    public function vendors()
    {
        return view('Admin.vendors');
    }
}
