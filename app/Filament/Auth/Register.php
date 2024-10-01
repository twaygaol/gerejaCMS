<?php

namespace App\Filament\Auth;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\PasswordInput;
use Filament\Forms\Components\Grid;
use Filament\Forms\Form;
use Filament\Pages\Auth\Register as AuthRegister;
use Spatie\Permission\Models\Role;
use App\Models\User;

class Register extends AuthRegister
{
    public function form(Form $form): Form
    {
        return $form->schema([
            $this->getNameFormComponent(),
            $this->getEmailFormComponent(),
            $this->getPasswordFormComponent(),
            $this->getPasswordConfirmationFormComponent(),
            // Hapus Select untuk role
        ])
        ->statePath('data');
    }

    protected function registerUser(array $data): User
    {
        // Panggil method bawaan untuk register user
        $user = parent::registerUser($data);

        // Assign role 'Jemaat' secara otomatis
        $roleName = 'Jemaat'; // Nama role yang ingin ditetapkan
        $role = Role::where('name', $roleName)->first(); // Cari role berdasarkan nama
        if ($role) {
            $user->assignRole($role->name); // Assign role ke user
        }

        return $user;
    }
}
