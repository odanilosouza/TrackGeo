<h1> nova dúvida</h1>

<form action="{{ route('suppors.store')}}" method="POST">
  <!-- <input type="hidden" value="{{ csrf_token() }}" name="_token" > -->
  @csrf()
  <input type="text" placeholder="Assunto" name="subject">
  <textarea name="body" cols="30" rows="5" placeholder="Descrição"></textarea>
  <button type="submit"> Enviar</button>

</form>