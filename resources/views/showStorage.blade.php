<div>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css"
          rel="stylesheet"/>
    <table  class="table table-bordered mt-5">
        <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
        </tr>
        </thead>
        @foreach($storages as $storage)
        <tbody>
        <tr>
            <td>{{ $storage->name }}</td>
            <td>{{ $storage->description }}</td>
        </tr>
        </tbody>
        @endforeach
    </table>
</div>
