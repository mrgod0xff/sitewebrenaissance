<!DOCTYPE html>
<html lang="en">
<head>
    <title><?= ucfirst($page) ?> - Rénaissance</title>
    <?php include_once 'views/includes/head.php'; ?>
    <?php include_once 'views/includes/headstyle.php'; ?> 
</head>
<body>
    <!--header-->
    <?php include_once 'views/includes/header.php'; ?>
    <!--header-->
    <section>
            <div class="">
                <img src="https://cdn.pixabay.com/photo/2017/11/12/22/50/human-2944065__340.jpg" style="width: 100%">
            </div>
    </section>

        <!--Main Layout-->
        <main>
        <div class="container-fluid mb-5">
            <!--Grid row-->
            <div class="row" style="margin-top: -100px;">
                <!--Grid column-->
                <div class="col-md-12 px-lg-5">
                    <!--Card-->
                    <div class="card pb-5 mx-md-3">
                        <div class="card-body">

                            <div class="container">
                              <div class="row">
                                <!-- Grid row -->
                                <div class="row">
                                  <!-- Grid column -->
                                  <div class="col-lg-4 col-md-12 mb-4">

                                    <!--Modal: Name-->
                                    <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                      <div class="modal-dialog modal-lg" role="document">

                                        <!--Content-->
                                        <div class="modal-content">

                                          <!--Body-->
                                          <div class="modal-body mb-0 p-0">

                                            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/A3PDXmYoF5U"
                                              allowfullscreen></iframe>
                                            </div>

                                          </div>

                                          <!--Footer-->
                                          <div class="modal-footer justify-content-center">
                                            <span class="mr-4">Spread the word!</span>
                                            <a type="button" class="btn-floating btn-sm btn-fb"><i class="fab fa-facebook-f"></i></a>
                                            <!--Twitter-->
                                            <a type="button" class="btn-floating btn-sm btn-tw"><i class="fab fa-twitter"></i></a>
                                            <!--Google +-->
                                            <a type="button" class="btn-floating btn-sm btn-gplus"><i class="fab fa-google-plus-g"></i></a>
                                            <!--Linkedin-->
                                            <a type="button" class="btn-floating btn-sm btn-ins"><i class="fab fa-linkedin-in"></i></a>

                                            <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>

                                          </div>

                                        </div>
                                        <!--/.Content-->

                                      </div>
                                    </div>
                                    <!--Modal: Name-->

                                    <a><img class="img-fluid z-depth-1" src="https://mdbootstrap.com/img/screens/yt/screen-video-1.jpg" alt="video"
                                      data-toggle="modal" data-target="#modal1"></a>

                                    </div>
                                    <!-- Grid column -->

                                    <!-- Grid column -->
                                    <div class="col-lg-4 col-md-6 mb-4">

                                      <!--Modal: Name-->
                                      <div class="modal fade" id="modal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">

                                          <!--Content-->
                                          <div class="modal-content">

                                            <!--Body-->
                                            <div class="modal-body mb-0 p-0">

                                              <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/wTcNtgA6gHs"
                                                allowfullscreen></iframe>
                                              </div>

                                            </div>

                                            <!--Footer-->
                                            <div class="modal-footer justify-content-center">
                                              <span class="mr-4">Spread the word!</span>
                                              <a type="button" class="btn-floating btn-sm btn-fb"><i class="fab fa-facebook-f"></i></a>
                                              <!--Twitter-->
                                              <a type="button" class="btn-floating btn-sm btn-tw"><i class="fab fa-twitter"></i></a>
                                              <!--Google +-->
                                              <a type="button" class="btn-floating btn-sm btn-gplus"><i class="fab fa-google-plus-g"></i></a>
                                              <!--Linkedin-->
                                              <a type="button" class="btn-floating btn-sm btn-ins"><i class="fab fa-linkedin-in"></i></a>

                                              <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>

                                            </div>

                                          </div>
                                          <!--/.Content-->

                                        </div>
                                      </div>
                                      <!--Modal: Name-->

                                      <a><img class="img-fluid z-depth-1" src="https://mdbootstrap.com/img/screens/yt/screen-video-2.jpg" alt="video"
                                        data-toggle="modal" data-target="#modal6"></a>

                                      </div>
                                      <!-- Grid column -->

                                      <!-- Grid column -->
                                      <div class="col-lg-4 col-md-6 mb-4">

                                        <!--Modal: Name-->
                                        <div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                          <div class="modal-dialog modal-lg" role="document">

                                            <!--Content-->
                                            <div class="modal-content">

                                              <!--Body-->
                                              <div class="modal-body mb-0 p-0">

                                                <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                                  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/vlDzYIIOYmM"
                                                  allowfullscreen></iframe>
                                                </div>

                                              </div>

                                              <!--Footer-->
                                              <div class="modal-footer justify-content-center">
                                                <span class="mr-4">Spread the word!</span>
                                                <a type="button" class="btn-floating btn-sm btn-fb"><i class="fab fa-facebook-f"></i></a>
                                                <!--Twitter-->
                                                <a type="button" class="btn-floating btn-sm btn-tw"><i class="fab fa-twitter"></i></a>
                                                <!--Google +-->
                                                <a type="button" class="btn-floating btn-sm btn-gplus"><i class="fab fa-google-plus-g"></i></a>
                                                <!--Linkedin-->
                                                <a type="button" class="btn-floating btn-sm btn-ins"><i class="fab fa-linkedin-in"></i></a>

                                                <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>

                                              </div>

                                            </div>
                                            <!--/.Content-->

                                          </div>
                                        </div>
                                        <!--Modal: Name-->

                                        <a><img class="img-fluid z-depth-1" src="https://mdbootstrap.com/img/screens/yt/screen-video-3.jpg" alt="video"
                                          data-toggle="modal" data-target="#modal4"></a>

                                        </div>
                                        <!-- Grid column -->

                                      </div>
                                      <!-- Grid row -->

                                      <!-- Grid row -->
                                      <div class="row">

                                        <!-- Grid column -->
                                        <div class="col-lg-4 col-md-12 mb-4">

                                          <!--Modal: Name-->
                                          <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">

                                              <!--Content-->
                                              <div class="modal-content">

                                                <!--Body-->
                                                <div class="modal-body mb-0 p-0">

                                                  <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/GUEZCxBcM78"
                                                    allowfullscreen></iframe>
                                                  </div>

                                                </div>
                                                <!--Footer-->
                                                <div class="modal-footer justify-content-center">
                                                  <span class="mr-4">Spread the word!</span>
                                                  <a type="button" class="btn-floating btn-sm btn-fb"><i class="fab fa-facebook-f"></i></a>
                                                  <!--Twitter-->
                                                  <a type="button" class="btn-floating btn-sm btn-tw"><i class="fab fa-twitter"></i></a>
                                                  <!--Google +-->
                                                  <a type="button" class="btn-floating btn-sm btn-gplus"><i class="fab fa-google-plus-g"></i></a>
                                                  <!--Linkedin-->
                                                  <a type="button" class="btn-floating btn-sm btn-ins"><i class="fab fa-linkedin-in"></i></a>

                                                  <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>

                                                </div>

                                              </div>
                                              <!--/.Content-->

                                            </div>
                                          </div>
                                          <!--Modal: Name-->

                                          <a><img class="img-fluid z-depth-1" src="https://mdbootstrap.com/img/screens/yt/screen-video-4.jpg" alt="video"
                                            data-toggle="modal" data-target="#modal2"></a>

                                          </div>
                                          <!-- Grid column -->

                                          <!-- Grid column -->
                                          <div class="col-lg-4 col-md-6 mb-4">

                                            <!--Modal: Name-->
                                            <div class="modal fade" id="modal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                              <div class="modal-dialog modal-lg" role="document">

                                                <!--Content-->
                                                <div class="modal-content">

                                                  <!--Body-->
                                                  <div class="modal-body mb-0 p-0">

                                                    <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                                      <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/PjGkVCAo8Fw"
                                                      allowfullscreen></iframe>
                                                    </div>

                                                  </div>

                                                  <!--Footer-->
                                                  <div class="modal-footer justify-content-center">
                                                    <span class="mr-4">Spread the word!</span>
                                                    <a type="button" class="btn-floating btn-sm btn-fb"><i class="fab fa-facebook-f"></i></a>
                                                    <!--Twitter-->
                                                    <a type="button" class="btn-floating btn-sm btn-tw"><i class="fab fa-twitter"></i></a>
                                                    <!--Google +-->
                                                    <a type="button" class="btn-floating btn-sm btn-gplus"><i class="fab fa-google-plus-g"></i></a>
                                                    <!--Linkedin-->
                                                    <a type="button" class="btn-floating btn-sm btn-ins"><i class="fab fa-linkedin-in"></i></a>

                                                    <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>

                                                  </div>

                                                </div>
                                                <!--/.Content-->

                                              </div>
                                            </div>
                                            <!--Modal: Name-->

                                            <a><img class="img-fluid z-depth-1" src="https://mdbootstrap.com/img/screens/yt/screen-video-5.jpg" alt="video"
                                              data-toggle="modal" data-target="#modal5"></a>

                                            </div>
                                            <!-- Grid column -->

                                            <!-- Grid column -->
                                            <div class="col-lg-4 col-md-6 mb-4">

                                              <!--Modal: Name-->
                                              <div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">

                                                  <!--Content-->
                                                  <div class="modal-content">

                                                    <!--Body-->
                                                    <div class="modal-body mb-0 p-0">

                                                      <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/gsNY7TV4r1M"
                                                        allowfullscreen></iframe>
                                                      </div>

                                                    </div>

                                                    <!--Footer-->
                                                    <div class="modal-footer d-block d-md-flex justify-content-center">
                                                      <span class="mr-4">Spread the word!</span>
                                                      <a type="button" class="btn-floating btn-sm btn-fb"><i class="fab fa-facebook-f"></i></a>
                                                      <!--Twitter-->
                                                      <a type="button" class="btn-floating btn-sm btn-tw"><i class="fab fa-twitter"></i></a>
                                                      <!--Google +-->
                                                      <a type="button" class="btn-floating btn-sm btn-gplus"><i class="fab fa-google-plus-g"></i></a>
                                                      <!--Linkedin-->
                                                      <a type="button" class="btn-floating btn-sm btn-ins"><i class="fab fa-linkedin-in"></i></a>

                                                      <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>

                                                    </div>

                                                  </div>
                                                  <!--/.Content-->

                                                </div>
                                              </div>
                                              <!--Modal: Name-->

                                              <a><img class="img-fluid z-depth-1" src="https://mdbootstrap.com/img/screens/yt/screen-video-6.jpg" alt="video"
                                                data-toggle="modal" data-target="#modal3"></a>

                                              </div>
                                              <!-- Grid column -->
                                            </div>
                                            <!-- Grid row -->
                              </div>
                            <!--Grid column-->
                            </div>
                        <!--Grid row-->
                        </div>
                    <!--/Card-->
                    </div>
                <!--/Grid column-->
                </div>
            <!--/Grid row-->
            </div>
        </div>
    </main>
    <!--Main Layout-->
        

    <!--footer-->
    <?php include_once 'views/includes/footer.php'; ?>
    <!--footer-->
    <?php include_once 'views/includes/scripts.php'; ?>
</body>
</html>