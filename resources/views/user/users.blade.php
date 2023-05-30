@extends('layout.app')
@section('title', 'Home')
@section('heading')
@section('content')
    <div class="container-fluid">
        @livewire('user-page')
    </div>
@endsection
