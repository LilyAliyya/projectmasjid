@extends ('layouts.master')

@section ('content')

<!-- Wrap the rest of the page in another container to center all the content. -->
<div class="container threecolumns">

    <div class="row">
        <div class="col-md-8 blog-main">
            <p></p><p></p>
            <!-- Senarai aktiviti starts -->
            <h3 class="pb-3 mb-4 font-italic border-bottom">
                Senarai Aktiviti
            </h3>
            <!-- Nanti bahagikan ikut months. Try guna pagination https://laravel.com/docs/5.6/pagination -->
            <div class="container">
                <div class="row">
                    <div class="table-responsive">          
                        <table class="table table-striped">
                            <tbody>
                                @foreach($aktiviti as $key => $data)
                                    <tr>    
                                        <th>{{$data->tarikh_aktiviti}}</th> 
                                        <th>{{$data->nama_aktiviti}}</th>
                                        <th>{{$data->masa_aktiviti}}</th>
                                        <th>{{$data->tempat_aktiviti}}</th> 
                                        <th>
                                            <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#aktiviti">
                                                Details
                                            </button>

                                            <!-- The Modal -->
                                            <div class="modal fade" id="aktiviti">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                            
                                                        <!-- Modal Header -->
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">{{$data->nama_aktiviti}}</h4>
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        </div>
                                
                                                        <!-- Modal body -->
                                                        <div class="modal-body">
                                                        
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

            {{ $aktiviti->links() }}
            
            <!-- Senarai aktiviti ends -->
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



