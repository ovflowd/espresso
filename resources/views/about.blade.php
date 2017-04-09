@extends('layouts.master')

@section('content')
    <section id="content">
        <div class="card">
            <div class="card__header">
                <h2>About Espreso <small>Who made this thing?</small></h2>

            </div>

            <div class="card__body">
                <div class="row">
                    <div class="col-md-6">
                        <img src="/img/espreso-logo.png">
                    </div>
                    <div class="col-md-6">
                        <h2>Espreso {{ config('app.version') }}</h2>
                        <p>Hotel management web application for Chocolatey and Arcturus Emulator built on top of Laravel</p>

                        <h4>Lead Developer</h4>
                        <p>Jérémy <b>"Emetophobic"</b> Castellano</p>

                        <h4>Special Thanks</h4>
                        <p>Claudio <b>"saamus"</b> Santoro - Chocolatey<br />Wesley <b>"The General"</b> - Remote Connection socket for Arcturus Emulator<br />Bootstrap Sale <b>"rushenn"</b> - Material Admin Extended Dark</p>

                        <h4>PHP Version</h4>
                        <p>{{ phpversion() }}</p>

                        <h4>Laravel Version</h4>
                        <p>{{ App::VERSION() }}</p>
                    </div>
                </div>
            </div>
        </div>

    </section>
@stop