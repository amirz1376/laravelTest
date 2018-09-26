<?php

use Illuminate\Database\Seeder;

class GroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table("groups")->truncate();

        $groups = [
          ['id' => 1, 'name' => 'family', 'created_at' => new DateTime, 'updated_at' => new Datetime],
          ['id' => 2, 'name' => 'friends', 'created_at' => new DateTime, 'updated_at' => new Datetime],
          ['id' => 3, 'name' => 'office', 'created_at' => new DateTime, 'updated_at' => new Datetime]
        ];
        DB::table('groups')->insert($groups);

    }
}
