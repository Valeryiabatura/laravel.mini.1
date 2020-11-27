<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href=https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">">

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
    <a class="navbar-brand" href="{{route('home')}}">Телефонный справочник</a>
</nav>

<div class="container">
    <a class="navbar-brand" href="{{route('contact')}}" >Добавить контакт</a>

    <div class="row">

        <div class="col-md-12">

            <form method="get" action="{{ route('search') }}">
                <div class="form-row">
                    <div class="form-group col-md-10">
                        <input type="text" class="form-control" id="s" name="s" placeholder="Search..."> <br>

                    </div>
                    <div class="form-group col-md-2">

                        <button type="submit" class="btn btn-primary btn-block">Search</button>
                    </div>
                </div>

            </form>

        </div>

    </div>

    <div class="row mt-3 mb-3">
        <div class="col-md-12">

            @yield('content')

        </div>

    </div>

</div>
</body>
</html>




