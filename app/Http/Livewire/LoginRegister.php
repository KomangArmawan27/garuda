<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Hash;
use App\Models\User;

class LoginRegister extends Component
{
    public $users, $email, $password, $name;
    public $registerForm = false;

    public function render()
    {
        return view('livewire.login-register');
    }

    private function resetInputFields()
    {
        $this->name = '';
        $this->email = '';
        $this->password = '';
    }

    public function login()
    {
        $validatedDate = $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);


        if (\Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            session()->flash('message', 'Berhasil Login.');

            $user = \Auth::user();

            if ($user->level == 'admin') {
                return redirect()->to('/admin');
            } elseif ($user->level == 'sales') {
                return redirect()->to('/sales');
            } else {
                return redirect()->to('/');
            }
        } else {
            session()->flash('error', 'Email dan Password salah.');
        }
    }

    public function register()
    {
        $this->registerForm = !$this->registerForm;
    }

    public function registerStore()
    {
        $validatedDate = $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $existingUser = User::where('email', $this->email)->first();

        if ($existingUser) {
            session()->flash('error', 'Email sudah terdaftar, gunakan email lain!.');
            return;
        }

        $this->password = Hash::make($this->password);

        User::create(['name' => $this->name, 'email' => $this->email, 'password' => $this->password]);

        session()->flash('message', 'Login kembali di halaman login!');
        return redirect()->to('/login');

        $this->resetInputFields();
    }
}
