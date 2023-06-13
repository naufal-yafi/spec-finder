    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        .btn-rise {
            position: fixed;
            right: 2rem;
            bottom: 2rem;
            z-index: 99;
            border: none;
            height: 40px;
            width: 40px;
        }

        .btn-rise:hover {
            opacity: .8;
        }

        #riseDown {
            transform: rotate(180deg)
        }

        .hidden-btn {
            display: none;
        }

        .list-unstyled li a:hover {
            opacity: .7;
        }
    </style>
