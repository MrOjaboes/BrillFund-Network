<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Network;
use App\Models\Deposits;
use App\Models\Packages;
use App\Models\DailyPost;
use App\Models\LoginCounts;
use App\Models\Withdrawals;
use Illuminate\Http\Request;
use App\Models\DirectBalance;
use App\Models\ActivityBalance;
use App\Models\IndirectBalance;
use App\Models\AffiliateBalance;
use App\Models\CouponCode;
use App\Models\Indirect2Balance;
use App\Models\WithDrawalBan;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $users = User::where('user_type', 0)->get();
        // foreach ($users as $user) {
        //     if ($user->package_id == 1) { //3500 $7
        //         Deposits::create([
        //             'user_id' => $user->id,
        //             'balance' =>  0.7,
        //             'naira_equilvalent' =>  0.7 * 500,
        //             'description' =>  'Daily Interest',
        //         ]);
        //         $balance = Deposits::where('user_id', $user->id)->sum('balance');
        //         ActivityBalance::where('user_id', $user->id)->update([
        //             'balance' => $balance,
        //         ]);
        //     } elseif ($user->package_id == 2) { //5000 $10
        //         Deposits::create([
        //             'user_id' => $user->id,
        //             'balance' =>  0.9,
        //             'naira_equilvalent' =>  0.9 * 500,
        //             'description' =>  'Daily Interest',
        //         ]);
        //         $balance = Deposits::where('user_id', $user->id)->sum('balance');
        //         ActivityBalance::where('user_id', $user->id)->update([
        //             'balance' => $balance,
        //         ]);
        //     } elseif ($user->package_id == 3) {  //7500 $15
        //         Deposits::create([
        //             'user_id' => $user->id,
        //             'balance' =>  0.7,
        //             'naira_equilvalent' =>  0.7 * 500,
        //             'description' =>  'Daily Interest',
        //         ]);
        //         $balance = Deposits::where('user_id', $user->id)->sum('balance');
        //         ActivityBalance::where('user_id', $user->id)->update([
        //             'balance' => $balance,
        //         ]);
        //     } elseif ($user->package_id == 4) { //12500 $25
        //         Deposits::create([
        //             'user_id' => $user->id,
        //             'balance' =>  0.9,
        //             'naira_equilvalent' =>  0.9 * 500,
        //             'description' =>  'Daily Interest',
        //         ]);
        //         $balance = Deposits::where('user_id', $user->id)->sum('balance');
        //         ActivityBalance::where('user_id', $user->id)->update([
        //             'balance' => $balance,
        //         ]);
        //     }

        //     # code...
        // }

        $users = User::where('user_type', 0)->get();
        $activity_balance = ActivityBalance::where('user_id', auth()->user()->id)->sum('balance');
        $withdrawal = Withdrawals::where('user_id', auth()->user()->id)->where('status', 1)->sum('amount');
        $direct_balance = AffiliateBalance::where('user_id', auth()->user()->id)->sum('direct_balance');
        $indirect_balance = AffiliateBalance::where('user_id', auth()->user()->id)->sum('indirect_balance');
        $indirect2_balance = AffiliateBalance::where('user_id', auth()->user()->id)->sum('indirect2_balance');
        $affiliate_balance = AffiliateBalance::where('user_id', auth()->user()->id)->first();
        $networks = Network::with('user')->where('parent_user_id', auth()->user()->id)->get();
        $activities = AffiliateBalance::where('user_id', auth()->user()->id)->orderBy('created_at', 'DESC')->get();
        return view('Clients.home', compact('users', 'activities', 'withdrawal', 'affiliate_balance', 'activity_balance', 'networks', 'direct_balance', 'indirect_balance', 'indirect2_balance'));
    }


    public function all_codes()
    {
        $codes = CouponCode::all();
        return view('Clients.all-codes',compact('codes'));
    }
    public function vtu( )
    {
        $users = Network::orderBy('parent_user_id', 'ASC')->get();
        return view('Clients.contest', compact('users'));
    }
    public function earning_history()
    {
        $earning = Deposits::where('user_id', auth()->user()->id)->orderBy('created_at', 'DESC')->get();
        return view('Clients.earning_history', compact('earning'));
    }
    public function dailypost()
    {
        return view('Clients.post');
    }
    public function claimDailypost(DailyPost $post)
    {
        //dd('her');
        $post->update([
            'user_status' => 1,
            'user_id' => auth()->user()->id,
        ]);
        $balance = ActivityBalance::where('user_id', auth()->user()->id)->sum('balance');
        if (auth()->user()->package_id == 1) { //3500 $7
            ActivityBalance::where('user_id', auth()->user()->id)->update([
                'balance' => $balance + 0.7,
            ]);
        } elseif (auth()->user()->package_id == 2) { //5000 $10
            ActivityBalance::where('user_id', auth()->user()->id)->update([
                'balance' => $balance + 0.9,
            ]);
        } elseif (auth()->user()->package_id == 3) {  //7500 $15
            ActivityBalance::where('user_id', auth()->user()->id)->update([
                'balance' => $balance + 0.7,
            ]);
        } elseif (auth()->user()->package_id == 4) { //12500 $25
            ActivityBalance::where('user_id', auth()->user()->id)->update([
                'balance' => $balance + 0.9,
            ]);
        }
        return redirect()->back()->with('message', 'Post Claimed Successfully!');
    }
//Payout Section
    public function payout()
    {
        $activity_balance = ActivityBalance::where('user_id', auth()->user()->id)->sum('balance');
        $withdrawals = Withdrawals::where('user_id', auth()->user()->id)->get();
        $direct_balance = AffiliateBalance::where('user_id', auth()->user()->id)->sum('direct_balance');
        $indirect_balance = AffiliateBalance::where('user_id', auth()->user()->id)->sum('indirect_balance');
        $indirect2_balance = AffiliateBalance::where('user_id', auth()->user()->id)->sum('indirect2_balance');
        $affiliate_balance = AffiliateBalance::where('user_id', auth()->user()->id)->first();
        $ban = WithDrawalBan::where('status', 0)->first();
        $task_ban = WithDrawalBan::where('task_status', 0)->first();
        return view('Clients.payout', compact('activity_balance', 'withdrawals', 'ban', 'task_ban', 'affiliate_balance'));
    }

    public function payoutProcess(Request $request)
    {
        $request->validate([
            'amount' => 'required',
        ]);
dd($request->all());
        $affiliate_balance = AffiliateBalance::where('user_id', auth()->user()->id)->first();
        $activity_balance = ActivityBalance::where('user_id', auth()->user()->id)->sum('balance');
        $ban = WithDrawalBan::where('status', 0)->first();
        if ($ban) {
            return redirect()->back()->with('error', 'Withdrawal Status is Currently In-Active!');
        }
                if ($request->amount > $activity_balance) {
                    return redirect()->back()->with('error', 'Indufficient Fund!');
                }
            Withdrawals::create([
                'user_id' => auth()->user()->id,
                'name' => auth()->user()->name,
                'amount' => $request->amount,
                'note' => 'Affiliate Withdrawal',
            ]);
            return redirect()->back()->with('message', 'Request Submitted Successfully!');
        }

}
