@extends('layouts.app')
@section('title')
    <title>TT Contact</title>
@endsection
@section('content')
    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/battlestation.jpg')" alt="Battlestation Credit:Josh Sorenson from Pexels">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="site-heading text-right">
                        <h1>Contact Us</h1>
                        <br>
                        <span class="subheading text-right">
                        Lets get started today on your website
                    </span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 pb-4 pt-4">
            <card class="card-default">
                <div class="card-header">
                    Contact Us
                </div>
                <div class="card-body">
                    <form action="{{  route('contactus.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" class="form-control" name="title" value="{{ isset($product) ? $product->title : '' }}">
                        </div>
                        <div class="form-group">
                            <label for="productnumber">Product #:</label>
                            <input type="text" id="productnumber" class="form-control" name="productnumber" value="{{ isset($product) ? $product->productnumber : '' }}">
                        </div>
                        <div class="form-group">
                            <label for="shortdescript">Product Short Description:</label>
                            <input type="text" id="shortdescript" class="form-control" name="shortdescript" value="{{ isset($product) ? $product->shortdescript : '' }}">
                        </div>

                        {{--Add text edit similar to cms project--}}
                        <div class="form-group">
                            <label for="longdescript">Product Long Description:</label>
                            <textarea name="longdescript" id="longdescript" cols="20" rows="10" class="form-control">{{ isset($product) ? $product->longdescript : '' }}</textarea>

                        </div>

                        @if(isset($product))
                            <div class="form-group">
                                <img src="{{ asset('storage/' . $product->index_image) }}" alt="" style="width: 100%">
                            </div>
                        @endif
                        <div class="form-group">
                            <label for="index_image">Index Image:</label>
                            <input type="file" class="form-control-file" name="index_image" id="index_image">
                        </div>
                        @if(isset($product))
                            <div class="form-group">
                                <img src="{{ asset('storage/' . $product->image) }}" alt="" style="width: 100%">
                            </div>
                        @endif
                        <div class="form-group">
                            <label for="image">Image:</label>
                            <input type="file" class="form-control-file" name="image" id="image">
                        </div>
                        <div class="form-group">
                            <label for="supplier">Supplier:</label>
                            <select name="supplier" id="supplier" class="custom-select">
                                <option value="" disabled selected>Select Supplier</option>
                                @foreach($suppliers as $supplier)
                                    <option value="{{ $supplier->id }}"
                                            @if(isset($product))
                                            @if($supplier->id === $product->supplier_id)
                                            selected
                                        @endif
                                        @endif

                                    >{{ $supplier->name }}</option>


                                @endforeach
                            </select>
                        </div>
                        @if($tags->count() > 0)
                            <div class="form-group">
                                <label for="tag">Category:</label>
                                <select name="tag" id="tag" class="custom-select">
                                    <option value="" disabled selected>Select Category</option>
                                    @foreach($tags as $tag)
                                        <option value="{{ $tag->id }}"
                                                @if(isset($product))
                                                @if($product->hasTag($tag->id))
                                                selected
                                            @endif
                                            @endif
                                        >
                                            {{ $tag->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        @endif
                        @if($subcategories->count() > 0)
                            <div class="form-group">
                                <label for="subcategory">Sub-Category:</label>
                                <select name="subcategory" id="subcategory" class="custom-select">
                                    <option value="" disabled selected>Select Sub-Category</option>
                                    @foreach($subcategories as $subcategory)
                                        <option value="{{ $subcategory->id }}"
                                                @if(isset($product))
                                                @if($product->hasTag($subcategory->id))
                                                selected
                                            @endif
                                            @endif
                                        >
                                            {{ $subcategory->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        @endif
                        <div class="form-group">
                            <button class="btn btn-success">
                                {{ isset($product) ? 'Update Product' : 'Add Product' }}
                            </button>
                        </div>
                    </form>
                </div>
            </card>
        </div>
    </div>

@endsection
