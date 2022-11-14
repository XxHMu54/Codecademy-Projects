<?php
  function generateStory($singular_noun, $verb, $color, $distance_unit) {
      $story = "\nThe ${singular_noun}s are lovely, $color, and deep.\nBut I have promises to keep,\nAnd $distance_unit to go before I sleep,\nAnd $distance_unit to go before I $verb.";
  return $story;
  }

echo generateStory("Hamza", "run", "red", "meters");
echo generateStory("Batman", "walk", "blue", "centimeters");
echo generateStory("Mickey Mouse", "sit", "purple", "kilometers");

str_replace(generateStory$story, "Liverpool is the best and will always be");
 

  
