@include('layouts.__includes.head')

<body>
    @include('layouts.__includes.navbar')

    <div class="container-fluid py-4 bg-light">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-10 col-md-10">

                @if(session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif

                @if(session('error'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('error') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @yield('content')

            </div>
        </div>
    </div>

@include('layouts.__includes.footer')
