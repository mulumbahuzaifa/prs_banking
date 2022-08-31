<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Senting;
use Livewire\Component;
use PHPUnit\TextUI\XmlConfiguration\IniSetting;

class HeaderComponent extends Component
{
    public function render()
    {
        $categories = Category::get();
        $setting = Senting::find(1);
        return view('livewire.header-component',['setting' => $setting, 'categories' => $categories]);
    }
}