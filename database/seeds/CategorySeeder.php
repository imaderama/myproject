<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(array(
            array(
            'Name' => 'ANALGESIK NARKOTIK',
            'Description' => '-'
            ),
            array(
            'Name' => 'ANALGESIK NON NARKOTIK',
            'Description' => '-'
            ),
            array(
            'Name' => 'ANTIPIRAI',
            'Description' => '-'
            ),
            array(
            'Name' => 'NYERI NEUROPATIK',
            'Description' => '-'
            ),
            array(
            'Name' => 'ANESTETIK LOKAL',
            'Description' => '-'
            ),
            array(
            'Name' => 'ANESTETIK UMUM dan OKSIGEN',
            'Description' => '-'
            ),
            array(
            'Name' => 'OBAT untuk PROSEDUR PRE OPERATIF',
            'Description' => '-'
            ),
            array(
            'Name' => 'ANTIALERGI dan OBAT untuk ANAFILAKSIS',
            'Description' => '-'
            ),
            array(
            'Name' => 'ANTIEPILEPSI - ANTIKONVULSI',
            'Description' => '-'
            ),
            array(
            'Name' => 'ANTELMINTIK',
            'Description' => '-'
            )
    ));
    }
}
