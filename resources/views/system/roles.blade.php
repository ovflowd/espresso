@extends('layouts.master')

@section('content')
    <section id="content">
            <div class="content__header">
                <h2>Account Roles</h2>
            </div>
            <div class="card">
                <div class="card__header">
                    <h2>Roles <small>Roles are group of users that are set to specify which users can access which permissions</small></h2>
                        <div class="actions">
                            <a data-toggle="modal" data-target="#addRole" href="#"><i class="zmdi zmdi-plus"></i></a>
                        </div>
                    </div>

                    <div class="card__body">
                        <div class="table-responsive">
                            <table class="espreso-mae-data-table table-striped">
                                <thead>
                                    <tr>
                                        <th data-column-id="id" data-type="numeric">ID</th>
                                        <th data-column-id="name">Name</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($roles as $role)
                                        <tr>
                                            <td>{{ $role->id }}</td>
                                            <td>{{ $role->name }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
    </section>

    <div class="modal fade" id="addRole">
        <div class="modal-dialog">
            <div class="modal-content modal-dark">
                <div class="modal-header">
                    <h4 class="modal-title modal-title-dark">
                        Create new role<br><br/>
                        <small>Roles are a set of permissions that can be assigned to a housekeeping user</small>
                    </h4>
                </div>
                <form method="POST" action="/system/roles/add">
                <div class="modal-body">
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon"><i class="zmdi zmdi-info-outline"></i></span>
                            <div class="form-group">
                                <input type="text" id="id" name="id" class="form-control input-lg" placeholder="Role ID">
                                <i class="form-group__bar"></i>
                            </div>
                        </div>
                        <br/><span class="help-block">A role ID, is a number that defines the role identity within the database. To simplify the process, this field will be removed in a next update. This field must be unique</span>
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon"><i class="zmdi zmdi-edit"></i></span>
                            <div class="form-group">
                                <input type="text" id="name" name="name" class="form-control input-lg" placeholder="Name">
                                <i class="form-group__bar"></i>
                            </div>
                        </div>
                        {{ csrf_field() }}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-link btn-link-dark" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-link btn-link-dark">Add role</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        $('#addRole').modal();
    </script>
@stop
