<?php

use App\WallEntry;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WallEntriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $entries = [
//         [
//           'comment' => "",
//           'countryName' => "Belgium",
//           'name' => "Pascale",
//         ],
//         [
//           'comment' => "",
//           'countryName' => "the US",
//           'name' => "James",
//         ],
//         [
//           'comment' => "",
//           'countryName' => "the UK",
//           'name' => "Louise",
//         ],
//         [
//           'comment' => "",
//           'countryName' => "Canada",
//           'name' => "Charlotte",
//         ],
//         [
//           'comment' => "",
//           'countryName' => "the US",
//           'name' => "Aamal",
//         ],
//         [
//           'comment' => "",
//           'countryName' => "the US",
//           'name' => "Tyrone",
//         ],
//         [
//           'comment' => "",
//           'countryName' => "the UK",
//           'name' => "Jude",
//         ],
        [
          'comment' => "I just think they need to take into consideration the effects on ordinary people",
          'countryName' => "the UK",
          'name' => "Sue",
        ],
        [
          'comment' => "Big corporations should have limited access to our data. I want to be able to choose what they can see about me",
          'countryName' => "the US",
          'name' => "Dana",
        ],
        [
          'comment' => "Too much power in the hands of a few! Why are all these American companies trying to take over our lives? Why isn't the EU doing more?",
          'countryName' => "Germany",
          'name' => "Stefan",
        ],
        [
          'comment' => "Surveillance is my number 1 concern. AI can do a lot of good - but in the wrong hands or with the wrong intentions, it can be used to racially profile or discriminate against women etc.",
          'countryName' => "the UK",
          'name' => "Mohamed",
        ],
        [
          'comment' => "I honestly don't see the big deal...... it's all fine! stop worrying!",
          'countryName' => "Australia",
          'name' => "Will",
        ],
        [
          'comment' => "Thought-provoking experience. I thought most about the conflict between making money and doing right by people. Wish there were clearer ethics for those working in tech",
          'countryName' => "the US",
          'name' => "Mary-Anne",
        ],
        [
          'comment' => "Don't take over my life Wanda! or Siri!",
          'countryName' => "the US",
          'name' => "Juan",
        ],
        [
          'comment' => "So many positive things are coming from AI like in health and services let's not forget that. But need to be aware of the risks",
          'countryName' => "India",
          'name' => "Savio",
        ],
        [
          'comment' => "I want an audit of every technologie company to see what they are really making",
          'countryName' => "France",
          'name' => "Marie",
        ],
        [
          'comment' => "I don't want too much power in the hands of a few companies",
          'countryName' => "the UK",
          'name' => "Steve",
        ],
        [
          'comment' => "We need a sensible approach to these things, but we do need to sort it out. Not sure what kind of world my kids will grow up in",
          'countryName' => "the UK",
          'name' => "Becky",
        ],
        [
          'comment' => "More openness about how artificial intelligence is being used",
          'countryName' => "Italy",
          'name' => "Giancarla",
        ],
        [
          'comment' => "Do we need a bill of rights for citizens to define our relationship with technology?",
          'countryName' => "the US",
          'name' => "Rob",
        ],
      ];
      
      foreach($entries as $entry) {
        
        WallEntry::create([
          'comment' => $entry['comment'],
          'country_name' => $entry['countryName'],
          'name' => $entry['name'],
        ]);
      }
    }
}
