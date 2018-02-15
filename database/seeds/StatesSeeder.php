<?php

use App\State;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //DB::table('states')->truncate();

     State::create(['state_name' => 'Alaska', 'state_abbreviation' => 'AK']);
     State::create(['state_name' => 'Alabama', 'state_abbreviation' => 'AL']);
     State::create(['state_name' => 'Arizona', 'state_abbreviation' => 'AZ']);
     State::create(['state_name' => 'Arkansas', 'state_abbreviation' => 'AR']);
     State::create(['state_name' => 'California', 'state_abbreviation' => 'CA']);
     State::create(['state_name' => 'Colorado', 'state_abbreviation' => 'CO']);
     State::create(['state_name' => 'Connecticut', 'state_abbreviation' => 'CT']);
     State::create(['state_name' => 'Delaware', 'state_abbreviation' => 'DE']);
     State::create(['state_name' => 'District of Columbia', 'state_abbreviation' => 'DC']);
     State::create(['state_name' => 'Florida', 'state_abbreviation' => 'FL']);
     State::create(['state_name' => 'Georgia', 'state_abbreviation' => 'GA']);
     State::create(['state_name' => 'Hawaii', 'state_abbreviation' => 'HI']);
     State::create(['state_name' => 'Idaho', 'state_abbreviation' => 'ID']);
     State::create(['state_name' => 'Illinois', 'state_abbreviation' => 'IL']);
     State::create(['state_name' => 'Indiana', 'state_abbreviation' => 'IN']);
     State::create(['state_name' => 'Iowa', 'state_abbreviation' => 'IA']);
     State::create(['state_name' => 'Kansas', 'state_abbreviation' => 'KS']);
     State::create(['state_name' => 'Kentucky', 'state_abbreviation' => 'KY']);
     State::create(['state_name' => 'Louisiana', 'state_abbreviation' => 'LA']);
     State::create(['state_name' => 'Maine', 'state_abbreviation' => 'ME']);
     State::create(['state_name' => 'Maryland', 'state_abbreviation' => 'MD']);
     State::create(['state_name' => 'Massachusetts', 'state_abbreviation' => 'MA']);
     State::create(['state_name' => 'Michigan', 'state_abbreviation' => 'MI']);
     State::create(['state_name' => 'Minnesota', 'state_abbreviation' => 'MN']);
     State::create(['state_name' => 'Mississippi', 'state_abbreviation' => 'MS']);
     State::create(['state_name' => 'Missouri', 'state_abbreviation' => 'MO']);
     State::create(['state_name' => 'Montana', 'state_abbreviation' => 'MT']);
     State::create(['state_name' => 'Nebraska', 'state_abbreviation' => 'NE']);
     State::create(['state_name' => 'Nevada', 'state_abbreviation' => 'NV']);
     State::create(['state_name' => 'New Hampshire', 'state_abbreviation' => 'NH']);
     State::create(['state_name' => 'New Jersey', 'state_abbreviation' => 'NJ']);
     State::create(['state_name' => 'New Mexico', 'state_abbreviation' => 'NM']);
     State::create(['state_name' => 'New York', 'state_abbreviation' => 'NY']);
     State::create(['state_name' => 'North Carolina', 'state_abbreviation' => 'NC']);
     State::create(['state_name' => 'North Dakota', 'state_abbreviation' => 'ND']);
     State::create(['state_name' => 'Ohio', 'state_abbreviation' => 'OH']);
     State::create(['state_name' => 'Oklahoma', 'state_abbreviation' => 'OK']);
     State::create(['state_name' => 'Oregon', 'state_abbreviation' => 'OR']);
     State::create(['state_name' => 'Pennsylvania', 'state_abbreviation' => 'PA']);
     State::create(['state_name' => 'Rhode Island', 'state_abbreviation' => 'RI']);
     State::create(['state_name' => 'South Carolina', 'state_abbreviation' => 'SC']);
     State::create(['state_name' => 'South Dakota', 'state_abbreviation' => 'SD']);
     State::create(['state_name' => 'Tennessee', 'state_abbreviation' => 'TN']);
     State::create(['state_name' => 'Texas', 'state_abbreviation' => 'TX']);
     State::create(['state_name' => 'Utah', 'state_abbreviation' => 'UT']);
     State::create(['state_name' => 'Vermont', 'state_abbreviation' => 'VT']);
     State::create(['state_name' => 'Virginia', 'state_abbreviation' => 'VA']);
     State::create(['state_name' => 'Washington', 'state_abbreviation' => 'WA']);
     State::create(['state_name' => 'West Virginia', 'state_abbreviation' => 'WV']);
     State::create(['state_name' => 'Wisconsin', 'state_abbreviation' => 'WI']);
     State::create(['state_name' => 'Wyoming', 'state_abbreviation' => 'WY']);
    }
}
