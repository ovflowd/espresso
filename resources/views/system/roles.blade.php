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
                    <a href="/system/roles/add"><i class="zmdi zmdi-plus"></i></a>
                </div>
            </div>

            <div class="card__body">
                <div class="table-responsive">
                    <table class="espreso-mae-data-table table-striped">
                        <thead>
                        <tr>
                            <th data-column-id="id" data-type="numeric">ID</th>
                            <th data-column-id="name">Name</th>
                            <th data-column-id="permission_set">Permission set</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($roles as $role)
                            <tr>
                                <td>{{ $role->id }}</td>
                                <td>{{ $role->name }}</td>
                                <td></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </section>
@stop
