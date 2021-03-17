<?php
$a = 5;
switch ($a) {
    case 5:
        echo "a equal 5";
       break;
    case ($a > 3 && $a < 6):
        echo "a gt 5";
        break;
    case ($a < 5):
        echo "a less 5";
        break;
    default:
        echo "default";
        break;
}
<?php
$score = 70;

if( $score >= 80 ){
     echo "คุณได้เกรด A";
}else if( $score >= 70 && $score < 80 ){
     echo "คุณได้เกรด B";
}else if( $score >= 60 && $score < 70 ){
     echo "คุณได้เกรด D";
}else if( $score >= 50 && $score < 60 ){
     echo "คุณได้เกรด D";
}else{
     echo "คุณสอบตก";
}
?>
