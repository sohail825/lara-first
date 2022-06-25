<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class userslistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('userslists')->insert([
            
            [  
                'name'=>'khan',
                'email'=>'khan@gmail.com',
                'password'=>HASh::make('khan123'),
                'ref_id'=>'2'
            ],
            [  
                'name'=>'ahmad',
                'email'=>'ahmad@gmail.com',
                'password'=>HASh::make('ahmad123'),
                'ref_id'=>'5'
            ],
            [  
                'name'=>'awais',
                'email'=>'awais@gmail.com',
                'password'=>HASh::make('awais123'),
                'ref_id'=>'8'
            ]
          
        ]
            );
    }
}