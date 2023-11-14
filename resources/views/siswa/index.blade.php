@extends('master.index')
@section('content')
                        <table class="table table-striped table-hover text-center">
                        <thead>
                            <tr>
                                <th>NIS</th>
                                <th>NISN</th>
                                <th>Nama</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Jenis Kelamin</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($siswa as $item)
                                <tr>
                                    <td>{{ $item->Nis }}</td>
                                    <td>{{ $item->Nisn }}</td>
                                    <td>{{ $item->Nama }}</td>
                                    <td>{{ $item->TempatLahir }}</td>
                                    <td>{{ $item->TanggalLahir }}</td>
                                    <td>{{ $item->JenisKelamin }}</td>
                                    <td><button type="button" class="btn btn-primary mx-1" data-bs-toggle="modal" data-bs-target="#editModal">Edit</button><button class="btn btn-danger">Delete</button></td>
                                </tr>
                                @endforeach
                        </tbody>
                        </table>

@endsection
