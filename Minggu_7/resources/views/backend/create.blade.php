@extends('backend/layouts.template')

@section('content')
    <main id="main" class="main">
        <div lass="pagetitle">
            <div class="card">
    <div class="card-body">
        <form action="{{ route('proses') }}" method="post">
            @csrf
            <div class="mb-3">
                <label class="form-label">nama</label>
                <input type="text" class="form-control" name="name" placeholder="masukan nama ">
              </div>
              <div class="mb-3">
                <label class="form-label">jabatan</label>
                <input type="text" class="form-control" name="jabatan" placeholder="masukan jabatan">
              </div>
              <div class="mb-3">
                <label class="form-label">tahun masuk </label>
                <input type="text" class="form-control" name="tahun_masuk" placeholder="tahun masuk">
              </div>
              <div class="mb-3">
                <label class="form-label">tahun keluar</label>
                <input type="text" class="form-control" name="tahun_keluar" placeholder="tahun keluar">
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