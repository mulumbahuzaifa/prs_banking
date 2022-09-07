<?php

namespace App\Http\Livewire;

use App\Models\Senting;
use Livewire\Component;

class AboutComponent extends Component
{
    public function render()
    {
        $setting = Senting::find(1);
        return view('livewire.about-component',['setting' => $setting]);
    }
}