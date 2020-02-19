<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // DB::statement('SET FOREIGN_KEY_CHECKS=0');

        
        // DB::table('users')->truncate();
        // DB::table('provinsi')->truncate();
        // DB::table('kabupaten')->truncate();
        // DB::table('kecamatan')->truncate();
        // DB::table('desa')->truncate();


        $this->call([WilayahTableSeeder::class, BalaiTableSeeder::class, SatkerTableSeeder::class]);
        //$this->call(BalaiTableSeeder::class);
        //$this->call(SatkerTableSeeder::class);
       // $this->call([RolesTableSeeder::class, UsersTableSeeder::class]);
       $this->call(UsersTableSeeder::class);
        $this->call(KodeoutputTableSeeder::class);
        $this->call(SatoutputTableSeeder::class);
        $this->call(SatoutcomeTableSeeder::class);
        $this->call(FnfTableSeeder::class);
        $this->call(KsTableSeeder::class);
        $this->call(ApbnsbsnTableSeeder::class);
        $this->call(SycmycTableSeeder::class);
        $this->call(PaketTableSeeder::class);
        $this->call([ProvinsiTableSeeder::class, KabupatenTableSeeder::class, KecamatanTableSeeder::class, DesaTableSeeder::class]);
        //$this->call(KabupatenTableSeeder::class);
        //$this->call(KecamatanTableSeeder::class);
        //$this->call(DesaTableSeeder::class);
        //DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
