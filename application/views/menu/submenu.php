<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>



    <div class="row">
        <div class="col-lg">
            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php endif; ?>

            <?= $this->session->flashdata('message'); ?>

            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newSubMenuModal">Add New Submenu</a>
            <div class="table-responsive">
                <table class="table table-bordered table-hover" id="dataTable">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Title</th>
                            <th scope="col">Menu</th>
                            <th scope="col">Url</th>
                            <th scope="col">Icon</th>
                            <th scope="col">Active</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($subMenu as $sm) : ?>
                            <tr>
                                <th scope="row"><?= $i ?></th>
                                <td><?= $sm['title']; ?></td>
                                <td><?= $sm['menu']; ?></td>
                                <td><?= $sm['url']; ?></td>
                                <td><?= $sm['icon']; ?></td>
                                <td><?= $sm['is_active']; ?></td>
                                <td>
                                    <a href="" class="badge badge-success" data-toggle="modal" data-target="#editSubMenuModal<?= $sm['id']; ?>">edit</a>

                                    <div class="modal fade" id="editSubMenuModal<?= $sm['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="editSubMenuModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="editSubMenuModalLabel">Edit Sub Menu</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="<?= base_url('menu/editsubmenu'); ?>" method="post">
                                                    <input type="hidden" name="id" value="<?= $sm['id'] ?>">
                                                    <div class="modal-body">
                                                        <div class="form-group">

                                                            <input type="text" class="form-control" id="title" name="title" value="<?= $sm['title']; ?>" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <select name="menu_id" id="menu_id" class="form-control">
                                                                <?php foreach ($menu as $m) : ?>
                                                                    <?php if ($m['menu'] == $sm['menu']) : ?>
                                                                        <option value="<?= $m['id'] ?>" selected><?= $m['menu'] ?></option>
                                                                    <?php else : ?>
                                                                        <option value="<?= $m['id'] ?>"><?= $m['menu'] ?></option>
                                                                    <?php endif; ?>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </div>

                                                        <div class="form-group">
                                                            <input type="text" class="form-control" id="url" name="url" value="<?= $sm['url']; ?>" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" id="icon" name="icon" value="<?= $sm['icon']; ?>" required>
                                                        </div>
                                                        <div class="form-group row">
                                                            <?php
                                                                $aktif = $sm['is_active']; ?>
                                                            <div class="form-check form-check-inline pl-3">
                                                                <?php if ($aktif == '1') : ?>
                                                                    <input type="hidden" name="cek" value="0" />
                                                                    <input type="checkbox" name="cek" value="1" checked />
                                                                <?php elseif ($aktif == '0') : ?>
                                                                    <input type="hidden" name="cek" value="0" />
                                                                    <input type="checkbox" name="cek" value="1" />
                                                                <?php endif; ?>

                                                                <label class="form-check-label" for="aktif">&nbsp;AKtif ?</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Ubah</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>



                                    <a href="" data-toggle="modal" data-target="#hapusSubMenuModal<?= $sm['id']; ?>" class="badge badge-danger">delete</a>


                                    <div class="modal fade" id="hapusSubMenuModal<?= $sm['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="hapusSubMenuModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="hapusSubMenuModalLabel">Hapus SubMenu</h5>
                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <form action="<?= base_url('menu/hapussubmenu'); ?>" method="post">
                                                    <input type="hidden" name="id" value="<?= $sm['id'] ?>">
                                                    <div class="modal-body">Apakah ingin menghapus sub menu <?= $sm['title'] ?>?</div>
                                                    <div class="modal-footer">
                                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                                                        <button class="btn btn-primary">Hapus</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Modal -->


<!-- Modal -->
<div class="modal fade" id="newSubMenuModal" tabindex="-1" role="dialog" aria-labelledby="newSubMenuModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newSubMenuModalLabel">Add New Sub Menu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('menu/submenu'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="title" name="title" placeholder="Submenu title">
                    </div>
                    <div class="form-group">
                        <select name="menu_id" id="menu_id" class="form-control">
                            <option value="">Select Menu</option>
                            <?php foreach ($menu as $m) : ?>
                                <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="url" name="url" placeholder="Submenu url">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="icon" name="icon" placeholder="Submenu icon">
                    </div>
                    <div class="form-group row">


                        <div class="form-check form-check-inline pl-3">

                            <input type="hidden" name="is_active" value="0" />
                            <input type="checkbox" name="is_active" value="1" checked />


                            <label class="form-check-label" for="aktif">&nbsp;Aktif ?</label>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>