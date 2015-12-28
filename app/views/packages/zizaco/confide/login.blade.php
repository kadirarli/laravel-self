@extends('packages.zizaco.confide.layouts.default')

@section('from')
{{--     <form class="form-signin" role="form" method="POST" action="{{{ URL::to('/users/login') }}}" accept-charset="UTF-8">
        <input type="hidden" name="_token" value="{{{ Session::getToken() }}}">
        <h2 class="form-signin-heading">{{{ Lang::get('confide::confide.e_mail') }}}</h2>
        <label for="email" class="sr-only">{{{ Lang::get('confide::confide.e_mail') }}}</label>
        <input type="email" name="email" id="email" class="form-control" placeholder="Email address" value="{{{ Input::old('email') }}}" required autofocus>
        <label for="password" class="sr-only">{{{ Lang::get('confide::confide.password') }}}</label>
        <input type="password" name="password" id="password" class="form-control" placeholder="{{{ Lang::get('confide::confide.password') }}}" required>
        <p class="help-block">
            <a href="{{{ URL::to('/users/forgot_password') }}}">{{{ Lang::get('confide::confide.login.forgot_password') }}}</a>
        </p>
        @if (Session::get('error'))
            <div class="alert alert-error alert-danger">{{{ Session::get('error') }}}</div>
        @endif

        @if (Session::get('notice'))
            <div class="alert">{{{ Session::get('notice') }}}</div>
        @endif
        <div class="checkbox">
          <label>
            <input tabindex="4" type="checkbox" name="remember" id="remember" value="1"> {{{ Lang::get('confide::confide.login.remember') }}}
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">{{{ Lang::get('confide::confide.login.submit') }}}</button>
</form> --}}
<form class="form-signin" role="form" method="POST" action="{{{ URL::to('/users/login') }}}" accept-charset="UTF-8">
        <fieldset>
            <div class="form-group">
                <label for="email">{{{ Lang::get('confide::confide.e_mail') }}}</label>
                <input class="form-control" tabindex="1" placeholder="{{{ Lang::get('confide::confide.e_mail') }}}" type="text" name="email" id="email" value="{{{ Input::old('email') }}}">
            </div>
            <div class="form-group">
                <label for="password">
                    {{{ Lang::get('confide::confide.password') }}}
                </label>
                <input class="form-control" tabindex="2" placeholder="{{{ Lang::get('confide::confide.password') }}}" type="password" name="password" id="password">
                <p class="help-block">
                    <a href="{{{ URL::to('/users/forgot_password') }}}">{{{ Lang::get('confide::confide.login.forgot_password') }}}</a>
                </p>
            </div>
            <div class="checkbox">
                <label for="remember">
                    <input tabindex="4" type="checkbox" name="remember" id="remember" value="1"> {{{ Lang::get('confide::confide.login.remember') }}}
                </label>
            </div>
            @if (Session::get('error'))
                <div class="alert alert-error alert-danger">{{{ Session::get('error') }}}</div>
            @endif

            @if (Session::get('notice'))
                <div class="alert">{{{ Session::get('notice') }}}</div>
            @endif
            <div class="form-group">
                <button tabindex="3" type="submit" class="btn btn-primary">{{{ Lang::get('confide::confide.login.submit') }}}</button>
            </div>
        </fieldset>
    </form>
@stop
