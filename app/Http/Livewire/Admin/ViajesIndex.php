<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Day;

class ViajesIndex extends Component
{
    use WithPagination;
    protected $paginationTheme= "bootstrap";
    public $search ;

    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {
        $viajes = Day::join("passengers","passengers.id", "=", "days.passenger_id")
        ->join("rutas","rutas.id", "=", "days.ruta_id")
        ->join("weeks", "weeks.id", "=", "days.semana_id")
        ->where('passengers.user_id', auth()->user()->id)
        ->orWhere('passengers.name', 'LIKE', '%' . $this->search . '%')
        ->orWhere('passengers.apellido', 'LIKE', '%' . $this->search . '%')
        ->select("days.id as id_days", "passengers.name as nombre", "passengers.apellido as apellido", "days.lun", "days.mar", "days.mie", "days.jue", "days.vie", "weeks.id as semana_id", "weeks.name as nombre_semana", "rutas.id as ruta_id")
        ->orderBy("weeks.id")->orderBy("rutas.id")
        ->paginate(10);
        return view('livewire.admin.viajes-index', compact('viajes'));
    }
}
 