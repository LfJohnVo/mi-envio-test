<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Productos</title>

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet" />
    @livewireStyles

    <style>
        .progress-bar {
            height: 8px;
            background-color: rgba(5, 114, 206, 0.2);
            width: 100%;
            overflow: hidden;
        }

        .progress-bar-value {
            width: 100%;
            height: 100%;
            background-color: rgb(5, 114, 206);
            animation: indeterminateAnimation 1s infinite linear;
            transform-origin: 0% 50%;
        }

        @keyframes indeterminateAnimation {
            0% {
                transform: translateX(0) scaleX(0);
            }

            40% {
                transform: translateX(0) scaleX(0.4);
            }

            100% {
                transform: translateX(100%) scaleX(0.5);
            }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <!-- Container wrapper -->
        <div class="container-fluid">
            <!-- Toggle button -->
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Navbar brand -->
                <a class="navbar-brand mt-2 mt-lg-0" href="#">
                    <img src="data:image/png;base64,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"
                        height="55" alt="mienviotest" loading="lazy" />&nbsp;Mi Envio test
                </a>
            </div>
            <!-- Collapsible wrapper -->

        </div>
        <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->
    <div class="container py-4">
        @livewire('product-component')
    </div>

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
    @livewireScripts
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <x-livewire-alert::scripts />
</body>

</html>
