@extends('layouts.admin.template_admin')
@section('content')
    <div class="card">
        <div class="card-header">Edit Barang Pengajuan</div>
        <div class="card-body">
            <form action="/approval/update">
                <input type="hidden" name="pengajuan_id" value="{{ $pengajuan_detail->pengajuan_id }}">
                <input type="hidden" name="id" value="{{ $pengajuan_detail->id }}">
                <p>{{ $pengajuan_detail->barang->nama_barang }}</p>
                <p>{{ $pengajuan_detail->barang->spesifikasi }}</p>
                {{-- <p>{{ $pengajuan_detail->jumlah_barang }}</p> --}}
                <p><input type="number" name="jumlah_barang" placeholder="{{ $pengajuan_detail->jumlah_barang }}"></p>
                <input type="submit" class="btn btn-primary" value="save" />
            </form>
        </div>
    </div>
@endsection