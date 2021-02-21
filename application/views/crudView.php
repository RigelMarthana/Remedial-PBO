<?php $this->load->view('includes/header'); ?>
    <br>
    <br>

    <div class="container">

    <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Tambah Data
        </button>

<!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    
                        <form method="post" action="<?php echo site_url('CrudController/create') ?>">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama</label>
                                <input type="text" class="form-control" name="Nama" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Tanggal Lahir</label>
                                <input type="date" class="form-control" name="Tngl_Lhr" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">No HP</label>
                                <input type="text" class="form-control" name="NoHP" aria-describedby="emailHelp">
                            </div>
                            <button type="submit" class="btn btn-primary" value="save">Tambah</button>
                        </form>
            
                    </div>
                </div>
            </div>
        </div>

    <table class="table">
        <thead class="table-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">No Hp</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($result as $row) {?>
            <tr>
                <th scope="row">
                    <?php echo $row->Id; ?>
                </th>
                <td>
                    <?php echo $row->Nama; ?>
                </td>
                <td>
                    <?php echo $row->Tngl_Lhr; ?>
                </td>
                <td>
                    <?php echo $row->NoHp; ?>
                </td>
                <td>
                   <a href="<?php echo site_url('CrudController/edit'); ?>/<?php echo $row->Id; ?>">Edit</a> | 
                   <a href="<?php echo site_url('CrudController/delete'); ?>/<?php echo $row->Id; ?>">Delete</a> 
                </td>

            </tr>
            <?php } ?>
        </tbody>
    </table>
    </div>

    

  </body>
</html>