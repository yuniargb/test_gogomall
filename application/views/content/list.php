<div class="container">
    <table class="table">
    <thead>
        <tr>
        <th scope="col">ID Customer</th>
        <th scope="col">No Telpon Customer</th>
        <th scope="col">Nama Customer</th>
        <th scope="col">Nama Sales</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($list as $l) { ?> 
        <tr>
        <th scope="row"><?= $l->id ?></th>
        <td><?= $l->no_telpon ?></td>
        <td><?= $l->nama_customer ?></td>
        <td><?= $l->nama_sales ?></td>
        </tr>
        <?php } ?>
    </tbody>
    </table>
</div>