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

        #input-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 78%;
            border: 1px solid #ced4da;
            border-radius: .6rem;
        }

        .icon-hover {
            opacity: .6;
        }

        .icon-hover:hover {
            opacity: 1;
        }
    </style>
