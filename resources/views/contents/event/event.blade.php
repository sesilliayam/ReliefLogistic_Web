<!DOCTYPE html>
<html lang="en">
    @include('layouts.head')
    
    <body>
        {{-- including navbar --}}
        @include('layouts.navigation')

        {{-- di sini kontennya --}}
        {{-- including navbar --}}
        @include('contents.event.eventheader')

        @include('landingpage.event')

        {{-- including footer --}}
        @include('layouts.footer')

        {{-- including JavaScript external resource --}}
        @include('layouts.resource')
    </body>
  
    {{-- including pop up modals for login and register --}}
    @include('landingpage.popupmodal')
  
</html>