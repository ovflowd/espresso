@extends('layouts.master')

@section('content')
    <section id="content">
        <div class="card">
            <div class="card__header">
                <h2>Sales Statistics <small>Vestibulum purus quam scelerisque, mollis nonummy metus</small></h2>

                <div class="actions">
                    <a href=""><i class="zmdi zmdi-check-all"></i></a>
                    <a href=""><i class="zmdi zmdi-trending-up"></i></a>
                    <div class="dropdown">
                        <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="">Change Date Range</a></li>
                            <li><a href="">Change Graph Type</a></li>
                            <li><a href="">Other Settings</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="flot-chart-edge">
                <div id="chart-curved-line" class="flot-chart"></div>
            </div>
        </div>

    </section>
@stop