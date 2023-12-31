<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/verify-coupon', [App\Http\Controllers\GuestController::class, 'index'])->name('coupon.verify');
Route::get('/vendor-signup', [App\Http\Controllers\GuestController::class, 'createVendor'])->name('vendor.register');
Route::post('/verify-coupon', [App\Http\Controllers\GuestController::class, 'verifyCoupon'])->name('coupon.verify');
Route::get('/get-code', [App\Http\Controllers\GuestController::class, 'vendors'])->name('activation.code');
Route::get('/adverts', [App\Http\Controllers\GuestController::class, 'adverts'])->name('adverts');
Route::get('/how-it-works', [App\Http\Controllers\GuestController::class, 'howItWorks'])->name('howitworks');
Route::get('/contact-us', [App\Http\Controllers\GuestController::class, 'contactUs'])->name('contactUs');
Route::post('/contact-us', [App\Http\Controllers\GuestController::class, 'storeContact'])->name('contactUs.store');
Route::get('/top-earners', [App\Http\Controllers\GuestController::class, 'topEarners'])->name('topEarners');
Route::get('/privacy', [App\Http\Controllers\GuestController::class, 'privacy'])->name('privacy');
Route::get('/terms-condition', [App\Http\Controllers\GuestController::class, 'terms'])->name('terms');
Auth::routes();
Route::group(['middleware' => 'isAdmin', 'prefix' => 'admin'], function () {
    Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin');
    Route::get('/users', [App\Http\Controllers\Admin\HomeController::class, 'getusers'])->name('admin.users');
    Route::get('/user/{user}/details', [App\Http\Controllers\Admin\HomeController::class, 'userDetails'])->name('admin.usersDetails');
    //Coupon Section
    Route::get('/coupons', [App\Http\Controllers\Admin\HomeController::class, 'coupons'])->name('admin.coupons');

    //Crpto Market section
    Route::get('/crypto-market-place', [App\Http\Controllers\Admin\HomeController::class, 'market_place'])->name('admin.crypto');
    Route::get('/cryptoWithdrawal', [App\Http\Controllers\Admin\HomeController::class, 'market_place_withdrawal'])->name('admin.cryptoWithdrawal');


    Route::get('/coupon/{coupon}/details', [App\Http\Controllers\Admin\HomeController::class, 'coupon_details'])->name('admin.coupon-details');
    Route::get('/withdrawals', [App\Http\Controllers\Admin\WithdrawalController::class, 'index'])->name('admin.withdrawals');
    Route::get('/withdrawals/{withdrawal}/details', [App\Http\Controllers\Admin\WithdrawalController::class, 'withdrawalDetails'])->name('admin.withdrawalDetails');
    Route::get('/deposits', [App\Http\Controllers\Admin\DepositController::class, 'index'])->name('admin.deposits');
    Route::get('/packages', [App\Http\Controllers\Admin\HomeController::class, 'packages'])->name('admin.packages');
    Route::get('/vendors', [App\Http\Controllers\Admin\HomeController::class, 'vendors'])->name('admin.vendors');
    Route::get('/dailypost', [App\Http\Controllers\Admin\DailyPostController::class, 'index'])->name('admin.dailypost');
    Route::get('/contact-us', [App\Http\Controllers\Admin\HomeController::class, 'contactUs'])->name('admin.contact-us');
    Route::get('/contact-us/{contact}/details', [App\Http\Controllers\Admin\HomeController::class, 'contactUsDetails'])->name('contactUsDetails');

    //Quiz Section

    Route::get('/quiz/new', [App\Http\Controllers\Admin\QuizController::class, 'add'])->name('admin.quiz.add');
    Route::post('/quiz/new', [App\Http\Controllers\Admin\QuizController::class, 'store'])->name('admin.quiz.add');
    Route::get('/quiz', [App\Http\Controllers\Admin\QuizController::class, 'index'])->name('admin.quiz');
    Route::get('/quiz/{quiz}/details', [App\Http\Controllers\Admin\QuizController::class, 'quizDetails'])->name('admin.quizDetails');
    Route::post('/quiz/{quiz}/details', [App\Http\Controllers\Admin\QuizController::class, 'updateQuiz'])->name('admin.quiz.update');

    //Token Inquiry section
    Route::get('/messages', [App\Http\Controllers\Admin\MessageController::class, 'index'])->name('admin.messages');
    Route::get('/message/{ticket}/details', [App\Http\Controllers\Admin\MessageController::class, 'details'])->name('admin.message.details');
    Route::post('/message/{ticket}/reply', [App\Http\Controllers\Admin\MessageController::class, 'reply'])->name('admin.message.reply');


    //Payment Update
    Route::post('/profile/payment', [App\Http\Controllers\Admin\ProfileController::class, 'updateTransferDetails'])->name('admin.payment');

    //Profile Update
    Route::get('/profile', [App\Http\Controllers\Admin\ProfileController::class, 'profile'])->name('admin.profile');
    Route::post('/profile/login', [App\Http\Controllers\Admin\ProfileController::class, 'updateDetails'])->name('admin.login.update');
    Route::post('/profile/password', [App\Http\Controllers\Admin\ProfileController::class, 'updatePassword'])->name('admin.password');
});


