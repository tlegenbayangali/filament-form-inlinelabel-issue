<?php

namespace App\Filament\Pages;

use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Pages\Page;

class Test extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.test';

    public function form(Form $form): Form
    {
        return $form
            ->inlineLabel()
            ->columns(1)
            ->schema([
                Section::make()
                    ->schema([
                        Fieldset::make()
                            ->columns(1)
                            ->schema([
                                TextInput::make('main_phone_number')
                                    ->label('Основной номер телефона')
                                    ->mask('+7 999 999 99 99')
                                    ->required(),

                                Textarea::make('descriptor')
                                    ->autosize()
                                    ->label('Дескриптор')
                                    ->hint('Отображается в шапке сайта, возле логотипа')
                            ]),
                    ]),

            ]);
    }
}
