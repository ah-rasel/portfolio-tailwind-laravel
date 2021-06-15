<!doctype html>
<html lang="en" x-data="dataApp()">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}" defer></script>
    <title>Document</title>
</head>
<body>
 <h3 x-show="isSideMenuOpen">Hello</h3>
<button @click="toggleSideMenu">Toggle</button>
</body>
</html>
