<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE HTML>
<html>
<body>
    <pre>
    <?php print_r($read); ?>
    </pre>

    <?php if($read): ?>
        <?php foreach($read as $r): ?>
            <a href='<?= base_url(); ?>db_controller/get_detail/<?= $r['user_pid']; ?>'>
                Nama: <?= $r['user_name']; ?>
            </a>
            <br />
        <?php endforeach; ?>
    <?php else: ?>
        No Data
    <?php endif; ?>
</body>
</html>