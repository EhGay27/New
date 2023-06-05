<?php
//Calculating BMI
$myWeight = 150;
$myHeight = 90;
$BMI = 703 * $myWeight / ($myHeight * $myHeight);
Info($BMI, $myHeight, $myWeight);
Status($BMI);

function Info($BMI, $myHeight, $myWeight)
{
    echo "Your Weight(lb) is : $myWeight.\n";
    echo "Your Height(in) is : $myHeight.\n";
    echo "Your BMI is : $BMI.\n";
    return;
}

function Status($BMI)
{
    if ($BMI < 18.5) {
        echo "Your are Underweight.\n";
    } elseif ($BMI >= 18.5 and $BMI <= 24.9) {
        echo "Your are Normalweight.\n";
    } elseif ($BMI >= 25 and $BMI <= 29.9) {
        echo "Your are overweight.\n";
    } elseif ($BMI >= 30 and $BMI <= 34.9) {
        echo "Your are Obese.\n";
    } else {
        echo "Your are Extremely Obese.\n";
    }
    return;
}
