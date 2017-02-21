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
                    <a href="/system/users/add"><i class="zmdi zmdi-account-add"></i></a>
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
@stop