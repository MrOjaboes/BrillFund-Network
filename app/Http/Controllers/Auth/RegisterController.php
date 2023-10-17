<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Wallet;
use App\Models\Network;
use App\Models\Profile;
use App\Models\Deposits;
use App\Models\CouponCode;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\DirectBalance;
use App\Models\ActivityBalance;
use App\Models\IndirectBalance;
use App\Models\AffiliateBalance;
use App\Models\Indirect2Balance;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\History;
use App\Models\Quiz;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    public function register(Request $request)
    {
//dd($request->referal_code2);
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'username' => 'required|unique:users,name|string|max:20',
            'email' => 'required|email|unique:users,email|string',
            'coupon_code' => 'required|exists:coupon_codes,code',
            'password' => 'required|min:8|confirmed',
            'referal_code' => '',
        ]);
        //dd($request->referal_code2);

        $url = url('register?ref=');
        $code = DB::table('coupon_codes')
            ->where('code', $request->coupon)
            ->where(function ($query) {
                $query->where('status', 0);
            })->first();
        if ($code) {
            return redirect()->back()->with('error', 'Coupon Not Activated!');
        }
        $used_code = DB::table('coupon_codes')
            ->where('code', $request->coupon)
            ->where(function ($query) {
                $query->where('used_status', 1);
            })->first();

        if ($used_code) {
            return redirect()->back()->with('error', 'Coupon Code Already Used, Please Try Another!');
        }
        if ($request->referal_code2 == 'Admin') {
            $user = new User();
            $user->lname = $request->last_name;
            $user->fname = $request->first_name;
            $user->name = $request->username;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->secret_password = $request->password;
            $user->referal_code = $url . $request->username;
            $user->save();

            //De-activate Coupon for One use
            CouponCode::where('code', $request->coupon_code)->update([
                'used_status' => 1,
                'reffered_by' => $request->referal_code2,
                'used_by' => $user->name,
            ]);
            //Attach affiliate Id
            AffiliateBalance::create([
                'user_id' => $user->id,
            ]);
            //Credit Welcome Bonus
            Deposits::create([
                'user_id' => $user->id,
                'balance' => 3000,
                'description' => 'Welcome Bonus for ' . $request->username,
            ]);
            $deposit = Deposits::where('user_id', $user->id)->sum('balance');
            ActivityBalance::create([
                'user_id' => $user->id,
                'balance' => $deposit,
            ]);
            Profile::create([
                'user_id' => $user->id,
            ]);
            Network::create([
                'user_id' => $user->id,
                'referal_code' => 'Admin',
                'parent_user_id' => 1,
            ]);
            History::create([
                'user_id' => $user->id,
                'content' => $user->name . ' Registered as an Affiliate Today!',
                'name' => $user->name,
            ]);
        } else {
            $userData = User::where('referal_code', $request->referal_code)->get();
            if (count($userData) == 1) {
                //Handling Referal Bonus
                foreach ($userData as $value) {
                    $refCode = $value->referal_code;
                    $user_id = $value->id;
                }
                $userCheck = Network::where('parent_user_id', $user_id)->first();
                // dd($userCheck->user_id);
                if ($refCode) {
                    AffiliateBalance::create([
                        'user_id' => $user_id,
                        'direct_balance' => 4.63,
                        'naira_equilvalent' => 3800,
                    ]);
                    $direct_balance = AffiliateBalance::where('user_id', $user_id)->sum('direct_balance');
                    $indirect_balance = AffiliateBalance::where('user_id', $user_id)->sum('indirect_balance');
                    $indirect2_balance = AffiliateBalance::where('user_id', $user_id)->sum('indirect2_balance');
                    $total = $direct_balance + $indirect_balance + $indirect2_balance;
                    AffiliateBalance::where('user_id', $user_id)->update(['total' => $total]);
                }

                if ($userCheck) {
                    //second person
                    AffiliateBalance::create([
                        'user_id' => $userCheck->parent_user_id,
                        'indirect_balance' => 0.24,
                        'naira_equilvalent' => 0.24 * 820,
                    ]);
                    $direct_balance = AffiliateBalance::where('user_id', $userCheck->parent_user_id)->sum('direct_balance');
                    $indirect_balance = AffiliateBalance::where('user_id', $userCheck->parent_user_id)->sum('indirect_balance');
                    $indirect2_balance = AffiliateBalance::where('user_id', $userCheck->parent_user_id)->sum('indirect2_balance');
                    $total = $direct_balance + $indirect_balance + $indirect2_balance;
                    AffiliateBalance::where('user_id', $userCheck->parent_user_id)->update(['total' => $total]);


                    # code...Third Person
                    AffiliateBalance::create([
                        'user_id' => $userCheck->user_id,
                        'indirect2_balance' => 0.18,
                        'naira_equilvalent' => 0.18 * 820,
                    ]);
                    $direct_balance = AffiliateBalance::where('user_id', $userCheck->user_id)->sum('direct_balance');
                    $indirect_balance = AffiliateBalance::where('user_id', $userCheck->user_id)->sum('indirect_balance');
                    $indirect2_balance = AffiliateBalance::where('user_id', $userCheck->user_id)->sum('indirect2_balance');
                    $total = $direct_balance + $indirect_balance + $indirect2_balance;
                    AffiliateBalance::where('user_id', $userCheck->user_id)->update(['total' => $total]);
                }

                $user = new User();
                $user->lname = $request->last_name;
                $user->fname = $request->first_name;
                $user->contact = $request->contact;
                $user->name = $request->username;
                $user->email = $request->email;
                $user->password = Hash::make($request->password);
                $user->secret_password = $request->password;
                $user->referal_code = $url . $request->username;
                $user->save();
                AffiliateBalance::create([
                    'user_id' => $user->id,
                ]);
                //Activate Coupon for One use
                CouponCode::where('code', $request->coupon_code)->update([
                    'used_status' => 1,
                    'reffered_by' => $request->referal_code2,
                    'used_by' => $user->name,
                ]);

                //Handling Welcome Bonus for new User
                Deposits::create([
                    'user_id' => $user->id,
                    'balance' => 3000,
                    'description' => 'Welcome Bonus for ' . $request->username,
                ]);
                $deposit = Deposits::where('user_id', $user->id)->sum('balance');
                ActivityBalance::create([
                    'user_id' => $user->id,
                    'balance' => $deposit,
                ]);

                Profile::create([
                    'user_id' => $user->id,
                ]);
                Network::create([
                    'user_id' => $user->id,
                    'referal_code' => $request->referal_code,
                    'parent_user_id' => $userData[0]['id'],
                ]);
                History::create([
                    'user_id' => $user->id,
                    'content' => $user->name . ' Registered as an Affiliate Today!',
                    'name' => $user->name,
                ]);
            } else {
                return redirect()->back()->with('error', 'Please enter a valid Referal Code!');
            }
        }

        return redirect('/home');
    }
}
