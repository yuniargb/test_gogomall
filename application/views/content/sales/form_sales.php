<div class="container">
    <?php MyHelper::alert_info() ?>

    <form action="<?= $action_url ?>" method="post">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama" value="<?= MyHelper::validate_error_value('nama',$row_data) ?>">
            <?= MyHelper::validate_error_message('nama') ?>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
