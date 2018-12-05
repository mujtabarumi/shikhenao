<!DOCTYPE html>
<html lang="en">
@include('layouts/header')

<body class="home">

@include('layouts/navbar')

@yield('content')

@include('layouts/footer')
@yield('foot-js')
<div class="positionfixed"></div>
</body>

</html>