<x-admin-layout>
    <section class="pb-20 pt-5">
        <div class="title_right flex justify-end">
            <!-- Search Form -->
            <form action="{{ route('admin.index') }}" method="GET" class="flex pb-3 place-items-center">
                <!-- Kategori Dropdown -->
                <select name="shop_id" id="shop_id" class="mt-1 p-2 w-1/3 border rounded-md mr-2">
                    <option value="">Pilih Kategori</option>
                    @foreach ($Kategori as $item)
                        <option value="{{ $item->kategori_id }}" {{ (isset($_GET['kategori_id']) && $_GET['kategori_id'] == $item->kategori_id) ? 'selected' : '' }}>
                            {{ $item->kategori_name }}
                        </option>
                    @endforeach
                </select>
                <!-- Search Input -->
                <input type="text" name="s" value="{{ isset($_GET['s']) ? $_GET['s'] : '' }}" class="mt-1 p-2 w-1/3 border rounded-md mr-2">
                <!-- Submit Button -->
                <button type="submit" class="bg-gradient-to-tl from-purple-700 to-pink-500 text-black font-bold py-1 px-4 rounded-xl">Cari</button>
            </form>
        </div>

        <!-- Table -->
        <div class="p-2 rounded-lg w-full">
            <!-- Tambah Button -->
            <a href="{{ route('admin.create') }}" class="px-4 py-2 text-sm text-white rounded-md bg-primary hover:bg-primary-dark focus:outline-none focus:ring focus:ring-primary focus:ring-offset-1 focus:ring-offset-white dark:focus:ring-offset-dark mb-10">Tambah</a>

            <!-- Table Responsive -->
            <div class="table-responsive mt-4">
                <table class="min-w-full bg-white border border-gray-200">
                    <thead>
                        <tr>
                            <th class="border border-gray-200">Nama Sejarah</th>
                            <th class="border border-gray-200">Sub Judul Sejarah</th>
                            <th class="border border-gray-200">Deskripsi Sejarah</th>
                            <th class="border border-gray-200">Foto Sejarah</th>
                            <th class="border border-gray-200">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($History as $key => $item)
                            <tr>
                                <td class="border border-gray-200">{{ $item->sjrh_nama }}</td>
                                <td class="border border-gray-200">{{ $item->sjrh_subjudul }}</td>
                                <td class="border border-gray-200">{{ $item->sjrh_desc }}</td>
                                <td class="border border-gray-200">
                                    <div style="max-width: 100px; max-height: 100px; overflow: hidden;">
                                        <img src="{{ asset($item->sjrh_img) }}" alt="" style="width: 100%; height: 100%; object-fit: cover;">
                                    </div>
                                </td>
                                <td class="border border-gray-200">
                                    <a href="{{ route('admin.edit', $item->sjrh_id) }}" class="fa fa-pencil">Edit</a>
                                    <form action="{{ route('admin.destroy', $item->sjrh_id) }}" method="POST">
                                        @CSRF @METHOD('DELETE')
                                        <button class="fa fa-trash" onclick="return confirm('Anda Yakin Ingin Menghapusnya')" type="submit">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</x-admin-layout>
