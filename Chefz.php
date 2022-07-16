<?php

class Chefz
{

    public function hamming_dis($a, $b)
    {
        $counter = 0;
        if (strlen($a) !== strlen($b)) {
            return -1;
        }
        for ($i = 0; $i < strlen($a); $i++) {

            if ($a[$i] !== $b[$i]) {
                $counter++;
            }

        }
        return $counter;
    }

    public function levenshtein_dis($a, $b)
    {
        $grid = [];
        //first we make a function to make a grid (matrix columns and rows) of the length of the two strings
        for ($i = 0; $i < strlen($a) + 1; $i++) {
            $row = [];
            for ($j = 0; $j < strlen($b) + 1; $j++) {
                array_push($row, $j);
            }
            $row[0] = $i;
            array_push($grid, $row);
        }


        //here we compare the grid as the example below
        for ($i = 1; $i < strlen($a) + 1; $i++) {
            for ($j = 1; $j < strlen($b) + 1; $j++) {
                if ($a[$i - 1] === $b[$j - 1]) {
                    $grid[$i][$j] = $grid[$i - 1][$j - 1];
                } else {
                    $grid[$i][$j] = 1 + min($grid[$i - 1][$j - 1], $grid[$i][$j - 1], $grid[$i - 1][$j]);
                }
            }
        }
        return $grid[strlen($a)][strlen($b)];
    }
    
}


/*
transform omar to roma:

            "" o m a r
          "" 0 1 2 3 4
          r  1 1 2 3 3 
          o  2 1 2 3 4
          m  3 2 1 2 3
          a  4 3 2 1 2 --> 2 is our target

*/

$result = new Chefz();
$hamming = $result->hamming_dis($_POST['ham_1'], $_POST['ham_2']);
$levenshtien = $result->levenshtein_dis($_POST['lev_1'], $_POST["lev_2"]);

echo "<h1>hamming:</h1>" . $hamming;
echo "<br>";
echo "<h1>levenshtein:</h1>" . $levenshtien;
