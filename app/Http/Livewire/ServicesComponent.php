<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;

class ServicesComponent extends Component
{
    public function render()
    {
        $services = Category::all();
        return view('livewire.services-component', ['services' => $services]);
    }
}