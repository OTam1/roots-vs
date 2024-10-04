<!-- resources/views/home.blade.php -->
@extends('layouts.app')

@section('title', 'Home - Roots Ventures')

@section('content')
    @include('sections.intro')
    @include('sections.strategic-focus')
    @include('sections.mbs')
    @include('sections.our-ventures')
    @include('sections.skitch-growth')
    @include('sections.partners')
    @include('sections.cofoundder-form')
@endsection
