<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Withdrawals;
use Illuminate\Http\Request;

class WithdrawalController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('Admin.Withdrawal.index');
    }
    public function withdrawalDetails(Withdrawals $withdrawal)
    {
        return view('Admin.Withdrawal.details',compact('withdrawal'));
    }
}
