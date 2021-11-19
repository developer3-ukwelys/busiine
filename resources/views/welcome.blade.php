@extends('layouts.app')
@section('content')        <!-- Responsive navbar-->
        <!-- Header-->
    @include('includes._header')
        <!-- Features section-->
    @include('includes._feature')
        <!-- Pricing section-->
    @include('includes._pricing')
        <!-- Testimonials section-->
    @include('includes._testimonial')
        <!-- Contact section-->
    @include('includes._contact')
@endsection