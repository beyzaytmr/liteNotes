@extends('front.layouts.master')


@section('content')

    <button class="btn btn-success ">Not oluştur</button>
    <br>



    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif


    Bu sayfada notlar listenecek
@endsection
