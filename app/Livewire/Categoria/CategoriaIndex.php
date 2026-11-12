<?php

namespace App\Livewire\Categoria;

use App\Models\Categoria;
use Livewire\Component;

class CategoriaIndex extends Component
{
    public function delete($id){
        $categoria = Categoria::find($id);

        if ($categoria == null) {
            session()->flash('error', 'não encontrado');
        }

        $categoria->delete();
    }

    public function render()
    {
        $categorias = Categoria::all();
        return view('livewire.categoria.categoria-index', compact('categorias'));
    }
}
