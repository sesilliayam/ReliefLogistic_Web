
{{-- Make the Modal --}}
<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <!--Content-->
    <div class="modal-content form-elegant">
      <!--Header-->
      <div class="modal-header text-center">
        <h3 class="modal-title w-100 dark-grey-text font-weight-bold my-3" id="myModalLabel"><strong>Halo Sahabat Alam!</strong></h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <center><p aria-setsize="12px">Silahkan masuk dengan akun yang sudah terdaftar.</p></center>
      <!--Body-->
      <div class="modal-body mx-4">
        <!--Body-->
      <form method="POST" action="{{ route('login') }}">
        @csrf  
        <div class="md-form mb-5">
          <!-- <input type="email" id="Form-email1" class="form-control validate" placeholder="Email"><br> -->
          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
          <!-- <input type="password" id="Form-pass1" class="form-control validate" placeholder="Password"> -->
          <br><input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
          {{-- <p class="font-small blue-text d-flex justify-content-end">Forgot <a href="#" class="blue-text ml-1">Password?</a></p> --}}
        </div>

        <div class="text-center mb-3">
          <button type="submit" class="btn btn-primary btn-xl js-scroll-trigger">Masuk</button>
        </div>
      </form>  
        <p class="font-small dark-grey-text text-right d-flex justify-content-center mb-3 pt-2">Atau masuk dengan:</p>

        <div class="row my-3 d-flex justify-content-center">
          <!--Facebook-->
          <!-- <button href="{{ route('sosial.auth', 'facebook') }}" type="submit" class="btn btn-white btn-rounded mr-md-3 z-depth-1a"><i class="fab fa-facebook-f text-center"></i></button> -->
          <a href="{{ route('sosial.auth', 'google') }}" class="btn btn-github"><i class="fab fa-google text-primary"></i>  Google</a>
          <!--Google --->
          <!-- <button href="{{ route('sosial.auth', 'google') }}" type="submit" class="btn btn-white btn-rounded z-depth-1a"><i class="fab fa-google-plus-g"></i></button> -->
          <a href="{{ route('sosial.auth', 'facebook') }}" class="btn btn-facebook"><i class="fab fa-facebook-f text-primary"></i> Facebook</a>
        </div>
      </div>
      <!--Footer-->
      {{-- <div class="modal-footer mx-5 pt-3 mb-1">
        <p class="font-small grey-text d-flex justify-content-end">Belum punya akun? <a href="#registerModal" class="blue-text ml-1">
            Daftar Sekarang!</a></p>
      </div> --}}
    </div>
    <!--/.Content-->
  </div>
</div>
<!-- Modal -->

<!-- Register Modal -->
<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <!--Content-->
    <div class="modal-content form-elegant">
      <!--Header-->
      <div class="modal-header text-center">
        <h3 class="modal-title w-100 dark-grey-text font-weight-bold my-3" id="myModalLabel"><strong>Daftar</strong></h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      
      <!--Body-->
      <div class="modal-body mx-4">
          <center><p>Daftarkan diri Anda dan bergabung dalam komunitas #SahabatAlam</p></center>
        <form method='POST' action="{{ route('register')}}">
            @csrf
        <!--Body-->
          <div class="md-form mb-5">
            <!-- <input type="text" id="nama" class="form-control validate" placeholder="Nama"><br> -->
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nama">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            <!-- <input type="email" id="email" class="form-control validate" placeholder="Email"><br> -->
            <br><input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            <!-- <input type="password" id="password" class="form-control validate" placeholder="Password"><br> -->
            <br><input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            <!-- <input type="password" id="confirmpassword" class="form-control validate" placeholder="Konfirmasi Password"> -->
            <br><input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Konfirmasi Password">
          </div>
          <div class="text-center mb-3">
            <button type="submit" class="btn btn-primary btn-xl js-scroll-trigger">Daftar</button>
          </div>
        </form>
      </div>
      <!--Footer-->
      {{-- <div class="modal-footer mx-5 pt-3 mb-1">
        <p class="font-small grey-text d-flex justify-content-end">Sudah punya akun? <a href="#" class="blue-text ml-1">
            Masuk dengan Akun</a></p>
      </div> --}}
    </div>
    <!--/.Content-->
  </div>
</div>
<!-- Modal -->