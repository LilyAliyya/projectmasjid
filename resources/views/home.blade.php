@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h5 class="pb-3 mb-4 font-italic border-bottom">
                        User Details
                    </h5>

                    <div class="table-responsive">          
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th>Email Address</th>
                                    <td>{{$user->email}}</td>
                                </tr>
                                <tr>
                                    <th>Full Name</th>
                                    <td>{{$user->namapemohon}}</td>
                                </tr>
                                <tr>
                                    <th>I/C Number</th>
                                    <td>{{$user->nomboric}}</td>
                                </tr>
                                <tr>
                                    <th>Current Address</th>
                                    <td>{{$user->curraddress}}</td>
                                </tr>
                                <tr>
                                    <th>Home (Phone)</th>
                                    <td>{{$user->homenumber}}</td>
                                </tr>
                                <tr>
                                    <th>Mobile Number</th>
                                    <td>{{$user->mobilenumber}}</td>
                                </tr>
                                <tr>
                                    <th>Marital Status</th>
                                    <td>{{$user->maritalstatus}}</td>
                                </tr>
                                <tr>
                                    <th>Occupation</th>
                                    <td>{{$user->occupation}}</td>
                                </tr>
                                <tr>
                                    <th>Salary</th>
                                    <td>{{$user->salary}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <br>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
