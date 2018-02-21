<?php

use Illuminate\Database\Seeder;

class KelasSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kelas')->insert([
            'nama_kelas' => 'Web Programming',
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);
        DB::table('kelas')->insert([
            'nama_kelas' => 'Mobile Programming',
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);
        DB::table('kelas')->insert([
            'nama_kelas' => 'Jaringan',
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);
        DB::table('kelas')->insert([
            'nama_kelas' => 'Multimedia',
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);
        DB::table('kelas')->insert([
            'nama_kelas' => 'Linux Fundamental',
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);
    }
}
