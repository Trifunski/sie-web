<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Components;
use App\Models\Section as ModelsSection;

class Home extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document';

    protected static ?string $navigationGroup = 'Landing';

    protected static ?string $title = 'Landing Page';

    protected static string $view = 'filament.pages.home';

    public $image = [];
    public $sections = [];

    public function mount(): void
    {
        $this->sections = ModelsSection::all()->keyBy('name')->toArray();
        $this->form->fill([
            'HeroBanner' => $this->sections['HeroBanner'],
            'FeatureOverview' => $this->sections['FeatureOverview'],
            'DualFocus' => $this->sections['DualFocus'],
            'CoreSkills' => $this->sections['CoreSkills'],
            'LanguageLearning' => $this->sections['LanguageLearning'],
            'TechEducation' => $this->sections['TechEducation'],
            'InnovativeTeaching' => $this->sections['InnovativeTeaching'],
            'ProgrammingMastery' => $this->sections['ProgrammingMastery'],
            'FAQSection' => $this->sections['FAQSection'],
        ]);
    } 

    protected function getFormSchema(): array
    {
        return [
            Section::make('HeroBanner')
                ->schema([
                    Components\TextInput::make('Herotitle')
                        ->label('Title')
                        ->placeholder('Title'),
                    Components\TextInput::make('HeroDescription')
                        ->label('Description')
                        ->placeholder('Description'),
                    Components\TextInput::make('HeroButtonText')
                        ->label('Button Text')
                        ->placeholder('Button Text'),
                    Components\TextInput::make('HeroButtonLink')
                        ->label('Button Link')
                        ->placeholder('Button Link'),
                ]),
            Section::make('FeatureOverview')
                ->schema([
                    Components\TextInput::make('FeatureTitle')
                        ->label('Title')
                        ->placeholder('Title'),
                    Components\TextInput::make('FeatureDescription')
                        ->label('Description')
                        ->placeholder('Description'),
                    Components\Repeater::make('Features')
                        ->schema([
                            Components\FileUpload::make('FeatureImage')
                                ->label('Image')
                                ->placeholder('Image'),
                        ])
                        ->createItemButtonLabel('Add Features')
                        ->collapsed()
                ]),
            Section::make('DualFocus')
                ->schema([
                    Components\TextInput::make('DualFocusTitle')
                        ->label('Title')
                        ->placeholder('Title'),
                    Components\Textarea::make('DualFocusDescription')
                        ->label('Description')
                        ->placeholder('Description'),
                ]),
            Section::make('CoreSkills')
                ->schema([
                    Components\TextInput::make('CoreSkillsTitle')
                        ->label('Title')
                        ->placeholder('Title'),
                    Components\Repeater::make('blocks')
                        ->label('Content Blocks')
                        ->schema([
                            Components\TextInput::make('CoreSkillsIcon')
                                ->label('Icon')
                                ->placeholder('Enter icon name (e.g., document, briefcase, users)'),
                            Components\Textarea::make('CoreSkillsDescription')
                                ->label('Description')
                                ->placeholder('Enter block description'),
                        ])
                        ->createItemButtonLabel('Add Skill')
                        ->collapsed()
                ]),
            Section::make('LanguageLearning')
                ->schema([
                    Components\TextInput::make('Herotitle')
                        ->label('Title')
                        ->placeholder('Title'),
                    Components\TextInput::make('HeroDescription')
                        ->label('Description')
                        ->placeholder('Description'),
                    Components\TextInput::make('HeroButtonText')
                        ->label('Button Text')
                        ->placeholder('Button Text'),
                    Components\TextInput::make('HeroButtonLink')
                        ->label('Button Link')
                        ->placeholder('Button Link'),
                ]),
            Section::make('TechEducation')
                ->schema([
                    Components\TextInput::make('DualFocusTitle')
                        ->label('Title')
                        ->placeholder('Title'),
                    Components\Textarea::make('DualFocusDescription')
                        ->label('Description')
                        ->placeholder('Description'),
                ]),
            Section::make('InnovativeTeaching')
                ->schema([
                    Components\TextInput::make('DualFocusTitle')
                        ->label('Title')
                        ->placeholder('Title'),
                    Components\Textarea::make('DualFocusDescription')
                        ->label('Description')
                        ->placeholder('Description'),
                ]),
            Section::make('ProgrammingMastery')
                ->schema([
                    Components\TextInput::make('DualFocusTitle')
                        ->label('Title')
                        ->placeholder('Title'),
                    Components\Textarea::make('DualFocusDescription')
                        ->label('Description')
                        ->placeholder('Description'),
                ]),
            Section::make('FAQSection')
                ->schema([
                    Components\Repeater::make('Questions')
                        ->schema([
                            Components\TextInput::make('Question')
                                ->label('Question')
                                ->placeholder('Question'),
                            Components\Textarea::make('Answer')
                                ->label('Answer')
                                ->placeholder('Answer'),
                        ])
                        ->createItemButtonLabel('Add FAQ')
                        ->collapsed()
                ]),            
        ];
    }

    public function save()
    {
        $this->validate();

        DB::beginTransaction();
        try {
            foreach ($this->form->getState() as $sectionName => $sectionData) {
                // Aquí deberías tener una lógica para actualizar cada sección basada en su nombre.
                // Esto es un ejemplo simple; adapta según tus necesidades y estructura de datos.
                ModelsSection::updateOrCreate(
                    ['name' => $sectionName], 
                    $sectionData
                );
            }
            DB::commit();

            Notification::make()
                ->title('Guardado correctamente')
                ->icon('heroicon-o-document-text')
                ->iconColor('success')
                ->send();
        } catch (\Exception $e) {
            DB::rollBack();
            Notification::make()
                ->title('Error al guardar')
                ->icon('heroicon-o-exclamation')
                ->iconColor('danger')
                ->body($e->getMessage())
                ->send();
        }
    }

}
