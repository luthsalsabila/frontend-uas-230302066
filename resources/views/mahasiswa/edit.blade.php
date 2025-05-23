@extends('layouts.app')

@section('content')
<div class="container">
    <h2 style="text-align: center; color: #d63384;">Edit Mahasiswa</h2>
    <form method="POST" action="{{ route('mahasiswa.update', $mahasiswa['npm']) }}">
        @csrf
        @method('PUT')

        <label for="npm">NPM</label>
        <input type="text" name="npm" id="npm" value="{{ $mahasiswa['npm'] }}" readonly>

        <label for="id_user">ID User</label>
        <input type="text" name="id_user" id="id_user" value="{{ $mahasiswa['id_user'] }}">

        <label for="id_kajur">ID Kajur</label>
        <input type="text" name="id_kajur" id="id_kajur" value="{{ $mahasiswa['id_kajur'] }}">

        <label for="nama_mahasiswa">Nama Mahasiswa</label>
        <input type="text" name="nama_mahasiswa" id="nama_mahasiswa" value="{{ $mahasiswa['nama_mahasiswa'] }}">

        <label for="tempat_tanggal_lahir">Tempat Tanggal Lahir</label>
        <input type="text" name="tempat_tanggal_lahir" id="tempat_tanggal_lahir" value="{{ $mahasiswa['tempat_tanggal_lahir'] }}">

        <label for="jenis_kelamin">Jenis Kelamin</label>
        <input type="text" name="jenis_kelamin" id="jenis_kelamin" value="{{ $mahasiswa['jenis_kelamin'] }}">

        <label for="alamat">Alamat</label>
        <input type="text" name="alamat" id="alamat" value="{{ $mahasiswa['alamat'] }}">

        <label for="agama">Agama</label>
        <input type="text" name="agama" id="agama" value="{{ $mahasiswa['agama'] }}">

        <label for="angkatan">Angkatan</label>
        <input type="text" name="angkatan" id="angkatan" value="{{ $mahasiswa['angkatan'] }}">

        <label for="program_studi">Program Studi</label>
        <input type="text" name="program_studi" id="program_studi" value="{{ $mahasiswa['program_studi'] }}">

        <label for="no_hp">No. HP</label>
        <input type="text" name="no_hp" id="no_hp" value="{{ $mahasiswa['no_hp'] }}">

        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="{{ $mahasiswa['email'] }}">

        <button type="submit">Update</button>
    </form>
</div>
@endsection
