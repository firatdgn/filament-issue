<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;
enum ProposalStatusEnum: string implements HasLabel
{
    case Open = 'open';
    case Closed = 'closed';
    case Won = 'won';
    case Lost = 'lost';
    public function getLabel(): string|null
    {
        return match ($this) {
            self::Open => 'Teklif Hazırlandı',
            self::Closed => 'Teklif Yapıldı',
            self::Won => 'Teklif Kabul Edildi',
            self::Lost => 'Teklif Reddedildi Edildi',
        };
    }
}