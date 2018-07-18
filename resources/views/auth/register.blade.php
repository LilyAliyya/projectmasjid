@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <h5 class="pb-3 mb-4 font-italic border-bottom">
                            Account Details
                        </h5>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <br>
                        <h5 class="pb-3 mb-4 font-italic border-bottom">
                            Personal Details
                        </h5>

                        <div class="form-group row">
                            <label for="namapemohon" class="col-md-4 col-form-label text-md-right">{{ __('Full Name') }}</label>

                            <div class="col-md-6">
                                <input id="namapemohon" type="text" class="form-control{{ $errors->has('namapemohon') ? ' is-invalid' : '' }}" name="namapemohon" value="{{ old('namapemohon') }}" required autofocus>

                                @if ($errors->has('namapemohon'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('namapemohon') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nomboric" class="col-md-4 col-form-label text-md-right">{{ __('I/C Number') }}</label>

                            <div class="col-md-6">
                                <input id="nomboric" type="text" class="form-control{{ $errors->has('nomboric') ? ' is-invalid' : '' }}" name="nomboric" value="{{ old('nomboric') }}" required autofocus>

                                @if ($errors->has('nomboric'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('nomboric') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="curraddress" class="col-md-4 col-form-label text-md-right">{{ __('Current Address') }}</label>

                            <div class="col-md-6">
                                <input id="curraddress" type="text" class="form-control{{ $errors->has('curraddress') ? ' is-invalid' : '' }}" name="curraddress" value="{{ old('curraddress') }}" required autofocus>

                                @if ($errors->has('curraddress'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('curraddress') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="homenumber" class="col-md-4 col-form-label text-md-right">{{ __('Home (Phone)') }}</label>

                            <div class="col-md-6">
                                <input id="homenumber" type="text" class="form-control{{ $errors->has('homenumber') ? ' is-invalid' : '' }}" name="homenumber" value="{{ old('homenumber') }}" required autofocus>

                                @if ($errors->has('homenumber'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('homenumber') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="mobilenumber" class="col-md-4 col-form-label text-md-right">{{ __('Mobile Number') }}</label>

                            <div class="col-md-6">
                                <input id="mobilenumber" type="text" class="form-control{{ $errors->has('mobilenumber') ? ' is-invalid' : '' }}" name="mobilenumber" value="{{ old('mobilenumber') }}" required autofocus>

                                @if ($errors->has('mobilenumber'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('mobilenumber') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="maritalstatus" class="col-md-4 col-form-label text-md-right">{{ __('Marital Status') }}</label>

                            <div class="col-md-6">
                                <input type="radio" name="maritalstatus" value="single" > Single
                                <input type="radio" name="maritalstatus" value="married"> Married<br>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="occupation" class="col-md-4 col-form-label text-md-right">{{ __('Occupation') }}</label>

                            <div class="col-md-6">
                                <input id="occupation" type="text" class="form-control" name="occupation" required autofocus>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="salary" class="col-md-4 col-form-label text-md-right">{{ __('Salary') }}</label>

                            <div class="col-md-6">
                                <select name="salary" class="form-control">
                                    <option value="">Select Range</option>
                                    <option value="RM 1000 - RM 1999">RM 1000 - RM 1999</option>
                                    <option value="RM 2000 - RM 2999">RM 2000 - RM 2999</option>
                                    <option value="RM 3000 - RM 3999">RM 3000 - RM 3999</option>
                                    <option value="RM 4000 - RM 4999">RM 4000 - RM 4999</option>
                                    <option value="RM 5000 - RM 5999">RM 5000 - RM 5999</option>
                                    <option value="RM 6000 - RM 6999">RM 6000 - RM 6999</option>
                                    <option value="RM 7000 - RM 7999">RM 7000 - RM 7999</option>
                                    <option value="RM 8000 - RM 8999">RM 8000 - RM 8999</option>
                                    <option value="RM 9000 - RM 9999">RM 9000 - RM 9999</option>
                                    <option value="RM 10000 - RM 10999">RM 10000 - RM 10999</option>
                                </select>
                            </div>
                        </div>

                        <br>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>

                        <br>

                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
