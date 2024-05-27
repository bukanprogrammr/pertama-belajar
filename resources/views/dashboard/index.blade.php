@extends('dashboard.layouts.main')

@section('container')
<div class="container-fluid ml-2">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Selamat datang {{ auth()->user()->name }}!</h1>

</div>
@endsection