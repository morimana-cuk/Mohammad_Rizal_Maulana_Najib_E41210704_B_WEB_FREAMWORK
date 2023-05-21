<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Request dengna input laravel</title>
</head>
<body>
    <form action="{{ route('proses') }}" method="post">
        @csrf

        Nama:<input type="text" name="nama"><br/>
        @if ($errors->has('nama'))
            <span class="text-danger small">
                <p>{{ $errors->first('nama') }}</p>
            </span>
        @endif
        Alamat:<input type="text" name="alamat"><br/>
         @if ($errors->has('alamat'))
            <span class="text-danger small">
                <p>{{ $errors->first('alamat') }}</p>
            </span>
        @endif
        <input type="submit" value="simpan">

    </form>
</body>
</html>