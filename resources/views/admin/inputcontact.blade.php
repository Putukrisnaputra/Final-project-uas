<x-template-layout>
                <h1 class="text-3xl text-black pb-6">{{$title}}</h1>
            <div>
            <div class="shadow px-6 py-4 bg-white rounded sm:px-1 sm:py-1 sm:br-gray-100">
            <form action="{{(isset($contact))?route('contact.update',$contact->id):route('contact.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    @if(isset($contact))
        @method('PUT')
    @endif
        <div class="shadow sm:rounded-md sm:overflow-hidden">
          <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
            <div class="grid grid-cols-3 gap-15">
                        <div class="col-span-3 sm:col-span-2">
              <label for="last_name" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                <input type="text" name="nama" id="nama" autocomplete="family-name" value="{{(isset($contact))?$contact->nama:old('nama') }}" class="mt-1  @error('nama') border-red-500 @enderror  focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Ketik nama contact">
              <div class="text-xs text-red-600">@error('nama'){{$message}} @enderror</div>
              </div>
            </div>

               <div class="grid grid-cols-3 gap-15">
                        <div class="col-span-3 sm:col-span-2">
              <label for="last_name" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="text" name="email" id="email" autocomplete="family-name" value="{{(isset($contact))?$contact->email:old('email') }}" class="mt-1  @error('email') border-red-500 @enderror  focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Ketik email contact">
              <div class="text-xs text-red-600">@error('email'){{$message}} @enderror</div>
              </div>
            </div>
                  
                  <div class="grid grid-cols-3 gap-15">
                        <div class="col-span-3 sm:col-span-2">
              <label for="last_name" class="block text-sm font-medium text-gray-700">Subjek</label>
                <input type="text" name="subjek" id="subjek" autocomplete="family-name" value="{{(isset($contact))?$contact->subjek:old('subjek') }}" class="mt-1  @error('subjek') border-red-500 @enderror  focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Ketik subjek contact">
              <div class="text-xs text-red-600">@error('subjek'){{$subjek}} @enderror</div>
              </div>
            </div>


            <div class="grid grid-cols-3 gap-15">
                        <div class="col-span-3 sm:col-span-2">
              <label for="last_name" class="block text-sm font-medium text-gray-700">Message</label>
                <input type="text" name="message" id="message" autocomplete="family-name" value="{{(isset($contact))?$contact->message:old('message') }}" class="mt-1  @error('message') border-red-500 @enderror  focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Ketik message contact">
              <div class="text-xs text-red-600">@error('message'){{$message}} @enderror</div>
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



