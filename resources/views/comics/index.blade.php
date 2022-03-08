@extends('layouts.layout')

@section('pageTitle', 'Comics - Principal Page')

@section("content")
<div class="comic-cont">
  @include('partials.card')
</div>
@endsection