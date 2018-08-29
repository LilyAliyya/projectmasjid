@extends ('layouts.master')

@section ('content')

<!-- Wrap the rest of the page in another container to center all the content. -->
<div class="container threecolumns">

    <div class="row">
        <div class="col-md-8 blog-main">
            <p></p><p></p>
            <!-- Jadual kuliah starts -->
            <h3 class="pb-3 mb-4 font-italic border-bottom">
                Jadual Kuliah
            </h3>
            <!-- Nanti bahagikan ikut months. Try guna pagination https://laravel.com/docs/5.6/pagination -->
            <div class="container">
                <div class="row">
                    <div class="table-responsive">          
                        <table class="table table-striped">
                            <tbody>
                                @foreach($kuliah as $key => $data)
                                    <tr>    
                                        <th>{{$data->tarikh_kuliah}}</th> 
                                        <th>{{$data->nama_kuliah}}</th>
                                        <th>{{$data->masa_kuliah}}</th>
                                        <th>{{$data->tempat_kuliah}}</th> 
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
                                                            <h4 class="modal-title">{{$data->nama_kuliah}}</h4>
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        </div>
                                
                                                        <!-- Modal body -->
                                                        <div class="modal-body">
                                                            <img class="center" src={{$data->gambar_kuliah}} alt="Card image cap">   
                                                            <br>
                                                            <p>{{$data->desc_kuliah}}</p>
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
                </div>
            </div>

            {{ $kuliah->links() }}
            
            <!-- Senarai aktiviti ends -->
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



