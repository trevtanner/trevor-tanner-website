@extends('layouts.app')
@section('title')
    <title>TT Contact</title>
@endsection
@section('content')
    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/contactus.jpg')"
            alt="Contact Us Photo Credit:StartupStockPhotos from Pixabay">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-md-10 mx-auto">
                    <div class="site-heading text-left">
                        <h1>Contact Me</h1>
                        <br>
                        <span class="subheading text-left">
                        Let's get started on your website today
                    </span>
                    </div>
                    @if(session()->has('success'))
                        <div class="alert alert-success text-center">
                            {{ session()->get('success') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </header>
    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <p>
                Do any of these appy to you?
                </p>
            <ul>
                <li>Have a question about a built website</li>
                <li>Interest in me building your website</li>
                <li>A current client with a question about your product</li>
                <li>You have feedback you would like me to see</li>
                <li>Looking to give me a job</li>
            </ul>
                <p>
                If so, please fill out the following form.
            </p>

        </div>
        <div class="col-lg-6 col-md-12 col-sm-12">
            <card class="card-default">
                <div class="card-header">
                    Contact Me
                </div>
                <div class="card-body">
                    @include('partials.errors')

                    <form method="post" action="{{route('contactus')}}">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" class="form-control" name="name">
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="text" id="email" class="form-control" name="email">
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea id="message" class="form-control" name="message"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" value="Send" name="Send" class="btn btn-success contactform">
                                Send
                            </button>
                        </div>
                    </form>
                </div>
            </card>
        </div>
    </div>
    <hr>

@endsection
