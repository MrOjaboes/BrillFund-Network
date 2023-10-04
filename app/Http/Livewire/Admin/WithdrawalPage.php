<?php

namespace App\Http\Livewire\Admin;

use App\Models\ActivityBalance;
use App\Models\AffiliateBalance;
use App\Models\WithDrawalBan;
use App\Models\Withdrawals;
use Livewire\Component;
use Livewire\WithPagination;

class WithdrawalPage extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $withdrawals = Withdrawals::orderBy('created_at','DESC')->latest()->paginate(10);
        $withdrawal = WithDrawalBan::where('user_id',auth()->user()->id)->first();
        return view('livewire.admin.withdrawal-page',compact('withdrawals','withdrawal'));
    }
    public function changeStatus($id)
    {

        $withdrawal = Withdrawals::find($id);
        
        if ($withdrawal) {
            $withdrawal->status = 1;
            $withdrawal->save();
        }
        if ($withdrawal->type == 1) {
            $balance =  AffiliateBalance::where('user_id',$withdrawal->user_id)->first();
        AffiliateBalance::where('user_id',$withdrawal->user_id)->update([
            'total' => $balance->total - $withdrawal->amount,
        ]);
        }
        if ($withdrawal->type == 2) {
            $balance =  ActivityBalance::where('user_id',$withdrawal->user_id)->sum('balance');
        ActivityBalance::where('user_id',$withdrawal->user_id)->update([
            'balance' => $balance - $withdrawal->amount,
        ]);
        }

        return redirect()->back()->with('message','Request Approved Successfully');
    }
    public function deactivate()
    {
        WithDrawalBan::where('user_id',auth()->user()->id)->update([
            'status' => 0,
        ]);
        return redirect()->back()->with('message','Withdrawal De-activated Successfully');
    }
    public function activate()
    {
        WithDrawalBan::where('user_id',auth()->user()->id)->update([
            'status' => 1,
        ]);
        return redirect()->back()->with('message','Withdrawal Approved Successfully');
    }
    public function taskActivate()
    {
       // dd('ok');
        WithDrawalBan::where('user_id',auth()->user()->id)->update([
            'task_status' => 1,
        ]);
        return redirect()->back()->with('message','Task Withdrawal Approved Successfully');
    }
    public function taskDeactivate()
    {
       // dd('ok');
        WithDrawalBan::where('user_id',auth()->user()->id)->update([
            'task_status' => 0,
        ]);
        return redirect()->back()->with('message','Task Withdrawal Deactivated Successfully');
    }
}
