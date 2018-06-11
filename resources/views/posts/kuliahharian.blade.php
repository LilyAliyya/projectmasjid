@extends ('layouts.master')

@section ('content')

<!-- Wrap the rest of the page in another container to center all the content. -->
<div class="container threecolumns">

    <div class="row">
        <div class="col-md-8 blog-main">
            <p></p><p></p>
            <!-- Kuliah harian starts -->
            <h3 class="pb-3 mb-4 font-italic border-bottom">
                Kuliah Harian
            </h3>

            <div class="container">
                @foreach($kuliah as $key => $data)
                    <div class="card">
                        <h5 class="card-header">
                            {{$data->tajuk_kuliah}}   
                        </h5>
                        <div class="card-body">
                            <img class="card-img-top" src={{$data->gambar_kuliah}} alt="Card image cap">
                        
                        </div>
                        <div class="card-footer text-muted">
                            {{$data->tarikh_kuliah}}
                        </div>
                    </div><!-- /.card -->
                    <br><br>
                @endforeach
            </div><!-- /.container -->

            {{ $kuliah->links() }}

            <!-- Kuliah harian ends -->
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



