<!DOCTYPE html>
<html lang="en">

  @include('layouts.head')

<body id="page-top">

  {{-- including navbar --}}
  @include('layouts.navbarcontent')

  @yield('content')

  {{-- including footer --}}
  @include('layouts.footer')

  {{-- including JavaScript external resource --}}
  @include('layouts.resource')

</body>

</html>
