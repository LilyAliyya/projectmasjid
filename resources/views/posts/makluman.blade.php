@extends ('layouts.master')

@section ('content')

<!-- Wrap the rest of the page in another container to center all the content. -->
<div class="container threecolumns">

    <div class="row">
        <div class="col-md-8 blog-main">
            <p></p><p></p>
            <!-- Makluman semasa starts -->
            <h3 class="pb-3 mb-4 font-italic border-bottom">
                Makluman Semasa
            </h3>

            <div class="container">
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
            </div>

            {{ $makluman->links() }}
            <!-- Makluman semasa ends -->
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



