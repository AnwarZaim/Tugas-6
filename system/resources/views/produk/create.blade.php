@extends('admin.AdminProduk')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    Tambah Data Produk
                </div>

                <div class="card-body">
                    <form action="{{ url('AdminProduk') }}" method="post">
                        @csrf


                        <div class="from-grub">
                            <label for="" class="control-label">Nama</label>
                            <input type="text" class="form-control" name="nama">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="from-grub">
                                    <label for="" class="control-label">Harga</label>
                                    <input type="text" class="form-control" name="harga">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="f   rom-grub">
                                    <label for="" class="control-label">Berat</label>
                                    <input type="text" class="form-control" name="berat">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="from-grub">
                                    <label for="" class="control-label">Stok</label>
                                    <input type="text" class="form-control" name="stok">
                                </div>
                            </div>
                        </div>
                        <div class="from-grub">
                            <label for="" class="control-label">Deskripsi</label>
                            <textarea name="deskripsi" class="form-control">
                                </textarea>


                        </div>
                        <button class="btn btn-dark float-right mt-5"><i class="fa fa-save"></i> Simpan</button>
                    </form>




                </div>
            </div>
        </div>
    </div>
</div>
@endsection