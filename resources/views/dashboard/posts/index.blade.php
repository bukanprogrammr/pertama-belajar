@extends('dashboard.layouts.main')

@section('container')
<div class="container-fluid ml-2">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Posts Saya</h1> 

  @if(session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show col-lg-8" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif

  <a href="/dashboard/posts/create" class="btn btn-primary mb-3">Tambah Data</a>
    <table class="table table-hover table-sm col-lg-8 ">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Title</th>
          <th scope="col">Kategori</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($posts as $post)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $post->title }}</td>
          <td>{{ $post->category->name }}</td>
          <td>
            <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-info"><i class="fa fa-thin fa-eye"></i></a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge bg-warning"><i class="fas fa-sharp fa-light fa-pen"></i></a>
            <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
            @method('delete')
          @csrf
          <button class="badge bg-danger border-0" onclick="return confirm('Yakin ingin menghapus data?')"><i class="fa fa-light fa-trash"></i></button>
        </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection