<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\CrptoWithdrawal;

class CrptoMarketWithdrawalPage extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $withdrawals = CrptoWithdrawal::orderBy('created_at', 'DESC')->latest()->paginate(10);
        return view('livewire.admin.crpto-market-withdrawal-page', compact('withdrawals'));
    }
    public function changeStatus($id)
    {

        $withdrawal = CrptoWithdrawal::find($id);
        if ($withdrawal) {
            $withdrawal->status = 1;
            $withdrawal->save();
        }
        return redirect()->back()->with('message', 'Request Approved Successfully');
    }
    public function declince($id)
    {

        $withdrawal = CrptoWithdrawal::find($id);
        if ($withdrawal) {
            $withdrawal->status = 2;
            $withdrawal->save();
        }
        return redirect()->back()->with('message', 'Request Declined Successfully');
    }
}
