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
        $counter = 0;

        $len = strlen($a) + abs(strlen($a) - strlen($b));
        for ($i = 0; $i < $len; $i++) {
            if ($a[$i] !== $b[$i]) {
                //we should remove the character 
                $a = substr_replace($a, $b[$i], $i, 1);
                // we should stop b index increment
                $counter++;
            }
        }
        return $a;
    }
}

$r = new Chefz();
$hamming = $r->hamming_dis("dogandcat" , "catanddog");
$levenshtien = $r->levenshtein_dis("this is a test" , "this is test");
// echo $result;
echo $levenshtien;
