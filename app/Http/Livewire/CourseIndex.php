<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Course;
use App\Models\Category;

class CourseIndex extends Component
{

    public $category_id = 3;

    public function render()

    {
        $categories = Category::all();
        $courses = Course::where('status',3)->where('category_id', $this->category_id)->latest('id')->paginate(8);

        return view('livewire.course-index', compact('courses', 'categories'));
    }

}
