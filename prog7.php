<?php
date_default_timezone_set("Asia/Kolkata");
echo "<p>".date("d/m/y::h:i:s A")."</p>";#do not use 'P' with 'h'
echo "<p>".date("d/m/y::h:i:sa")."</p>";
echo "<p>".date("d/m/y::H:i:s")."</p>";
echo "<p>".date("d/m/y::H:i:s P")."</p>";#do not use 'p'.... can use 'P'
echo "<p>".date("d/m/y::H:i:s a")."</p>";#no problem to use 'a'/'A'
?>
