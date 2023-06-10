<!DOCTYPE html>
<html>
<head>
    <title>Menentukan Bilangan Ganjil Genap</title>
</head>
<body>
<form method="POST" action="">
    Masukkan bilangan : <input type="number" name="bilangan"><br/>
    <input type="submit" name="submit" value="Proses">
</form>

<?php
    if(isset($_POST)) {
        $bilangan = $_POST['bilangan'];
        if($bilangan %2 == 0) {
            echo $bilangan . " merupakan bilangan genap";
        } else {
            echo $bilangan . " merupakan bilangan ganjil";
        }
    }
?>

</body>
</html>