@extends ('layouts.master')

@section ('content')

<!-- Wrap the rest of the page in another container to center all the content. -->
<div class="container threecolumns">

    <div class="row">
        <div class="col-md-8 blog-main">
            <p></p><p></p>
            <!-- Jawatankuasa masjid starts -->
            <h3 class="pb-3 mb-4 font-italic border-bottom">
                Jawatankuasa Masjid
            </h3>

            <div class="container">
                <div class="row">
                    @foreach($jawatankuasa as $key => $data)
                        <div class="col-md-4">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top" style="width:200px;height:250px;" src={{$data->gambar_ahli}} alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-text"><i class="fa fa-user-circle mr-3"></i>{{$data->nama_ahli}}</p>
                                    <p class="card-text"><i class="fa fa-id-card mr-3"></i>{{$data->nama_jawatankuasa}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            {{ $jawatankuasa->links() }}

            <!-- Jawatankuasa masjid ends -->
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



