<?php

namespace Database\Seeders;

use App\Models\Template;
use Illuminate\Database\Seeder;

class TemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Template::create([
            'case' => 'pada hari [hari] ku turut ayah ke [tempat]',
            'summary' => 'senang sekali [kegiatan] di [tempat]'
        ]);
    }
}
