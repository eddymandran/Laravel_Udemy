@extends('base')

@section('content')
    <div class="p-5 mb-4 bg-light rounded-3">
        <h1 class="display-3 text-center">Articles</h1>
        @livewire('filters', ['categories' => $categories])
{{--        <div class="d-flex justify-content-center mt-5"> {{ $articles->links('vendor.pagination.custom') }}</div>--}}
    </div>
@endsection
