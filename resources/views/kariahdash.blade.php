@extends('layouts.karlayout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h5 class="pb-3 mb-4 font-italic border-bottom">
                        Maklumat Peribadi
                    </h5>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="namapemohon">Nama Penuh</label>
                            <input class="form-control" type="text" placeholder="{{$user->namapemohon}}" readonly>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="nomboric">Nombor KP</label>
                            <input class="form-control" type="text" placeholder="{{$user->nomboric}}" readonly>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="curraddress">Alamat Rumah</label>
                        <textarea class="form-control" type="text" placeholder="{{$user->curraddress}}" readonly></textarea>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="homenumber">Telefon (Rumah)</label>
                            <input class="form-control" type="text" placeholder="{{$user->homenumber}}" readonly>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="mobilenumber">Nombor Telefon</label>
                            <input class="form-control" type="text" placeholder="{{$user->mobilenumber}}" readonly>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label for="maritalstatus">Status Perkahwinan</label>
                            <input class="form-control" type="text" placeholder="{{$user->maritalstatus}}" readonly>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="occupation">Pekerjaan</label>
                            <input class="form-control" type="text" placeholder="{{$user->occupation}}" readonly>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="salary">Gaji</label>
                            <input class="form-control" type="text" placeholder="{{$user->salary}}" readonly>
                        </div>
                    </div>

                    <br>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
