
<!DOCTYPE html>
<html>
<head>
@include('includes/head')
</head>
<body>

  <!-- header section strats -->
  @include('includes/headerInner')
  <!-- end header section -->


@yield('content')


  <!-- info section -->
  @include('includes/info')
  <!-- end info_section -->


  <!-- footer section -->
  @include('includes/footer')
  <!-- footer section -->

  @include('includes/footerJS')
  
</body>

</html>