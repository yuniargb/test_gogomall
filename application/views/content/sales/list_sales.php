<div class="container">
    <a href="<?= base_url('sales/create') ?>" class="btn btn-primary">Tambah Data</a>
    <?php MyHelper::alert_info() ?>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Nama</th>
        <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($list as $l) { ?> 
        <tr>
        <th scope="row"><?= $l->id ?></th>
        <td><?= $l->nama ?></td>
        <td> 
            <a href="<?= base_url('sales/edit/'. $l->id) ?>" class="btn btn-info">Edit</a>
            <a href="<?= base_url('sales/delete/'. $l->id) ?>" onClick="return confirm('Kamu Yakin ingin menghapus data ini?')" class="btn btn-danger">Delete</a>
        </td>
        </tr>
        <?php } ?>
    </tbody>
    </table>
</div>