<?php

namespace App\Http\Livewire\Voluntary;

use App\Models\Lesson;
use App\Models\Section;
use Livewire\Component;

class CoursesLesson extends Component
{
    public$section,$lesson;

    protected $rules = [
        'lesson.name' => 'required',
        'lesson.platform_id' => 'required',
        'lesson.url' => ['required', 'regex:%^ (?:https?://)? ']
    ];

    public function mount(Section $section){
        $this->section =$section;
        $this->lesson = new Lesson();
    }

    public function render()
    {
        return view('livewire.voluntary.courses-lesson');
    }
}
