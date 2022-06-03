<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan vue</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <style>
        body{
            margin: 15%;
        }
    </style>
</head>
<body>
    <div id="app">
        <h1 v-text="title + 'Belajar Vue'"></h1>
        <br>
        <header-component></header-component>
        <br>
        <router-view></router-view>
        <br>
        <footer-component></footer-component>

    </div>

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>