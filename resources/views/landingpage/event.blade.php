 <!-- Services Section -->
 <section class="page-section bg-grey" id="event">
    <div class="container">
      <h2 class="text-center mt-0">Event Terdekat</h2>
      <hr class="divider my-4">
      <div class="row">
          <div class="col-md-1">
          </div>
          <div class="col-md-10">
            {{-- <div class="col-lg-3 col-md-6 text-center">
              <div class="mt-5">
                <img src="{{asset('img/event/raw_e1.jpg')}}" class="bulat">
                <br><br><h3 class="h4 mb-2">Nama Event1</h3>
                <p class="text-muted mb-0">Deskripsi event1</p>
                <p class="text-muted mb-0">Tanggal Event | Lokasi Event</p>
                <p class="text-muted mb-0">Penyelenggara event</p>
              </div>
            </div>   --}}
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                  <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active transbox">
                  <img src="{{asset('img/event/tanam_pohon.jpg')}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>First slide label</h5>
                      <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('img/event/tanam_pohon.jpg')}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Second slide label</h5>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('img/event/tanam_pohon.jpg')}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Third slide label</h5>
                      <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
          </div>
      </div>
      <br><br>
    <center><a class="btn btn-primary btn-xl js-scroll-trigger" href="{{route('event.index')}}">Lihat Event Selengkapnya</a></center>
    </div>

  </section>
