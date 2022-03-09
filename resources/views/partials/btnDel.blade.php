<form action="{{ route($route, $id) }}" method="post" id="delete_form_{{ $id }}">
  @csrf
  @method("delete")

  <button class="button del" type="submit">Elimina il fumetto</button>
</form>