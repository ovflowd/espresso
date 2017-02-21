@extends('layouts.master')

@section('content')
    <section id="content">
        <div class="content__header">
            <h2>System Accounts</h2>
        </div>
        <div class="card">
            <div class="card__header">
                <h2>Add account <small>Fill the following form to create a new Housekeeping account</small></h2>

                <div class="actions">
                    <a href="/system/users"><i class="zmdi zmdi-long-arrow-return"></i></a>
                </div>
            </div>

            <div class="card__body">
                @if (count($errors) > 0)
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span></button>
                    <b><i class="zmdi zmdi-alert-circle"></i>&nbsp;&nbsp;Something went wrong</b><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <form method="POST" action="/system/users/add">
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
                        <div class="form-group">
                            <input type="text" name="username" class="form-control input-lg" placeholder="Username">
                            <i class="form-group__bar"></i>
                        </div>
                    </div>
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="zmdi zmdi-email"></i></span>
                        <div class="form-group">
                            <input type="text" name="email" class="form-control input-lg" placeholder="Email address">
                            <i class="form-group__bar"></i>
                        </div>
                    </div>
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="zmdi zmdi-lock"></i></span>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control input-lg" placeholder="Password">
                            <i class="form-group__bar"></i>
                        </div>
                    </div>
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="zmdi zmdi-key"></i></span>
                        <div class="form-group">
                            <select class="select2" name="rank" data-placeholder="Select a role group">
                                @foreach($roles as $role)
                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="input-group">
                        <div class="form-group">
                            <button type="submit" class="btn btn-default">Create account</button>
                        </div>
                    </div>
                    {{ csrf_field() }}
                </form>
            </div>
        </div>

    </section>
@stop