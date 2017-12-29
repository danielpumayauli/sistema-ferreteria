<?php

use Illuminate\Database\Seeder;

use App\Provider;

class ProvidersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $providers = factory(Provider::class, 5)->create();
    }
}
