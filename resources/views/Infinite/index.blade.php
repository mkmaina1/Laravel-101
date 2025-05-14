<x-layout>
    <div class="container px-4 py-8 mx-auto">
        <div class="flex items-center justify-between mb-6">
            <h2 class="text-3xl font-semibold text-gray-800">Currently Available Networks</h2>
            <a href="{{ route('Infinite.create') }}" class="px-4 py-2 text-sm text-white bg-green-600 rounded hover:bg-green-700">Create New Infinite Network</a>
        </div>


        <div class="overflow-hidden bg-white rounded-lg shadow">
            <table id="infinites-table" class="text-sm divide-gray-200 mx-w-full">
                <thead class="text-gray-700 bg-gray-100">
                    <tr>
                        <th class="px-4 py-2 text-left">ID</th>
                        <th class="px-4 py-2 text-left">Name</th>
                        <th class="px-4 py-2 text-left">Location</th>
                        <th class="px-4 py-2 text-left">Dojo</th>
                        <th class="px-4 py-2 text-left">Created At</th>
                        <th class="px-4 py-2 text-left">Action</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>

    {{-- ✅ Include jQuery and DataTables --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <script src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

    {{-- ✅ Initialize DataTables --}}
    <script>
        $(function () {
            $('#infinites-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ route('Infinite.index') }}',
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'name', name: 'name' },
                    { data: 'location', name: 'location' },
                    { data: 'dojo_name', name: 'dojo.name' },
                    {
                        data: 'created_at',
                        render: function(data) {
                            return new Date(data).toLocaleDateString(); // Format created_at
                        }
                    },
                    { data: 'action', name: 'action', orderable: false, searchable: false }
                ]
            });
        });
    </script>
</x-layout>
