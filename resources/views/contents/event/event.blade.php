@extends('layouts.master')
@section('content')
    @include('contents.event.eventheader')
     <!-- Services Section -->
    <section class="page-section bg-grey" id="event">
           <div class="container">
             <h2 class="text-center mt-0">Event Terdekat</h2>
             <hr class="divider my-4">
             <div class="row">
               <div class="col-lg-3 col-md-6 text-center">
                 <div class="mt-5">
                   <img src="{{asset('img/event/raw_e1.jpg')}}" class="bulat">
                   <br><br><h3 class="h4 mb-2">Tahun Baru, Hutan Baru</h3>
                   <p class="text-muted mb-0">Our themes are updated regularly to keep them bug free!</p>
                 </div>
               </div>
               <div class="col-lg-3 col-md-6 text-center">
                 <div class="mt-5">
                   <i class="fas fa-4x fa-gem text-primary mb-4"></i>
                   <h3 class="h4 mb-2">Sturdy Themes</h3>
                   <p class="text-muted mb-0">Our themes are updated regularly to keep them bug free!</p>
                 </div>
               </div>
               <div class="col-lg-3 col-md-6 text-center">
                 <div class="mt-5">
                   <i class="fas fa-4x fa-gem text-primary mb-4"></i>
                   <h3 class="h4 mb-2">Sturdy Themes</h3>
                   <p class="text-muted mb-0">Our themes are updated regularly to keep them bug free!</p>
                 </div>
               </div>
               <div class="col-lg-3 col-md-6 text-center">
                 <div class="mt-5">
                   <i class="fas fa-4x fa-gem text-primary mb-4"></i>
                   <h3 class="h4 mb-2">Sturdy Themes</h3>
                   <p class="text-muted mb-0">Our themes are updated regularly to keep them bug free!</p>
                 </div>
               </div>
               
             </div>
             <br><br>
           <center><a class="btn btn-primary btn-xl js-scroll-trigger" href="{{route('event')}}">Lihat Event Selengkapnya</a></center>
        </div>
    
      </section>
@endsection