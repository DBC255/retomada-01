<?php

namespace App\Livewire\Categoria;

use App\Models\Categoria;
use Livewire\Component;

class CategoriaCreate extends Component
{
    public $nome;

    public function store(){
        //Validar os dados
        //Salvar os dados
        //exibir mensagem de sucesso
        //redirecionar
        Categoria::create([
            'nome' => $this->nome,
        ]);

        session()->flash('success', 'cadastrado');
        return redirect()->route('categoria.index');
    }

    public function render()
    {
        return view('livewire.categoria.categoria-create');
    }
}
