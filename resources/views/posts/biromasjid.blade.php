@extends ('layouts.master')

@section ('content')

<!-- Wrap the rest of the page in another container to center all the content. -->
<div class="container threecolumns">

    <div class="row">
        <div class="col-md-8 blog-main">
            <p></p><p></p>
            <!-- Biro masjid starts -->
            <h3 class="pb-3 mb-4 font-italic border-bottom">
                Biro Masjid
            </h3>

            <div class="container">
                <div class="row">
                    @foreach($biromasjid as $key => $data)
                        <div class="col-md-4">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top" width="250" height="200" src={{$data->gambar_ahli}} alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-text"><i class="fa fa-user-circle mr-3"></i>{{$data->nama_ahli}}</p>
                                    <p class="card-text"><i class="fa fa-id-card mr-3"></i>{{$data->nama_biro}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <!-- Biro masjid ends -->
        </div><!-- /.blog-main -->
          
        <!-- Sidebar starts -->
        <aside class="col-md-4 blog-sidebar">        
            <div class="p-3">
                <p></p><p></p>
                <h4 class="pb-3 mb-4 font-italic border-bottom">Archives</h4>
                <ol class="list-unstyled mb-0">
                    <li><a href="#">March 2014</a></li>
                    <li><a href="#">February 2014</a></li>
                    <li><a href="#">January 2014</a></li>
                    <li><a href="#">December 2013</a></li>
                    <li><a href="#">November 2013</a></li>
                    <li><a href="#">October 2013</a></li>
                    <li><a href="#">September 2013</a></li>
                    <li><a href="#">August 2013</a></li>
                    <li><a href="#">July 2013</a></li>
                    <li><a href="#">June 2013</a></li>
                    <li><a href="#">May 2013</a></li>
                    <li><a href="#">April 2013</a></li>
                </ol>
            </div>
        </aside><!-- /.blog-sidebar -->
        <!-- Sidebar ends -->
    </div><!-- /.row -->
</div><!-- /.container -->
@endsection



