<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Penumpang</title>
    @vite('resources/css/app.css')
</head>
<body>
    {{-- create form input readonly for detail penumpang --}}
    <div class="flex flex-col">
        <div class="my-9 overflow-x-auto px-10">
            <div class="block p-6 rounded-lg bg-white max-w-full">
                <h1 class="mb-20 text-center text-4xl font-bold capitalize">Edit Penumpang</h1>
                <form method="post" action="/penumpang/update/ {{ $penumpang->id }}">
                    @csrf
                    <div class="form-group mb-6">
                        <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control
                        block
                        w-full
                        px-3
                        py-1.5
                        text-base
                        font-normal
                        text-gray-700
                        bg-white bg-clip-padding
                        border border-solid border-gray-300
                        rounded
                        transition
                        ease-in-out
                        m-0
                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" value="{{ old('nama', $penumpang->nama) }}" required>
                    </div>
                    <div class="form-group mb-6">
                        <label for="nik" class="block text-sm font-medium text-gray-700">NIK</label>
                        <input type="text" name="nik" id="nik" class="form-control
                        block
                        w-full
                        px-3
                        py-1.5
                        text-base
                        font-normal
                        text-gray-700
                        bg-white bg-clip-padding
                        border border-solid border-gray-300
                        rounded
                        transition
                        ease-in-out
                        m-0
                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" value="{{ old('nik', $penumpang->nik) }}" disabled>
                    </div>
                    <div class="form-group mb-6">
                        <label for="umur" class="block text-sm font-medium text-gray-700">Umur</label>
                        <input type="text" name="umur" id="umur" class="form-control
                        block
                        w-full
                        px-3
                        py-1.5
                        text-base
                        font-normal
                        text-gray-700
                        bg-white bg-clip-padding
                        border border-solid border-gray-300
                        rounded
                        transition
                        ease-in-out
                        m-0
                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" value="{{ old('umur', $penumpang->umur) }}" required>
                    </div>
                    <div class="form-group mb-6">
                        <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat</label>
                        <input type="text" name="alamat" id="alamat" class="form-control
                        block
                        w-full
                        px-3
                        py-1.5
                        text-base
                        font-normal
                        text-gray-700
                        bg-white bg-clip-padding
                        border border-solid border-gray-300
                        rounded
                        transition
                        ease-in-out
                        m-0
                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" value="{{ old('alamat', $penumpang->alamat) }}" required>
                    </div>
                    {{-- create button type submit for tambah data --}}
                    <div class="flex justify-start">
                        <button type="submit" class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-blue-600 border border-transparent rounded-lg active:bg-blue-600 hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>