<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
          <!-- Fonts -->

        <!-- Styles -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <!-- Scripts -->

      </head>
      <body>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="/recipes">Recipes</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item ">
                <a class="nav-link" href="/recipes">List <span class="sr-only">(current)</span></a>
              </li>
              @auth
              <li class="nav-item">
                <a class="nav-link active" href="/recipes/create">New</a>
              </li>
              @endauth

            </ul>
            <!-- Right Side Of Navbar -->
                  <ul class="navbar-nav ml-auto">
                      <!-- Authentication Links -->
                      @guest
                          <li class="nav-item">
                              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                          </li>
                          <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                          </li>
                      @else
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                              @csrf
                              <a class="nav-link" href="{{ route('logout') }}"
                                 onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                  {{ __('Logout') }}
                              </a>
                          </form>
                        @endguest
                    </ul>
                  </div>
                </nav>


        <main>
           @yield('content')
       </main>
    </body>
</html>
