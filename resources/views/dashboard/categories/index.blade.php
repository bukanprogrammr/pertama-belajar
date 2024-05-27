@extends('dashboard.layouts.main')

@section('container')
<div class="container-fluid ml-2">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Posts Categories Saya</h1> 

  @if(session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show col-lg-8" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif

  <a href="/dashboard/categories/create" class="btn btn-primary mb-3">Tambah Categories</a>
    <table class="table table-hover table-sm col-lg-5 ">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nama Kategori</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($categories as $category)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $category->name }}</td>
          <td>
            <a href="/dashboard/categories/{{ $category->slug }}" class="badge bg-info"><i class="fa fa-thin fa-eye"></i></a>
            <a href="/dashboard/categories/{{ $category->slug }}/edit" class="badge bg-warning"><i class="fas fa-sharp fa-light fa-pen"></i></a>
            <form action="/dashboard/categories/{{ $category->slug }}" method="post" class="d-inline">
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