@extends('layouts.app')
@section('title')
    <title>TT Web Development & Design - Trevor Tanner's Resume</title>
    <meta name="description" content="TT Web Development & Design">
    <meta name="description" content="Resume and professional information for Trevor Tanner, Founder and lead programmer
    for TT Web Development & Design.">
@endsection
@section('content')
    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/resumebg.jpeg')"
            alt="Office/Workspace Credit: Nastuh Abootalebi on Unsplash">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-md-10 mx-auto">
                    <div class="site-heading text-left">
                        <h1>
                            The Professional Me
                        </h1>
                        <div class="pt-4">
                            <a href="{{ route('resume.view') }}">
                                <button class="btn" type="button">View Resume</button>
                            </a>
                        </div>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row pb-2">
            <div class="col-12 text-center">
                <h2>Trevor Tanner: The Paperwork</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
                The best way to get to know my skills is to look over my previous work on my <a
                    href="{{ route('portfolio') }}">Portfolio Page.</a> I'm always going back and tweaking
                little things in my projects; so I'm constantly updating them with anything new I learn. If you like
                more of a list of my
                abilities with programming then this is the place. You can download my resume above and I lay out my
                skills
                and other relevant information below. As always please feel free to <a href="{{ route('contact') }}">Contact
                    Me</a> with any questions/inquires.
            </div>
        </div>
        <br>
        <hr>
        <br>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12 post-title text-center">
                <br>
                <br>
                <h2>Knowledge Base</h2>
                <br>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 text-center">
                Everyday Use
                <br>
                <ul class="text-left">
                    <li>Laravel//PHP</li>
                    <li>HTML5//CSS</li>
                    <li>Javascript//JS//Vue.js</li>
                    <li>Laravel Forge//DigitalOcean</li>
                    <li>Linux Based OS</li>
                    <li>Github//Version Control</li>
                </ul>
                <hr>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 text-center">
                Previous Experience
                <br>
                <ul class="text-left">
                    <li>Visual Studio//Visual Basic</li>
                    <li>C++</li>
                </ul>
            </div>
        </div>
    </div>



    <hr>


@endsection
