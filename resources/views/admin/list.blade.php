@extends('layouts.admin')


@section('content')
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Users</h4> 
            </div>
        </div>
        <div class="white-box">
            <div class="table-responsive">
                <table id="users" class="table table-striped table-bordered display" style="width:100%">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>

    </div>

    @push('scripts')

            <script type="text/javascript">
                $(document).ready(function() {
                    window.dataGridTable = $('#users').DataTable({
                        "processing": true,
                        "serverSide": true,
                        "order" : [[0,'desc']],
                        "ajax": "{!! route('admin.list') !!}",
                        "columns": [
                            {data: 'id', name: 'id'},
                            {data: 'name', name: 'name'},
                            {data: 'email', name: 'email'},
                            {data: 'role.name', name: 'role.name'},
                            {data: 'action', name: 'action', orderable: false, searchable: false}
                        ]
                    });
                });
            </script>
    @endpush

@endsection