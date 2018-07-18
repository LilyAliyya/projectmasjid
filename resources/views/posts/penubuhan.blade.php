@extends ('layouts.master')

@section ('content')

<!-- Wrap the rest of the page in another container to center all the content. -->
<div class="container threecolumns">

    <div class="row">
        <div class="col-md-8 blog-main">
            <p></p><p></p>
            <!-- Sejarah penubuhan starts -->
            <h3 class="pb-3 mb-4 font-italic border-bottom">
                Sejarah Penubuhan Masjid
            </h3>

            <div class="container">
                <div class="blog-post">
                    @foreach($penubuhan as $key => $data)
                        
                        <div class="card">
                            <div class="card-body">
                                <img class="card-img-top center" style="width:350px;height:450px;" src={{$data->content_penubuhan}} alt="Card image cap">   
                            </div>    
                        </div><!-- /.card -->
                        <br><br>

                    @endforeach
                </div><!-- /.blog-post -->
            </div>
            <!-- Sejarah penubuhan ends -->
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



