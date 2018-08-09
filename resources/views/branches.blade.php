
@extends('layouts.app')

@section('content')

<div class="super_container">

    <!-- Header -->

    <header class="header trans_300">

        @include('navbar');

    </header>

    <div class="fs_menu_overlay"></div>

    <!-- Slider -->

    <div class="main_slider" style="background-image:url({{ asset('images/casual.jpg')}})">
        <div class="container fill_height">
            <div class="row align-items-center fill_height">
                <div class="col">
                </div>
            </div>
        </div>
    </div>

    <!-- Blogs -->

    <div class="blogs">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="section_title">
                        <h2>Branches</h2>
                    </div>
                </div>
            </div>
            <div class="row blogs_container">
                @foreach($branches as $branch)
                    <div class="col-lg-4 blog_item_col">
                        <div class="blog_item">
                            <div class="blog_background" style="background-image:url({{ asset($branch->image) }})"></div>
                            <div class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
                                <h5 class="blog_title">{{ $branch->address }}</h5>
                                <span class="blog_meta">{{ $branch->phone }}</span>
                                <a class="blog_more" href="{{ url('product/'. $branch->id) }}">Show Products</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    @include('benefit')    

    @include('layouts.footer')

</div>
@endsection


