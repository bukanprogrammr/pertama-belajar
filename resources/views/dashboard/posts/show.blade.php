@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h1 class="mb-3">{{ $post->title }}</h1>

            <a href="/dashboard/posts" class="btn btn-success mb-3"> <i class="fa fa-thin fa-arrow-left"></i> Kembali</a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning mb-3"><i class="fa fa-thin fa-pen"></i> Edit</a>
            <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                @method('delete')
              @csrf
              <button class="btn btn-danger mb-3" onclick="return confirm('Yakin ingin menghapus data?')"><span class="fa fa-thin fa-trash"></span> Hapus</button>
            </form>

            @if($post->image)
            <div style="max-height: 350px; overflow:hidden;">
                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->slug }}" class="img-fluid">
            </div>
            @else
            <img src="https://source.unsplash.com/1200x400?{{ $post->category->slug }}" alt="{{ $post->category->slug }}" class="img-fluid">
            @endif
            <article class="my-3 fs-5">
                {!! $post->body !!}
            </article>
        </div>
    </div>
</div>
@endsection