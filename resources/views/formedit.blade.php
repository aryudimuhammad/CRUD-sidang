<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Form Edit</title>

    <!-- Fonts -->
    <link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('css/bootstrap.css')}}" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>

<body>
    <div style="margin: 55px;">
        <div class="card">
            <div class="card-body">
                <form method="post" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <div class="form-group">
                        <label for="nama">nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="{{$data->nama}}">
                    </div>
                    <div class="form-group">
                        <label for="nama1">nama1</label>
                        <input type="text" class="form-control" id="nama1" name="nama1" value="{{$data->nama1}}">
                    </div>
                    <div class="form-group">
                        <label for="alamat">alamat</label>
                        <textarea class="form-control" id="alamat" name="alamat"> {{$data->alamat}} </textarea>
                    </div>
                    <div class="form-group">
                        <label for="gambar">gambar</label>
                        <input type="file" class="form-control" id="gambar" name="gambar" value="{{$data->gambar}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Ubah</button>
                    <a type="button" class="btn btn-danger" href="{{route('index')}}">Kembali</a>
                </form>
            </div>
        </div>
    </div>

    <script src="{{url('js/bootstrap.bundle.js')}}"></script>
    <script src="{{url('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('js/bootstrap.js')}}"></script>
    <script src="{{url('js/bootstrap.min.js')}}"></script>
</body>

</html>
