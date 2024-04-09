<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Filament\Forms;
use Filament\Forms\Components\Builder;
use Filament\Forms\Components\Builder\Block as BuilderBlock;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;

class Contact extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-phone';

    protected static ?string $navigationGroup = 'Landing';

    protected static ?string $title = 'Contact Page';

    protected static string $view = 'filament.pages.contact';

    public function mount(): void
    {
        $this->form->fill();
    }

    protected function getFormSchema(): array
    {
        return [
            Builder::make('ContactInfo')
                ->blocks([
                    BuilderBlock::make('Address')
                        ->schema([
                            TextInput::make('ContactTitle1')
                                ->label('Address Title')
                                ->placeholder('Title'),
                            Textarea::make('ContactDescription1')
                                ->label('Address Description')
                                ->placeholder('C/ Example, x, xxxxx'),
                        ]),
                    BuilderBlock::make('Working Hours')
                        ->schema([
                            TextInput::make('ContactTitle2')
                                ->label('Working Hours Title')
                                ->placeholder('Title'),
                            Textarea::make('ContactDescription2')
                                ->label('Working Hours Description')
                                ->placeholder('Monday - Friday: 9:00 AM - 5:00 PM'),
                        ]),
                    BuilderBlock::make('Phone')
                        ->schema([
                            TextInput::make('ContactTitle3')
                                ->label('Call Us Title')
                                ->placeholder('Title'),
                            TextInput::make('ContactDescription3')
                                ->label('Call Us Description')
                                ->placeholder('+34 999 99 99 99'),
                        ]),
                    BuilderBlock::make('Email')
                        ->schema([
                            TextInput::make('ContactTitle4')
                                ->label('Email Us Title')
                                ->placeholder('Title'),
                            TextInput::make('ContactDescription4')
                                ->label('Email Us Description')
                                ->placeholder('example@example.com'),
                        ])
                ])
                ->addActionLabel('Add Contact Info')
        ];
    }

}
