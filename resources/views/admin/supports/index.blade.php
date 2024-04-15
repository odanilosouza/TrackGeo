<h1>Listagem dos Suportes</h1>

<a href="{{route('supports.create')}}">Criar dúvida</a>

<table>
  <thead>
    <th>Id</th>
    <th>Assunto</th>
    <th>Status</th>
    <th>Description</th>
  </thead>
  <tbody>
  @foreach ($supports as $support )
    <th>
      <td>{{ $support->subject}}</td> 
      <td>{{ $support->status}}</td>
      <td>{{ $support->body}}</td>
    </th>
  @endforeach

  </tbody>
</table>


