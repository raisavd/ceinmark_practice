<?php
$arch="curriculum.pdf";
header("Content-Disposition: attachment; filename='$arch'");
header("Content-Type: application/octet-stream; name='$arch'");
readfile($arch);
?>
