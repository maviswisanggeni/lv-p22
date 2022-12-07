<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Kereta</title>
    @vite('resources/css/app.css')
</head>
<body>
    {{-- create form input readonly for detail kereta --}}
    <div class="flex flex-col">
        <div class="my-9 overflow-x-auto px-10">
            <div class="block p-6 rounded-lg bg-white max-w-full">
                <h1 class="mb-20 text-center text-4xl font-bold capitalize">Detail Kereta</h1>
                <form>
                    <div class="form-group mb-6">
                        <label for="nama" class="block text-sm font-medium text-gray-700">Nama Kereta</label>
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
                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" value="{{ $kereta->nama_kereta }}" readonly>
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
                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" value="{{ $kereta->tipe }}" readonly>
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
                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" value="{{ $kereta->masinis }}" readonly>
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
                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" value="{{ $kereta->stasiun }}" readonly>
                    </div>
                    <div class="form-group mb-6">
                        <label for="alamat" class="block text-sm font-medium text-gray-700">Tujuan</label>
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
                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" value="{{ $kereta->tujuan }}" readonly>
                    </div>
                    {{-- create button to back kereta/all --}}
                    <div class="form-group mb-6">
                        <a href="/kereta/all" class="px-6
                        py-2.5
                        bg-blue-600
                        text-white
                        font-medium
                        text-xs
                        leading-tight
                        uppercase
                        rounded
                        shadow-md
                        hover:bg-blue-700 hover:shadow-lg
                        focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
                        active:bg-blue-800 active:shadow-lg
                        transition
                        duration-150
                        ease-in-out">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <h1 class="mb-20 text-center text-3xl font-bold capitalize">Daftar Penumpang Kereta {{$kereta->nama_kereta}}</h1>
    <div class="flex px-16 mb-40">
        <ul class="bg-white rounded-lg w-screen text-gray-900">
            @foreach ($kereta->Penumpang as $l_penumpang)
            <li class="px-6 py-2 border-b border-gray-200 w-full rounded-t-lg">{{$l_penumpang->nama}}</li>
            @endforeach
        </ul>
      </div>
</body>
</html>