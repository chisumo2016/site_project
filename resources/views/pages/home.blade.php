@extends('layouts.main')

@include('partials.header')

@section('content')
    @include('pages.index')
    @include('pages.aboutus')
    @include('pages.client')
    @include('pages.portifolio')
    @include('pages.services')
    @include('pages.team')
    @include('pages.contact')
@endsection