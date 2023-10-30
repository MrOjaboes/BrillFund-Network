<?php

namespace App\Console\Commands;

use App\Models\User;
use App\Models\Deposits;
use App\Models\ActivityBalance;
use Illuminate\Console\Command;
use App\Models\AffiliateHistory;
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
        $users = User::whereIn('user_type', [0, 2])->get();
        foreach ($users as $user) {
            Deposits::create([
                'user_id' => $user->id,
                'balance' =>  300,
                'description' =>  'Daily Interest for ' . $user->name,
            ]);
            $balance = Deposits::where('user_id', $user->id)->sum('balance');
            ActivityBalance::where('user_id', $user->id)->update([
                'balance' => $balance,
            ]);
            AffiliateHistory::create([
                'user_id' => $user->id,
                'amount' => 300,
                'content' => 'Daily Login Bonus',
                'type' => 'dl',
            ]);
        }
        Log::info("Cron is working fine!");
    }
}
