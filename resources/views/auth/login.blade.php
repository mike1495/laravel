@extends('layouts.auth')

@section('content')
<div class="row h-100 w-100" style="justify-content:center;display:flex" id="login-box">
<style>    
   body {
  background-image: url('https://scontent.fmnl10-1.fna.fbcdn.net/v/t39.30808-6/363787683_300250362576120_1672706168286601062_n.png?_nc_cat=102&ccb=1-7&_nc_sid=e3f864&_nc_eui2=AeHypyWOwy1Z9G0yVupTIqciY_ZPT3Peh8tj9k9Pc96Hy8RgOKLMhj4GcbKV5dbcb-PlM_vgVkXN0uhcqp-G9RDN&_nc_ohc=TBQjgi0i66YAX9el6P-&_nc_ht=scontent.fmnl10-1.fna&oh=00_AfCRnjg7yURsrKlf5S2HnT_jbkcWWqONZhKzbuXWPbNjDw&oe=64ECE268');
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
    <div class="col-md-5">
        <div class="panel panel-default">
            <div class="panel-heading">{{ ucfirst(config('app.name')) }} @lang('quickadmin.qa_login')</div>
            <div class="panel-body">
                @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> @lang('quickadmin.qa_there_were_problems_with_input'):
                    <br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <form class="form-horizontal"
                      role="form"
                      method="POST"
                      action="{{ url('login') }}">
                    <input type="hidden"
                           name="_token"
                           value="{{ csrf_token() }}">

                    <div class="form-group">
                        <label class="col-md-4 control-label">@lang('quickadmin.qa_email')</label>

                        <div class="col-md-6">
                            <input type="email"
                                   class="form-control"
                                   name="email"
                                   value="{{ old('email') }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">@lang('quickadmin.qa_password')</label>

                        <div class="col-md-6">
                            <input type="password"
                                   class="form-control"
                                   name="password">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <a href="{{ route('auth.password.reset') }}">@lang('quickadmin.qa_forgot_password')</a>
                            <br>
                            <a href="{{ route('auth.register') }}">@lang('quickadmin.qa_registration')</a>
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <label>
                                <input type="checkbox"
                                       name="remember"> @lang('quickadmin.qa_remember_me')
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit"
                                    class="btn btn-primary"
                                    style="margin-right: 15px;">
                                @lang('quickadmin.qa_login')
                            </button>
                        </div>
                    </div>

                    

                </form>
            </div>
        </div>
    </div>
</div>
@endsection