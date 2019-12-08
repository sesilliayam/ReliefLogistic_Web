
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
        <div class="md-form mb-5">
          <input type="email" id="Form-email1" class="form-control validate" placeholder="Email"><br>
          <input type="password" id="Form-pass1" class="form-control validate" placeholder="Password">
          <p class="font-small blue-text d-flex justify-content-end">Forgot <a href="#" class="blue-text ml-1">Password?</a></p>
        </div>

        <div class="text-center mb-3">
          <button type="button" class="btn btn-primary btn-xl js-scroll-trigger">Masuk</button>
        </div>
        <p class="font-small dark-grey-text text-right d-flex justify-content-center mb-3 pt-2">Atau masuk dengan:</p>

        <div class="row my-3 d-flex justify-content-center">
          <!--Facebook-->
          <button type="button" class="btn btn-white btn-rounded mr-md-3 z-depth-1a"><i class="fab fa-facebook-f text-center"></i></button>
          <!--Twitter-->
          <button type="button" class="btn btn-white btn-rounded mr-md-3 z-depth-1a"><i class="fab fa-twitter"></i></button>
          <!--Google +-->
          <button type="button" class="btn btn-white btn-rounded z-depth-1a"><i class="fab fa-google-plus-g"></i></button>
        </div>
      </div>
      <!--Footer-->
      <div class="modal-footer mx-5 pt-3 mb-1">
        <p class="font-small grey-text d-flex justify-content-end">Belum punya akun? <a href="#" class="blue-text ml-1">
            Daftar Sekarang!</a></p>
      </div>
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
        <!--Body-->
        <div class="md-form mb-5">
          <input type="email" id="Form-email1" class="form-control validate" placeholder="Email"><br>
          <input type="password" id="Form-pass1" class="form-control validate" placeholder="Password">
        </div>
        <div class="text-center mb-3">
          <button type="button" class="btn btn-primary btn-xl js-scroll-trigger">Daftar</button>
        </div>
      </div>
      <!--Footer-->
      <div class="modal-footer mx-5 pt-3 mb-1">
        <p class="font-small grey-text d-flex justify-content-end">Sudah punya akun? <a href="#" class="blue-text ml-1">
            Masuk dengan Akun</a></p>
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
<!-- Modal -->