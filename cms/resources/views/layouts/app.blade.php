<!DOCTYPE html>
<html lang="ja">
<head>
<title>Book List</title>
<!-- CSS と JavaScript -->
{{ asset('js/app.js',true) }}
{{ asset('css/app.css',true) }}
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-default">
        <!-- ナビバーの内容 -->
        </nav>
    </div>
    @yield('content')
</body>
</html>