@extends('layouts.master')

@section('index')
    @include("home.header")
    @include("home.banner")
    @include("home.latest-jobs")
    @include("home.best-features")
    @include("home.latest-blog-posts")
    @include("home.happy-clients")
    @include("home.email-me")
    @include("home.footer")
    @if(Session::has('message'))
            <script>
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: '{{Session::get('message')}}',
                    showConfirmButton: false,
                    timer: 1500
                    })
            </script>
        @endifs
@endsection