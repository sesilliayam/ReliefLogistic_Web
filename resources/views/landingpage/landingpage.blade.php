<!DOCTYPE html>
<html lang="en">

  @include('layouts.head')

<body id="page-top">

  {{-- including navbar --}}
  @include('layouts.navigation')

  {{-- including header --}}
  @include('landingpage.header')

  {{-- including about --}}
  @include('landingpage.about')

  {{-- including service --}}
  @include('landingpage.service')

  {{-- including event --}}
  @include('landingpage.event')

  {{-- including community --}}
  @include('landingpage.community')

  {{-- including contact --}}
  @include('landingpage.contact')

  {{-- including footer --}}
  @include('layouts.footer')

  {{-- including JavaScript external resource --}}
  @include('layouts.resource')  

  

</body>

{{-- including pop up modals for login and register --}}
@include('landingpage.popupmodal')

</html>
