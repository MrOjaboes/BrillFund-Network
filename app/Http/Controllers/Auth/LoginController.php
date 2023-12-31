<?php

namespace App\Http\Controllers\Auth;

use App\Models\History;
use App\Models\Deposits;
use App\Models\LoginCounts;
use Illuminate\Http\Request;
use App\Models\ActivityBalance;
use App\Http\Controllers\Controller;
use App\Models\AffiliateHistory;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function login(Request $request)
    {
        $input = $request->all();

        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
        ]);

        //dd($input);
        if (auth()->attempt(array('email' => $input['email'], 'password' => $input['password']))) {
            if (auth()->user()->user_type == 1) {
                return redirect()->route('admin');
                //session()->flash('login', 'welcome');
            } elseif (auth()->user()->user_type == 0 || auth()->user()->user_type == 2) {
                //Handling Login Bonuses
                $current_date = date('Y-m-d');
                $dataexist = LoginCounts::whereDate('created_at', $current_date)
                    ->where('user_id', auth()->user()->id)
                    ->get();
                if (count($dataexist) == 0 && count($dataexist) < 1) {
                    LoginCounts::create([
                        'user_id' => auth()->user()->id,
                        'status' => 1,
                    ]);

                    Deposits::create([
                        'user_id' => auth()->user()->id,
                        'balance' => 300,
                        'description' => 'Login Bonus For ' . auth()->user()->name,
                    ]);
                    $deposit = Deposits::where('user_id', auth()->user()->id)->sum('balance');
                    ActivityBalance::where('user_id', auth()->user()->id)->update([
                        'balance' => $deposit,
                    ]);
                    AffiliateHistory::create([
                        'user_id' => auth()->user()->id,
                        'amount' => 300,
                        'content' => 'Login Bonus',
                        'type' => 'login',
                    ]);
                    // return 'ok';
                }
                History::create([
                    'user_id' => auth()->user()->id,
                    'content' => auth()->user()->name . ' Signed In to the portal Today!',
                    'name' => auth()->user()->name,
                ]);

                return redirect()->route('home');
            }
        } else {
            return redirect()->route('login')->with('error', 'Email And Password Do not Match.');
        }
    }
}
