<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Метражи - Недвижимость</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://kit.fontawesome.com/54a38a8942.js" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <v-header></v-header>
    <router-view></router-view>
</div>
</body>
</html>
