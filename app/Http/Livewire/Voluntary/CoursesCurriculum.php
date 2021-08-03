<?php

namespace App\Http\Livewire\Voluntary;

use Livewire\Component;
use App\Models\Course;
use App\Models\Section;

class CoursesCurriculum extends Component
{
    public $course , $section;
    protected $rules = [
        'section.name' => 'required'
    ];

    public function mount(Course $course){
        $this->course = $course;
        $this->section = new Section;
    }

    public function render()
    {
        return view('livewire.voluntary.courses-curriculum')->layout('layouts.voluntary');
    }

    public function edit(Section $section){
        $this->section = $section;
    }
}
