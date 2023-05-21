@extends('backend/layouts.template')


@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <a href="{{ route('page-tambah') }}" class=" btn-sm d-flex justify-content-end">tambah data </a>
            <div class="card">
                <div class="table-responsive">
                    <table class="table table-vcenter card-table">
                        <thead>
                            <tr>
                                {{-- <th>id</th> --}}
                                <th>Name</th>
                                <th>jabatan</th>
                                <th>tahun masuk</th>
                                <th>tahun keluar</th>
                                <th>action</th>
                                <th class="w-1"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                  <tr>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->jabatan }}</td>
                                <td>{{ $item->tahun_masuk }}</td>
                                <td>{{ $item->tahun_keluar }}</td>
                                <td>
                                    <a href="{{ route('page_edit',$item->id) }}">edit</a>

                                    <form action="{{ route('hapus',$item->id) }}" method="post">
                                        @csrf
                                        @method('delete')

                                        <input type="submit" value="hapus" class="btn btn-danger btn-sm">
                                    </form>
                                </td>

                            </tr>
                     
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div><!-- End Page Title -->



    </main>
@endsection
