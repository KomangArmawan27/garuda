<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Paket;

class ShowPaket extends Component
{
    // public $data;
    // public function render()
    // {
    //     $this->data = Paket::select('nama_paket', 'kecepatan', 'nama_provider', 'harga');
    //     return view('livewire.show-paket');
    // }

    public $data;

    public function render()
    {
            $this->data = Paket::all();
            return view('livewire.show-paket');
    }
}
