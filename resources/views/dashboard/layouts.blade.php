<!DOCTYPE html>
<html lang="en">

@include('dashboard.head')

<body id="page-top">

   @include('dashboard.sidebar')

   @include('dashboard.top')
    
     <div class="container-fluid">

        @yield('content')
    
       </div>
      
   @include('dashboard.footer')

</body>

</html>