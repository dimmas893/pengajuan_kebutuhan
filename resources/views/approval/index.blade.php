@extends('layouts.admin.template_admin')
@section('content')
           <div class="row">
            <div class="col-12">
                            <div class="card mt-2">
                                <div class="card-body"> 
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <td>Nama Pengajuan</td>
                                                <td>Tanggal Pengajuan</td>
                                                <td>Total Biaya</td>
                                                <td>Approval</td>
                                                <td>Action</td>
                                            </thead>
                                            <tbody>
                                                <h1>Tabel Pengajuan</h1>
                                                @foreach($pengajuan as $p)
                                                    <tr>
                                                        <td>{{ $p->user_pengajuan->name }}</td>
                                                        <td>{{ $p->tanggal }}</td>
                                                        <td>Rp {{ number_format($p->total_biaya,2,',','.') }}</td>
                                                        <td>
                                                              @if($p->user_id_approval)
                                                                <p style="color:chartreuse">Approve</p>
                                                            @endif
                                                            @if($p->user_id_approval == null)
                                                                <p style="color:red">Masih di periksa</p>
                                                            @endif
                                                        </td>
                                                        <td><a href="/approval/detail/{{ $p->id }}" class="btn btn-success">Lihat</a></td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
            </div>
        </div>
@endsection