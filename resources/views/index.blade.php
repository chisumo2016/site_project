@extends('layouts.master')
<!--Header_section-->
@section('content')
    <!--Hero_Section-->
    @include('landing.hero')

    <!--Aboutus-->
    @include('landing.about')

    <!--Service-->
    @include('landing.service')

    <!--Portfolio -->
    @include('landing.portfolio')

    <!--client_logos-->
    @include('landing.client')

    <!--Team-->
    @include('landing.team')

    <!--Contact-->
    @include('landing.contact')

@endsection