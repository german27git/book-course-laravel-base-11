<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Soy el maestro</title>
</head>
<body>
    <header>
        header
    </header>

    @yield('content')

    <section>
        @yield('morecontent')
    </section>
    
</body>
</html>