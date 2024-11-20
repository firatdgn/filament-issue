<?php

namespace App\Filament\Forms;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;

class CustomerForm
{
    public static function get()
    {
        return [
            TextInput::make('name')
                ->required()
                ->label('İsim Soyisim')
                ->maxLength(255),
            TextInput::make('email')
                ->email()
                ->maxLength(255),
            TextInput::make('phone')
                ->tel()
                ->label('Telefon')
                ->maxLength(20),
            TextInput::make('company')
                ->label('Şirket')
                ->maxLength(255),
            Textarea::make('address')
                ->columnSpanFull()
                ->label('Adres'),
        ];
    }
}
