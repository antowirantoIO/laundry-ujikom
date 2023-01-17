<x-app-layout title="Manage data Customer">
    <x-slot name="vendor_css">
        <link rel="stylesheet" href="{{ asset('/') }}vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
        <link rel="stylesheet" href="{{ asset('/') }}vendor/libs/node-waves/node-waves.css" />
        <link rel="stylesheet" href="{{ asset('/') }}vendor/libs/typeahead-js/typeahead.css" />
        <link rel="stylesheet" href="{{ asset('/') }}vendor/libs/datatables-bs5/datatables.bootstrap5.css" />
        <link rel="stylesheet"
            href="{{ asset('/') }}vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css" />
        <link rel="stylesheet"
            href="{{ asset('/') }}vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css" />
        <link rel="stylesheet" href="{{ asset('/') }}vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css" />
        <link rel="stylesheet" href="{{ asset('/') }}vendor/libs/flatpickr/flatpickr.css" />
    </x-slot>
    <x-slot name="page_css"></x-slot>

    <main>
        <div class="container-xxl flex-grow-1 container-p-y">
            <!-- DataTable with Buttons -->
            <div class="card">
                <div class="card-datatable table-responsive pt-0">
                    <table class="datatables-basic table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Customer ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Alamat</th>
                                <th>No Telp</th>
                                <th>Join</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($customers as $customer)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $customer->kode_user }}</td>
                                    <td>{{ $customer->name }}</td>
                                    <td>{{ $customer->email }}</td>
                                    <td>{{ $customer->alamat }}</td>
                                    <td>{{ $customer->no_telp }}</td>
                                    <td>{{ $customer->created_at->diffForHumans() }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <div class="d-inline-block">
                                                <a href="javascript:;"
                                                    class="btn btn-sm btn-icon dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown">
                                                    <i class="text-primary ti ti-dots-vertical"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end m-0">
                                                    <a href="javascript:;" class="dropdown-item">Details</a>
                                                    <a href="javascript:;" class="dropdown-item">Archive</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:;"
                                                        class="dropdown-item text-danger delete-record">Delete</a>
                                                </div>
                                            </div>
                                            <a href="javascript:;" class="btn btn-sm btn-icon item-edit">
                                                <i class="text-primary ti ti-pencil"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>

    <x-slot name="vendor_js">
        <script src="{{ asset('/') }}vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
    </x-slot>
    <x-slot name="page_js">
        <script src="{{ asset('/') }}js/customer.js"></script>
    </x-slot>
</x-app-layout>
