<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
   <title>
    {{ config ('app.name')}} - @yield('title')
    </title>
   {{-- <link rel="stylesheets" href="{{ asset('vendor/my-auth/css/auth.css') }}"> --}}
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body class="bg-primary">
   <div id="layoutAuthentication">
      <div id="layoutAuthentication_content">
         <main>
            <div class="container">
               <div class="row justify-content-center">
                  <div class="col-lg-5">
                     <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header">
                           <h3 class="text-center font-weight-light my-4">
                              @yield('title')
                           </h3>
                        </div>
                        <div class="card-body">
                           @yield('content')
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </main>
      </div>
      <div id="layoutAuthentication_footer">
         @include('layouts._auth.footer')
      </div>
   </div>
   <script src="{{ asset('vendor/jquery/jquery-3.6.0.min.js') }}"></script>
   <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
   <script src="{{ asset('vendor/my-auth/js/auth.js') }}"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>