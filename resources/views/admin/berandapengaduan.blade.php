<x-template-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{$title}}
        </h2><br>
    <div>
        <div class="shadow px-6 py-4 bg-white rounded sm:px-2 sm:py-1 sm:br-gray-100">
          <div class="grid grid-cols-12">
            <div class="col-span-6 p-4">
              <a href="{{route('pengaduan.create')}}"><button class="px-4 py-1 text-sm rounded text-purple-600 font-semibold border border-purple-200
              hover:text-white hover:bg-purple-600 hover:border-transparent focus:outline-none">Tambah<button></a>
           </div>
           <div class="col-span-6 p-4 flex justify-end">
            <input type="text" class="px-4 py-2 focus:ring-indigo-500 focus:border-indigo-500 rounded-none rounded-1-md sm:text-sm border-gray-300">
            <button class="rounded-r-md border border-1-0 px-4 py-1 border-gray-300 bg-gray-50 text-gray-500 text-blue-600 hover:text-white hover:bg-blue-600">Cari</button>
           </div>
          </div>
        <div class="shadow overflow-hidden border-b boorder-gray-200 sm:rounded-lg m-1">
        <table class="min-w-full divide-y divide-gray-200 p-3">
          <thead class="bg-gray-50">
              <tr class="text-center sm-1" >
                <td>Nama</td>
                <td>Jk</td>
                <td>Pekerjaan</td>
                <td>Alamat</td>
                <td>Tanggal</td>
                <td>Email</td>
                <td>Nama Perusahaan</td>
                <td>Alamat Perusahaan</td>
                <td>Jenis Perusahaan</td>
                <td>No.Telp</td>
                <td>Pengaduan</td>
                <td>Gambar</td>
                <td>AKSI</td>
              </tr>
            </thead>
             <tbody class=" text-center bg-white divide-y divide-gray-200">
            @foreach ($pengaduan as $item)
              <tr>
                    <td>{{$item->nama}}</td>
                    <td>{{$item->jk}}</td>
                    <td>{{$item->pekerjaan}}</td>
                    <td>{{$item->alamat}}</td>
                    <td>{{$item->waktu}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->namaperusahaan}}</td>
                    <td>{{$item->alamatperusahaan}}</td>
                    <td>{{$item->jenisperusahaan}}</td>
                    <td>{{$item->no_telp}}</td>
                     <td>{{$item->pengaduan}}</td>
                      <td align="center">
                      <img src="{{asset('storage/' .$item->gambar)}}" class="w-20" alt="">
                    </td>
                    <td>
                        <form action="{{route('pengaduan.destroy',$item->id)}}" method="POST">
                        @if (auth()->user()->level == 1)
                                            <form action="{{ route('pengaduan.destroy', $item->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <a href="{{ route('pengaduan.edit', $item->id) }}"
                                                    class="px-4 py-1 mr-1 text-sm rounded text-green-600 border border-yellow-500 hover:text-white hover:bg-yellow-600">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <button
                                                    class="px-4 py-1 text-sm rounded text-red-600 border border-yellow-500 hover:text-white hover:bg-red-600">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                                <a href="{{ route('pengaduan.show', $item->id) }}"
                                                    class="px-4 py-1 text-sm rounded text-green-600 border border-yellow-500 hover:text-white hover:bg-yellow-600">
                                                    <i class="fas fa-info"></i>
                                                </a>
                                            </form>
                                        @elseif(auth()->user()->level==2)
                                            <a href="{{ route('pengaduan.show', $item->id) }}"
                                                class="px-4 py-1 text-sm rounded text-green-600 border border-yellow-500 hover:text-white hover:bg-yellow-600">
                                                <i class="fas fa-info"></i>
                                            </a>
                                        @endif
                    </td>
              </tr>
               
            @endforeach
          </tbody>
        </table>
       </div>
    </div>
</x-template-layout>