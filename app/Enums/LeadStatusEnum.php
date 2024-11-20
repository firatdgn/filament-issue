<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;
enum LeadStatusEnum: string implements HasLabel
{
    case New = 'new';
    case Contacted = 'contacted';
    case Qualified = 'qualified';
    case Closed = 'closed';
    case Won = 'won';
    case Lost = 'lost';
    public function getLabel(): string|null
    {
        return match ($this) {
            self::New => 'Yeni',
            self::Contacted => 'İletişime Geçildi',
            self::Qualified => 'İlgisi Yüksek',
            self::Closed => 'İlgisi Düşük',
            self::Won => 'Müşteri Kazanıldı',
            self::Lost => 'Potansiyel Müşteri Kaybedildi',
        };
    }
}