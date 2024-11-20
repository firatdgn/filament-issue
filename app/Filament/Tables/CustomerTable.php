<?php

namespace App\Filament\Tables;

use Filament\Tables\Columns\TextColumn;

class CustomerTable
{
    public static function get()
    {
        return [
            TextColumn::make('name')
                ->label('İsim Soyisim')
                ->searchable(),
            TextColumn::make('email')
                ->searchable(),
            TextColumn::make('phone')
                ->label('Telefon')
                ->searchable(),
            TextColumn::make('company')
                ->label('Şirket')
                ->searchable(),
            TextColumn::make('created_at')
                ->label('Oluşturulma Tarihi')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
            TextColumn::make('updated_at')
                ->label('Düzenlenme Tarihi')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
        ];
    }
}