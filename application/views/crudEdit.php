<?php $this->load->view('includes/header'); ?>
    <br>
    <br>
    <div class="container">
        <form method="post" action="<?php echo site_url('CrudController/update') ?>/<?php echo $row->Id; ?>">
                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" class="form-control" name="Nama" value="<?php echo $row->Nama; ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control" name="Tngl_Lhr" value="<?php echo $row->Tngl_Lhr; ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">No HP</label>
                    <input type="text" class="form-control" name="NoHP" value="<?php echo $row->NoHp; ?>">
                </div>
                <button type="submit" class="btn btn-primary" value="save">Update</button>
                <a href="<?php echo site_url('CrudController') ?>">
                  <button type="button" class="btn btn-danger">Batal</button>
                </a>
            </form>
    </div>

  </body>
</html>