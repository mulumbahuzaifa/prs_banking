<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        $services = Category::all();
        return view('livewire.home-component', ['services' => $services]);
    }
}