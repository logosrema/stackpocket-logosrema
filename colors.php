// $red   = [1, 2, 7, 8, 12, 13, 18, 19, 23, 24, 29, 30, 34, 35, 40, 45, 46];
// $blue  = [3, 4, 9, 10, 14, 15, 20, 25, 26, 31, 36, 37, 41, 42, 47, 48];
// $green = [5, 6, 11, 16, 17, 21, 22, 27, 28, 32, 33, 38, 39, 43, 44, 49];

// $drawnumber = range(1, 49);
// shuffle($drawnumber);
// $drawnumber = array_slice($drawnumber, 0, 7);

// echo "Draw numbers: ";
// $drawnColors = [];
// $lastColor = '';
// foreach ($drawnumber as $number) {
//     if (in_array($number, $red)) {
//         echo "<span style='color: red;'>$number</span> ";
//         $drawnColors[] = 'red';
//         $lastColor = 'red';
//     } elseif (in_array($number, $blue)) {
//         echo "<span style='color: blue;'>$number</span> ";
//         $drawnColors[] = 'blue';
//         $lastColor = 'blue';
//     } elseif (in_array($number, $green)) {
//         echo "<span style='color: green;'>$number</span> ";
//         $drawnColors[] = 'green';
//         $lastColor = 'green';
//     }
// }
// echo "<br><br>";
// // echo   $lastColor;
// $colorCount = array(
//     'red' => 0,
//     'blue' => 0,
//     'green' => 0
// );


// $colorCount = array_count_values($drawnColors);
//  //print_r($colorCount );

// $userSelection = "red";
// $maxCount = max($colorCount);
// //echo $maxCount;

// $winningColors = array_keys($colorCount, $maxCount);
// // print_r($winningColors);
// // exit;

// if (count($winningColors) === 1 && $winningColors[0] === $userSelection) {
//     echo "Congratulations! You won with the color '$userSelection' (Count: $maxCount)!";
// } elseif ($maxCount === 3 && count($winningColors) === 2 && $colorCount['red'] === $colorCount['blue'] && $lastColor === 'red') {
//     echo "Congratulations! Red wins with the count of $maxCount!";
// } elseif ($maxCount === 3 && count($winningColors) === 2 && $colorCount['red'] === $colorCount['green'] && $lastColor === 'red') {
//     echo "Congratulations! Red wins with the count of $maxCount!";
// } elseif ($maxCount === 3 && count($winningColors) === 2 && $colorCount['red'] === $colorCount['blue'] && $lastColor === 'blue') {
//     echo "Congratulations! Blue wins with the count of $maxCount!";
// } elseif ($maxCount === 3 && count($winningColors) === 2 && $colorCount['green'] === $colorCount['blue'] && $lastColor === 'blue') {
//     echo "Congratulations! Blue wins with the count of $maxCount!";
// } elseif ($maxCount === 3 && count($winningColors) === 2 && $colorCount['red'] === $colorCount['green'] && $lastColor === 'green') {
//     echo "Congratulations! Green wins with the count of $maxCount!";
// } elseif ($maxCount === 3 && count($winningColors) === 2 && $colorCount['blue'] === $colorCount['green'] && $lastColor === 'green') {
//     echo "Congratulations! Green wins with the count of $maxCount!";
// } elseif ($maxCount === 3 && count($winningColors) === 2 && $lastColor !== $winningColors[0] && $lastColor !== $winningColors[1]) {
//     echo "It's a tie!";
// } else {
//     echo "Sorry, you lost. The winning color(s) (Count: $maxCount): " . implode(", ", $winningColors);
// }
