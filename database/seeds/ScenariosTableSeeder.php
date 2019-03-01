<?php

use App\Scenario;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ScenariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      foreach(config('scenarios') as $scenarioId => $scenario) {
        if (!Scenario::find($scenarioId)) {
          DB::table('scenarios')->insert([
            'id' => $scenarioId,
          ]);
        }
      }
    }
}
