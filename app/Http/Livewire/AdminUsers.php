<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class AdminUsers extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $search;

    public function render()
    {
        $users = User::where('name','LIKE','%'.$this->search.'%')
                    ->orwhere('email','LIKE','%'.$this->search.'%')
                    ->orwhere('cedula','LIKE','%'.$this->search.'%')
                    ->orwhere('nacimiento','LIKE','%'.$this->search.'%')
                    ->orwhere('direccion','LIKE','%'.$this->search.'%')
                    ->orwhere('telefono','LIKE','%'.$this->search.'%')
                    ->orwhere('celular','LIKE','%'.$this->search.'%')
                    ->paginate(5);
        return view('livewire.admin-users',compact('users'));
    }

    public function limpiar_page()
    {
        $this->reset('page');
    }
}
