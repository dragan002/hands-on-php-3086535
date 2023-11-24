<?php
// Use the Console / Terminal for this exercise! 
// $number = rand(1, 5);
// $guess = null;
// echo $number . "\n\n";

// while($guess != $number) {
//   $guess = readline('Guess between 1 and 5: ');
//   if ( $number == $guess ) {
//     echo "Yes! You guessed correctly. \n\n";
//   } else {
//     echo "Alas. Your guess is incorrect. \n\n" . $guess;
//   }
// }


$number = rand(1,5);
$guess = null;
echo $number . "\n\n";

while($guess != $number) {
  $guess = readline("Guess number from 1 to 5");
  if($guess == $number) {
    echo "You guessed number";
  } else {
    echo "try again";
  }
}

