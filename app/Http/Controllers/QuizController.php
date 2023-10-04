<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\Deposits;
use Illuminate\Http\Request;
use App\Models\ActivityBalance;
use App\Models\UserQuiz;

class QuizController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $current_date = date('Y-m-d');
        $quiz = Quiz::whereDate('created_at', $current_date)->take(1);
       $userquiz = UserQuiz::where('user_id',auth()->user()->id)->where('status',1)->get();
       //dd($status);
        return view('Clients.predict', compact('quiz','userquiz'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'answer' => 'required',
        ]);
        $quiz = Quiz::where('id', $request->question_id)->first();
        if ($request->answer === $quiz->correct) {
            $current_date = date('Y-m-d');
            Deposits::create([
                'user_id' => auth()->user()->id,
                'balance' => 0.01,
                'naira_equilvalent' => 0.01 * 500,
                'description' => 'Quiz Bonus For ' . auth()->user()->name,
            ]);
            $deposit = Deposits::whereDate('created_at', $current_date)->where('user_id', auth()->user()->id)->sum('balance');
            ActivityBalance::where('user_id', auth()->user()->id)->update([
                'balance' => $deposit,
            ]);
            UserQuiz::create([
                'quiz_id' => $request->question_id,
                'is_correct' => 1,
                'status' => 1,
                'answer' => $request->answer,
                'user_id' => auth()->user()->id,
            ]);
            return redirect()->back()->with('message', 'Congratulation, You just earned youself $0.01 to your Wallet!');
           // dd($quiz->correct);
        }else{
            UserQuiz::create([
                'quiz_id' => $request->question_id,
                'is_correct' => 0,
                'status' => 1,
                'answer' => $request->answer,
                'user_id' => auth()->user()->id,
            ]);
            return redirect()->back()->with('error', 'Sorry, Your Answer is wrong, Just missed $0.01 that is to be added your Wallet!');
           // dd($quiz->correct);
        }
        return view('Clients.predict', compact('quiz'));
    }
}
