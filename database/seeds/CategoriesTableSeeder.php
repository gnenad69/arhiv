<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
          ['user_id' => '1',
          'name' => 'Nabavke',
          'slug' => 'nabavke',
          'is_published' => '1',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ],
        ['user_id' => '1',
        'name' => 'Arhiv',
        'slug' => 'arhiv',
        'is_published' => '1',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
      ],
      ['user_id' => '1',
      'name' => 'Istorija',
      'slug' => 'istorija',
      'is_published' => '1',
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now(),
    ],
    ['user_id' => '1',
    'name' => 'Zanimljivosti',
    'slug' => 'zanimljivosti',
    'is_published' => '1',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
  ],
  ['user_id' => '1',
  'name' => 'Najave',
  'slug' => 'najave',
  'is_published' => '1',
  'created_at' => Carbon::now(),
  'updated_at' => Carbon::now(),
]

        ]);
    }
}
