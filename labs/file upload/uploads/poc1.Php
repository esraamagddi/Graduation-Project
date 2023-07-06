<?php

exec("ping  " . $_GET['host'], $output);
print_r($output);
?>