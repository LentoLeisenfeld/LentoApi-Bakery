<?php
/** @var Bakery\Website\Home\HomeViewModel $model */

$this->layout = '_Layout3';
?>

testview hit..<?=$model->test ?>

<?php $this->startSection('scripts'); ?>
<script>alert('hello');</script>
<?php $this->endSection(); ?>

