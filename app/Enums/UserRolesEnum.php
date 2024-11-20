<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;
enum UserRolesEnum: string implements HasLabel
{
    case Admin = "admin";
    case Manager = "manager";
    case Employee = "employee";
    public function getLabel(): string|null
    {
        return match ($this) {
            self::Admin => 'Admin',
            self::Manager => 'Müdür',
            self::Employee => 'Çalışan'
        };
    }
}