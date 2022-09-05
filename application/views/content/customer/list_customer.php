<div class="container">
    <a href="<?= base_url('customer/create') ?>" class="btn btn-primary">Tambah Data</a>
    <?php MyHelper::alert_info() ?>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Nama</th>
        <th scope="col">Nomor Telepon</th>
        <th scope="col">ID Sales</th>
        <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($list as $l) { ?> 
        <tr>
        <th scope="row"><?= $l->id ?></th>
        <td><?= $l->nama ?></td>
        <td><?= $l->no_telpon ?></td>
        <td><?= $l->id_sales ?></td>
        <td> 
            <a href="<?= base_url('customer/edit/'. $l->id) ?>" class="btn btn-info">Edit</a>
            <a href="<?= base_url('customer/delete/'. $l->id) ?>" onClick="return confirm('Kamu Yakin ingin menghapus data ini?')" class="btn btn-danger">Delete</a>
        </td>
        </tr>
        <?php } ?>
    </tbody>
    </table>
</div>