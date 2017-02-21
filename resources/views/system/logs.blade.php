@extends('layouts.master')

@section('content')
    <section id="content">
        <div class="content__header">
            <h2>Monitoring Logs</h2>
        </div>
        <div class="card">
            <div class="card__header">
                <h2>Logs Listing <small>Every logged query to this service</small></h2>
            </div>

            <div class="card__body">
                <div class="table-responsive">
                    <table class="espreso-mae-data-table table-striped">
                        <thead>
                        <tr>
                            <th data-column-id="id" data-type="numeric">ID</th>
                            <th data-column-id="user_id">User</th>
                            <th data-column-id="type">Type</th>
                            <th data-column-id="address">IP Address</th>
                            <th data-column-id="request">Request Data</th>
                            <th data-column-id="created_at" data-order="desc">Timestamp</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($logs as $log)
                                <tr>
                                    <td>{{ $log->id }}</td>
                                    <td>{{ \App\Models\User::fetchInfo($log->user_id, 'username') }}</td>
                                    <td>{{ $log->type }}</td>
                                    <td>{{ $log->address }} <a href="https://who.is/whois-ip/ip-address/{{ $log->address }}/" class="btn btn-default btn-xs btn--icon-text"><i class="zmdi zmdi-search"></i> Whois</a></td>
                                    <td>{{ $log->request }}</td>
                                    <td>{{ $log->created_at }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </section>
@stop