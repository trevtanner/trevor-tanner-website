@extends('layouts.app')
@section('title')
    <title>TT Web Development & Design - Building personalized websites for modern businesses</title>
    <meta name="description" content="TT Web Development & Design, founded in 2019 provides a client minded experience
    when it comes building a website for whatever your needs may be. From personal websites to fully scaled professional
    business websites, TT Web Development & Design has you covered.">
@endsection
@section('content')
    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/homepage-img.jpeg')"
            alt=" Space Photo; Credit:Ales Nesetril from Unsplash">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-md-10 mx-auto">
                    <div class="site-heading text-right">
                        <h1>TT Web Development & Design</h1>
                        <span class="subheading text-right">Building stellar websites one line at a time</span>
                        <div class="pt-4">
                            <a href="{{ route('contact') }}">
                                <button class="btn" type="button">Reach Out</button>
                            </a>
                        </div>
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
                    <a href="{{ route('contact') }}">
                        <h2 class="post-title">
                            Crafted to Your Needs
                        </h2>
                        <h3 class="post-subtitle">
                            and what your market demands
                        </h3>
                    </a>
                    <p class="post-meta">Contact us to get started</p>
                </div>
                <hr>
                <div class="post-preview">
                    <a href="{{ route('portfolio') }}">
                        <h2 class="post-title">
                            "A man is only as good as his work"
                        </h2>
                    </a>
                    <p class="post-meta">Click here to see my previous projects</p>
                </div>
                <hr>
                <div class="post-preview">
                    <a href="{{ route('about') }}">
                        <h2 class="post-title">
                            Who am I?
                        </h2>
                    </a>
                    <p class="post-meta">
                        Learn more about the person behind the keyboard
                    </p>
                </div>
            </div>
        </div>
    </div>

    <hr>
    <!-- Custom scripts for this template -->
    <script src="js/clean-blog.min.js"></script>

@endsection
