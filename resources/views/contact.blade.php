<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Телефонный справочник</title>
</head>

<div class="row">
    <div class="col-md-12">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
            <a class="navbar-brand" href="{{route('home')}}">Телефонный справочник</a>
        </nav>
        <div class="container">
            <h3>Страница добавления котакта</h3><br>
            @include('message')

            <form action="{{ route('contact-form') }}" method="post">
                @csrf
                <div class="form-group" col-mb-12>
                    <label for="name">ФИО</label>
                    <input type="text" name="name" placeholder="Введите ФИО" id="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">email</label>
                    <input type="email" name="email" placeholder="Введите email" id="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="phone">Номер телефона</label>
                    <input type="number" name="phone" placeholder="Введите номер" id="phone" class="form-control">
                </div>
                <div class="form-group">
                    <label for="city">Город</label>
                    <input type="text" name="city" placeholder="Введите город" id="city" class="form-control">
                </div>
                <button type="submit" class="btn btn-success">Отправить</button>
            </form>

        </div>
    </div>
</div>
