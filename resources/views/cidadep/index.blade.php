
<h1>Listagem dos Cidades</h1>

<a href="{{route('cidadep.create')}}">Adicionar</a>

<table>
    <thead>
        <th>NOme</th>
        <th>UF</th>
        <th>ibge</th>
        <th></th>
    </thead>
    <tbody>
      
        @foreach ($cidades as $cidade)
            <tr>
                <td>{{ $cidade->nome}}</td>
                <td>{{ $cidade->uf }}</td>
                <td>{{ $cidade->ibge }}</td>
                <td>
                    <a href="{{route('cidadep.show',$cidade->id)}}">ver</a>
                    <a href="{{route('cidadep.edit',$cidade->id)}}">editar</a>
                </td>
            </tr>
           
        @endforeach
    </tbody>
</table>

{{$cidades->links()}}
