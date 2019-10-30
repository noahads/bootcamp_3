<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php if($result): ?>
    <?php foreach($result as $r): ?>
        <div
            class='table_row'
            style='
                border-bottom: 1px solid green;
                padding: 5px 5px;
            '
            data-user_pid='<?= $r['user_pid']; ?>'
        >
            Nama: <?= $r['user_name']; ?>
        </div>
    <?php endforeach; ?>
<?php endif; ?>