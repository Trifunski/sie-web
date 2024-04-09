<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Notifications\Notification;
use App\Models\ContactPage;

class Contact extends Page
{

    public $ContactTitle1;
    public $ContactDescription1;
    public $ContactTitle2;
    public $ContactDescription2;
    public $ContactTitle3;
    public $ContactDescription3;
    public $ContactTitle4;
    public $ContactDescription4;

    protected static ?string $navigationIcon = 'heroicon-o-phone';
    protected static ?string $navigationGroup = 'Landing';
    protected static ?string $title = 'Contact Page';
    protected static string $view = 'filament.pages.contact';

    public $data;

    public function mount(): void
    {
        $this->data = ContactPage::first();

        $this->ContactTitle1 = $this->data['contact_title_1'];
        $this->ContactDescription1 = $this->data['contact_description_1'];
        $this->ContactTitle2 = $this->data['contact_title_2'];
        $this->ContactDescription2 = $this->data['contact_description_2'];
        $this->ContactTitle3 = $this->data['contact_title_3'];
        $this->ContactDescription3 = $this->data['contact_description_3'];
        $this->ContactTitle4 = $this->data['contact_title_4'];
        $this->ContactDescription4 = $this->data['contact_description_4'];
    }

    protected function getFormSchema(): array
    {
        return [
            Section::make('Address')
                ->schema([
                    TextInput::make('ContactTitle1')
                        ->label('Address Title')
                        ->placeholder('Title'),
                    Textarea::make('ContactDescription1')
                        ->label('Address Description')
                        ->placeholder('C/ Example, x, xxxxx'),
                ]),
            Section::make('Working Hours')
                ->schema([
                    TextInput::make('ContactTitle2')
                        ->label('Working Hours Title')
                        ->placeholder('Title'),
                    Textarea::make('ContactDescription2')
                        ->label('Working Hours Description')
                        ->placeholder('Monday - Friday: 9:00 AM - 5:00 PM'),
                ]),
            Section::make('Phone')
                ->schema([
                    TextInput::make('ContactTitle3')
                        ->label('Call Us Title')
                        ->placeholder('Title'),
                    TextInput::make('ContactDescription3')
                        ->label('Call Us Description')
                        ->placeholder('+34 999 99 99 99'),
                ]),
            Section::make('Email')
                ->schema([
                    TextInput::make('ContactTitle4')
                        ->label('Email Us Title')
                        ->placeholder('Title'),
                    TextInput::make('ContactDescription4')
                        ->label('Email Us Description')
                        ->placeholder('example@example.com'),
                ]),
        ];
    }

    public function save(): void
    {
        $this->validate([
            'ContactTitle1' => 'required',
            'ContactDescription1' => 'required',
            'ContactTitle2' => 'required',
            'ContactDescription2' => 'required',
            'ContactTitle3' => 'required',
            'ContactDescription3' => 'required',
            'ContactTitle4' => 'required',
            'ContactDescription4' => 'required',
        ]);

        $this->data->update([
            'contact_title_1' => $this->ContactTitle1,
            'contact_description_1' => $this->ContactDescription1,
            'contact_title_2' => $this->ContactTitle2,
            'contact_description_2' => $this->ContactDescription2,
            'contact_title_3' => $this->ContactTitle3,
            'contact_description_3' => $this->ContactDescription3,
            'contact_title_4' => $this->ContactTitle4,
            'contact_description_4' => $this->ContactDescription4,
        ]);

        Notification::make('Contact Page Updated')
            ->title('Guardado Correctamente!')
            ->icon('heroicon-o-document-text')
            ->send();
    }

}