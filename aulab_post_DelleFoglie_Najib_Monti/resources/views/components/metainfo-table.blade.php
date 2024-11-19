<table class="table table-stripped table-hover">
    <thead class="table-dark">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nome tag</th>
          <th scope="col">Quantità articoli collegati
          <th scope="col">Cancella   
          </th>
        </tr>
    </thead>
      <tbody>
        @foreach ($metaInfos as $metaInfo )
          <tr>
            <th scope="row">{{$metaInfo->id}}</th>
            <td>{{$metaInfo->name}}</td>
            <td>{{count($metaInfo->articles)}}</td>
        @if ($metaType == 'tags')  
          <td>
              <form action="{{route('admin.editTag',['tag' => $metaInfo])}}" method="POST">
                  @csrf 
                  @method('PUT')
                  <input type="text" value='[[$metaInfo->name]]' name="name" placeholder="Nuovo nome tag" class="form-control w-50 d-inline">
                  <button type="submit" class="btn btn-secondary">Modifica</button>
              </form>
          </td> 
          <td>
              <form method="POST" action="{{route('admin.deleteTag', ['tag' => $metaInfo])}}">
                @csrf 
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Cancella</button>  
              </form> 
          </td>
        @else
          <td>
              <form action="{{route('admin.editCategory',['category' => $metaInfo])}}" method="POST">
                  @csrf 
                  @method('PUT')
                  <input type="text" name="name" placeholder="Nuovo nome categoria" class="form-control w-50 d-inline" value="[[$metaInfo->name]]">
                  <button type="submit" class="btn btn-secondary">Aggiorna</button>
              </form>
          </td> 
              <td>
                <form action="{{route('admin.deleteCategory', ['category' => $metaInfo])}}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger">Cancella</button>
                </form>
              </td>
        @endif
        </tr>
      @endforeach
    </tbody>
</table>