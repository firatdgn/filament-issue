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
                ->maxLength(255),
            TextInput::make('email')
                ->email()
                ->maxLength(255),
            TextInput::make('phone')
                ->tel()
                ->maxLength(20),
            TextInput::make('company')
                ->maxLength(255),
            Textarea::make('address')
                ->columnSpanFull()
        ];
    }
}
