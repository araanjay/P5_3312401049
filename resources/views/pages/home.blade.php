@extends('layouts.app')

@section('title', 'Home')
@section('page_title', 'Selamat datang di komputer saya')

@section('content')
<h1 class="text-2xl font-bold mb-4">Selamat Pagi</h1>
<p class="mb-4">Berikut adalah komputer yang tersedia di hari ini</p>

@include('components.card', [
'imgsrc' => 'images/asus.jpeg',
'title' => 'Komputer Asus',
'desc' => 'Komputer dengan Processor sangat cepat.',
])
@endsection