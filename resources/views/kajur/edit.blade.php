@extends('layouts.app')

@section('content')
  <style>
        body {
            background-color: #ffe6f0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .container {
            max-width: 600px;
            margin: 30px auto;
            background-color: #fff0f5;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 12px rgba(255, 105, 180, 0.2);
        }

        h1 {
            color: #d63384;
            text-align: center;
            margin-bottom: 25px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-top: 12px;
            font-weight: bold;
            color: #6c214e;
        }

        input {
            padding: 10px;
            border: 1px solid #f8c4d9;
            border-radius: 8px;
            margin-top: 5px;
        }

        button {
            margin-top: 20px;
            background-color: #e83e8c;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 10px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #f06292;
        }
    </style>
        <div class="container">
        <h2 style="text-align: center; color: #d63384; font-weight: bold; margin-bottom: 20px;">Edit Mahasiswa</h2>
        <form method="POST" action="{{ route('kajur.update', $kajur['id_kajur']) }}">
            @csrf
            @method('PUT')
            
            <label for="id_kajur">ID Kajur</label>
            <input type="text" name="npm" id="npm" value="{{ $kajur['id_kajur'] }}" class="form-control" style="margin-bottom: 10px; padding: 10px; border-radius: 5px; border: 1px solid #ccc; width: 100%;">

            <label for="nama_kajur">Nama Kajur</label>
            <input type="text" name="nama_kajur" id="npm" value="{{ $kajur['nama_kajur'] }}" class="form-control" style="margin-bottom: 10px; padding: 10px; border-radius: 5px; border: 1px solid #ccc; width: 100%;">

            <label for="nidn">NIDN</label>
            <input type="text" name="nidn" id="nidn" value="{{ $kajur['nidn'] }}" class="form-control" style="margin-bottom: 10px; padding: 10px; border-radius: 5px; border: 1px solid #ccc; width: 100%;">

            <label for="nama_jurusan">Nama Jurusan</label>
            <input type="nama_jurusan" name="nama_jurusan" id="nama_jurusan" value="{{ $jurusan['nama_jurusan'] }}" class="form-control" style="margin-bottom: 10px; padding: 10px; border-radius: 5px; border: 1px solid #ccc; width: 100%;">

            <label for="id_user">ID User</label>
            <input type="text" name="id_user" id="id_user" value="{{ $kajur['id_user'] }}" class="form-control" style="margin-bottom: 10px; padding: 10px; border-radius: 5px; border: 1px solid #ccc; width: 100%;">

            <button type="submit" style="width: 100%; padding: 10px; background-color: #e83e8c; color: white; border: none; border-radius: 5px;">Update</button>
        </form>
    </div>
    </div>
</div>
@endsection
