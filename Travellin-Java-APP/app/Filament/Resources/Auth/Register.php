<?php

namespace App\Filament\Auth;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Pages\Auth\Register as AuthRegister;
use Illuminate\Database\Eloquent\Model;

class Register extends AuthRegister
{
    public function form(Form $form): Form
    {
        return $form->schema([
            $this->getNameFormComponent(),
            $this->getEmailFormComponent(),
            $this->getPasswordFormComponent(),
            $this->getPasswordConfirmationFormComponent(),
        ])
        ->statePath('data');
    }

    /**
     * Handle the registration process.
     *
     * @param  array  $data
     * @return \Illuminate\Database\Eloquent\Model
     */
    protected function handleRegistration(array $data): Model
    {
        $userModel = $this->getUserModel();
        $user = $userModel::create($data);
        $user->assignRole('User');

        return $user;
    }

    // protected function afterRegistration(): void
    // {
    //     return redirect(route('landing.profile'));
    // }


    // OR
    // use this method to redirect after registration
    // protected function redirectUrl(): string
    // {
    //     return route('landing.profile');
    // }
    

}