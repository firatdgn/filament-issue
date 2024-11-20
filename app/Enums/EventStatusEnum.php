<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;
enum EventStatusEnum: string implements HasLabel
{
    case Scheduled = 'scheduled';
    case Completed = 'completed';
    case Canceled = 'canceled';
    public function getLabel(): string|null
    {
        return match ($this) {
            self::Scheduled => 'Ayarlandı',
            self::Completed => 'Tamamlandı',
            self::Canceled => 'İptal Edildi',
        };
    }
}