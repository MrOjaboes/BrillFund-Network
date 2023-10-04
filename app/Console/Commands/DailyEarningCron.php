<?php

namespace App\Console\Commands;

use App\Models\User;
use App\Models\ActivityBalance;
use App\Models\Deposits;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class DailyEarningCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'demo:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Daily Earning for Affiliate';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $users = User::where('user_type', 0)->get();
        foreach ($users as $user) {
            if ($user->package_id == 1) { //3500 $7
                Deposits::create([
                    'user_id' => $user->id,
                    'balance' =>  0.7,
                    'naira_equilvalent' =>  0.7 * 500,
                    'description' =>  'Daily Interest for '.$user->name,
                ]);
                $balance = Deposits::where('user_id', $user->id)->sum('balance');
                ActivityBalance::where('user_id', $user->id)->update([
                    'balance' => $balance,
                ]);
            } elseif ($user->package_id == 2) { //5000 $10
                Deposits::create([
                    'user_id' => $user->id,
                    'balance' =>  0.9,
                    'naira_equilvalent' =>  0.9 * 500,
                    'description' =>  'Daily Interest for '.$user->name,
                ]);
                $balance = Deposits::where('user_id', $user->id)->sum('balance');
                ActivityBalance::where('user_id', $user->id)->update([
                    'balance' => $balance,
                ]);
            } elseif ($user->package_id == 3) {  //7500 $15
                Deposits::create([
                    'user_id' => $user->id,
                    'balance' =>  0.7,
                    'naira_equilvalent' =>  0.7 * 500,
                    'description' =>  'Daily Interest for '.$user->name,
                ]);
                $balance = Deposits::where('user_id', $user->id)->sum('balance');
                ActivityBalance::where('user_id', $user->id)->update([
                    'balance' => $balance,
                ]);
            } elseif ($user->package_id == 4) { //12500 $25
                Deposits::create([
                    'user_id' => $user->id,
                    'balance' =>  0.9,
                    'naira_equilvalent' =>  0.9 * 500,
                    'description' =>  'Daily Interest for '.$user->name,
                ]);
                $balance = Deposits::where('user_id', $user->id)->sum('balance');
                ActivityBalance::where('user_id', $user->id)->update([
                    'balance' => $balance,
                ]);
            }

            # code...
        }
        //\\Log::info("Cron is working fine!");
    }
}
