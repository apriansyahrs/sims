<?php
$jenjang = $setting->jenjang;

// Pastikan variabel yang diperlukan telah didefinisikan
$kelass = ['0' => 'Pilih kelas'] + $kelas;
$ruangs = ['0' => 'Pilih ruang'] + $ruang;
$sesis = ['0' => 'Pilih sesi'] + $sesi;

$hasSiswas = count($siswas) > 0;
?>

<div class="content-wrapper bg-white pt-4">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?= htmlspecialchars($judul) ?></h1>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="card card-default my-shadow mb-4">
                <div class="card-header">
                    <h6 class="card-title"><?= htmlspecialchars($subjudul) ?></h6>
                    <div class="card-tools">
                        <a href="<?= base_url('cbtsesisiswa?kls=' . $kelas_selected) ?>" class="btn btn-sm btn-default">
                            <i class="fa fa-sync"></i> <span class="d-none d-sm-inline-block ml-1">Reload</span>
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-md-3 mb-3">
                            <label for="dropdown-kelas">Kelas: </label>
                            <?= form_dropdown('kelas', $kelass, $kelas_selected, 'id="dropdown-kelas" class="select2 form-control"') ?>
                        </div>

                        <?php if ($hasSiswas) : ?>
                            <div class="col-2 mb-2"></div>
                            <div class="col-12 col-md-7 mb-3">
                                <label>Gabungkan siswa <?= htmlspecialchars($kelass[$kelas_selected]) ?> ke
                                    <?= $this->ion_auth->is_admin() ? 'ruang dan' : '' ?> sesi:
                                </label>
                                <span id="undo" class="float-right badge btn">
                                    <i class="fa fa-undo"></i>
                                </span>
                                <div class="row">
                                    <div class="col-6">
                                        <?php if ($this->ion_auth->is_admin()) : ?>
                                            <?= form_dropdown('g-ruang', $ruangs, null, 'id="g-ruang" class="form-control"') ?>
                                        <?php endif; ?>
                                    </div>
                                    <div class="col-6">
                                        <?= form_dropdown('g-sesi', $sesis, null, 'id="g-sesi" class="form-control"') ?>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>

                    <?php if ($hasSiswas) : ?>
                        <div id="atur-by-siswa">
                            <?= form_open('cbtsesisiswa/editsesisiswa', ['id' => 'editsesisiswa']) ?>
                            <div class="table-responsive" id="list-siswa">
                                <table id="sesi-siswa" class="w-100 table table-bordered table-sm">
                                    <thead>
                                        <tr class="bg-primary">
                                            <th class="align-middle text-center">No.</th>
                                            <th class="align-middle text-center">Nama Siswa</th>
                                            <th class="align-middle text-center">Kelas</th>
                                            <?php if ($this->ion_auth->is_admin()) : ?>
                                                <th class="align-middle text-center">Ruang</th>
                                            <?php endif; ?>
                                            <th class="align-middle text-center">Sesi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($siswas as $index => $siswa) : ?>
                                            <tr>
                                                <td class="align-middle text-center"><?= $index + 1 ?></td>
                                                <td class="align-middle"><?= htmlspecialchars($siswa->nama) ?></td>
                                                <td class="align-middle text-center"><?= htmlspecialchars($siswa->nama_kelas) ?></td>
                                                <td class="align-middle text-center <?= $this->ion_auth->in_group('guru') ? 'd-none' : '' ?>" data-name="input-ruang">
                                                    <?= form_dropdown('ruang-sesi[' . $siswa->id_siswa . '][' . $kelas_selected . '][ruang]', $ruangs, $siswa->id_ruang ?? '0', 'data-ruangid="' . $siswa->id_siswa . '" class="ruangsiswa form-control form-control-sm"') ?>
                                                </td>
                                                <td class="align-middle text-center" data-name="input-sesi">
                                                    <?= form_dropdown('ruang-sesi[' . $siswa->id_siswa . '][' . $kelas_selected . '][sesi]', $sesis, $siswa->id_sesi ?? '0', 'data-sesiid="' . $siswa->id_siswa . '" class="sesisiswa form-control form-control-sm"') ?>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="float-right">
                                <button type="submit" class="btn btn-sm bg-primary text-white">
                                    <i class="fas fa-save mr-1"></i> Simpan
                                </button>
                            </div>
                            <?= form_close() ?>
                        </div>
                    <?php else: ?>
                        <div class="alert alert-default-warning align-content-center" role="alert">
                            <?= $kelas_selected == '0' ? 'Pilih kelas' : 'Belum ada data siswa' ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="overlay d-none" id="loading">
                    <div class="spinner-grow"></div>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
    $(document).ready(function() {
        const tpId = '<?= $tp_active->id_tp ?>';
        const smtId = '<?= $smt_active->id_smt ?>';
        const kelasId = '<?= $kelas_selected ?>';
        let jsonRuang = [];
        let jsonSesi = [];

        ajaxcsrf();
        const opsiKelas = $('#dropdown-kelas').select2();
        const opsiGruang = $('#g-ruang').select2();
        const opsiGsesi = $('#g-sesi').select2();

        opsiKelas.on('change', function() {
            const id = $(this).val();
            if (id !== kelasId) {
                $('#loading').removeClass('d-none');
                window.location.href = base_url + 'cbtsesisiswa?kls=' + id;
            }
        });

        opsiGruang.on('change', function() {
            if (jsonRuang.length === 0) {
                $('.ruangsiswa').each((_, row) => {
                    jsonRuang.push({
                        id: $(row).data('ruangid'),
                        val: $(row).val()
                    });
                });
            }
            $('.ruangsiswa').val($(this).val());
        });

        opsiGsesi.on('change', function() {
            if (jsonSesi.length === 0) {
                $('.sesisiswa').each((_, row) => {
                    jsonSesi.push({
                        id: $(row).data('sesiid'),
                        val: $(row).val()
                    });
                });
            }
            $('.sesisiswa').val($(this).val());
        });

        $('#undo').on('click', function() {
            jsonRuang.forEach(v => $('select[data-ruangid="' + v.id + '"]').val(v.val));
            jsonSesi.forEach(v => $('select[data-sesiid="' + v.id + '"]').val(v.val));
        });

        $("#editsesisiswa").on("submit", function(e) {
            e.preventDefault();
            $('#loading').removeClass('d-none');

            $.ajax({
                url: base_url + "cbtsesisiswa/editsesisiswa",
                type: "POST",
                data: $(this).serialize(),
                success: function(data) {
                    $('#loading').addClass('d-none');
                    if (data.status) {
                        window.location.href = base_url + 'cbtsesisiswa?kls=' + kelasId;
                    } else {
                        showDangerToast('Gagal disimpan');
                    }
                },
                error: function(xhr) {
                    $('#loading').addClass('d-none');
                    showDangerToast('Gagal disimpan');
                }
            });
        });
    });
</script>