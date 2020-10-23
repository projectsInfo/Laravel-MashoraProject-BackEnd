@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <!-- Start-display-non-->
                        <div class="fixed__profile-picture d-none">
                            <img src="assets/Images/profile.png" name="user_image" class="fixed__profile-picture__img img-fluid">
                            <div class="fixed__profile-picture__overlay">
                                <i class="fas fa-edit"></i>
                                <input class="fixed__profile-picture__overlay__input" name="user_image" type="file">
                            </div>
                        </div>
                        <input type="password" name="birth_date" class="form-control d-none" id="userPass" placeholder="GHIBKL@$*132581">
                        <input type="password" name="user_gender" class="form-control d-none" id="userPass" placeholder="GHIBKL@$*132581">
                        <input type="password" name="user_card_id" class="form-control d-none" id="userPass" placeholder="GHIBKL@$*132581">
                        <input type="password" name="user_mobile" class="form-control d-none" id="userPass" placeholder="GHIBKL@$*132581">
                        <input type="password" name="user_phone" class="form-control d-none" id="userPass" placeholder="GHIBKL@$*132581">
                        <input type="password" name="country" class="form-control d-none" id="userPass" placeholder="GHIBKL@$*132581">
                        <input type="password" name="user_card_id" class="form-control d-none" id="userPass" placeholder="GHIBKL@$*132581">
                        <input type="password" name="governorate" class="form-control d-none" id="userPass" placeholder="GHIBKL@$*132581">
                        <input type="password" name="work_sector" class="form-control d-none" id="userPass" placeholder="GHIBKL@$*132581">
                        <input type="password" name="graduate_year" class="form-control d-none" id="userPass" placeholder="GHIBKL@$*132581">
                        <input type="password" name="experience_years" class="form-control d-none" id="userPass" placeholder="GHIBKL@$*132581">
                        <input type="password" name="information" class="form-control d-none" id="userPass" placeholder="GHIBKL@$*132581">
                        <input type="password" name="user_card_image" class="form-control d-none" id="userPass" placeholder="GHIBKL@$*132581">
                        <div class="fixed__profile-picture d-none">
                            <img src="assets/Images/profile.png" class="user-profile-picture img-fluid">
                            <div class="fixed__profile-picture__overlay">
                                <i class="fas fa-edit"></i>
                                <input class="fixed__profile-picture__overlay__input" type="file" name="user_card_image" onchange="readURL(this);">
                            </div>
                        </div>
                        <input type="password" name="user_type" value = 0 class="form-control d-none" id="userPass" placeholder="GHIBKL@$*132581">
                        <!--End-display-non-->

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
