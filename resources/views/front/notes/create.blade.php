@extends('front.layouts.master')


@section('content')

    <form action="{{route('notes_addNote')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Başlık</label>
            <input type="text" name="title" placeholder="Lütfen başlık giriniz..." class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">İçerik</label>
           <textarea name="content" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-success">Gönder</button>
    </form>

@endsection
