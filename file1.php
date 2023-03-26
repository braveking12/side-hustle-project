<?php
echo "hello guys i am learning php with sidehustle";


?>
<?php
$connect = mysqli_connect('localhost', 'root', '', 'test');


if ($connect){
    echo "connected";
} else {
    echo "not connected";
}
?>