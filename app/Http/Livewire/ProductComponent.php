<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Productos;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class ProductComponent extends Component
{
    use WithPagination;
    use LivewireAlert;
    protected $paginationTheme = 'bootstrap';

    protected $productos;
    public $nombre, $descripcion, $precio, $montos;
    public $searchTerm = '';
    public $minPrice = '';
    public $maxPrice = '';

    public function render()
    {
        $this->productos = Productos::when($this->searchTerm, function ($query, $searchTerm) {
            $query->where('nombre', 'like', '%' . $searchTerm . '%');
        })
            ->when($this->minPrice || $this->maxPrice, function ($query) {
                $query->whereBetween('precio', [$this->minPrice, $this->maxPrice]);
            })
            ->orderBy('nombre', 'asc')
            ->paginate(5);

        $this->montos = Productos::select('precio')->distinct()->orderBy('precio', 'asc')->get();

        return view('livewire.product-component', [
            'productos' => $this->productos,
            'montos' => $this->montos,
        ]);
    }

    public function store()
    {
        $this->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'precio' => 'required',
        ]);

        Productos::create([
            'nombre' => $this->nombre,
            'descripcion' => $this->descripcion,
            'precio' => $this->precio,
        ]);

        $this->dispatchBrowserEvent('closeModal');
        $this->reset(['nombre', 'precio', 'descripcion']);
        $this->alert('success', '', [
            'position' => 'top',
            'timer' => 3000,
            'toast' => true,
            'timerProgressBar' => true,
            'text' => 'Carga exitosa',
        ]);
    }
}
