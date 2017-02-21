@extends('layouts.login')

@section('content')
    <div class="login">

        <!-- Login -->
        <div class="login__block toggled" id="l-login">
            <div class="login__block__header">
                <i class="zmdi zmdi-account-circle"></i>
                Sign in to continue

                <div class="actions login__block__actions">
                    <div class="dropdown">
                        <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                        <ul class="dropdown-menu pull-right">
                            <li><a data-block="#l-forget-password" href="">Forgot password?</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="login__block__body">
                <form action="/" method="POST">
                    <div class="form-group form-group--float form-group--centered form-group--centered">
                        <input type="text" name="username" class="form-control">
                        <label>Username</label>
                        <i class="form-group__bar"></i>
                    </div>

                    <div class="form-group form-group--float form-group--centered form-group--centered">
                        <input type="password" name="password" class="form-control">
                        <label>Password</label>
                        <i class="form-group__bar"></i>
                    </div>

                    {{ csrf_field() }}
                    <button class="btn btn--light btn--icon-text m-t-15"><i class="zmdi zmdi-lock"></i> Sign in</button>
                </form>
            </div>
        </div>

        <!-- Forgot Password -->
        <div class="login__block" id="l-forget-password">
            <div class="login__block__header palette-Purple bg">
                <i class="zmdi zmdi-account-circle"></i>
                Forgot Password?

                <div class="actions login__block__actions">
                    <div class="dropdown">
                        <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                        <ul class="dropdown-menu pull-right">
                            <li><a data-block="#l-login" href="">Already have an account?</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="login__block__body">
                <p class="m-t-30">If you forgot your password, please contact your system administrator</p>
            </div>
        </div>
    </div>
@stop