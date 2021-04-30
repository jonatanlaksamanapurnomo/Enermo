<!DOCTYPE html>
<html lang="en">

@include('templates.head')
@yield('style')

<body>
    @include('templates.navbar',['active'=>$active])
    @yield('content')
    @include('templates.footer')
</body>
<script src={{ asset('js/jquery-3.3.1.min.js') }}></script>
<script src={{ asset('js/bootstrap.min.js') }}></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>
<script src={{ asset('js/main.js') }}></script>
<script>
    
</script>
</html>
