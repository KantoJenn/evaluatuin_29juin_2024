<!DOCTYPE html>
<html lang="en">

<head>
    <title>LOGIN</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('public/img/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('public/graindashboard/css/graindashboard.css') }}">
</head>

<body class="">
    <main class="main">
        <div class="content">
            <div class="container-fluid pb-5">
                <div class="row justify-content-md-center">
                    <div class="card-wrapper col-12 col-md-4 mt-5">
                        <div class="brand text-center mb-3">
                            <a href="/"><img src="{{ asset('public/img/logo.png') }}"></a>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Se connecter Client</h4>


                                <ul>
                                    <!-- Boucle io otrn am java hoe for (int i = 0; i<5; i++) et -->
                                    @foreach ($errors->all() as $error)
                                        <li class="alert alert-danger">{{ $error }}</li>
                                    @endforeach
                                </ul>
                                <form action="/login/client" method="POST">

                                    @csrf

                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" name="email">
                                    </div>
                                    <div class="form-group">
                                        <label>Type</label>
                                        <select class="form-control" name="type">
                                            @foreach ($type as $types)
                                                <option value="{{ $types->id }}">{{ $types->nom }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group no-margin">
                                        <button type="submit" class="btn btn-primary btn-block">
                                            Se connecter
                                        </button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="{{ asset('public/graindashboard/js/graindashboard.js') }}"></script>
    <script src="{{ asset('public/graindashboard/js/graindashboard.vendor.js') }}"></script>
</body>

</html>
