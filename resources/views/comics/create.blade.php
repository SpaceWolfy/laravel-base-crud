@extends('layouts.layout')

@section('pageTitle', 'Add a Comic')

@section('content')
<div class="form-container">
  <h1>Crea un nuovo fumetto</h1>

  <form action="{{ route('comics.store') }}" method="post">
    @csrf

    <div class="form-cont">
      <label for="title">Titolo del Fumetto<strong>*</strong></label>
      <input type="text" name="title">
    </div>

    <div class="form-cont">
      <label for="sale_date">Data di acquisto (Y-m-d)<strong>*</strong></label>
      <input type="text" name="sale_date">
    </div>

    <div class="form-cont">
      <label for="price">Prezzo di acquisto<strong>*</strong></label>
      <input type="text" name="price">
    </div>

    <div class="form-cont">
      <label for="series">Serie di appartenenza<strong>*</strong></label>
      <input type="text" name="series">
    </div>

    <div class="form-cont">
      <label for="type">Tipologia<strong>*</strong></label>
      <input type="text" name="type">
    </div>
    
    <div class="form-cont">
      <label for="description">Descrizione del prodotto<strong>*</strong></label>
      <textarea cols="80" rows="15" name="description"></textarea>
    </div>

    <div class="form-cont">
      <label for="thumb">Immagine<strong>*</strong></label>
      <input type="text" name="thumb">
    </div>

    <div class="btns">
      <button class="button" type="submit">Aggiungi</button>
      <button class="button back" type="reset">Reset</button>
    </div>
  </form>
</div>
@endsection