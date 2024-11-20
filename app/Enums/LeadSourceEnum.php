<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;
enum LeadSourceEnum: string implements HasLabel
{
    case Website = 'website';
    case Email = 'email';
    case Phone = 'phone';
    case SocialMedia = 'social_media';
    public function getLabel(): string|null
    {
        return match ($this) {
            self::Website => "Website",
            self::Email => "Email",
            self::Phone => "Telefon",
            self::SocialMedia => "Sosyal Medya"
        };
    }
}