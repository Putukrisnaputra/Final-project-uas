<x-template-layout>
                <h1 class="text-3xl text-black pb-6">{{$title}}</h1>
            <div>
            <div class="shadow px-6 py-4 bg-white rounded sm:px-1 sm:py-1 sm:br-gray-100">
            <form action="{{(isset($pegawai))?route('pegawai.update',$pegawai->id):route('pegawai.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    @if(isset($pegawai))
        @method('PUT')
    @endif
        <div class="shadow sm:rounded-md sm:overflow-hidden">
          <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
            <div class="grid grid-cols-3 gap-15">
              <div class="col-span-3 sm:col-span-2">
                <label for="company_website" class="block text-sm font-medium text-gray-700">
                  NIP
                </label>
                <div class="mt-1 flex rounded-md shadow-sm">
                  <input type="text" name="nip" value="{{(isset($pegawai))?$pegawai->nip:old('nip')}}" class="@error('nip') border-red-500 @enderror focus:ring-indigo-500 focus:border-indigo-500   flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="NIP">
                </div>
                    <div class="text-xs text-red-600">@error('nip'){{$message}} @enderror</div>
              </div>
            </div>

            <div>
            <div class="grid grid-cols-3 gap-15">
                        <div class="col-span-3 sm:col-span-2">
              <label for="last_name" class="block text-sm font-medium text-gray-700">Nama</label>
                <input type="text" name="nama" id="nama" autocomplete="family-name" value="{{(isset($pegawai))?$pegawai->nama:old('nama') }}" class="mt-1  @error('nama') border-red-500 @enderror  focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="nama">
              <div class="text-xs text-red-600">@error('nama'){{$message}} @enderror</div>
              </div>
            </div><br>
            <div>
            <div class="grid grid-cols-3 gap-15">
                        <div class="col-span-3 sm:col-span-2">
                            <label for="jabatan" class="block text-sm font-medium text-gray-700">
                                Jabatan
                            </label>
                            <div class="mt-1 flex rounded-md shadow-sm">
                                <select name="jabatan" id="jabatan" value="{{(isset($pegawai))?$pegawai->jabatan:old('jabatan') }}" class="@error('jabatan') border-red-600 @enderror focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300">
                                    <option value="">Masukan Pilihan</option>
                                    <option value="Kepala Loka POM Buleleng">Kepala Loka POM Buleleng</option>
                                    <option value="PFM Ahli Muda">PFM Ahli Muda</option>
                                    <option value="Verifikator Keuangan">Verifikator Keuangan</option>
                                    <option value="PFM Ahli Pertama">PFM Ahli Pertama</option>
                                    <option value="Pramubakti">Pramubakti</option>
                                    <option value="Fungsional Umum">Fungsional Umum</option>
                                    <option value="PFM Ahli Pertama">Pranata Komputer Terampil</option>
                                    <option value="Analis Kepegawaian Pelaksana Lanjutan">Analis Kepegawaian Pelaksana Lanjutan</option>
                                </select>
                            </div>
                            <div class="text-xs text-red-500"> @error('jabatan') {{$message}} @enderror</div>
                        </div>
                    </div><br>
              <label class="block text-sm font-medium text-gray-700">
                Gambar
              </label>
              <div class="mt-1 flex justify-center px-6 pt-8 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                <div class="space-y-1 text-center">
                  @if(isset($pegawai) && $pegawai->gambar!='')
                      <img src="{{asset('storage/' .$pegawai->gambar)}}" class="mx-auto h-12 w-12 text-gray-400 rounded" alt="">

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