<ol class="breadcrumb">
    <li><a href="<?= base_url('admin') ?>"><i class="fa fa-dashboard"></i> admin </a></li>
    <li class="active"><?= ($this->uri->segment(2) == null) ? 'Manajemen' : ucfirst(str_replace('_', '', $this->uri->segment(2))) ?></li>
</ol> 