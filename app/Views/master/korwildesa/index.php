<?php $this->extend('layout/template'); ?>
<?php $this->section('content'); ?>

<div class="container-fluid">
    <button class="btn btn-primary mb-1 tambah"><i class="fas fa-plus"></i> Tambah</button>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped" id="table-data" width="100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Korwil Desa</th>
                            <th>Korwil Kecamatan</th>
                            <th>Korwil Kabupaten</th>
                            <th>Korwil Propinsi</th>
                            <!--<th>Desa</th>
                            <th>Kecamatan</th>
                            <th>Propinsi</th>-->
                            <th>Aksi</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog" role="document">
    <?= form_open_multipart('', ['csrf_id' => 'token']); ?>
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
               
               
                <div class="form-group row">
                    <label for="kategori" class="col-sm-4 col-form-label">Korwil Provinsi</label>
                    <div class="col-sm-8">
                        <select name="id_korwil_prov" id="id_korwil_prov" class="form-control">
                            <option value="">Pilih</option>
                            <?php foreach (esc($korwilprovinsi) as $data) : ?>
                                <option value="<?= esc($data->id_korwil_prov) ?>"><?= esc($data->nama_korwil_prov) ?></option>
                            <?php endforeach; ?>
                        </select>
                        <small class="invalid-feedback"></small>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kategori" class="col-sm-4 col-form-label">Korwil Kabupaten</label>
                    <div class="col-sm-8">
                        <select name="id_korwil_kab" id="id_korwil_kab" class="form-control">
                            <option value="">Pilih</option>
                            <?php foreach (esc($korwilkabupaten) as $data) : ?>
                                <option value="<?= esc($data->id_korwil_kab) ?>"><?= esc($data->nama) ?></option>
                            <?php endforeach; ?>
                        </select>
                        <small class="invalid-feedback"></small>
                    </div>
                </div>  
                <div class="form-group row">
                    <label for="kategori" class="col-sm-4 col-form-label">Korwil Kecamatan</label>
                    <div class="col-sm-8">
                        <select name="id_korwil_kec" id="id_korwil_kec" class="form-control">
                            <option value="">Pilih</option>
                            <?php foreach (esc($korwilkecamatan) as $data) : ?>
                                <option value="<?= esc($data->id_korwil_kec) ?>"><?= esc($data->nama) ?></option>
                            <?php endforeach; ?>
                        </select>
                        <small class="invalid-feedback"></small>
                    </div>
                </div>              
                <div class="form-group row">
                    <label for="kategori" class="col-sm-4 col-form-label">Provinsi</label>
                    <div class="col-sm-8">
                        <select name="id_provinsi" id="id_provinsi" class="form-control">
                            <option value="">Pilih</option>
                            <?php foreach (esc($provinsi) as $data) : ?>
                                <option value="<?= esc($data->id) ?>"><?= esc($data->nama) ?></option>
                            <?php endforeach; ?>
                            </option>
                        </select>
                        <small class="invalid-feedback"></small>
                    </div>
                </div>
               
                <div class="form-group row">
                    <label for="kategori" class="col-sm-4 col-form-label">Kabupaten</label>
                    <div class="col-sm-8">
                        <select id="id_kabupaten" name='id_kabupaten' class="form-control">                        
                            <option value="">Pilih</option>
                            <?php foreach (esc($kabupaten) as $data) : ?>
                                <option value="<?= esc($data->id) ?>"><?= esc($data->nama) ?></option>
                            <?php endforeach; ?>
                        </select>
                        <small class="invalid-feedback"></small>                       
                    </div>
                </div>

                <div class="form-group row">
                    <label for="kategori" class="col-sm-4 col-form-label">Kecamatan</label>
                    <div class="col-sm-8">
                        <select id="id_kecamatan" name='id_kecamatan' class="form-control">
                            <option value="">Pilih</option>

                        </select>
                        <small class="invalid-feedback"></small>
                       
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kategori" class="col-sm-4 col-form-label">Desa</label>
                    <div class="col-sm-8">
                        <select id="id_desa" name='id_desa' class="form-control">
                            <option value="">Pilih</option>

                        </select>
                        <small class="invalid-feedback"></small>
                       
                    </div>
                </div>

                <div class="form-group row">
                    <label for="kategori" class="col-sm-4 col-form-label">Korwil Desa</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="nama_korwil_desa" id="nama_korwil_desa" >
                        <small class="invalid-feedback"></small>
                    </div>
                </div>

            </div>

            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>               
            </div>
        </div>
        <?= form_close() ?>
        
    </div>
</div>
<?= $this->endSection(); ?>

