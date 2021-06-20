<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Cliente;
use Livewire\WithPagination;


class AdminClientes extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $search;

    public function render()
    {
        $clientes = Cliente::where('cnombre','LIKE','%'.$this->search.'%')
                        ->orwhere('capellido','LIKE','%'.$this->search.'%')
                        ->orwhere('cemail','LIKE','%'.$this->search.'%')
                        ->orwhere('ccedula','LIKE','%'.$this->search.'%')
                        ->orwhere('ccelular','LIKE','%'.$this->search.'%')
                        ->paginate(8);

        return view('livewire.admin-clientes',compact('clientes'));
    }

    public function limpiar_page()
    {
        $this->reset('page');
    }

}
