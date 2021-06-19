<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Fecha;
use Livewire\WithPagination;

class AdminFecha extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $search;

    public function render()
    {
        $fechas=Fecha::where('id','LIKE','%'.$this->search.'%')
        ->paginate(10);

        return view('livewire.admin-fecha',compact('fechas'));
    }

    public function limpiar_page()
    {
        $this->reset('page');
    }

}
