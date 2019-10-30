<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php if($result): ?>
    <?php foreach($result as $r): ?>
        <div>
            <?= $r['user_name']; ?>
        </div>
    <?php endforeach; ?>
<?php endif; ?>