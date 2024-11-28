<table class="table table-striped table-hover table-responsive">
    <thead class="table-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nome Tag</th>
        <th scope="col" class="d-none d-md-table-cell">N. Articoli</th>
        <th scope="col">Azioni</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($metaInfos as $metaInfo )
        <tr>
          <th scope="row" class="">{{$metaInfo->id}}</th>
          <td>{{$metaInfo->name}}</td>
          <td class="d-none d-md-table-cell">{{ count($metaInfo->articles) }}</td>
          @if ($metaType == 'tags')
              <td class="d-flex nowrap justify-content-center">
                <form action="{{ route('admin.editTag', ['tag' => $metaInfo]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="text" name="name" placeholder="Nuovo nome tag" class="form-control w-50 d-inline" value="{{$metaInfo->name}}">
                    <button type="submit" class="btn btn-warning">Modifica</button>
                </form>
                <form action="{{ route('admin.deleteTag', ['tag' => $metaInfo]) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger">Cancella</button>
              </form>
              </td>

          @else
              <td class="nowrap d-flex justify-content-center">
                <form action="{{ route('admin.editCategory', ['category'=>$metaInfo]) }}" method="POST">
                  @csrf
                  @method('PUT')
                  <input type="text" name="name" class="form-control w-50 d-inline" placeholder="Nuovo nome categoria" value="{{ $metaInfo->name }}">
                  <button type="submit" class="btn btn-primary">Aggiorna</button>
                </form>
                <form action="{{ route('admin.deleteCategory', ['category'=>$metaInfo] )}}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger">Elimina</button>
                </form>
              </td>

          @endif
        </tr>
      @endforeach
    </tbody>
</table>