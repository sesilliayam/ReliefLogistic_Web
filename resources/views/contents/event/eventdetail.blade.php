@extends('layouts.master')
@section('content')
    @include('contents.event.eventheader')
     <!-- Services Section -->
    <section class="page-section bg-grey" id="#">
           <div class="container">
             <h2 class="text-center mt-0">Nama Event</h2>
             <hr class="divider my-4">
             <div class="row">
               <div class="col-lg-12 text-center">
                 <p>Di sini adalah detail dari eventnya</p>
                 <a href="{{route('event.index')}}">Kembali ke halaman event</a>
               </div>                        
             </div>   
        </div>
    
      </section>
@endsection