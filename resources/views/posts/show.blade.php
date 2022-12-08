@extends('layout')
@section('title', 'Vagas')
@section('content')
<div class="container-4">
<hr class="featurette-divider-2" style="color:transparent;">
    <div class="container marketing">
        <video controls autoplay loop height="100%" width="100%">
            <source src="/css/{{ $post->video }}" type="video/mp4"/>
        </video>
    </div>
</div>
@endsection