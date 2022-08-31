<?php

namespace App\Http\Livewire;

use App\Models\Blog;
use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class BlogDetailsComponent extends Component
{
    use WithPagination;
    public $slug;

    public function mount($slug){
        $this->slug = $slug;
    }

    public function render()
    {
        $blog = Blog::where('slug', $this->slug)->first();
        $l_blogs = Blog::orderBy('created_at', 'DESC')->get()->take(6);
        $categories = Category::get();
        return view('livewire.blog-details-component',['blog' => $blog, 'l_blogs' => $l_blogs, 'categories' => $categories]);
    }
}