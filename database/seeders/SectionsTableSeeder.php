<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class SectionsTableSeeder extends Seeder
{
    public function run()
    {

        Schema::disableForeignKeyConstraints();

        DB::table('sections')->truncate();
        DB::table('faqs')->truncate();
        DB::table('core_skills_blocks')->truncate();
        DB::table('features')->truncate();

        Schema::enableForeignKeyConstraints();

        DB::table('sections')->insert([
            [
                'name' => 'HeroBanner',
                'title' => 'Bienvenido a Nuestra Página',
                'description' => 'Esta es una descripción de ejemplo para el HeroBanner.',
                'button_text' => 'Más Información',
                'button_link' => '/mas-informacion',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'FeatureOverview',
                'title' => 'Características Principales',
                'description' => 'Esta es una descripción de ejemplo para el FeatureOverview.',
                'button_text' => 'null',
                'button_link' => 'null',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'DualFocus',
                'title' => 'Enfóque Dual',
                'description' => 'Esta es una descripción de ejemplo para el DualFocus.',
                'button_text' => 'null',
                'button_link' => 'null',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'CoreSkills',
                'title' => 'Habilidades Básicas',
                'description' => 'Esta es una descripción de ejemplo para el CoreSkills.',
                'button_text' => 'null',
                'button_link' => 'null',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'LanguageLearning',
                'title' => 'Aprendizaje de Idiomas',
                'description' => 'Esta es una descripción de ejemplo para el LanguageLearning.',
                'button_text' => 'Letras',
                'button_link' => '/letras',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'TechEducation',
                'title' => 'Educación Tecnológica',
                'description' => 'Esta es una descripción de ejemplo para el TechEducation.',
                'button_text' => 'null',
                'button_link' => 'null',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'InnovativeTeaching',
                'title' => 'Enseñanza Innovadora',
                'description' => 'Esta es una descripción de ejemplo para el InnovativeTeaching.',
                'button_text' => 'null',
                'button_link' => 'null',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'ProgrammingMastery',
                'title' => 'Maestría en Programación',
                'description' => 'Esta es una descripción de ejemplo para el ProgrammingMastery.',
                'button_text' => 'null',
                'button_link' => 'null',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'FAQSection',
                'title' => 'Preguntas Frecuentes',
                'description' => 'Esta es una descripción de ejemplo para el FAQSection.',
                'button_text' => 'null',
                'button_link' => 'null',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // Seed the FAQ questions.
        $faqSection = DB::table('sections')->where('name', 'FAQSection')->first();
        $faqSectionId = $faqSection->id;

        DB::table('faqs')->insert([
            [
                'section_id' => $faqSectionId,
                'question' => '¿Cuál es el horario de atención?',
                'answer' => 'Nuestro horario de atención es de lunes a viernes de 9:00 a 18:00.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'section_id' => $faqSectionId,
                'question' => '¿Cuál es el costo de inscripción?',
                'answer' => 'El costo de inscripción es de $100.00.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'section_id' => $faqSectionId,
                'question' => '¿Cuál es la duración de los cursos?',
                'answer' => 'La duración de los cursos es de 6 meses.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // Seed the Core Skills.
        $coreSkillsSection = DB::table('sections')->where('name', 'CoreSkills')->first();
        $coreSkillsSectionId = $coreSkillsSection->id;

        DB::table('core_skills_blocks')->insert([
            [
                'section_id' => $coreSkillsSectionId,
                'icon' => 'heroicon-o-globe',
                'description' => 'Python and JavaScript become foundational pillars in our curriculum.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'section_id' => $coreSkillsSectionId,
                'icon' => 'heroicon-o-lightning-bolt',
                'description' => 'Students learn to think algorithmically and solve problems efficiently.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'section_id' => $coreSkillsSectionId,
                'icon' => 'heroicon-o-chart-pie',
                'description' => 'Students learn to think algorithmically and solve problems efficiently.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // Seed feature overview.
        $featureOverviewSection = DB::table('sections')->where('name', 'FeatureOverview')->first();
        $featureOverviewSectionId = $featureOverviewSection->id;

        DB::table('features')->insert([
            [
                'section_id' => $featureOverviewSectionId,
                'title' => 'Global Community',
                'description' => 'Join a global community of students and teachers.',
                'image' => 'feature-overview-1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'section_id' => $featureOverviewSectionId,
                'title' => 'Interactive Learning',
                'description' => 'Engage in interactive learning experiences.',
                'image' => 'feature-overview-2.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);

        
    }
}