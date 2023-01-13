<?php

namespace Database\Seeders;
//
use App\Models\Faq;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $faq0 = new Faq();
        $faq0->title= "Pregunta N0";
        $faq0->contents="Ya son muchas preguntas n0";
        $faq0->faq_type="cobertura";
        $faq0->save();

        $faq1 = new Faq();
        $faq1->title= "Pregunta N1";
        $faq1->contents="Ya son muchas preguntas n1";
        $faq1->faq_type="cobertura";
        $faq1->save();

    }
}
