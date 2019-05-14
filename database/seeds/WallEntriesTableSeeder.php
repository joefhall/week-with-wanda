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
        [
          'comment' => "I am sensitive about sharing my health and private data. I would like it to be clear when apps use this (and what they know)",
          'countryName' => "Belgium",
          'name' => "Pascale",
        ],
        [
          'comment' => "This is making me look again at the apps I use!! Funny..... but somewhat scary!!!",
          'countryName' => "the US",
          'name' => "James",
        ],
        [
          'comment' => "I hadn't really thought about how central all this stuff is becoming to our lives - even things like criminal sentencing. Needs a lot more debate I'd say",
          'countryName' => "the UK",
          'name' => "Louise",
        ],
        [
          'comment' => "Stop taking over my life! I dont want you to do all these things Wanda!",
          'countryName' => "Canada",
          'name' => "Charlotte",
        ],
        [
          'comment' => "Thought provoking but let's be honest there are benefits as well as risks how can we make sure technology is done the right way without holding back business innovation and new developments that will genuinely improve our lives",
          'countryName' => "the US",
          'name' => "Aamal",
        ],
        [
          'comment' => "What! How do apps know so much about me? Maybe time to do more than #deletefacebook!",
          'countryName' => "the US",
          'name' => "Tyrone",
        ],
        [
          'comment' => "Thanks for raising awareness of these issues, I definitely got creeped out by Wanda! I will look twice when I consider signing up for a service now, I wish there was a clearer way to know how my information is being used (and whether it's being done fairly - not sexist, racist, etc)",
          'countryName' => "the UK",
          'name' => "Jude",
        ],
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
