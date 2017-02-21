@extends('layouts.master')

@section('content')
    <section id="content">
        <div class="content__header">
            <h2>System Accounts</h2>
        </div>
        <div class="card">
            <div class="card__header">
                <h2>Add account role <small>Fill the following form to create a new role</small></h2>

                <div class="actions">
                    <a href="/system/roles"><i class="zmdi zmdi-long-arrow-return"></i></a>
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

                <form method="POST" action="/system/roles/add">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="zmdi zmdi-n-1-square"></i></span>
                        <div class="form-group">
                            <input type="text" name="id" class="form-control" placeholder="Role ID">
                            <i class="form-group__bar"></i>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="zmdi zmdi-text-format"></i></span>
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Role Name">
                            <i class="form-group__bar"></i>
                        </div>
                    </div>
                    <br>
                    <div class="input-group">
                        <div class="form-group">
                            <button type="submit" class="btn btn-default">Create role</button>
                        </div>
                    </div>
                    {{ csrf_field() }}
                </form>
            </div>
        </div>

    </section>
@stop