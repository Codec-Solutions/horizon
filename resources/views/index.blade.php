<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <title>Horizon Framework</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
    <link href="https://fonts.googleapis.com/css2?family=Aclonica&family=Open+Sans+Condensed:wght@300&display=swap"
        rel="stylesheet">

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Open Sans Condensed', sans-serif;
            color: #111;
        }

        .container {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .container .block h2 {
            margin: 0;
            font-family: 'Aclonica', sans-serif;
            font-size: 64px;
            color: #545454;
        }

        .container .block p {
            margin: 0;
        }

        .container .menu {
            margin-top: 40px;
        }

        .container .menu ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .container .menu ul li {
            display: inline-block;
            text-transform: uppercase;
        }

        .container .menu ul li {
            padding: 30px;
        }

        .container .menu ul li a,
        .container .menu ul li a:hover,
        .container .menu ul li a:visited {
            text-decoration: none;
            color: #111;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="block">
            <h2>{{ $name }}</h2>
            <h1>Introducing the future of framework</h1>
            <p>Welcome to the new framework.</p>

            <div class="menu">
                <ul>
                    <li><a href="#" title="See the documentation">Documentation</a></li>
                    <li>Thank !</li>
                    <li>
                        <a href="https://github.com/Hen-Dricks/horizon-framework" title="Fork on github"
                            target="blank">Github</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>