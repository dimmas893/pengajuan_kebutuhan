@extends('layouts.admin.template_admin')s
@section('content')
     @foreach ($keranjang as $p)
        <div class="card">
            <div class="card-header">
            </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-3">
                            <p>nama :{{ $p->barang->nama_barang }}</p>
                            <p>spesifikasi :{{ $p->spesifikasi }}</p>
                            <p>jumlah :{{ $p->jumlah }}</p>
                            <p>harga satuan :{{ $p->harga_satuan }}</p>
                        </div>

                        <form action="/pengajuan/store" method="post">
                            @csrf
                            <input type="hidden" value="{{ $p->harga_satuan + $p->jumlah }}" name="total_biaya" />
                            <input type="hidden" value="{{ $p->id }}" name="barang_id" />
                            <input type="hidden" value="{{ $p->jumlah }}" name="jumlah_barang" />
                            <input type="hidden" value="{{ $p->harga_satuan }}" name="harga_satuan" />
                            <input type="hidden" value="{{ \Carbon\Carbon::now('Asia/Jakarta')->format('d, M Y') }}" name="tanggal">

                            <input type="submit" class="btn btn-primary" value="ajukan" />
                        </form>
                    </div>
                </div>
        </div>
    @endforeach
@endsection