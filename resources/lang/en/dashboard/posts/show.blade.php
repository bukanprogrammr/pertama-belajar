@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h1 class="mb-3">{{ $post->title }}</h1>

            <a href="/dashboard/posts" class="btn btn-success mb-3"> <span data-feather="arrow-left"></span>Kembali</a>
            <a href="/dashboard/post/{{ $post->id }}" class="btn btn-warning mb-3"><span data-feather="edit" class="align-text-bottom"></span>Edit</a>
            <a href="/dashboard/post/{{ $post->id }}" class="btn btn-danger mb-3"><span data-feather="x-circle" class="align-text-bottom"></span>Hapus</a>

           <img src="https://source.unsplash.com/1200x400?{{ $post->category->slug }}" alt="{{ $post->category->slug }}" class="img-fluid">
            <article class="my-3 fs-5">
                {!! $post->body !!}
            </article>
            <a href="/posts" class="d-block mt-3" >balik</a>
        </div>
    </div>
</div>
@endsection