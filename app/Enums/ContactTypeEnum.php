<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;
enum ContactTypeEnum: string implements HasLabel
{
    case Email = 'email';
    case Phone = 'phone';
    case Meeting = 'meeting';
    case Message = 'message';
    public function getLabel(): string|null
    {
        return match ($this) {
            self::Email => 'Email',
            self::Phone => 'Telefon',
            self::Meeting => 'Görüşme',
            self::Message => 'Mesaj'
        };
    }
}