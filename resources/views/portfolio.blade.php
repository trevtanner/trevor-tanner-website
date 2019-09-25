@extends('layouts.app')
@section('title')
    <title>TT Portfolio</title>
@endsection
@section('content')
    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/battlestation.jpg')" alt="Battlestation Credit:Josh Sorenson from Pexels">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="site-heading text-center">
                        <h1>Trevor Tanner</h1>
                        <br>
                        <span class="subheading text-center">
                        Programmer and general computer nerd
                    </span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="post-preview">
                    <a href="#">
                        <h2 class="post-title">
                            Who am I?
                        </h2>
                    </a>
                    <p class="">
                        Programming is my passion, and love to work and projects even in my free time. When I'm not writing code
                        I'm working on my PC, or playing video games. My computer is my home and the best work is done when the
                        two are perfectly integrated.
                    </p>
                    <p class="post-meta">"Coffee and a freshly started PC are the best way to start a day"</p>
                </div>
                <hr>
                <div class="post-preview">
                    <a href="#">
                        <h2 class="post-title">
                            My Life Outside Work
                        </h2>
                    </a>
                    <p>
                        Outside of work and my computer I spend most of my days with my fiance and dog; either going on walks
                        or spending time with our friends.
                    </p>
                    <p class="post-meta"></p>
                </div>
                <hr>
            </div>
        </div>

        <hr>

@endsection
