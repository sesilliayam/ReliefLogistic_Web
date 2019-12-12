@extends('layouts.master')
@section('content')
    @include('contents.event.eventheader')
     <!-- Services Section -->
    <section class="page-section bg-grey" id="event">
        <div class="container">
            <h2 class="text-center mt-0">Daftar Event</h2>
            <hr class="divider my-4">
            <div class="row">
                <div class="col-md-2">

                </div>
                <div class="col-md-8 ">
                    <form action="#">
                        <div class="form-group">
                            <label for="p_option_event">Nama Event</label>
                            <select class="form-control" name="p_option_event" id="p_option_event">
                                <option value="#">Event1</option>
                                <option value="#">Event2</option>
                                <option value="#">Event3</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="p_nama">Nama Peserta</label>
                            <input type="text" name="p_nama" id="p_nama" class="form-control" placeholder="Nama Peserta">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Alamat Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
                        </div>
                        <button type="submit" class="btn btn-primary">Daftar</button>
                    </form>
                    <center><a href="{{route('event.index')}}">Kembali ke halaman event</a></center>
                    
                </div>                       
            </div>
        </div>
    </section>
@endsection