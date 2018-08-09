
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

    <!-- Banner -->

    <br/>
    <div class="col text-center">
        <div class="section_title">
            <h2>Mian Shops</h2>
        </div>
    </div>
    <br/>

    <div class="banner">
        <div class="container">
            <div class="row">
                @foreach($shops as $shop)
                    <div class="col-md-4">
                        <div class="banner_item align-items-center" style="background-image:url({{ asset($shop->image)}})">
                            <div class="banner_category">
                                <a href="{{ url('branches/'.$shop->id)}}">{{ $shop->name }}</a>
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


