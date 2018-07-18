@extends ('layouts.master')

@section ('content')
<!-- Carousel starts -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        @foreach($carousel as $key => $data)
            <li data-target="#carousel-example-generic" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
        @endforeach
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        @foreach($carousel as $key => $data)
            <div class="carousel-item {{ $loop->first ? ' active' : '' }}" >
                <img src={{$data->image_carousel}}>
                <div class="container">
                    <div class="carousel-caption">
                        <h1>{{$data->text_carousel}}</h1>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Controls -->
    <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
</div>
<!-- Carousel ends -->

<!-- Wrap the rest of the page in another container to center all the content. -->
<div class="container threecolumns">

    <!-- Three columns of text below the carousel -->
    <div class="row">
        <div class="col-lg-4">
            @foreach($fasiliti_icon as $key => $data)
                <img class="rounded-circle" src={{$data->image_url}} alt="Generic placeholder image" width="140" height="140">
            @endforeach
            <h2>Fasiliti Masjid</h2>
            <p></p>
            <p>
                <button type="button" class="btn btn-secondary" data-toggle="collapse" data-target="#fasiliti">Lihat details >></button>
                <div id="fasiliti" class="collapse">
                    <div class="table-responsive">          
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Bilangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($fasiliti as $key => $data)
                                    <tr>    
                                        <th>{{$data->nama_fasiliti}}</th>
                                        <th>{{$data->bil_fasiliti}}</th>               
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </p>
        </div><!-- /.col-lg-4 -->

        <div class="col-lg-4">
            @foreach($ceramah_icon as $key => $data)
                <img class="rounded-circle" src={{$data->image_url}} alt="Generic placeholder image" width="140" height="140">
            @endforeach
            <h2>Ceramah Agama</h2>
            <p></p>
            <p>
                <button type="button" class="btn btn-secondary" data-toggle="collapse" data-target="#ceramah">Lihat details >></button>
                <div id="ceramah" class="collapse">
                    <div class="table-responsive">          
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Tajuk</th>
                                    <th>Tarikh</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($ceramah as $key => $data)
                                    <tr>    
                                        <th>{{$data->tajuk_ceramah}}</th>
                                        <th>{{$data->tarikh_ceramah}}</th>               
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </p>
        </div><!-- /.col-lg-4 -->

        <div class="col-lg-4">
            @foreach($kariah_icon as $key => $data)
                <img class="rounded-circle" src={{$data->image_url}} alt="Generic placeholder image" width="140" height="140">
            @endforeach
            <h2>Kariah Masjid</h2>
            <p></p>
            <p>
                <button type="button" class="btn btn-secondary" data-toggle="collapse" data-target="#kariah">Lihat details >></button>
                <div id="kariah" class="collapse">
                    @foreach($kariah_comment as $key => $data)
                        <p>{{$data->comment}}</p>
                    @endforeach

                    <div class="btn-group" role="group" aria-label="Basic example">
                        
                        <!--
                        <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="modal" data-target="#sign_in">
                            Sign In
                        </button>  

                        <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="modal" data-target="#sign_up">
                            Sign Up
                        </button>
                        -->

                        <a class="btn btn-sm btn-outline-dark" href="home" role="button">Log Masuk</a>

                        <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="modal" data-target="#kariah_downloads">
                            Downloads
                        </button>
                        
                    </div>

                    <!-- Modal download borang starts -->
                    <div class="modal fade" id="kariah_downloads">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
      
                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Download Borang</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
        
                                <!-- Modal body -->
                                <div class="modal-body">
                                    <div class="table-responsive">          
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Bil</th>
                                                    <th>Borang</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($kariah_borang as $key => $data)
                                                    <tr>    
                                                        <th>{{$data->id}}</th>
                                                        <th><a href={{$data->path_location}}>{{$data->description}}</a></th>               
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
        
                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
        
                            </div>
                        </div>
                    </div> <!-- Modal download borang ends --> 

                    <!-- Modal sign up starts -->
                    <div class="modal fade" id="sign_up">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
      
                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Sign Up</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
        
                                <!-- Modal body -->
                                <div class="modal-body">
                                    <form class="modal-body" action="/action_page.php">
                                        <div class="form-container">

                                            <label for="name"><b>Name</b></label>
                                            <input type="text" placeholder="Enter Name" name="name" class="form-input" required>
      
                                            <label for="email"><b>Email</b></label>
                                            <input type="text" placeholder="Enter Email" name="email" class="form-input" required>

                                            <label for="psw"><b>Password</b></label>
                                            <input type="password" placeholder="Enter Password" name="psw" class="form-input" required>

                                            <label for="psw-repeat"><b>Repeat Password</b></label>
                                            <input type="password" placeholder="Repeat Password" name="psw-repeat" class="form-input" required>
                                            
                                            <label>
                                                <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
                                            </label>

                                            <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

                                            <div class="clearfix">
                                                <button type="button" class="cancelbtn btn btn-danger" data-dismiss="modal">Cancel</button>
                                                <button type="submit" class="signupbtn btn btn-success">Sign Up</button>
                                            </div>
                                        </div>
                                    </form>     
                                </div>
        
                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
        
                            </div>
                        </div>
                    </div> <!-- Modal sign up ends --> 

                    <!-- Modal sign in starts -->
                    <div class="modal fade" id="sign_in">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
      
                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Sign In</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
        
                                <!-- Modal body -->
                                <div class="modal-body">     
                                    <form class="modal-body" action="/action_page.php">
                                        <div class="form-container">
      
                                            <label for="email"><b>Email</b></label>
                                            <input type="text" placeholder="Enter Email" name="email" class="form-input" required>

                                            <label for="psw"><b>Password</b></label>
                                            <input type="password" placeholder="Enter Password" name="psw" class="form-input" required>

                                            <label>
                                                <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
                                            </label>
                                            
                                            <div class="clearfix">
                                                <button type="button" class="cancelbtn btn btn-danger" data-dismiss="modal">Cancel</button>
                                                <button type="submit" class="signupbtn btn btn-success">Sign In</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
        
                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
        
                            </div>
                        </div>
                    </div> <!-- Modal sign in ends --> 

                </div>
            </p>
        </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->   

    <div class="row">
        <div class="col-md-8 blog-main">
            <!-- Aktiviti masjid starts -->
            <p></p><p></p>
            <h3 class="pb-3 mb-4 font-italic border-bottom">
                Aktiviti Masjid
            </h3>
            <div class="table-responsive">          
                <table class="table table-striped">
                    <!-- thead starts
                    <thead>
                        <tr>
                            <th>Tarikh</th>
                            <th>Nama Aktiviti</th>
                            <th>Masa</th>
                            <th>Tempat</th>
                        </tr>
                    </thead>
                    thead ends -->
                    <tbody>
                        @foreach($aktiviti as $key => $data)
                            <tr>    
                                <th>{{$data->tarikh_aktiviti}}</th> 
                                <th>{{$data->nama_aktiviti}}</th>
                                <th>{{$data->masa_aktiviti}}</th>
                                <th>{{$data->tempat_aktiviti}}</th> 
                                <th>
                                    <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#aktiviti_{{$key}}">
                                        Details
                                    </button>

                                    <!-- The Modal -->
                                    <div class="modal fade" id="aktiviti_{{$key}}">
                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <div class="modal-content">
                    
                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">{{$data->nama_aktiviti}}</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>
                        
                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                    <img class="center" src={{$data->gambar_aktiviti}} alt="Card image cap">   
                                                    <br>
                                                    <p>{{$data->desc_aktiviti}}</p>
                                                </div>
                        
                                                <!-- Modal footer -->
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                </div>
                        
                                            </div>
                                        </div>
                                    </div>
                                </th>           
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- card starts
            @foreach($aktiviti as $key => $data)
                <div class="col-md-12">
                    <div class="card mb-3 border-dark">
                        <div class="card-header bg-transparent border-dark">{{$data->tarikh_aktiviti}}</div>
                        <div class="card-body ">
                            <h5 class="card-title">{{$data->nama_aktiviti}}</h5>
                            <p class="card-text">Bertempat di {{$data->tempat_aktiviti}}</p>
                            <a href="#" class="btn btn-primary">Details</a>
                        </div>
                        <div class="card-footer bg-transparent border-dark">{{$data->masa_aktiviti}}</div>
                    </div>
                </div>
            @endforeach
            card ends-->
            <!-- Aktiviti masjid ends -->

            <!-- Makluman masjid starts -->
            <p></p><p></p>
            <h3 class="pb-3 mb-4 font-italic border-bottom">
                Makluman Masjid
            </h3>
            @foreach($makluman as $key => $data)
                <div class="col-md-12">
                    <div class="card flex-md-row mb-4 box-shadow h-md-250 ">
                        <div class="card-body d-flex flex-column align-items-start">          
                            <h3 class="mb-0">
                                <a class="text-dark" href="#">{{$data->tajuk_makluman}}</a>
                            </h3>
                            <div class="mb-1 text-muted">{{$data->tarikh_makluman}}</div>
                            <p class="card-text mb-auto">{{$data->isi_makluman}}</p>
                            <!-- <a href="#" class="btn btn-sm btn-outline-secondary">Details</a> -->
                        </div>
                        <img class="card-img-right flex-auto d-none d-md-block" width="180" height="230" src={{$data->image_makluman}} alt="Card image cap">
                    </div>
                </div>
            @endforeach
            <!-- Makluman masjid ends -->
        </div><!-- /.blog-main -->
          
        <!-- Sidebar starts -->
        <aside class="col-md-4 blog-sidebar">        
            <div class="p-3">
                <p></p><p></p>
                <h4 class="pb-3 mb-4 font-italic border-bottom">Facebook</h4>
                
                <div class="container">
                    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FMasjidBBSB&tabs=timeline&width=340&height=500&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" 
                        width="300" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media">
                    </iframe>
                </div>
                
            </div>
        </aside><!-- /.blog-sidebar -->
        <!-- Sidebar ends -->
        
    </div><!-- /.row -->
</div><!-- /.container -->
@endsection



