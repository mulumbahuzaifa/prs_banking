<?php

namespace App\Http\Livewire;

use App\Models\Service;
use Livewire\Component;
use Livewire\WithPagination;

class AdminServicesComponent extends Component
{
    use WithPagination;

    public function deleteProject($id){
        $project = Service::find($id);
        $project->delete();
        session()->flash('message', 'Service has been deleted successfully');
    }
    public function render()
    {
        $projects = Service::paginate(12);
        return view('livewire.admin-services-component', ['projects' => $projects]);
    }
}