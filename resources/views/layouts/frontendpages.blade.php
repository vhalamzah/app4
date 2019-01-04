<!doctype html>
<html lang="{{ app()->getLocale() }}">
    @include('partials._head')
   
    <body>
         
         <header>    
          @include('partials._nav')    
         </header>

           @yield('content')
         <footer>
          @include('partials._footer') 
         </footer>
         @include('partials._javascript')
    </body>
</html>

    
