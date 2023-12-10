<x-admin-layout>
    <div class="right_col" role="main">
        <div class="page-title">
            <h3 class="text-center">DATA SEJARAH</h3>
        </div>

        <div class="container mt-3">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <form enctype="multipart/form-data"
                        action="{{ isset($History) ? route('admin.update', $History->sjrh_id) : route('admin.store') }}"
                        method="POST">
                        @csrf
                        @if(isset($History)) @method('PUT') @endif

                        <div class="border-bottom border-gray-900/10 pb-12">
                            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                <div class="sm:col-span-3">
                                    <label for="sjrh_nama" class="block text-sm font-medium leading-6 text-gray-900">Nama Sejarah</label>
                                    <div class="mt-2">
                                        <input type="text" name="sjrh_nama" id="sjrh_nama" value="{{ isset($History) ? $History->sjrh_nama : old('sjrh_nama') }}" autocomplete="given-name"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        @error('sjrh_nama')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="sm:col-span-3">
                                    <label for="subjudul" class="block text-sm font-medium leading-6 text-gray-900">Subjudul</label>
                                    <div class="mt-2">
                                        <input type="text" name="sjrh_subjudul" id="sjrh_subjudul" value="{{ isset($History) ? $History->subjudul : old('subjudul') }}" autocomplete="given-name"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        @error('subjudul')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="sm:col-span-3">
                                    <label for="kategori" class="block text-sm font-medium leading-6 text-gray-900">Kategori Sejarah</label>
                                    <div class="mt-2">
                                        <select id="kategori_id" name="kategori_id" autocomplete="country-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                            <option value="">Pilih Kategori</option>
                                            @foreach ($Kategori as $item)
                                                <option {{ (isset($History) && $History->kategori_id == $item->kategori_id) || old('kategori_id') == $item->kategori_id ? 'selected' : '' }} value="{{ $item->kategori_id }}">{{ $item->kategori_name }}</option>
                                            @endforeach
                                        </select>
                                        @error('kategori_id')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-span-full">
                                    <label for="deskripsi" class="block text-sm font-medium leading-6 text-gray-900">Deskripsi</label>
                                    <div class="mt-2">
                                        <textarea id="sjrh_desc" name="sjrh_desc" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required>{{ isset($History) ? $History->sjrh_desc : old('sjrh_desc') }}</textarea>
                                        @error('sjrh_desc')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-span-full">
                                    <label for="sjrh_img" class="font-weight-bold">Foto</label>
                                    <input type="file" id="sjrh_img" name="sjrh_img" class="form-control" required>
                                    @error('sjrh_img')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="mt-6 flex items-center justify-end gap-x-6">
                            <button type="button"
                                class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
                            <button type="submit"
                                class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline-none focus-visible:ring focus-visible:ring-indigo-600 focus-visible:ring-offset-2 focus-visible:ring-offset-gray-900">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
