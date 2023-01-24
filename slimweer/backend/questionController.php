<?php

$fullname = $_POST['fullname'];
$telefoon_nmr = $_POST['telefoon_nmr'];
$weervraag = $_POST['weervraag'];

$input = $fullname . " " . $telefoon_nmr. " " . $weervraag . "\n";

file_put_contents('../questions.txt', $input);

?>