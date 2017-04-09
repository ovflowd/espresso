@extends('layouts.master')

@section('content')
    <section id="content">
        <div class="content__header">
            <h2>System Accounts</h2>
        </div>
        <div class="card">
            <div class="card__header">
                <h2>All Accounts <small>System Accounts are accounts that are used to log on the Housekeeping to execute actions</small></h2>

                <div class="actions">
                    <a href="#" data-toggle="modal" data-target="#addSysAccount"><i class="zmdi zmdi-account-add"></i></a>
                </div>
            </div>

            <div class="card__body">
                <div class="table-responsive">
                    <table class="espreso-mae-data-table table-striped">
                        <thead>
                        <tr>
                            <th data-column-id="id" data-type="numeric">ID</th>
                            <th data-column-id="username">Username</th>
                            <th data-column-id="email">Email Address</th>
                            <th data-column-id="rank">Role</th>
                            <th data-column-id="created_at">Timestamp</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->username }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ App\Models\Role::getRoleName($user->rank) }}</td>
                                <td>{{ $user->created_at }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </section>

    <div class="modal fade" id="addSysAccount">
        <div class="modal-dialog">
            <div class="modal-content modal-dark">
                <div class="modal-header">
                    <h4 class="modal-title modal-title-dark">
                        Create new system account<br><br/>
                        <small>System accounts are different from game accounts, system accounts allows the authentication of a user in the Housekeeping</small>
                    </h4>
                </div>
                <div class="modal-body">
                    <div class="alert alert-info">
                        <strong><i class="zmdi zmdi-info-outline"></i> Use a valid email address</strong><br/>
                        A valid email address is required in order to send the account owner it's password.
                    </div>

                    <form method="POST" action="/system/users/add">
                        <h5>Account info</h5>
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
                            <div id="username-group" class="form-group">
                                <input type="text" id="username" name="username" class="form-control input-lg" placeholder="Username">
                                <span class="help-block"></span>
                                <i class="form-group__bar"></i>
                            </div>
                        </div>
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon"><i class="zmdi zmdi-email"></i></span>
                            <div class="form-group">
                                <input type="text" id="email" name="email" class="form-control input-lg" placeholder="Email address">
                                <i class="form-group__bar"></i>
                            </div>
                        </div>
                        <br />
                        <h5>Account role</h5>
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
                        {{ csrf_field() }}
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-link btn-link-dark" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-link btn-link-dark">Add account</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $('#addSysAccount').modal();

        $('#username').keyup(function(e) {
            e.preventDefault();

            var usergroup = $('#username-group');

            $.ajax({
                url: '/internal/sys_users/check/'+ $('#username').val(),
                type: 'GET',
                success: function(data)
                {
                    if(data.exists == true)
                    {
                        usergroup.addClass('has-danger has-feedback');
                        usergroup.find('.help-block').html("This username is already taken, please try another one.");
                    }
                    else
                    {
                        usergroup.addClass('has-success has-feedback');
                        usergroup.find('.help-block').html("Good to go, this username is free to use.");
                    }
                }
            })
        });
    </script>
@stop