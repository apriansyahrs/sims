<div class="content-wrapper bg-white pt-4">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?= $judul ?></h1>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="card my-shadow mb-4">
                <div class="card-header py-3">
                    <div class="card-title">
                        <h6><?= $subjudul ?></h6>
                    </div>
                    <div class="card-tools">
                        <button type="button" onclick="window.location.reload()" class="btn btn-sm btn-default"><i class="fa fa-sync"></i> <span class="d-none d-sm-inline-block ml-1">Reload</span>
                        </button>
                        <button type="button" data-toggle="modal" data-target="#createDokumenModal" class="btn btn-sm btn-primary"><i class="fas fa-plus"></i><span class="d-none d-sm-inline-block ml-1">Tambah Data</span>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <?= form_open('', array('id' => 'bulk')) ?>
                    <div class="table-responsive">
                        <table id="dokumen" class="w-100 table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th class="text-center align-middle p-0">
                                        <input type="checkbox" id="select_all">
                                    </th>
                                    <th class="text-center align-middle p-0">No.</th>
                                    <th>Nama File</th>
                                    <th>Link File</th>
                                    <th class="text-center align-middle p-0" style="width: 100px"><span>Aksi</span></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($dokumens as $row) :
                                ?>
                                    <tr>
                                        <td>
                                            <div class="text-center">
                                                <input id="check<?= $row->id_dokumen ?>" name="checked[]" class="check" value="<?= $row->id_dokumen ?>" type="checkbox">
                                            </div>
                                        </td>
                                        <td class="text-center"><?= $no ?></td>
                                        <td><?= $row->nama_dokumen ?></td>
                                        <td><a href="<?= $row->link_dokumen ?>" target="_blank"><?= $row->link_dokumen ?></a></td>
                                        <td>
                                            <div class="text-center">
                                                <a class="btn btn-xs btn-warning editRecord" data-toggle="modal" data-target="#editDokumenModal" data-deletable="<?= isset($row->deletable) ? $row->deletable : 'false' ?>" data-id='<?= $row->id_dokumen ?>' data-dokumen="<?= $row->nama_dokumen ?>" data-link='<?= $row->link_dokumen ?>'>
                                                    <i class="fa fa-pencil-alt text-white"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php $no++;
                                endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <?= form_close() ?>
                </div>
            </div>
        </div>
    </section>
</div>

<?= form_open('create', array('id' => 'create')) ?>
<div class="modal fade" id="createDokumenModal" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createModalLabel">Tambah Dokumen</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group row">
                    <div class="col-md-12">
                        <label class="form-label">Nama dokumen*</label>
                        <input type="text" name="nama_dokumen" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                        <label class="form-label">Link dokumen*</label>
                        <input type="url" name="link_dokumen" class="form-control" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-plus"></i> Simpan
                </button>
            </div>
        </div>
    </div>
</div>
<?= form_close() ?>

<?= form_open('update', array('id' => 'update')) ?>
<div class="modal fade" id="editDokumenModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Dokumen</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group row" id="formnama">
                    <div class="col-md-12">
                        <label class="form-label">Nama dokumen*</label>
                        <input type="text" id="dokumenEdit" name="nama_dokumen" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row" id="formkode">
                    <div class="col-md-12">
                        <label class="form-label">Link dokumen*</label>
                        <input type="url" id="linkEdit" name="link_dokumen" class="form-control" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <input type="hidden" id="editIdDokumen" name="id_dokumen" class="form-control">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-save"></i> Simpan Perubahan
                </button>
            </div>
        </div>
    </div>
</div>
<?= form_close() ?>

<script src="<?= base_url() ?>/assets/app/js/master/dokumen/crud.js"></script>