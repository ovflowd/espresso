@extends('layouts.master')

@section('content')
    <section id="content">
        <div class="content__header">
            <h2>System Permissions</h2>
        </div>
        <div class="card">
            <div class="card__header">
                <h2>Permissions <small>Permissions are little rules that restrict the access to certain feature of Espreso to a group of people</small></h2>
            </div>

            <div class="card__body">
                <h4>
                    Generic Permissions
                </h4>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Permissions ID</th>
                                <th>Permission</th>
                                <th>Assigned to roles</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($perms as $perm)
                            <tr>
                                <td>{{ $perm->id }}</td>
                                <td>{{ __('permissions.' . $perm->perm_string) }}</td>
                                <td>{{ \App\Models\Role::formatAssignment($perm->assigned_roles) }}</td>
                                <td><a href="/system/permissions/{{ $perm->perm_string }}/edit" class="btn btn-default"><i class="zmdi zmdi-edit"></i> Edit</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@stop