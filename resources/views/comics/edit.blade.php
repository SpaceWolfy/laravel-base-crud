@extends('layouts.layout')

@section('pageTitle', 'Modify a Comic')

@section('content')
<div class="form-container">
  <h1>Modifica il fumetto "<strong class="white">{{$comic->title}}</strong>"</h1>

  <form action="{{ route('comics.update', $comic->id) }}" method="post">
    @csrf
    @method('put')

    <div class="form-cont">
      <label for="title">Titolo del Fumetto<strong>*</strong></label>
      <input type="text" name="title" value="{{$comic->title}}">
    </div>

    <div class="form-cont">
      <label for="sale_date">Data di acquisto (Y-m-d)<strong>*</strong></label>
      <input type="text" name="sale_date" value="{{$comic->sale_date}}">
    </div>

    <div class="form-cont">
      <label for="price">Prezzo di acquisto<strong>*</strong></label>
      <input type="text" name="price" value="{{$comic->price}}">
    </div>

    <div class="form-cont">
      <label for="series">Serie di appartenenza<strong>*</strong></label>
      <input type="text" name="series" value="{{$comic->series}}">
    </div>

    <div class="form-cont">
      <label for="type">Tipologia<strong>*</strong></label>
      <input type="text" name="type" value='{{$comic->type}}'>
    </div>
    
    <div class="form-cont">
      <label for="description">Descrizione del prodotto<strong>*</strong></label>
      <textarea cols="80" rows="15" name="description">{{$comic->description}}</textarea>
    </div>

    <div class="form-cont">
      <label for="thumb">Immagine<strong>*</strong></label>
      <input type="text" name="thumb" value='{{$comic->thumb}}'>
    </div>

    <div class="btns">
      <button class="button" type="submit">Aggiungi</button>
      <button class="button back" type="reset">Reset</button>
    </div>
  </form>
</div>
@endsection