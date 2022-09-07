<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Str;

class AdminAddCategoryComponent extends Component
{
    public $name;
    public $slug;
    public $image;
    public $description;

    public function generateslug(){
        $this->slug = Str::slug($this->name);
    }

    public function updated($fields){
        $this->validateOnly($fields,[
            'name' => 'required',
            'description' => 'required',
            'slug' => 'required|unique:categories',
        ]);
    }
    public function storeCategory(){
        $this->validate([
            'name' => 'required',
            'description' => 'required',
            'slug' => 'required|unique:categories',
        ]);
        $category = new Category();
        $category->name = $this->name;
        $category->slug = $this->slug;
        $imageName = Carbon::now()->timestamp. '.'. $this->image->extension();
        $this->image->storeAs('categories',$imageName );
        $category->slug = $imageName;
        $category->description = $this->description;
        $category->save();
        session()->flash('message', 'Category has been created Successfully');
    }
    public function render()
    {
        return view('livewire.admin-add-category-component');
    }
}