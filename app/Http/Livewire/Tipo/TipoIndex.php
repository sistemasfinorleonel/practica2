<?php

namespace App\Http\Livewire\Tipo;

use App\Models\Tipo;
use Livewire\Component;

class TipoIndex extends Component
{
    public function render()
    {   $tipos=Tipo::all();
        return view('livewire.tipo.tipo-index',['tipos'=>$tipos]);
    }
}
