<?php

namespace App\Http\Livewire\Admin;

use App\Models\Quiz;
use Livewire\Component;
use Livewire\WithPagination;

class QuizPage extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $amount;
    public function render()
    {
        $quiz = Quiz::orderBy('created_at','DESC')->latest()->paginate(10);
        return view('livewire.admin.quiz-page',compact('quiz'));
    }
}
