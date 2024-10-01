@extends('layouts.app')

@section('title', "BNKP Jemaat Hiligeo")

@section('content')
    <main class="main-content">
        @include('partials.hero')
        @include('partials.about')
        @include('partials.pastors')
        @include('partials.events')
        @include('partials.seremons')
        @include('partials.families')
    </main>
@endsection
