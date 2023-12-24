<x-admin-layout>

    <!-- Style -->
    <style>
        #dataCenterPoint_wrapper {
            margin-top: 20px;
        }

        .float-end {
            margin-left: auto;
        }

        .alert {
            margin-top: 20px;
        }

        /* Style tambahan untuk table */
        .table th,
        .table td {
            border: 1px solid #e2e8f0;
            padding: 8px; /* Tambahkan padding untuk memberikan ruang */
            text-align: center; /* Pusatkan teks di sel tabel */
        }

        .table th {
            background-color: #f8fafc;
        }

        /* Tambahkan class untuk menyesuaikan lebar tabel */
        .table-responsive {
            width: 100%;
            overflow-x: auto;
        }
    </style>
    <!-- End Style -->

    <!-- Content -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Set Center Point</h4>
                        <a href="{{ route('centre-point.create') }}" class="btn btn-info btn-sm float-end">Create Data</a>
                    </div>
                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if (session('error'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('error') }}
                            </div>
                        @endif

                        <!-- Table Responsive -->
                        <div class="table-responsive">
                            <table class="table" id="dataCenterPoint">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Titik Koordinat</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>

                        <form action="" method="POST" id="deleteForm">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Hapus" style="display:none">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Content -->

    <!-- JavaScript -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(function() {
            $('#dataCenterPoint').DataTable({
                processing: true,
                serverSide: true,
                responsive: true,
                lengthChange: true,
                autoWidth: false,
                ajax: '{{ route('centre-point.data') }}',
                columns: [{
                        data: 'DT_RowIndex',
                        orderable: false,
                        searchable: false
                    }, {
                        data: 'coordinates'
                    },
                    {
                        data: 'action'
                    }
                ]
            })
        })
    </script>
    <!-- End Javascript -->

</x-admin-layout>
