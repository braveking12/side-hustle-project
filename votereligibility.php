<?php
$age= "18";
$pvc = "yes";
$ward = "010";

if ($age >"17" && $pvc=="yes" && $ward=="020"){
    echo  "voter eligible to vote";
} else if ($age <18) { 
    echo "voter not eligible to vote, under age";
} elseif ($pvc=="no"){
    echo "voter not eligible to vote, lack of PVC";
} elseif ($ward != "020"){
    echo "voter note eligible to vote, invalid ward code-number";
}
?>