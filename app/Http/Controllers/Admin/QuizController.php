<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Quiz;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function add()
    {
        return view('Admin.Quiz.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required',
            'option_1' => 'required',
            'option_2' => 'required',
            'option_3' => 'required',
            'option_4' => 'required',
            'correct' => 'required',
         ]);
         Quiz::create([
            'question' => $request->question,
            'option_1' => $request->option_1,
            'option_2' => $request->option_2,
            'option_3' => $request->option_3,
            'option_4' => $request->option_4,
            'correct' => $request->correct,
         ]);
         return redirect()->back()->with('message','Quiz Added Successfully!');
    }
    public function index()
    {
        return view('Admin.Quiz.index');
    }
    public function quizDetails(Quiz $quiz)
    {
        return view('Admin.Quiz.details',compact('quiz'));
    }
    public function updateQuiz(Request $request, Quiz $quiz)
    {
        $request->validate([
            'question' => 'required',
            'option_1' => 'required',
            'option_2' => 'required',
            'option_3' => 'required',
            'option_4' => 'required',
            'correct' => 'required',
         ]);
         $quiz->update([
            'question' => $request->question,
            'option_1' => $request->option_1,
            'option_2' => $request->option_2,
            'option_3' => $request->option_3,
            'option_4' => $request->option_4,
            'correct' => $request->correct,
         ]);
         return redirect()->back()->with('message','Quiz Added Successfully!');
    }
}
