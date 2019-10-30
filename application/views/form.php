<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?> 
<html>
<head>
</head>

<body>
<form method="POST" action="<?= base_url();?>my_controller/form">
    <input type = 'text' name = 'angka1'>
    <input type = 'text' name = 'operasi'>
    <input type = 'text' name = 'angka2'>

    <input type="submit" value="submit">
    <?= $model; ?>
</form>
</body>
</html>