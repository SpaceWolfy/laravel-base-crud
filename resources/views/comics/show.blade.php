@extends('layouts.layout')

@section('pageTitle', 'Comic Details')

@section('content')
  <div class="info-container">
    <div class="details">
      <h1>Dettagli relativi al fumetto {{ $comic->title }}</h1>
        <div><strong>Prezzo :</strong> {{ $comic->price }} $</div>
        <div><strong>Serie :</strong> {{ $comic->series }}</div>
        <div><strong>Tipologia :</strong> {{ $comic->type }}</div>
        <div><strong>Descrizione :</strong> {{ $comic->description }}</div>
    </div>

    <div class="jumbo-thumb">
      <img src="{{ $comic->thumb }}" alt="comic thumb">
    </div>
  </div>
@endsection