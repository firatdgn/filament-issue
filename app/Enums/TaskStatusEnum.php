<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;
enum TaskStatusEnum: string implements HasLabel
{
    case Pending = 'pending';
    case InProgress = 'in_progress';
    case Completed = 'completed';
    case Canceled = 'canceled';
    public function getLabel(): string|null
    {
        return match ($this) {
            self::Pending => 'Yapılacak',
            self::InProgress => 'Yapılan',
            self::Completed => 'Tamamlandı',
            self::Canceled => 'İptal Edildi',
        };
    }
}