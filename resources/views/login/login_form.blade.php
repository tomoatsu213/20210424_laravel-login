<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ログインフォーム</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/signin.css') }}">
    <script src="{{ asset('js/app.js') }}" defer>
    </script>
</head>


<body class="text-center">
    <main class="form-signin">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <h1 class="h3 mb-3 fw-normal">ログインフォーム</h1>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                      </ul>
                    </div>
                    @endif
                    <x-alert type="danger" :session="session('login_error')"/>
                    <x-alert type="danger" :session="session('logout')"/>
            <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required
                autofocus>
            <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password"
                required>
            <button class="w-100 btn btn-lg btn-primary" type="submit">ログイン</button>
        </form>
    </main>
</body>

</html>
