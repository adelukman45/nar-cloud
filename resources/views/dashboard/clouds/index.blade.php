@extends('dashboard.layouts.main')
@section('container')
    <h1 class="h3 mb-4 text-gray-800">Clouds</h1>
    @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show col-lg-8" role="alert">
            {{ session('success') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  </button>
</div>
    @endif 
    <a href="/dashboard/clouds/create" class="btn btn-primary btn-sm mb-3"><i class="fas fa-plus mr-1"></i>Create New</a>
    <table class="table col-lg-8">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($clouds as $cloud)
            <tr>
              <th scope="row">{{ $loop->iteration }}</th>
              <td>{{ $cloud->name }}</td>
              <td>
                <a href="/dashboard/clouds/{{ $cloud->id }}" class="badge badge-success border-0 px-2 py-2" title="Show Data"><i class="fas fa-eye"></i></a>
                <a href="/dashboard/clouds/{{ $cloud->id }}/edit" class="badge badge-warning border-0 px-2 py-2" title="Edit Data"><i class="fas fa-edit"></i></a>
                <form action="/dashboard/clouds/{{ $cloud->id }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button type="submit"
                        class="show_confirm badge badge-danger border-0 px-2 py-2" title="Delete Data"><span
                            class="far fa-trash-alt"></span></button>
                </form>
            </tr>
            @endforeach
        </tbody>
      </table>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <script type="text/javascript">
        $('.show_confirm').click(function(event) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            swal({
                    title: `Are You Sure?`,
                    text: "If you delete this, it will be gone forever.",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                    }
                });
        });
    </script>
@endsection

