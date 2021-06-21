<x-template-layout>
                <h1 class="text-3xl text-black pb-6">{{$title}}</h1>
            <div>
            <div class="shadow px-6 py-4 bg-white rounded sm:px-1 sm:py-1 sm:br-gray-100">
            <form action="{{(isset($informasi))?route('informasi.update',$informasi->id):route('informasi.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    @if(isset($informasi))
        @method('PUT')
    @endif
        <div class="shadow sm:rounded-md sm:overflow-hidden">
          <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
            <div class="grid grid-cols-3 gap-15">
                        <div class="col-span-3 sm:col-span-2">
              <label for="last_name" class="block text-sm font-medium text-gray-700">Nama informasi</label>
                <input type="text" name="nama" id="nama" autocomplete="family-name" value="{{(isset($informasi))?$informasi->nama:old('nama') }}" class="mt-1  @error('nama') border-red-500 @enderror  focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Ketik nama informasi">
              <div class="text-xs text-red-600">@error('nama'){{$message}} @enderror</div>
              </div>
            </div>

                <div class="grid grid-cols-3 gap-15">
                        <div class="col-span-3 sm:col-span-2">
                            <label for="jk" class="block text-sm font-medium text-gray-700">
                                Jenis Kelamin
                            </label>
                            <div class="mt-1 flex rounded-md shadow-sm">
                                <select name="jk" id="jk" class="@error('jk') border-red-600 @enderror focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300">
                                    <option value="">Pilih</option>
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="text-xs text-red-500"> @error('jk') {{$message}} @enderror</div>
                        </div>
                    </div>
                  
                  <div class="grid grid-cols-3 gap-15">
                        <div class="col-span-3 sm:col-span-2">
                            <label for="pekerjaan" class="block text-sm font-medium text-gray-700">
                                Pekerjaan
                            </label>
                            <div class="mt-1 flex rounded-md shadow-sm">
                                <select name="pekerjaan" id="pekerjaan" class="@error('pekerjaan') border-red-600 @enderror focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300">
                                    <option value=""></option>
                                    <option value="Apoteker">Apoteker</option>
                                    <option value="Dokter">Dokter</option>
                                    <option value="Karyawan">Karyawan</option>
                                    <option value="LSM">LSM</option>
                                    <option value="Nakes Lain">Nakes Lain</option>
                                    <option value="Pengacara/Legal">Pengacara/Legal</option>
                                     <option value="Plajar/Mahasiswa">Plajar/Mahasiswa</option>
                                    <option value="Pelaku Usaha">Pelaku Usaha</option>
                                    <option value="Wartawan">Wartawan</option>
                                    <option value="Umum">Umum</option>
                                </select>
                            </div>
                            <div class="text-xs text-red-500"> @error('pekerjaan') {{$message}} @enderror</div>
                        </div>
                    </div>


             <div class="grid grid-cols-3 gap-15">
                        <div class="col-span-3 sm:col-span-2">
              <label for="last_name" class="block text-sm font-medium text-gray-700">Alamat</label>
                <input type="text" name="alamat" id="alamat" autocomplete="family-name" value="{{(isset($informasi))?$informasi->alamat:old('alamat') }}" class="mt-1  @error('alamat') border-red-500 @enderror  focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Ketik alamat informasi">
              <div class="text-xs text-red-600">@error('alamat'){{$message}} @enderror</div>
              </div>
            </div>

            <div>
            <div class="grid grid-cols-3 gap-15">
                        <div class="col-span-3 sm:col-span-2">
                            <label for="waktu" class="block text-sm font-medium text-gray-700">
                                Tanggal 
                            </label>
                            <div class="mt-1 flex rounded-md shadow-sm">
                                <input type="date" name="waktu" id="waktu" value="{{(isset($informasi))?$informasi->waktu:old('waktu') }}" class="@error('waktu') border-red-600 @enderror focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300  text-black">
                            </div>
                            <div class="text-xs text-red-500"> @error('waktu') {{$message}} @enderror</div>
                        </div>
                    </div><br>

                  <div class="grid grid-cols-3 gap-15">
                        <div class="col-span-3 sm:col-span-2">
              <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="text" name="email" id="email" autocomplete="family-name" value="{{(isset($informasi))?$informasi->email:old('email') }}" class="mt-1  @error('email') border-red-500 @enderror  focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Ketik email informasi">
              <div class="text-xs text-red-600">@error('email'){{$message}} @enderror</div>
              </div>
            </div>

             <div class="grid grid-cols-3 gap-15">
                        <div class="col-span-3 sm:col-span-2">
              <label for="namaperusahaan" class="block text-sm font-medium text-gray-700">Nama Perusahaan</label>
                <input type="text" name="namaperusahaan" id="namaperusahaan" autocomplete="family-name" value="{{(isset($informasi))?$informasi->namaperusahaan:old('namaperusahaan') }}" class="mt-1  @error('namaperusahaan') border-red-500 @enderror  focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Ketik namaperusahaan informasi">
              <div class="text-xs text-red-600">@error('namaperusahaan'){{$message}} @enderror</div>
              </div>
            </div>

              <div class="grid grid-cols-3 gap-15">
                        <div class="col-span-3 sm:col-span-2">
              <label for="alamatperusahaan" class="block text-sm font-medium text-gray-700">Alamat Perusahaan</label>
                <input type="text" name="alamatperusahaan" id="alamatperusahaan" autocomplete="family-name" value="{{(isset($informasi))?$informasi->alamatperusahaan:old('alamatperusahaan') }}" class="mt-1  @error('alamatperusahaan') border-red-500 @enderror  focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Ketik alamatperusahaan informasi">
              <div class="text-xs text-red-600">@error('alamatperusahaan'){{$message}} @enderror</div>
              </div>
            </div>

              <div class="grid grid-cols-3 gap-15">
                        <div class="col-span-3 sm:col-span-2">
              <label for="jenisperusahaan" class="block text-sm font-medium text-gray-700">jenis Perusahaan</label>
                <input type="text" name="jenisperusahaan" id="jenisperusahaan" autocomplete="family-name" value="{{(isset($informasi))?$informasi->jenisperusahaan:old('jenisperusahaan') }}" class="mt-1  @error('jenisperusahaan') border-red-500 @enderror  focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Ketik jenisperusahaan informasi">
              <div class="text-xs text-red-600">@error('jenisperusahaan'){{$message}} @enderror</div>
              </div>
            </div>

            <div class="grid grid-cols-3 gap-15">
                        <div class="col-span-3 sm:col-span-2">
              <label for="no_telp" class="block text-sm font-medium text-gray-700">No Telepon</label>
                <input type="text" name="no_telp" id="no_telp" autocomplete="family-name" value="{{(isset($informasi))?$informasi->no_telp:old('no_telp') }}" class="mt-1  @error('no_telp') border-red-500 @enderror  focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Ketik no_telp informasi">
              <div class="text-xs text-red-600">@error('no_telp'){{$message}} @enderror</div>
              </div>
            </div>


                <div>
                <label for="about" class="block text-sm font-medium text-gray-700">
                Pertanyaan
              </label>
              <div class="mt-1">
                <textarea name="pertanyaan" rows="8" class="@error('pertanyaan') shadow-sm focus:ring-indigo-500 @enderror focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Ketik Deskripsi informasi">
                {{(isset($informasi))?$informasi->pertanyaan:old('pertanyaan') }}
                </textarea>
              </div>
               <div class="text-xs text-red-500"> @error('pertanyaan') {{$message}} @enderror</div>
            </div> <br>
                
              <label class="block text-sm font-medium text-gray-700">
                Gambar
              </label>
              <div class="mt-1 flex justify-center px-6 pt-8 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                <div class="space-y-1 text-center">
                  @if(isset($informasi) && $informasi->gambar!='')
                      <img src="{{asset('storage/' .$informasi->gambar)}}" class="mx-auto h-12 w-12 text-gray-400 rounded" alt="">

                  @else
                  <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                    <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>

                  @endif
                  <div class="flex text-sm text-gray-600">
                    <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                      <span>Upload a file</span>
                      <input id="file-upload" name="gambar" type="file" class="sr-only">
                    </label>
                    <p class="pl-1">or drag and drop</p>
                  </div>
                  <p class="text-xs text-gray-500">
                    PNG, JPG, GIF up to 10MB
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
              Save
            </button>
          </div>
        </div>
      </form>
                   
                 </div>
            </div>
</x-template-layout>



