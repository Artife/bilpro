<?php if($this->session->flashdata('status')): ?>
<div class="alert alert-<?= $this->session->flashdata('statusType') ?>" role="alert">
    <?= $this->session->flashdata('status') ?>
</div>
<?php endif; ?>