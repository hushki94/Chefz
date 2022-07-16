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
        $lowA = 0;
        $highA = strlen($a) - 1 ;
        $lowB = 0;
        $highB = strlen($b) - 1;

        $counter = 0;

        while($lowA <= $highA || $lowB <= $highB){
            if($a[$lowA] !== $b[$lowB]){
                if($b[$lowB] === " "){
                    $a = substr_replace($a, "", $lowA, 1);
                    $highA--;
                    $counter++;
                }else{
                    $a = substr_replace($a, $b[$lowB], $lowA, 1);
                    $counter++;
                }
                
            }
            if($a[$highA] !== $b[$highB]){
                if($b[$highB] === " "){
                    $a = substr_replace($a, "", $highA, 1);
                    $highA--;
                    $counter++;
                }else{
                    $a = substr_replace($a, $b[$highB], $lowA, 1);
                    $counter++;
                }
                
            }
            $lowA++;
            $lowB++;
            $highB--;
            $highA--;
        }
        return $a;
    }
}

$r = new Chefz();
$hamming = $r->hamming_dis("dogandcat", "catanddog");
$levenshtien = $r->levenshtein_dis("this is a test", "the is te;st");
// echo $result;
echo $levenshtien;
