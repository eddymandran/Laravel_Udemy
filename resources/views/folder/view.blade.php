@extends('base')

@php
    $i = 'Ma variable'
@endphp


@section('content')
    Mon contenu View
    {{ $i }}
@stop
