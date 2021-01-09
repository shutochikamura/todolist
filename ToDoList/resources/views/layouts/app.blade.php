<html lang="ja">

<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0" charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <style>
        body {
            width: auto;
            -webkit-text-size-adjust: 100%;
            text-align: center;
        }

        a {
            font-size: 20px;
            color: gray;
            text-decoration: none;
        }

        a:hover {
            opacity: 0.7;
            transition: 0.5s;
        }

        header {
            border: groove;
            width: 100%;
            height: 110px;
            position: fixed;
            z-index: 9999;
            top: 5;
            left: 0;
            background-color: white;
        }

        .header-navi {
            float: left;
            margin: 5pt 10pt;
            display: block;
        }

        .header-menu {
            text-align: right;
        }

        .header-login-menu {
            margin-top: 40px;
            padding: 10px;
        }

        /*ホーム画面*/
        .menu-label {
            width: 80px;
            display: block;
            margin-bottom: 1px;
            padding: 5px 50px 5px 30px;
            cursor: pointer;
            float: right;
            font-size: 17pt;
        }

        .menu-label:hover {
            border: groove;
            transition: 0.2s;
        }

        .accordion {
            display: none;
        }

        .header-sub-menu {
            border: 1px solid darkgray;
            padding: 0 10px;
            float: right;
            margin-top: 50px;
            height: 0;
            opacity: 0;
            transition: .5s;
            visibility: hidden;
        }

        .header-sub-menu p {
            color: black;
        }

        .accordion:checked+.menu-label+.header-sub-menu {
            height: 40px;
            opacity: 1;
            padding: 10px;
            visibility: visible;

            line-height: 40%;
            background-color: white;
        }


        .main {
            padding: 160px 4%;
            width: 380px;
            display: inline-table;
        }

        h1 {
            font-size: 25pt;
            color: darkslategrey;
        }

        p {
            font-size: 15pt;
        }

        .content {
            border: outset;
            padding: 15px;
            margin: 0px;
            font-family: 'Yu Gothic';
        }

        .title {
            background-color: lightgray;
            border: inset;
            text-align: center;
            margin-bottom: 0%;
            width: auto;
        }

        .textbox {
            display: inline-block;
            padding: 0 5px 5px 5px;
        }

        .text {
            display: inline-block;
            font-size: 20px;
            width: auto;
        }

        .btn {
            border-radius: 5pt;
            font-size: 20px;
            margin-top: 10px;
            display: inline-block;
            text-align: center;
        }

        .btn:hover {
            opacity: 0.7;
            transition: 0.5s;
        }

        .primary {
            background-color: lightskyblue;
        }

        .todolist {
            padding-top: 160px;
        }

        .h3 {
            font-size: 25px;
        }

        .todo-radio {
            display: block;
        }

        .radio {
            cursor: pointer;
            color: gray;
            display: inline;
            border-radius: 10px;
        }
    </style>

</head>

<body>
    <header>
        <div class="header-navi">
            <h2>Laravel</h2>
        </div>
        <div class="header-menu">
            @yield('header')
        </div>
    </header>
    <div class="todolist">

        <div>
            <h1 class="title">@yield('title')</h1>
        </div>
        <div class="content">
            @yield('content')
        </div>
    </div>

</body>

</html>
