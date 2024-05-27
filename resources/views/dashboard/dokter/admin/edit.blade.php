
<x-dashboard-layout>
    <form action="{{route('dokter.update',$dokter->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="grid gap-6 mb-6 md:grid-cols-2">
            <div>
                <label for="nama" class="{{$errors->has('nama') ? 'text-red-700' : 'text-gray-900'}} block mb-2 text-sm font-medium">Nama</label>
                <input value="{{$dokter->nama}}" name="nama" type="text" id="nama" class="{{$errors->has('nama') ? 'bg-red-50 border border-red-500 text-red-900 placeholder-red-700 text-sm rounded-lg focus:ring-red-500  focus:border-red-500 block w-full p-2.5  ' : 'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5'}} " placeholder="Nama" required />
                @if($errors->has('nama'))
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{$errors->first('name')}}</p>
                @endif
            </div>
            <div>
                <label for="alamat" class="{{$errors->has('alamat') ? 'text-red-700' : 'text-gray-900'}} block mb-2 text-sm font-medium">Alamat</label>
                <input value="{{$dokter->alamat}}" name="alamat" type="alamat" id="alamat" class="{{$errors->has('alamat') ? 'bg-red-50 border border-red-500 text-red-900 placeholder-red-700 text-sm rounded-lg focus:ring-red-500  focus:border-red-500 block w-full p-2.5  ' : 'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5'}} " placeholder="alamat" required />
                @if($errors->has('alamat'))
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{$errors->first('alamat')}}</p>
                @endif
            </div>
            <div>
                <label for="no_telepon" class="{{$errors->has('no_telepon') ? 'text-red-700' : 'text-gray-900'}} block mb-2 text-sm font-medium">No telepon</label>
                <input value="{{$dokter->no_telepon}}" name="no_telepon" type="no_telepon" id="no_telepon" class="{{$errors->has('no_telepon') ? 'bg-red-50 border border-red-500 text-red-900 placeholder-red-700 text-sm rounded-lg focus:ring-red-500  focus:border-red-500 block w-full p-2.5  ' : 'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5'}} " placeholder="No telepon" required />
                @if($errors->has('no_telepon'))
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{$errors->first('no_telepon')}}</p>
                @endif
            </div>
            <div class="mb-6">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload foto profile</label>
                <input name="foto_profil" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
            </div> 
        </div>
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>

    </form>
</x-dashboard-layout>