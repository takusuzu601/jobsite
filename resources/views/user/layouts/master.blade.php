<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .sidebar {
            height: 100vh;
            transition: width 0.3s ease, transform 0.3s ease;
        }

        @media (max-width: 1200px) {
            .sidebar {
                transform: translateX(-100%);
                width: 0;
                overflow: hidden;
            }

            .main-content {
                margin-left: 0;
            }
        }

        /* モーダルが開いているときに背景を固定 */
        body.modal-open {
            overflow: hidden;
        }

        .hidden-checkbox {
            display: none;
        }

        /* ラベルのデフォルト状態 */
        .checkbox-label {
            display: inline-block;
            padding: 10px;
            cursor: pointer;
            border: 2px solid gray;
            transition: background-color 0.3s ease;
        }

        /* チェックボックスがオンのときのラベルの背景色 */
        .hidden-checkbox:checked + .checkbox-label {
            background-color: pink;
            border-color: pink;
        }
        .delete-icon {
            display: inline-block;
            width: 20px;
            height: 20px;
            margin-left: 10px;
            cursor: pointer;
            background-color: red;
            color: white;
            text-align: center;
            line-height: 20px;
            border-radius: 50%;
        }

        .btn-reset:hover {
            background-color: #c53030; /* Tailwind's red-700 */
        }
    </style>
</head>

<body>

    @include('user.parts.header')

    @yield('contents')

    @stack('scripts')
</body>

</html>
