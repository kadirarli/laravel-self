@extends('packages.zizaco.confide.layouts.default')

@section('from')
    <!--form class="form-signin" method="POST" action="{{ URL::to('/users/forgot_password') }}" accept-charset="UTF-8">
        <input type="hidden" name="_token" value="{{{ Session::getToken() }}}">

        <div class="form-group">
            <label for="email">{{{ Lang::get('confide::confide.e_mail') }}}</label>
            <div class="input-append input-group">
                <input class="form-control" placeholder="{{{ Lang::get('confide::confide.e_mail') }}}" type="text" name="email" id="email" value="{{{ Input::old('email') }}}">
                <span class="input-group-btn">
                    <input class="btn btn-default" type="submit" value="{{{ Lang::get('confide::confide.forgot.submit') }}}">
                </span>
            </div>
        </div>
    </form-->
    <form class="form-signin" method="POST" action="{{ URL::to('/users/forgot_password') }}" accept-charset="UTF-8">
        <input type="hidden" name="_token" value="{{{ Session::getToken() }}}">
        <h2 class="form-signin-heading">{{{ Lang::get('confide::confide.e_mail') }}}</h2>
        <label for="inputEmail" class="sr-only">{{{ Lang::get('confide::confide.e_mail') }}}</label>
        <input class="form-control" placeholder="{{{ Lang::get('confide::confide.e_mail') }}}" type="text" name="email" id="email" value="{{{ Input::old('email') }}}" required autofocus>
        <button class="btn btn-lg btn-primary btn-block" type="submit">{{{ Lang::get('confide::confide.forgot.submit') }}}</button>
        @if (Session::get('error'))
            <div class="alert alert-error alert-danger">{{{ Session::get('error') }}}</div>
        @endif

        @if (Session::get('notice'))
            <div class="alert">{{{ Session::get('notice') }}}</div>
        @endif
    </form>
@stop