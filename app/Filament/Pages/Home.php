<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Components;
use Filament\Notifications\Notification;

use App\Models\Section as ModelsSection;

class Home extends Page
{

    public $Herotitle;
    public $HeroDescription;
    public $HeroButtonText;
    public $HeroButtonLink;
    public $Features;
    public $FeatureTitle;
    public $FeatureDescription;
    public $FeatureImage;
    public $DualFocusTitle;
    public $DualFocusDescription;
    public $CoreSkillsTitle;
    public $LanguageTitle;
    public $LanguageDescription;
    public $LanguageButtonText;
    public $LanguageButtonLink;
    public $TechTitle;
    public $TechDescription;
    public $InnovativeTitle;
    public $InnovativeDescription;
    public $ProgrammingTitle;
    public $ProgrammingDescription;
    public $QuestionsTitle;
    public $QuestionsDescription;
    public $Questions;
    public $Answer;

    protected static ?string $navigationIcon = 'heroicon-o-document';

    protected static ?string $navigationGroup = 'Landing';

    protected static ?string $title = 'Landing Page';

    protected static string $view = 'filament.pages.home';

    public $data = [];

    public function mount(): void
    {
        $sections = ModelsSection::with(['features', 'faqs'])->get();

        foreach ($sections as $section) {
            
            $this->data[$section->name] = $section->toArray();

            $sectionData['faqs'] = $section->faqs->toArray();

            $this->data[$section->name] = array_merge($this->data[$section->name], $sectionData);
        }

        /* dd($this->data['FeatureOverview']['features'][0]['image']); */

        $this->Herotitle = $this->data['HeroBanner']['title'];
        $this->HeroDescription = $this->data['HeroBanner']['description'];
        $this->HeroButtonText = $this->data['HeroBanner']['button_text'];
        $this->HeroButtonLink = $this->data['HeroBanner']['button_url'];
        $this->FeatureTitle = $this->data['FeatureOverview']['title'];
        $this->FeatureDescription = $this->data['FeatureOverview']['description'];
        $this->Features = $this->data['FeatureOverview']['features'];
        foreach ($this->Features as $feature) {
            $this->FeatureImage = $feature['image'];
        }
        $this->DualFocusTitle = $this->data['DualFocus']['title'];
        $this->DualFocusDescription = $this->data['DualFocus']['description'];
        $this->CoreSkillsTitle = $this->data['CoreSkills']['title'];
        $this->LanguageTitle = $this->data['LanguageLearning']['title'];
        $this->LanguageDescription = $this->data['LanguageLearning']['description'];
        $this->LanguageButtonText = $this->data['LanguageLearning']['button_text'];
        $this->LanguageButtonLink = $this->data['LanguageLearning']['button_url'];
        $this->TechTitle = $this->data['TechEducation']['title'];
        $this->TechDescription = $this->data['TechEducation']['description'];
        $this->InnovativeTitle = $this->data['InnovativeTeaching']['title'];
        $this->InnovativeDescription = $this->data['InnovativeTeaching']['description'];
        $this->ProgrammingTitle = $this->data['ProgrammingMastery']['title'];
        $this->ProgrammingDescription = $this->data['ProgrammingMastery']['description'];
        $this->QuestionsTitle = $this->data['FAQSection']['title'];
        $this->QuestionsDescription = $this->data['FAQSection']['description'];
        $this->Questions = $this->data['FAQSection']['faqs'];
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
                                ->placeholder('Image')
                                ->image()
                                ->disk('public')
                                ->directory('img')
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
                    Components\TextInput::make('LanguageTitle')
                        ->label('Title')
                        ->placeholder('Title'),
                    Components\TextInput::make('LanguageDescription')
                        ->label('Description')
                        ->placeholder('Description'),
                    Components\TextInput::make('LanguageButtonText')
                        ->label('Button Text')
                        ->placeholder('Button Text'),
                    Components\TextInput::make('LanguageButtonLink')
                        ->label('Button Link')
                        ->placeholder('Button Link'),
                ]),
            Section::make('TechEducation')
                ->schema([
                    Components\TextInput::make('TechTitle')
                        ->label('Title')
                        ->placeholder('Title'),
                    Components\Textarea::make('TechDescription')
                        ->label('Description')
                        ->placeholder('Description'),
                ]),
            Section::make('InnovativeTeaching')
                ->schema([
                    Components\TextInput::make('InnovativeTitle')
                        ->label('Title')
                        ->placeholder('Title'),
                    Components\Textarea::make('InnovativeDescription')
                        ->label('Description')
                        ->placeholder('Description'),
                ]),
            Section::make('ProgrammingMastery')
                ->schema([
                    Components\TextInput::make('ProgrammingTitle')
                        ->label('Title')
                        ->placeholder('Title'),
                    Components\Textarea::make('ProgrammingDescription')
                        ->label('Description')
                        ->placeholder('Description'),
                ]),
            Section::make('FAQSection')
                ->schema([
                    Components\TextInput::make('QuestionsTitle')
                        ->label('Title')
                        ->placeholder('Title'),
                    Components\Textarea::make('QuestionsDescription')
                        ->label('Description')
                        ->placeholder('Description'),
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
        $this->validate(
            [
                'Herotitle' => 'required',
                'HeroDescription' => 'required',
                'HeroButtonText' => 'required',
                'HeroButtonLink' => 'required',
                'FeatureTitle' => 'required',
                'FeatureDescription' => 'required',
                'DualFocusTitle' => 'required',
                'DualFocusDescription' => 'required',
                'CoreSkillsTitle' => 'required',
                'LanguageTitle' => 'required',
                'LanguageDescription' => 'required',
                'LanguageButtonText' => 'required',
                'LanguageButtonLink' => 'required',
                'TechTitle' => 'required',
                'TechDescription' => 'required',
                'InnovativeTitle' => 'required',
                'InnovativeDescription' => 'required',
                'ProgrammingTitle' => 'required',
                'ProgrammingDescription' => 'required',
                'QuestionsTitle' => 'required',
                'QuestionsDescription' => 'required',
            ]
        );

        $sections = [
            ['title' => 'HeroBanner', 'data' => ['title' => $this->Herotitle, 'description' => $this->HeroDescription, 'button_text' => $this->HeroButtonText, 'button_url' => $this->HeroButtonLink]],
            ['title' => 'FeatureOverview', 'data' => ['title' => $this->FeatureTitle, 'description' => $this->FeatureDescription]],
            ['title' => 'DualFocus', 'data' => ['title' => $this->DualFocusTitle, 'description' => $this->DualFocusDescription]],
            ['title' => 'CoreSkills', 'data' => ['title' => $this->CoreSkillsTitle]],
            ['title' => 'LanguageLearning', 'data' => ['title' => $this->LanguageTitle, 'description' => $this->LanguageDescription, 'button_text' => $this->LanguageButtonText, 'button_url' => $this->LanguageButtonLink]],
            ['title' => 'TechEducation', 'data' => ['title' => $this->TechTitle, 'description' => $this->TechDescription]],
            ['title' => 'InnovativeTeaching', 'data' => ['title' => $this->InnovativeTitle, 'description' => $this->InnovativeDescription]],
            ['title' => 'ProgrammingMastery', 'data' => ['title' => $this->ProgrammingTitle, 'description' => $this->ProgrammingDescription]],
            ['title' => 'FAQSection', 'data' => ['title' => $this->QuestionsTitle, 'description' => $this->QuestionsDescription]],
        ];

        foreach ($sections as $section) {
            $sectionModel = ModelsSection::where('name', $section['title'])->first();
            $sectionModel->update($section['data']);
        }

        Notification::make('Home Page Updated')
            ->title('Guardado Correctamente!')
            ->icon('heroicon-o-document-text')
            ->send();

    }

}
