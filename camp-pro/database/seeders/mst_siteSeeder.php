<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\mst_site;

class mst_siteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        mst_site::create([
            'name'=>'サイト１',
            'people_num_max'=>10,
            'created_by'=>1,
            'created_at'=> time(),
            'updated_at'=> time(),
            'updated_by'=>NULL,
            'deleted_by'=>NULL,
            'deleted_at'=>NULL
        ]);

        mst_site::create([
            'name'=>'サイト２',
            'people_num_max'=>10,
            'created_by'=>1,
            'created_at'=> time(),
            'updated_at'=> time(),
            'updated_by'=>NULL,
            'deleted_by'=>NULL,
            'deleted_at'=>NULL
        ]);

        mst_site::create([
            'name'=>'サイト３',
            'people_num_max'=>10,
            'created_by'=>1,
            'created_at'=> time(),
            'updated_at'=> time(),
            'updated_by'=>NULL,
            'deleted_by'=>NULL,
            'deleted_at'=>NULL
        ]);
    }
}
