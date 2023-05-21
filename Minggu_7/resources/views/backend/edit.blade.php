@extends('backend/layouts.template')

@section('content')
    <main id="main" class="main">
        <div lass="pagetitle">
            <div class="card">
    <div class="card-body">
        <form action="{{ route('proses_edit',$data->id) }}" method="post">
            @csrf
            @method('put')
            <div class="mb-3">
                <label class="form-label">nama</label>
                <input type="text" class="form-control" name="name" placeholder="masukan nama "
                value="{{ $data->name }}">
              </div>
              <div class="mb-3">
                <label class="form-label">jabatan</label>
                <input type="text" class="form-control" name="jabatan" placeholder="masukan jabatan"
                value="{{ $data->jabatan }}">
              </div>
              <div class="mb-3">
                <label class="form-label">tahun masuk </label>
                <input type="text" class="form-control" name="tahun_masuk" placeholder="tahun masuk"
                value="{{ $data->tahun_masuk }}">
              </div>
              <div class="mb-3">
                <label class="form-label">tahun keluar</label>
                <input type="text" class="form-control" name="tahun_keluar" placeholder="tahun keluar"
                value="{{ $data->tahun_keluar }}">
              </div>
              <div class="mb-3">
                <input type="submit" value="simpan" class="btn_btn_primary">
              </div>
        </form>

    </div>
</div>

        </div>
    </main>
@endsection