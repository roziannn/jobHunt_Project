<?php

namespace Database\Seeders;

use App\Models\Language;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $languages = [
            'English',
            'Hindi',
            'Arabic',
            'Bahasa',
            'Spanish',
            'French',
            'German',
            'Chinese',
            'Japanese',
            'Korean',
            'Russian',
            'Portuguese',
            'Italian',
            'Dutch',
            'Swedish',
            'Norwegian',
            'Danish',
            'Finnish',
            'Greek',
            'Turkish',
            'Polish',
            'Czech',
            'Hungarian',
            'Romanian',
            'Hebrew',
            'Persian',
            'Thai',
            'Vietnamese',
            'Indonesian',
            'Malay',
            'Filipino',
            'Bengali',
            'Tamil',
            'Telugu',
            'Kannada',
            'Gujarati',
            'Marathi',
            'Punjabi',
            'Swahili',
            'Zulu',
            'Xhosa',
            'Afrikaans',
            'Ukrainian',
            'Belarusian',
            'Slovak',
            'Bulgarian',
            'Serbian',
            'Croatian',
            'Slovenian',
            'Bosnian',
            'Macedonian',
            'Albanian',
            'Estonian',
            'Latvian',
            'Lithuanian',
            'Icelandic',
            'Maltese',
            'Irish',
            'Welsh',
            'Scottish Gaelic',
            'Basque',
            'Catalan',
            'Galician'
        ];

        foreach ($languages as $language) {
            $lang = new Language();
            $lang->name = $language;
            $lang->save();
        }
    }
}
