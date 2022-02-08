<?php
function fooBar($par)
{
    for ($i=1; $i<=$par; $i=$i+1){
        if ($i % 3==0 && $i % 5!=0 ){
            echo "<br>";
            echo "$i Fizz";
        }
        elseif ($i % 5==0 && $i % 3!=0){
            echo "<br>";
            echo "$i Buzz";
        }
        elseif ($i % 3==0 && $i % 5==0){
            echo "<br>";
            echo "$i FizzBuzz";
        }
        else {
          echo "<br>";
          echo $i;
        }
    }
}

echo fooBar(100);
?>