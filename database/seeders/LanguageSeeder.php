<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Master\Language;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        $languages = [
            ['name' => 'English'],
            ['name' => 'Mandarin Chinese'],
            ['name' => 'Spanish'],
            ['name' => 'Hindi'],
            ['name' => 'Arabic'],
            ['name' => 'Bengali'],
            ['name' => 'Portuguese'],
            ['name' => 'Russian'],
            ['name' => 'Japanese'],
            ['name' => 'Lahnda (Western Panjabi)'],
            ['name' => 'Punjabi'],
            ['name' => 'German'],
            ['name' => 'Javanese'],
            ['name' => 'Wu Chinese'],
            ['name' => 'Telugu'],
            ['name' => 'Turkish'],
            ['name' => 'Korean'],
            ['name' => 'French'],
            ['name' => 'Vietnamese'],
            ['name' => 'Marathi'],
            ['name' => 'Tamil'],
            ['name' => 'Turkmen'],
            ['name' => 'Urdu'],
            ['name' => 'Italian'],
            ['name' => 'Egyptian Arabic'],
            ['name' => 'Thai'],
            ['name' => 'Gujarati'],
            ['name' => 'Jin'],
            ['name' => 'Xhosa'],
            ['name' => 'Malayalam'],
            ['name' => 'Kannada'],
            ['name' => 'Marwari'],
            ['name' => 'Ukrainian'],
            ['name' => 'Sudanese Arabic'],
            ['name' => 'Yoruba'],
            ['name' => 'Burmese'],
            ['name' => 'Hausa'],
            ['name' => 'Sindhi'],
            ['name' => 'Albanian'],
            ['name' => 'Maithili'],
            ['name' => 'Hungarian'],
            ['name' => 'Fula'],
            ['name' => 'Nepali'],
            ['name' => 'Odia'],
            ['name' => 'Amharic'],
            ['name' => 'Somali'],
            ['name' => 'Azerbaijani'],
            ['name' => 'Uzbek'],
            ['name' => 'Malagasy'],
            ['name' => 'Cebuano'],
            ['name' => 'Xiang Chinese'],
            ['name' => 'Greek'],
            ['name' => 'Haitian Creole'],
            ['name' => 'Hakka'],
            ['name' => 'Sanskrit'],
            ['name' => 'Khmer'],
            ['name' => 'Malay'],
            ['name' => 'Bhojpuri'],
            ['name' => 'Zhuang'],
            ['name' => 'Pashto'],
            ['name' => 'Marathi'],
            ['name' => 'Burmese'],
            ['name' => 'Bengali'],
            ['name' => 'Persian'],
            ['name' => 'Maithili'],
            ['name' => 'Belarusian'],
            ['name' => 'Romanian'],
            ['name' => 'Kazakh'],
            ['name' => 'Swahili'],
            ['name' => 'Polish'],
            ['name' => 'Tagalog'],
            ['name' => 'Serbian'],
            ['name' => 'Maltese'],
            ['name' => 'Tajik'],
            ['name' => 'Kurdish'],
            ['name' => 'Czech'],
            ['name' => 'Finnish'],
            ['name' => 'Swedish'],
            ['name' => 'Dutch'],
            ['name' => 'Danish'],
            ['name' => 'Norwegian'],
            ['name' => 'Slovak'],
            ['name' => 'Slovenian'],
            ['name' => 'Lithuanian'],
            ['name' => 'Latvian'],
            ['name' => 'Estonian'],
            ['name' => 'Icelandic'],
            ['name' => 'Irish'],
            ['name' => 'Scottish Gaelic'],
            ['name' => 'Welsh'],
            ['name' => 'Basque'],
            ['name' => 'Catalan'],
            ['name' => 'Galician'],
            ['name' => 'Breton'],
            ['name' => 'Luxembourgish'],
            ['name' => 'Maltese'],
            ['name' => 'Afrikaans'],
            ['name' => 'Sami'],
            ['name' => 'Sami'],
            ['name' => 'Komi-Permyak'],
            ['name' => 'Komi-Zyrian'],
            ['name' => 'Tatar'],
            ['name' => 'Chuvash'],
            ['name' => 'Kyrgyz'],
            ['name' => 'Uzbek'],
            ['name' => 'Tajik'],
            ['name' => 'Turkmen'],
            ['name' => 'Karakalpak'],
            ['name' => 'Ossetian'],
            ['name' => 'Chechen'],
            ['name' => 'Inari Sami'],
            ['name' => 'Skolt Sami'],
            ['name' => 'Kildin Sami'],
            ['name' => 'Ter Sami'],
            ['name' => 'Ainu'],
            ['name' => 'Kalmyk'],
            ['name' => 'Nivkh'],
            ['name' => 'Tuvan'],
            ['name' => 'Moksha'],
            ['name' => 'Erzya'],
            ['name' => 'Ingush'],
            ['name' => 'Buryat'],
            ['name' => 'Mongolian'],
            ['name' => 'Buryat'],
            ['name' => 'Kalmyk'],
            ['name' => 'Sakha'],
            ['name' => 'Nanai'],
            ['name' => 'Ulchi'],
            ['name' => 'Nanai'],
            ['name' => 'Uralic'],
            ['name' => 'Chukchi'],
            ['name' => 'Yakut'],
            ['name' => 'Votic'],
            ['name' => 'Veps'],
            ['name' => 'Livonian'],
            ['name' => 'Ewenki'],
            ['name' => 'Even'],
            ['name' => 'Nganasan'],
            ['name' => 'Selkup'],
            ['name' => 'Tuvan'],
            ['name' => 'Karelian'],
            ['name' => 'Veps'],
            ['name' => 'Votic'],
            ['name' => 'Selkup'],
            ['name' => 'Komi'],
            ['name' => 'Moksha'],
            ['name' => 'Erzya'],
            ['name' => 'Udmurt'],
            ['name' => 'Mari'],
            ['name' => 'Komi-Permyak'],
            ['name' => 'Mari'],
            ['name' => 'Komi-Zyrian'],
            ['name' => 'Udmurt'],
            ['name' => 'Tatars'],
            ['name' => 'Khanty'],
            ['name' => 'Mansi'],
            ['name' => 'Nganasan'],
            ['name' => 'Selkup'],
            ['name' => 'Evenki'],
            ['name' => 'Ewenki'],
            ['name' => 'Nanai'],
            ['name' => 'Uralic'],
            ['name' => 'Komi'],
            ['name' => 'Sami'],
            ['name' => 'Finnish'],
            ['name' => 'Estonian'],
            ['name' => 'Livonian'],
            ['name' => 'Veps'],
            ['name' => 'Votic'],
            ['name' => 'Veps'],
            ['name' => 'Karelian'],
            ['name' => 'Sami'],
            ['name' => 'Inari Sami'],
            ['name' => 'Skolt Sami'],
            ['name' => 'Kildin Sami'],
            ['name' => 'Ter Sami'],
            ['name' => 'Ainu'],
            ['name' => 'Komi-Permyak'],
            ['name' => 'Komi-Zyrian'],
            ['name' => 'Moksha'],
            ['name' => 'Erzya'],
            ['name' => 'Ingush'],
            ['name' => 'Ossetian'],
            ['name' => 'Chechen'],
            ['name' => 'Avaric'],
            ['name' => 'Lezgian'],
            ['name' => 'Tabasaran'],
            ['name' => 'Dargwa'],
            ['name' => 'Lak'],
            ['name' => 'Bats'],
            ['name' => 'Udi'],
            ['name' => 'Khinalug'],
            ['name' => 'Khanty'],
            ['name' => 'Mansi'],
            ['name' => 'Koryak'],
            ['name' => 'Chukchi'],
            ['name' => 'Itelmen'],
            ['name' => 'Nivkh'],
            ['name' => 'Uralic'],
            ['name' => 'Nanai'],
            ['name' => 'Uralic'],
            ['name' => 'Koryak'],
            ['name' => 'Chukchi'],
            ['name' => 'Nivkh'],
            ['name' => 'Evenki'],
            ['name' => 'Mongolian'],
            ['name' => 'Buryat'],
            ['name' => 'Kalmyk'],
            ['name' => 'Tuvan'],
            ['name' => 'Karakalpak'],
            ['name' => 'Sakha'],
            ['name' => 'Moksha'],
            ['name' => 'Erzya'],
            ['name' => 'Mordvin'],
            ['name' => 'Mari'],
            ['name' => 'Komi'],
            ['name' => 'Khanty'],
            ['name' => 'Mansi'],
            ['name' => 'Selkup'],
            ['name' => 'Nganasan'],
            ['name' => 'Karelian'],
            ['name' => 'Veps'],
            ['name' => 'Votic'],
            ['name' => 'Selkup'],
            ['name' => 'Komi-Permyak'],
            ['name' => 'Komi-Zyrian'],
            ['name' => 'Moksha'],
            ['name' => 'Erzya'],
            ['name' => 'Nganasan'],
            ['name' => 'Selkup'],
            ['name' => 'Udmurt'],
            ['name' => 'Mari'],
            ['name' => 'Tatar'],
            ['name' => 'Chuvash'],
            ['name' => 'Kyrgyz'],
            ['name' => 'Uzbek'],
            ['name' => 'Tajik'],
            ['name' => 'Turkmen'],
            ['name' => 'Karakalpak'],
            ['name' => 'Ossetian'],
            ['name' => 'Chechen'],
            ['name' => 'Inari Sami'],
            ['name' => 'Skolt Sami'],
            ['name' => 'Kildin Sami'],
            ['name' => 'Ter Sami'],
            ['name' => 'Ainu'],
            ['name' => 'Kalmyk'],
            ['name' => 'Nivkh'],
            ['name' => 'Tuvan'],
            ['name' => 'Moksha'],
            ['name' => 'Erzya'],
            ['name' => 'Ingush'],
            ['name' => 'Buryat'],
            ['name' => 'Mongolian'],
            ['name' => 'Buryat'],
            ['name' => 'Kalmyk'],
            ['name' => 'Sakha'],
            ['name' => 'Nanai'],
            ['name' => 'Ulchi'],
            ['name' => 'Nanai'],
            ['name' => 'Uralic'],
            ['name' => 'Chukchi'],
            ['name' => 'Yakut'],
            ['name' => 'Votic'],
            ['name' => 'Veps'],
            ['name' => 'Livonian'],
            ['name' => 'Ewenki'],
            ['name' => 'Even'],
            ['name' => 'Nganasan'],
            ['name' => 'Selkup'],
            ['name' => 'Tuvan'],
            ['name' => 'Karelian'],
            ['name' => 'Veps'],
            ['name' => 'Votic'],
            ['name' => 'Selkup'],
            ['name' => 'Komi'],
            ['name' => 'Moksha'],
            ['name' => 'Erzya'],
            ['name' => 'Udmurt'],
            ['name' => 'Mari'],
            ['name' => 'Komi-Permyak'],
            ['name' => 'Mari'],
            ['name' => 'Komi-Zyrian'],
            ['name' => 'Udmurt'],
            ['name' => 'Tatars'],
            ['name' => 'Khanty'],
            ['name' => 'Mansi'],
            ['name' => 'Nganasan'],
            ['name' => 'Selkup'],
            ['name' => 'Evenki'],
            ['name' => 'Ewenki'],
            ['name' => 'Nanai'],
            ['name' => 'Uralic'],
            ['name' => 'Komi'],
            ['name' => 'Sami'],
            ['name' => 'Finnish'],
            ['name' => 'Estonian'],
            ['name' => 'Livonian'],
            ['name' => 'Veps'],
            ['name' => 'Votic'],
            ['name' => 'Veps'],
            ['name' => 'Karelian'],
            ['name' => 'Sami'],
            ['name' => 'Inari Sami'],
            ['name' => 'Skolt Sami'],
            ['name' => 'Kildin Sami'],
            ['name' => 'Ter Sami'],
            ['name' => 'Ainu'],
            ['name' => 'Komi-Permyak'],
            ['name' => 'Komi-Zyrian'],
            ['name' => 'Moksha'],
            ['name' => 'Erzya'],
            ['name' => 'Ingush'],
            ['name' => 'Ossetian'],
            ['name' => 'Chechen'],
            ['name' => 'Avaric'],
            ['name' => 'Lezgian'],
            ['name' => 'Tabasaran'],
            ['name' => 'Dargwa'],
            ['name' => 'Lak'],
            ['name' => 'Bats'],
            ['name' => 'Udi'],
            ['name' => 'Khinalug'],
            ['name' => 'Khanty'],
            ['name' => 'Mansi'],
            ['name' => 'Koryak'],
            ['name' => 'Chukchi'],
            ['name' => 'Itelmen'],
            ['name' => 'Nivkh'],
            ['name' => 'Uralic'],
            ['name' => 'Nanai'],
            ['name' => 'Uralic'],
            ['name' => 'Koryak'],
            ['name' => 'Chukchi'],
            ['name' => 'Nivkh'],
            ['name' => 'Evenki'],
            ['name' => 'Mongolian'],
            ['name' => 'Buryat'],
            ['name' => 'Kalmyk'],
            ['name' => 'Tuvan'],
            ['name' => 'Karakalpak'],
            ['name' => 'Sakha'],
            ['name' => 'Moksha'],
            ['name' => 'Erzya'],
            ['name' => 'Mordvin'],
            ['name' => 'Mari'],
            ['name' => 'Komi'],
            ['name' => 'Khanty'],
            ['name' => 'Mansi'],
            ['name' => 'Selkup'],
            ['name' => 'Nganasan'],
            ['name' => 'Karelian'],
            ['name' => 'Veps'],
            ['name' => 'Votic'],
            ['name' => 'Selkup'],
            ['name' => 'Komi-Permyak'],
            ['name' => 'Komi-Zyrian'],
            ['name' => 'Moksha'],
            ['name' => 'Erzya'],
            ['name' => 'Nganasan'],
            ['name' => 'Selkup'],
            ['name' => 'Udmurt'],
            ['name' => 'Mari'],
            ['name' => 'Tatar'],
            ['name' => 'Chuvash'],
            ['name' => 'Kyrgyz'],
            ['name' => 'Uzbek'],
            ['name' => 'Tajik'],
            ['name' => 'Turkmen'],
            ['name' => 'Karakalpak'],
            ['name' => 'Ossetian'],
            ['name' => 'Chechen'],
            ['name' => 'Inari Sami'],
            ['name' => 'Skolt Sami'],
            ['name' => 'Kildin Sami'],
            ['name' => 'Ter Sami'],
            ['name' => 'Ainu'],
            ['name' => 'Kalmyk'],
            ['name' => 'Nivkh'],
            ['name' => 'Tuvan'],
            ['name' => 'Moksha'],
            ['name' => 'Erzya'],
            ['name' => 'Ingush'],
            ['name' => 'Buryat'],
            ['name' => 'Mongolian'],
            ['name' => 'Buryat'],
            ['name' => 'Kalmyk'],
            ['name' => 'Sakha'],
            ['name' => 'Nanai'],
            ['name' => 'Ulchi'],
            ['name' => 'Nanai'],
            ['name' => 'Uralic'],
            ['name' => 'Chukchi'],
            ['name' => 'Yakut'],
            ['name' => 'Votic'],
            ['name' => 'Veps'],
            ['name' => 'Livonian'],
            ['name' => 'Ewenki'],
            ['name' => 'Even'],
            ['name' => 'Nganasan'],
            ['name' => 'Selkup'],
            ['name' => 'Tuvan'],
            ['name' => 'Karelian'],
            ['name' => 'Veps'],
            ['name' => 'Votic'],
            ['name' => 'Selkup'],
            ['name' => 'Komi'],
            ['name' => 'Moksha'],
            ['name' => 'Erzya'],
            ['name' => 'Udmurt'],
            ['name' => 'Mari'],
            ['name' => 'Komi-Permyak'],
            ['name' => 'Mari'],
            ['name' => 'Komi-Zyrian'],
            ['name' => 'Udmurt'],
            ['name' => 'Tatars'],
            ['name' => 'Khanty'],
            ['name' => 'Mansi'],
            ['name' => 'Nganasan'],
            ['name' => 'Selkup'],
            ['name' => 'Evenki'],
            ['name' => 'Ewenki'],
            ['name' => 'Nanai'],
            ['name' => 'Uralic'],
            ['name' => 'Komi'],
            ['name' => 'Sami'],
            ['name' => 'Finnish'],
            ['name' => 'Estonian'],
            ['name' => 'Livonian'],
            ['name' => 'Veps'],
            ['name' => 'Votic'],
            ['name' => 'Veps'],
            ['name' => 'Karelian'],
            ['name' => 'Sami'],
            ['name' => 'Inari Sami'],
            ['name' => 'Skolt Sami'],
            ['name' => 'Kildin Sami'],
            ['name' => 'Ter Sami'],
            ['name' => 'Ainu'],
            ['name' => 'Komi-Permyak'],
            ['name' => 'Komi-Zyrian'],
            ['name' => 'Moksha'],
            ['name' => 'Erzya'],
            ['name' => 'Ingush'],
            ['name' => 'Ossetian'],
            ['name' => 'Chechen'],
            ['name' => 'Avaric'],
            ['name' => 'Lezgian'],
            ['name' => 'Tabasaran'],
            ['name' => 'Dargwa'],
            ['name' => 'Lak'],
            ['name' => 'Bats'],
            ['name' => 'Udi'],
            ['name' => 'Khinalug'],
            ['name' => 'Khanty'],
            ['name' => 'Mansi'],
            ['name' => 'Koryak'],
            ['name' => 'Chukchi'],
            ['name' => 'Itelmen'],
            ['name' => 'Nivkh'],
            ['name' => 'Uralic'],
            ['name' => 'Nanai'],
            ['name' => 'Uralic'],
            ['name' => 'Koryak'],
            ['name' => 'Chukchi'],
            ['name' => 'Nivkh'],
            ['name' => 'Evenki'],
            ['name' => 'Mongolian'],
            ['name' => 'Buryat'],
            ['name' => 'Kalmyk'],
            ['name' => 'Tuvan'],
            ['name' => 'Karakalpak'],
            ['name' => 'Sakha'],
            ['name' => 'Moksha'],
            ['name' => 'Erzya'],
            ['name' => 'Mordvin'],
            ['name' => 'Mari'],
            ['name' => 'Komi'],
            ['name' => 'Khanty'],
            ['name' => 'Mansi'],
            ['name' => 'Selkup'],
            ['name' => 'Nganasan'],
            ['name' => 'Karelian'],
            ['name' => 'Veps'],
            ['name' => 'Votic'],
            ['name' => 'Selkup'],
            ['name' => 'Komi-Permyak'],
            ['name' => 'Komi-Zyrian'],
            ['name' => 'Moksha'],
            ['name' => 'Erzya'],
            ['name' => 'Nganasan'],
            ['name' => 'Selkup'],
            ['name' => 'Udmurt'],
            ['name' => 'Mari'],
            ['name' => 'Tatar'],
            ['name' => 'Chuvash'],
            ['name' => 'Kyrgyz'],
            ['name' => 'Uzbek'],
            ['name' => 'Tajik'],
            ['name' => 'Turkmen'],
            ['name' => 'Karakalpak'],
            ['name' => 'Ossetian'],
            ['name' => 'Chechen'],
            ['name' => 'Inari Sami'],
            ['name' => 'Skolt Sami'],
            ['name' => 'Kildin Sami'],
            ['name' => 'Ter Sami'],
            ['name' => 'Ainu'],
            ['name' => 'Kalmyk'],
            ['name' => 'Nivkh'],
            ['name' => 'Tuvan'],
            ['name' => 'Moksha'],
            ['name' => 'Erzya'],
            ['name' => 'Ingush'],
            ['name' => 'Buryat'],
            ['name' => 'Mongolian'],
            ['name' => 'Buryat'],
            ['name' => 'Kalmyk'],
            ['name' => 'Sakha'],
            ['name' => 'Nanai'],
            ['name' => 'Ulchi'],
            ['name' => 'Nanai'],
            ['name' => 'Uralic'],
            ['name' => 'Chukchi'],
            ['name' => 'Yakut'],
            ['name' => 'Votic'],
            ['name' => 'Veps'],
            ['name' => 'Livonian'],
            ['name' => 'Ewenki'],
            ['name' => 'Even'],
            ['name' => 'Nganasan'],
            ['name' => 'Selkup'],
            ['name' => 'Tuvan'],
            ['name' => 'Karelian'],
            ['name' => 'Veps'],
            ['name' => 'Votic'],
            ['name' => 'Selkup'],
            ['name' => 'Komi'],
            ['name' => 'Moksha'],
            ['name' => 'Erzya'],
            ['name' => 'Udmurt'],
            ['name' => 'Mari'],
            ['name' => 'Komi-Permyak'],
            ['name' => 'Mari'],
            ['name' => 'Komi-Zyrian'],
            ['name' => 'Udmurt'],
            ['name' => 'Tatars'],
            ['name' => 'Khanty'],
            ['name' => 'Mansi'],
            ['name' => 'Nganasan'],
            ['name' => 'Selkup'],
            ['name' => 'Evenki'],
            ['name' => 'Ewenki'],
            ['name' => 'Nanai'],
            ['name' => 'Uralic'],
            ['name' => 'Komi'],
            ['name' => 'Sami'],
            ['name' => 'Finnish'],
            ['name' => 'Estonian'],
            ['name' => 'Livonian'],
            ['name' => 'Veps'],
            ['name' => 'Votic'],
            ['name' => 'Veps'],
            ['name' => 'Karelian'],
            ['name' => 'Sami'],
            ['name' => 'Inari Sami'],
            ['name' => 'Skolt Sami'],
            ['name' => 'Kildin Sami'],
            ['name' => 'Ter Sami'],
            ['name' => 'Ainu'],
            ['name' => 'Komi-Permyak'],
            ['name' => 'Komi-Zyrian'],
            ['name' => 'Moksha'],
            ['name' => 'Erzya'],
            ['name' => 'Ingush'],
            ['name' => 'Ossetian'],
            ['name' => 'Chechen'],
            ['name' => 'Avaric'],
            ['name' => 'Lezgian'],
            ['name' => 'Tabasaran'],
            ['name' => 'Dargwa'],
            ['name' => 'Lak'],
            ['name' => 'Bats'],
            ['name' => 'Udi'],
            ['name' => 'Khinalug'],
            ['name' => 'Khanty'],
            ['name' => 'Mansi'],
            ['name' => 'Koryak'],
            ['name' => 'Chukchi'],
            ['name' => 'Itelmen'],
            ['name' => 'Nivkh'],
            ['name' => 'Uralic'],
            ['name' => 'Nanai'],
            ['name' => 'Uralic'],
            ['name' => 'Koryak'],
            ['name' => 'Chukchi'],
            ['name' => 'Nivkh'],
            ['name' => 'Evenki'],
            ['name' => 'Mongolian'],
            ['name' => 'Buryat'],
            ['name' => 'Kalmyk'],
            ['name' => 'Tuvan'],
            ['name' => 'Karakalpak'],
            ['name' => 'Sakha'],
            ['name' => 'Moksha'],
            ['name' => 'Erzya'],
            ['name' => 'Mordvin'],
            ['name' => 'Mari'],
            ['name' => 'Komi'],
            ['name' => 'Khanty'],
            ['name' => 'Mansi'],
            ['name' => 'Selkup'],
            ['name' => 'Nganasan'],
            ['name' => 'Karelian'],
            ['name' => 'Veps'],
            ['name' => 'Votic'],
            ['name' => 'Selkup'],
            ['name' => 'Komi-Permyak'],
            ['name' => 'Komi-Zyrian'],
            ['name' => 'Moksha'],
            ['name' => 'Erzya'],
            ['name' => 'Nganasan'],
            ['name' => 'Selkup'],
            ['name' => 'Udmurt'],
            ['name' => 'Mari'],
            ['name' => 'Tatar'],
            ['name' => 'Chuvash'],
            ['name' => 'Kyrgyz'],
            ['name' => 'Uzbek'],
            ['name' => 'Tajik'],
            ['name' => 'Turkmen'],
            ['name' => 'Karakalpak'],
            ['name' => 'Ossetian'],
            ['name' => 'Chechen'],
            ['name' => 'Inari Sami'],
            ['name' => 'Skolt Sami'],
            ['name' => 'Kildin Sami'],
            ['name' => 'Ter Sami'],
            ['name' => 'Ainu'],
            ['name' => 'Kalmyk'],
            ['name' => 'Nivkh'],
            ['name' => 'Tuvan'],
            ['name' => 'Moksha'],
            ['name' => 'Erzya'],
            ['name' => 'Ingush'],
            ['name' => 'Buryat'],
            ['name' => 'Mongolian'],
            ['name' => 'Buryat'],
            ['name' => 'Kalmyk'],
            ['name' => 'Sakha'],
            ['name' => 'Nanai'],
            ['name' => 'Ulchi'],
            ['name' => 'Nanai'],
            ['name' => 'Uralic'],
            ['name' => 'Chukchi'],
            ['name' => 'Yakut'],
            ['name' => 'Votic'],
            ['name' => 'Veps'],
            ['name' => 'Livonian'],
            ['name' => 'Ewenki'],
            ['name' => 'Even'],
            ['name' => 'Nganasan'],
            ['name' => 'Selkup'],
            ['name' => 'Tuvan'],
            ['name' => 'Karelian'],
            ['name' => 'Veps'],
            ['name' => 'Votic'],
            ['name' => 'Selkup'],
            ['name' => 'Komi'],
            ['name' => 'Moksha'],
            ['name' => 'Erzya'],
            ['name' => 'Udmurt'],
            ['name' => 'Mari'],
            ['name' => 'Komi-Permyak'],
            ['name' => 'Mari'],
            ['name' => 'Komi-Zyrian'],
            ['name' => 'Udmurt'],
            ['name' => 'Tatars'],
            ['name' => 'Khanty'],
            ['name' => 'Mansi'],
            ['name' => 'Nganasan'],
            ['name' => 'Selkup'],
            ['name' => 'Evenki'],
            ['name' => 'Ewenki'],
            ['name' => 'Nanai'],
            ['name' => 'Uralic'],
            ['name' => 'Komi'],
            ['name' => 'Sami'],
            ['name' => 'Finnish'],
            ['name' => 'Estonian'],
            ['name' => 'Livonian'],
            ['name' => 'Veps'],
            ['name' => 'Votic'],
            ['name' => 'Veps'],
            ['name' => 'Karelian'],
            ['name' => 'Sami'],
            ['name' => 'Inari Sami'],
            ['name' => 'Skolt Sami'],
            ['name' => 'Kildin Sami'],
            ['name' => 'Ter Sami'],
            ['name' => 'Ainu'],
            ['name' => 'Komi-Permyak'],
            ['name' => 'Komi-Zyrian'],
            ['name' => 'Moksha'],
            ['name' => 'Erzya'],
            ['name' => 'Ingush'],
            ['name' => 'Ossetian'],
            ['name' => 'Chechen'],
            ['name' => 'Avaric'],
            ['name' => 'Lezgian'],
            ['name' => 'Tabasaran'],
            ['name' => 'Dargwa'],
            ['name' => 'Lak'],
            ['name' => 'Bats'],
            ['name' => 'Udi'],
            ['name' => 'Khinalug'],
            ['name' => 'Khanty'],
            ['name' => 'Mansi'],
            ['name' => 'Koryak'],
            ['name' => 'Chukchi'],
            ['name' => 'Itelmen'],
            ['name' => 'Nivkh'],
            ['name' => 'Uralic'],
            ['name' => 'Nanai'],
            ['name' => 'Uralic'],
            ['name' => 'Koryak'],
            ['name' => 'Chukchi'],
            ['name' => 'Nivkh'],
            ['name' => 'Evenki']
        ];

        Language::insert($languages);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
