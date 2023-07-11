<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Paket;

class FormPaket extends Component
{
    public $nama_paket;
    public $kecepatan;
    public $nama_provider;
    public $harga;
  
    public function submit()
    {
        $validatedData = $this->validate([
            'nama_paket' => 'required',
            'kecepatan' => 'required|numeric',
            'nama_provider' => 'required',
            'harga' => 'required|numeric',
        ]);
  
        Paket::create($validatedData);
  
        return redirect()->to('/paket');
    }
  
    public function render()
    {
        return view('livewire.form-paket');
    }
}
