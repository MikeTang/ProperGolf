<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        {{-- <link href='https://fonts.googleapis.com/css?family=Raleway:400,200,500,700' rel='stylesheet' type='text/css'> --}}
        <link rel="stylesheet" href="{{ elixir('css/app.css') }}">
    </head>
    <body>
        
        <header class="container-fluid">
        
            <div class="container">
                <div class="row">
                    <div class="col-md-4 logo">
                        <div>Logo</div>
                    </div>
                    <div class="col-md-8 nav">
                        <ul>
                            <li>Log In</li>
                            <li>Sign Up</li>
                        </ul>
                    </div>
                </div>
            </div>

        </header>
        
        
        @yield('content')

    </body>
</html>
