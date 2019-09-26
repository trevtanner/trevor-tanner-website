@extends('layouts.app')
@section('title')
    <title>TT Portfolio</title>
@endsection
@section('content')
    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/workstation.jpg')" alt="Workstation Credit:rawpixel from pixabay">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-md-10 mx-auto">
                    <div class="site-heading text-left">
                        <h1>My Previous Work</h1>
                        <br>
                        <span class="subheading text-left">
                            Get an idea of my skills and expertise
                    </span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-4">
                <card>
                    <div class="card-header">
                        TT Development and Design
                    </div>
                    <div class="card-body">
                        The website your are viewing right now was built by me, using some of the many tools I can bring to
                        your website as well.
                    </div>
                    <div class="card-footer">
                        <a href="#">trevorstanner.com</a>
                    </div>
                </card>
            </div>
            <div class="col-4">
                <card>
                    <div class="card-header">
                        Tama Team Sports
                    </div>
                    <div class="card-body">
                    A website built for a custom logo-ing company. This site was to display a basic selection of what goods
                        and services they offered.
                    </div>
                    <div class="card-footer">
                        <a href="#">trevorstanner.com</a>
                    </div>
                </card>
            </div>
            <div class="col-4">
                <card>
                    <div class="card-header">
                        TT Development and Design
                    </div>
                    <div class="card-body">
                        The website your are viewing right now was built by me, using some of the many tools I can bring to
                        your website as well
                    </div>
                    <div class="card-footer">
                        <a href="#">trevorstanner.com</a>
                    </div>
                </card>
            </div>
        </div>
    </div>



        <hr>

@endsection
