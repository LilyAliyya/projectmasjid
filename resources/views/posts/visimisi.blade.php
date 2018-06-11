@extends ('layouts.master')

@section ('content')

<!-- Wrap the rest of the page in another container to center all the content. -->
<div class="container threecolumns">

    <div class="row">
        <div class="col-md-8 blog-main">
            <p></p><p></p>
            <!-- Visi misi starts -->
            <h3 class="pb-3 mb-4 font-italic border-bottom">
                Visi & Misi Masjid
            </h3>

            <div class="container">
                <div class="blog-post">
                    @foreach($visimisi as $key => $data)
                        <p>{{$data->content_visimisi}}</p>
                    @endforeach
                </div><!-- /.blog-post -->
            </div>
            <!-- Visi misi ends -->
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



