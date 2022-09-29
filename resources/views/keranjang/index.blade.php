@extends('layouts.admin.template_admin')
@section('content')
 
    
        <div class="card">
            <div class="card-header">
            </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                           <form action="/keranjang/store" method="post">
                                @csrf
                                <div class="col-12">
                                   <select class="form-control js-example-basic-single" name="barang_id" id="barang_id">
                                        @foreach($barang as $p)
                                            <option value="{{ $p->id }}">{{ $p->nama_barang }}, Spesifikasi : {{ $p->spesifikasi }}, Harga Barang : Rp {{ number_format($p->harga_barang,2,',','.') }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-12">
                                    <input type="number" class="form-control mt-5" name="jumlah" required placeholder="jumlah"/>
                                </div>
                                <div class="col-12">
                                <input type="submit" class="btn btn-primary mt-5" value="add">
                            </div>

                            </form>
                        </div>
                    </div>
                </div>
        </div>

        <div class="row">
            <div class="col-9">
                            <div class="card mt-2">
                                <div class="card-body"> 
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <td>Nama</td>
                                                <td>Spesifikasi</td>
                                                <td>Jumlah Barang</td>
                                                <td>Harga Satuan</td>
                                                <td>Action</td>
                                            </thead>
                                            <tbody>
                                                <h1>Tabel Pengajuan</h1>
                                                @foreach($keranjang as $p)
                                                    <tr>
                                                        <td>{{ $p->barang->nama_barang }}</td>
                                                        <td>{{ $p->barang->spesifikasi }}</td>
                                                        <td>{{ $p->jumlah}}</td>
                                                        <td>Rp {{ number_format($p->harga_satuan,2,',','.') }}</td>
                                                        <td><a href="/keranjang/delete/{{ $p->id }}" class="btn btn-danger">Delete</a></td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
            </div>
             <div class="col-3">
                            <div class="card mt-2">
                                <div class="card-body"> 
                                    <div class="table-responsive">
                                           <form action="/simpan-pengajuan" method="post">
                                                @csrf
                                                <input type="submit" class="btn btn-primary mt-5" value="Simpan pengajuan">

                                            </form>
                                    </div>
                                </div>
                            </div>
            </div>
        </div>
@section('css')
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection
    @section('script')
            <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
            <script>
            $(document).ready(function() {
                $('.js-example-basic-single').select2();
            });
        </script>
    @endsection
@endsection