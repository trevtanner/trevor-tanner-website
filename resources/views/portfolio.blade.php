@extends('layouts.app')
@section('title')
    <title>TT Portfolio</title>
@endsection
@section('content')
    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/workstation.jpg')"
            alt="Workstation Credit:rawpixel from pixabay">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-md-10 mx-auto">
                    <div class="site-heading text-left">
                        <h1>My Previous
                            <br>
                            Projects
                        </h1>
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
        <div class="row pb-2">
            <div class="col-lg-4 col-md-6 col-sm-12 pb-2">
                <div class="card">
                    <div class="card-header">
                        TT Development and Design
                    </div>
                    <div class="card-body">
                        The website your are viewing right now was built by me, using some of the many tools I can bring
                        to
                        your website as well. This website is just a taste, if you'd like to see the true range of my
                        talents
                        plase look at my other projects.
                    </div>
                    <div class="card-footer">
                        <a href="http://trevorstanner.com">trevorstanner.com</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 pb-2">
                <div class="card">
                    <div class="card-header">
                        Tama Team Sports
                    </div>
                    <div class="card-body">
                        A website built for a custom logo-ing company. This site was to display a basic selection of
                        what goods
                        and services they offered, as well as giving the client an option to add and remove products.
                    </div>
                    <div class="card-footer">
                        <a href="http://tamateamsports.com">tamateamsports.com</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 pb-2">
                <div class="card">
                    <div class="card-header">
                        Trevor Tanner's Personal Blog
                    </div>
                    <div class="card-body">
                        A blog about many things going on in my life. IF you want a deep, inside look into who Trevor
                        Tanner
                        really is, this is the place to go. I talk about my interests and things I do in my free time,
                        as well
                        as any large life events I need to share.
                    </div>
                    <div class="card-footer">
                        {{--
                                                <a href="#">trevorstanner.blog</a>
                        --}}
                        Comimg Soon
                    </div>
                </div>
            </div>
        </div>
        <div class="row pt-2">
            {{--            <div class="col-4">
        <div class="card">
            <div class="card-header">
                VaporWave GG Website
            </div>
            <div class="card-body">
            A website for a gaming organization. Their site consisted of information about games they play, and
            the players they currently have on the team, each with customizable profiles the fans could visit.
            </div>
            <div class="card-footer">
                <a href="#">vaporwavegg.com</a>
            </div>
        </div>
    </div>--}}
        </div>
    </div>



    <hr>


@endsection
