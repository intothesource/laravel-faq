<?php

use Illuminate\Database\Seeder;

use App\User;

class MainFaqSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //FAQs
        DB::table('faq')->insert([
            'order' => '1',
        ]);
        DB::table('faq')->insert([
            'order' => '2',
        ]);
        DB::table('faq')->insert([
            'order' => '3',
        ]);

        //FAQ categories
        DB::table('faq_categories')->insert([
            'name' => 'Category 1',
            'order' => '1',
        ]);
        DB::table('faq_categories')->insert([
            'name' => 'Category 2',
            'order' => '2',
        ]);

        //Link FAQ to categories
        DB::table('faq_faq_categories')->insert([
            'faq_id' => '1',
            'faq_category_id' => '1',
        ]);
        DB::table('faq_faq_categories')->insert([
            'faq_id' => '2',
            'faq_category_id' => '2',
        ]);
        DB::table('faq_faq_categories')->insert([
            'faq_id' => '3',
            'faq_category_id' => '2',
        ]);

        //FAQ Translations
        DB::table('faq_i18ns')->insert([
            'faq_id'    => '1',
            'locale'    => 'nl',
            'question'  => 'Question-nl-1',
            'answer'    => 'Answer-nl-1',
        ]);
        DB::table('faq_i18ns')->insert([
            'faq_id'    => '1',
            'locale'    => 'en',
            'question'  => 'Question-en-1',
            'answer'    => 'Answer-en-1',
        ]);
        DB::table('faq_i18ns')->insert([
            'faq_id'    => '1',
            'locale'    => 'fr',
            'question'  => 'Question-fr-1',
            'answer'    => 'Answer-fr-1',
        ]);

        DB::table('faq_i18ns')->insert([
            'faq_id'    => '2',
            'locale'    => 'nl',
            'question'  => 'Question-nl-2',
            'answer'    => 'Answer-nl-2',
        ]);
        DB::table('faq_i18ns')->insert([
            'faq_id'    => '2',
            'locale'    => 'en',
            'question'  => 'Question-en-2',
            'answer'    => 'Answer-en-2',
        ]);
        DB::table('faq_i18ns')->insert([
            'faq_id'    => '2',
            'locale'    => 'fr',
            'question'  => 'Question-fr-2',
            'answer'    => 'Answer-fr-2',
        ]);

        DB::table('faq_i18ns')->insert([
            'faq_id'    => '3',
            'locale'    => 'nl',
            'question'  => 'Question-nl-3',
            'answer'    => 'Answer-nl-3',
        ]);
        DB::table('faq_i18ns')->insert([
            'faq_id'    => '3',
            'locale'    => 'en',
            'question'  => 'Question-en-3',
            'answer'    => 'Answer-en-3',
        ]);
        DB::table('faq_i18ns')->insert([
            'faq_id'    => '3',
            'locale'    => 'fr',
            'question'  => 'Question-fr-3',
            'answer'    => 'Answer-fr-3',
        ]);



        



    }
}