//Affiliate Section

//Route::group(['middleware' => 'isAffiliate', 'prefix' => 'home'], function () {
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/request/payout', [App\Http\Controllers\HomeController::class, 'payout'])->name('home.payout');
Route::post('/payout', [App\Http\Controllers\HomeController::class, 'payoutProcess'])->name('home.payout.request');
Route::get('/plan-upgrade', [App\Http\Controllers\PlanController::class, 'index'])->name('home.plans');
Route::post('/plan-upgrade', [App\Http\Controllers\PlanController::class, 'planUpgrade'])->name('home.plan.upgrade');
Route::get('/quiz-predict', [App\Http\Controllers\QuizController::class, 'index'])->name('home.quiz');
Route::post('/quiz-predict-post', [App\Http\Controllers\QuizController::class, 'store'])->name('home.quiz.post');
Route::get('/dailypost', [App\Http\Controllers\HomeController::class, 'dailypost'])->name('home.dailypost');

//Vtu Section
Route::get('/vtu', [App\Http\Controllers\VTUController::class, 'index'])->name('home.vtu');
Route::post('/vtu/recharge', [App\Http\Controllers\VTUController::class, 'recharge'])->name('home.vtu.recharge');
//Coupon Code Section
Route::get('/all-codes', [App\Http\Controllers\CouponCodeController::class, 'all_codes'])->name('home.codes');
Route::get('/used-codes', [App\Http\Controllers\CouponCodeController::class, 'used_codes'])->name('home.usedcodes');
Route::get('/generate-code', [App\Http\Controllers\CouponCodeController::class, 'generate_code'])->name('home.generate-code');
Route::post('/generate-code', [App\Http\Controllers\CouponCodeController::class, 'send_code'])->name('home.generate-code.send');

Route::get('/refferals', [App\Http\Controllers\HomeController::class, 'refferals'])->name('home.refferals');
Route::get('/earning-history', [App\Http\Controllers\HomeController::class, 'earning_history'])->name('home.earning');
Route::post('/dailypost/{post}/claim', [App\Http\Controllers\HomeController::class, 'claimDailypost'])->name('home.dailypost.claim');
//P2P Registeration
Route::get('/p2p-registeration', [App\Http\Controllers\P2PController::class, 'index'])->name('home.p2p');
Route::post('/p2p-registeration', [App\Http\Controllers\P2PController::class, 'store'])->name('p2p.store');
//Token Section
Route::get('/token-inquiry', [App\Http\Controllers\TokenController::class, 'index'])->name('home.token');
Route::get('/token-details/{ticket}', [App\Http\Controllers\TokenController::class, 'details'])->name('ticket-details');
Route::post('/token-reply/{ticket}', [App\Http\Controllers\TokenController::class, 'reply'])->name('ticket-reply');
Route::post('/token-inquiry', [App\Http\Controllers\TokenController::class, 'store'])->name('token.store');

//Freelancing Section
Route::get('/freelancing', [App\Http\Controllers\FreelancingController::class, 'index'])->name('home.freelancing');
Route::post('/freelancing', [App\Http\Controllers\FreelancingController::class, 'store'])->name('freelancing.store');
Route::post('/freelancing/dp', [App\Http\Controllers\FreelancingController::class, 'updateDp'])->name('freelancing.dp');

//Crpto market Section
Route::get('/market-place', [App\Http\Controllers\CrptoMarketController::class, 'index'])->name('home.Crpto');
Route::get('/market-place/{crpto:name}', [App\Http\Controllers\CrptoMarketController::class, 'details'])->name('home.Crpto.details');
Route::post('/market-place', [App\Http\Controllers\CrptoMarketController::class, 'store'])->name('home.Crpto.store');

//Payout Section
Route::get('/payout-details', [App\Http\Controllers\PayoutController::class, 'index'])->name('payout-details');
Route::post('/payout-details', [App\Http\Controllers\PayoutController::class, 'update'])->name('payout.update');

//Profile Mgt
Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('home.profile');
Route::post('/profile/photo', [App\Http\Controllers\ProfileController::class, 'updateProfilePhoto'])->name('home.profile.photo');
Route::post('/profile', [App\Http\Controllers\ProfileController::class, 'updateProfile'])->name('home.profile.update');
Route::post('/profile/password', [App\Http\Controllers\ProfileController::class, 'updatePassword'])->name('home.password.update');
Route::post('/profile/details', [App\Http\Controllers\ProfileController::class, 'updateDetails'])->name('home.details.update');
//});
