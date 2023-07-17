<?php

$section = 'layout.'. auth()->user()->jenisAkun

?>

@extends($section)
@section('container')
<div class="container mt-5">
    <h1>Data Akun Admin</h1>
    <div class="table-responsive">
        <table id="member-table" class="table table-striped table-bordered", style="background-color: #4CAF50">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Username</th>
                    {{-- <th>Password</th> --}}
                    <th>Role</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                    @php
                    $i = 1;
                    @endphp
                @foreach ($data as $item)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->username }}</td>
                    {{-- <td>{{ $item->password }}</td> --}}
                    <td>{{ $item->jenisAkun }}</td>
                    @if($item->jenisAkun !== 'ketua')
                    <td class="d-flex justify-content-center gap-1">
                        {{-- <div class="btn-group" role="group"> --}}
                        <a href="/{{ auth()->user()->jenisAkun }}/edit-data-admin/{{ $item->id }}" type="button"
                            class="btn btn-primary">Edit</a>
                        <form action="/{{ auth()->user()->jenisAkun }}/hapus-admin/{{ $item->id }}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger">delete</button>
                        </form>
                        {{-- </div> --}}
                    @else
                    <td></td>
                    @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- Include the necessary scripts and stylesheets -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function() {
            $('#member-table').DataTable({
                "paging": true,
                "lengthMenu": [5, 10, 25, 50],
                "searching": true,
                "language": {
                    "lengthMenu": "Show _MENU_ entries per page",
                    "zeroRecords": "No matching records found",
                    "info": "Showing page _PAGE_ of _PAGES_",
                    "infoEmpty": "No records available",
                    "infoFiltered": "(filtered from _MAX_ total records)",
                    "search": "Search:",
                    "paginate": {
                        "first": "First",
                        "last": "Last",
                        "next": "Next",
                        "previous": "Previous"
                    }
                }
            });
        });
</script>

<style>
    .table {
        width: 100%;
        table-layout: auto;
    }

    .table th,
    .table td {
        padding: 12px;
        text-align: center;
        vertical-align: middle;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .table thead th {
        background-color: #4CAF50;
        color: #fff;
        font-weight: bold;
        text-transform: uppercase;

    }

    .table-striped tbody tr:nth-of-type(odd) {
        background-color: #f8f9fa;
    }

    .table-bordered {
        border: 1px solid #dee2e6;
    }

    .table-bordered th,
    .table-bordered td {
        border: 1px solid #dee2e6;
    }

    .dataTables_wrapper .dataTables_paginate .paginate_button {
        padding: 0.5rem 0.75rem;
        margin-left: 0.5rem;
        font-size: 0.875rem;
        border-radius: 0.25rem;
        color: #fff;
        background-color: #0d6efd;
        border: none;
        transition: background-color 0.3s;
    }

    .dataTables_wrapper .dataTables_paginate .paginate_button.current {
        background-color: #0d6efd;
        border-color: #0d6efd;
    }

    .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
        background-color: #0b5ed7;
        color: #fff;
    }

    .btn-group {
        display: flex;
        justify-content: center;
        gap: 8px;
    }

    .btn {
        padding: 8px 16px;
        font-size: 14px;
        border-radius: 4px;
        transition: background-color 0.3s;
    }

    .btn-primary {
        background-color: #0d6efd;
        border-color: #0d6efd;
        color: #fff;
    }

    .btn-primary:hover {
        background-color: #0b5ed7;
        border-color: #0b5ed7;
    }

    .btn-danger {
        background-color: #dc3545;
        border-color: #dc3545;
        color: #fff;
    }

    .btn-danger:hover {
        background-color: #c82333;
        border-color: #c82333;
    }
</style>
@endsection
