<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert(array(
            array(
                'generic_name' => 'fentanil',
                'form' => 'inj 0,05 mg/ML (i.m./i.v.)',
                'restriction_formula' => '5 amp/kasus',
                'description' => 'Hanya untuk nyeri berat dan harus diberikan oleh tim medis yang dapat melakukan resusitasi',
                'category' => 1,
                'faskes_tk1' => 0,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1
            ),
            array(
                'generic_name' => 'fentanil',
                'form' => 'patch 12,5 meg/jam',
                'restriction_formula' => '5 amp/kasus',
                'description' => 'Untuk nyeri kronik pada pasien kanker yang tidak terkendali',
                'category' => 1,
                'faskes_tk1' => 0,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1
            ),
            array(
                'generic_name' => 'hidromorfon',
                'form' => 'tab lepas lambat 8 mg',
                'restriction_formula' => '30 tab/bulan',
                'description' => '-',
                'category' => 1,
                'faskes_tk1' => 0,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1
            ),array(
                'generic_name' => 'asam mefenamat',
                'form' => 'kaps 250 mg',
                'restriction_formula' => '30 kaps/bulan',
                'description' => '-',
                'category' => 2,
                'faskes_tk1' => 1,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1
            ),
            array(
                'generic_name' => 'asam mefenamat',
                'form' => 'tab 500 mg',
                'restriction_formula' => '30 tab/bulan',
                'description' => '-',
                'category' => 2,
                'faskes_tk1' => 1,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1
            ),
            array(
                'generic_name' => 'ibuprofen',
                'form' => 'tab 200 mg',
                'restriction_formula' => '30 tab/bulan',
                'description' => '-',
                'category' => 2,
                'faskes_tk1' => 1,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1
            ),
            array(
                'generic_name' => 'alopurinol',
                'form' => 'tab 100 mg',
                'restriction_formula' => '30 tab/bulan',
                'description' => 'Tidak diberikan pada saat nyeri akut',
                'category' => 3,
                'faskes_tk1' => 1,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1
            ),
            array(
                'generic_name' => 'alopurinol',
                'form' => 'tab 300 mg',
                'restriction_formula' => '30 tab/bulan',
                'description' => 'Tidak diberikan pada saat nyeri akut',
                'category' => 3,
                'faskes_tk1' => 1,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1
            ),
            array(
                'generic_name' => 'kolkisin',
                'form' => 'tab 500 mcg',
                'restriction_formula' => '30 tab/bulan',
                'description' => '-',
                'category' => 3,
                'faskes_tk1' => 1,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1
            ),
            array(
                'generic_name' => 'amitriptilin',
                'form' => 'tab 25 mg',
                'restriction_formula' => '30 tab/bulan',
                'description' => '-',
                'category' => 4,
                'faskes_tk1' => 1,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1
            ),
            array(
                'generic_name' => 'gabapentin',
                'form' => 'kaps 100 mg',
                'restriction_formula' => '60 kaps/bulan',
                'description' => '-',
                'category' => 4,
                'faskes_tk1' => 0,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1
            ),
            array(
                'generic_name' => 'gabapentin',
                'form' => 'kaps 300 mg',
                'restriction_formula' => '30 kaps/bulan',
                'description' => '-',
                'category' => 4,
                'faskes_tk1' => 0,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1
            )
            ,
            array(
                'generic_name' => 'bupivaksin',
                'form' => 'inj 0,5%',
                'restriction_formula' => '-',
                'description' => '-',
                'category' => 5,
                'faskes_tk1' => 0,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1
            ),
            array(
                'generic_name' => 'bupivaksin heavy',
                'form' => 'inj 0,5% + glukosa 8%',
                'restriction_formula' => '60 kaps/bulan',
                'description' => '-',
                'category' => 5,
                'faskes_tk1' => 0,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1
            ),
            array(
                'generic_name' => 'etil klorida',
                'form' => 'spray 100 mL',
                'restriction_formula' => '-',
                'description' => '-',
                'category' => 5,
                'faskes_tk1' => 1,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1
            )
            ,
            array(
                'generic_name' => 'deksmedetomidin',
                'form' => 'inj 100 mcg/mL',
                'restriction_formula' => '-',
                'description' => 'Untuk sedasi pada pasien di ICU, kraniotomi, bedah jantung dan operasi yang memerlukan waktu pembedahan yang lama',
                'category' => 6,
                'faskes_tk1' => 0,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1
            ),
            array(
                'generic_name' => 'desfluran',
                'form' => 'ih',
                'restriction_formula' => '-',
                'description' => '-',
                'category' => 6,
                'faskes_tk1' => 0,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1
            ),
            array(
                'generic_name' => 'isofluran',
                'form' => 'ih',
                'restriction_formula' => '-',
                'description' => '-',
                'category' => 6,
                'faskes_tk1' => 0,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1
            )
            ,
            array(
                'generic_name' => 'atropin',
                'form' => 'inj 0,25 mg/mL (i.v./s.k.)',
                'restriction_formula' => '-',
                'description' => '-',
                'category' => 7,
                'faskes_tk1' => 1,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1
            ),
            array(
                'generic_name' => 'diazepam',
                'form' => 'inj 5 mg/mL',
                'restriction_formula' => '-',
                'description' => '-',
                'category' => 7,
                'faskes_tk1' => 1,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1
            ),
            array(
                'generic_name' => 'midazolam',
                'form' => 'inj 1 mg/mL (i.v.)',
                'restriction_formula' => '-Dosis rumatan: 1 mg/jam (24 mg/hari) -Dosis premedikasi: 8 vial/kasus',
                'description' => 'Dapat digunakan untuk premedikasi sebelum indusi anestesi dan rumatan selama anestesi umum',
                'category' => 7,
                'faskes_tk1' => 0,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1
            ),
            array(
                'generic_name' => 'deksametason',
                'form' => 'inj 5 mg/mL',
                'restriction_formula' => '20 mg/hari',
                'description' => '-',
                'category' => 8,
                'faskes_tk1' => 1,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1
            ),
            array(
                'generic_name' => 'difenhidramin',
                'form' => 'inj 10 mg/mL (i.v./i.m.)',
                'restriction_formula' => '30 mg/hari',
                'description' => '-',
                'category' => 8,
                'faskes_tk1' => 1,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1
            ),
            array(
                'generic_name' => 'epinefrin (adrenalin)',
                'form' => 'inj 1 mg/mL',
                'restriction_formula' => '-',
                'description' => '-',
                'category' => 8,
                'faskes_tk1' => 1,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1
            ),
            array(
                'generic_name' => 'diazepam',
                'form' => 'inj 5 mg/mL',
                'restriction_formula' => '10 amp/kasus, kecuali untuk kasus di ICU',
                'description' => 'Tidak untuk i.m.',
                'category' => 9,
                'faskes_tk1' => 1,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1
            ),
            array(
                'generic_name' => 'diazepam',
                'form' => 'enema 5 mg/2,5 mL',
                'restriction_formula' => '2 tube/hari, bila kejang',
                'description' => '-',
                'category' => 9,
                'faskes_tk1' => 1,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1
            ),
            array(
                'generic_name' => 'diazepam',
                'form' => 'enema 10 mg/2,5 mL',
                'restriction_formula' => '2 tube/hari, bila kejang',
                'description' => '-',
                'category' => 9,
                'faskes_tk1' => 1,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1
            ),
            array(
                'generic_name' => 'albendazol',
                'form' => 'tab 400 mg',
                'restriction_formula' => '-',
                'description' => '-',
                'category' => 10,
                'faskes_tk1' => 1,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1
            ),
            array(
                'generic_name' => 'albendazol',
                'form' => 'susp 200 mg/5 mL',
                'restriction_formula' => '-',
                'description' => '-',
                'category' => 10,
                'faskes_tk1' => 1,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1
            ),
            array(
                'generic_name' => 'mebendazol',
                'form' => 'tab 100 mg',
                'restriction_formula' => '-',
                'description' => '-',
                'category' => 10,
                'faskes_tk1' => 1,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1
            )
        ));
    }
}
