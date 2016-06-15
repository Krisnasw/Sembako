<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
        	'id' => '1',
            'name' => 'Administrator',
            'password' => Hash::make('admin'),
            'email' => 'outattacker@gmail.com',
            'admin' => '1',
            'aktif' => 'y'
        	]);

        DB::table('menu')->insert([
        	'id' => '1',
        	'name' => 'Sayur'
        	]);

        DB::table('menu')->insert([
        	'id' => '2',
        	'name' => 'Plastik'
        	]);

        DB::table('menu')->insert([
        	'id' => '3',
        	'name' => 'Buah'
        	]);

        DB::table('kategori')->insert([
        	'id' => '1',
        	'nama' => 'Kubis',
        	'satuan' => 'Kg',
        	'kat' => 'Sayur',
        	'qty' => '1',
        	'tipe_a' => '15.000',
            'tipe_b' => '16.000',
            'tipe_c' => '17.000'
        	]);
    }
}