<?= $this->section('js'); ?>
<!--handle kokies dengan jquery-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js" integrity="sha512-3j3VU6WC5rPQB4Ld1jnLV7Kd5xr+cq9avvhwqzbH/taCRNURoeEpoPBK9pDyeukwSxwRPJ8fDgvYXd6SkaZ2TA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready(function() {
        const table = $("#table-data").DataTable({
            proseccing: true,
            serverSide: true,
            order: [],
            ajax: {
                url: `${BASE_URL}/master/korwildesa/ajax`
            },
            //optional
            lengthMenu: [
                [10, 25,50,100],
                [10, 25,50,100]
            ],
            language: {
				"zeroRecords": 	"Data kosong",
				"lengthMenu" : 	"Tampilkan _MENU_ baris data",
				"search":		"Pencarian:",
				"paginate":		{
									"first": "<<",
									"lasst": ">>",
									"next": ">",
									"previous": "<"
				},
				"info":			"Menampilkan _START_ sampai _END_ dari _TOTAL_ baris data",
				"infoEmpty":	"Data 0",
				"infoFiltered":	""
			},

            columns: [
                {
                    render: function(data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    }
                },
                {
                    data: 'nama_korwil_desa',
                    name: 'nama_korwil_desa'
                },
                {
                    data: 'korwilkec',
                    name: 'korwilkec'
                },
                {
                    data: 'korwilkab',
                    name: 'korwilkab'
                },
                {
                    data: 'korwilprov',
                    name: 'korwilprov'
                },
                /*{
                    data: 'desa',
                    name: 'desa'
                },
                {
                    data: 'kecamatan',
                    name: 'kecamatan'
                },
                {
                    data: 'provinsi',
                    name: 'provinsi'
                },
                */
                {
                    data: function(row) {
                           
                           let html = '<button class="btn btn-success btn-sm mr-1 ubah" data-id="' + row.id_korwil_desa + '" data-nama_korwil_desa="' + row.nama_korwil_desa + '"data-id_korwil_prov="' + row.id_korwil_prov + '"data-id_korwil_kab="' + row.id_korwil_kab + '"data-id_korwil_kec="' + row.id_korwil_kec + '"data-id_provinsi="' + row.id_provinsi + '"data-id_kabupaten="' + row.id_kabupaten + '"data-id_kecamatan="' + row.id_kecamatan + '"data-id_desa="' + row.id_desa + '"><i class="fas fa-edit"></i></button>'
                           html += '<button class="btn btn-danger btn-sm hapus" data-id="' + row.id_korwil_desa + '"><i class="fa fa-trash"></i></button>'
                           return html;
                       }
                }
            ],
            columnDefs: [{
                targets: 0,
                width: "5%",
                targets: 5,
                width: "10%",
            },
            { //no order
	            targets: [ 0,1,2,3,4,-1 ],
	            orderable: false, 
	        }]
            
        });
       

        $(".tambah").on("click", function() {
            $("#formModal").modal("show");
            $(".modal-title").text("Tambah Data");
            $("button[type=submit]").attr("id", "tambah");
        })
       
        $(".content").on("click", "#tambah", function(e) {
            e.preventDefault();
            let formData = new FormData($("form")[0]);
            $.ajax({
                type: "post",
                url: `${BASE_URL}/master/korwildesa/tambah`,
                dataType: "json",
                contentType: false,
                processData: false,
                cache: false,
                data: formData,
                success: function(response) {
                    responValidasi(['tambah'], ['id_korwil_prov','id_korwil_kab','id_korwil_kec','id_provinsi','id_kabupaten','id_kecamatan','id_desa','nama_korwil_desa'], response);
                    if (response.sukses) {
                        $("#formModal").modal("hide");
                        table.ajax.reload();
                    }
                }
            });
        })
        $(".content").on("click", ".ubah", function() {
            $("#formModal").modal("show");
            $(".modal-title").text("Edit Data");
            $("button[type=submit]").attr("id", "ubah");
            $("#id_korwil_prov").val($(this).data("id_korwil_prov"));
            $("#id_korwil_kab").val($(this).data("id_korwil_kab"));
            $("#id_korwil_kec").val($(this).data("id_korwil_kec"));
            $("#id_provinsi").val($(this).data("id_provinsi"));     
            $("#id_kabupaten").val($(this).data("id_kabupaten")); 
            $("#id_kecamatan").val($(this).data("id_kecamatan"));   
            $("#id_desa").val($(this).data("id_desa")); 
            $("#nama_korwil_desa").val($(this).data("nama_korwil_desa"));
            $(".modal-footer").append('<input type="hidden" name="id_korwil_desa" value="' + $(this).data("id") + '">');
        })

        $(".content").on("click", "#ubah", function(e) {
            e.preventDefault();
            let formData = new FormData($("form")[0]);
            $.ajax({
                type: "post",
                url: `${BASE_URL}/master/korwildesa/ubah`,
                dataType: "json",
                contentType: false,
                processData: false,
                cache: false,
                data: formData,
                success: function(response) {
                    responValidasi(['ubah'], ['id_korwil_prov','id_korwil_kab','id_korwil_kec','id_provinsi','id_kabupaten','id_kecamatan','id_desa','nama_korwil_desa'], response);
                    if (response.sukses) {
                        $("#formModal").modal("hide");
                        table.ajax.reload();
                    }
                }
            });
        })
        $("#formModal").on("hide.bs.modal", function() {
            $("form")[0].reset();
            $("input[name=id]").remove();
            $("input").removeClass("is-invalid");
            $("select").removeClass("is-invalid");
           
        })

        $(".content").on("click", ".hapus", function(e) {
            e.preventDefault();
            Swal.fire({
                title: 'Anda yakin ingin menghapus data ini?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Konfirmasi!',
                cancelButtonText: 'Batal'
            }).then(result => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: `${BASE_URL}/master/korwildesa/hapus`,
                        data: {
                            id: $(this).data("id")
                        },
                        success: function(response) {
                            table.ajax.reload()
                            if (response.status) {
                                toastr.success(response.pesan, 'Sukses')
                            } else {
                                toastr.error(response.pesan, 'Gagal')
                               
                            }
                        }
                    });
                }
            })
        })

       
    });
</script>
<?php $this->endSection(); ?>