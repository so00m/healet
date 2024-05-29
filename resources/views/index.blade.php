@extends('layouts.main')

@section('title','Home Page')

@section('content')

  <!-- slider section -->
  @include('includes/index_slider')
  <!-- end slider section -->

  <!-- shop section -->
  @include('includes/shop')
  <!-- end shop section -->

  <!-- about section -->
  @include('includes/aboutUs')
  <!-- end about section -->

  <!-- offer section -->
  @include('includes/index_offers')
  <!-- end offer section -->

  <!-- blog section -->
  @include('includes/blog')
  <!-- end blog section -->

  <!-- client section -->
  @include('includes/index_client')
  <!-- end client section -->

  @endsection