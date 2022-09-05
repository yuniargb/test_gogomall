<div class="container">
    <?php MyHelper::alert_info() ?>

    <form action="<?= $action_url ?>" method="post">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama" value="<?= MyHelper::validate_error_value('nama',$row_data) ?>">
            <?= MyHelper::validate_error_message('nama') ?>
        </div>
        <div class="mb-3">
            <label for="no_telpon" class="form-label">Nomor Telpon</label>
            <input type="text" class="form-control" name="no_telpon" value="<?= MyHelper::validate_error_value('no_telpon',$row_data) ?>">
            <?= MyHelper::validate_error_message('no_telpon') ?>
        </div>
        <div class="mb-3">
            <label for="id_sales" class="form-label">Sales</label>
            
            <select name="id_sales" id="id_sales" class="form-control">
                <?php foreach($sales_data as $sd) { ?>
                    <option value="<?= $sd->id ?>" <?= MyHelper::validate_error_value('id_sales',$row_data) == $sd->id ? 'selected' : '' ?> ><?= $sd->nama ?></option>
                <?php } ?>
            </select>
            <?= MyHelper::validate_error_message('nama') ?>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
