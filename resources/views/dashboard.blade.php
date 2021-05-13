<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('REST API APP') }}
        </h2>

    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="md:grid md:grid-cols-5 md:gap-6 ">
                    <div>
                    <form action="api/apartments" method="GET">
                        <button class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">Show all</button>
                    </form>
                    </div>
                    <div class="md:flex md-flex-cols-2 md:gap-6">             
                        <form action="/api/apartments/{id}" method="GET">
                            @csrf
                            <div class="md:flex md-flex-cols-2 md:gap-6">
                                    <input type="text" name="id" id="id" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full  sm:text-sm border-gray-300" placeholder="Enter id">
                                    @error('id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <button class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">Show</button>
                            </div>
                        </form>
                    </div>
                <div class="md:flex md-flex-cols-2 md:gap-6">
                                      
                    <form action="/update/{id}" method="POST">
                        @csrf
                        <div class="md:flex md-flex-cols-2 md:gap-6">
                                <input type="text" name="id" id="id" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full sm:text-sm border-gray-300" placeholder="Enter id">
                                @error('id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <button type="submit" class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">Update</button>
                        </div>
                    </form>
                </div>
                <div class="md:flex md-flex-cols-2 md:gap-6">
                                      
                    <form action="api/apartments/{id}" method="POST">
                        @csrf
                        @method('DELETE')
                        <div class="md:flex md-flex-cols-2 md:gap-6">
                                <input type="text" name="id" id="id" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full sm:text-sm border-gray-300" placeholder="Enter id">
                                @error('id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <button class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">Delete</button>
                        </div>
                    </form>
                </div>
                <div class="md:flex md-flex-cols-2 md:gap-6">
                                      
                    <form action="api/apartments" method="GET">
                        @csrf
                        <div class="md:flex md-flex-cols-2 md:gap-6">
                                <input type="text" name="searchName" id="searchName" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full sm:text-sm border-gray-300" placeholder="Search">
                                @error('searchName')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <button class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">Search</button>
                        </div>
                    </form>
                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1">
            <div class="px-4 sm:px-0">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Apartment</h3>
                <p class="mt-1 text-sm text-gray-600">
                    Enter data for the apartment you wish to list.
                  </p>
        
            </div>
        </div>
        <div class="mt-5 md:mt-0 md:col-span-2">
            <form action="/api/apartments" method="POST">
                @csrf
                <div class="shadow sm:rounded-md sm:overflow-hidden">
                    <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                        <div>
                            <div class="col-span-3 sm:col-span-2">
                                <label for="city" class="block text-sm font-medium text-gray-700">
                                    City
                                  </label>
                                  <div class="mt-1 flex rounded-md shadow-sm">
                                    <input type="text" name="city" id="city" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="Enter city name">
                                    @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                    </div>
                    <div>
                        <label for="street" class="block text-sm font-medium text-gray-700">
                            Street
                          </label>
                          <div class="mt-1 flex rounded-md shadow-sm">
                            <input type="text" name="street" id="street" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="Enter street name">
                            @error('street')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                    </div>
                    <div>
                        <label for="square_footage" class="block text-sm font-medium text-gray-700">
                            Square footage
                          </label>
                          <div class="mt-1 flex rounded-md shadow-sm">
                            <input type="text" name="square_footage" id="square_footage" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="Enter square footage">
                            @error('square_footage')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                    </div>
                    <div>
                        <label for="rooms_num" class="block text-sm font-medium text-gray-700">
                            Rooms number
                          </label>
                          <div class="mt-1 flex rounded-md shadow-sm">
                            <input type="text" name="rooms_num" id="rooms_num" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="Enter number of roomss">
                            @error('rooms_num')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror  
                        </div>
                    </div>
                    <div>
                        <label for="parking" class="block text-sm font-medium text-gray-700">
                            Parking
                          </label>
                          <div class="mt-1 flex rounded-md shadow-sm">
                            <input type="text" name="parking" id="parking" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="Enter number of parking spaces">
                            @error('parking')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
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
    <div class="hidden sm:block" aria-hidden="true">
        <div class="py-5">
          <div class="border-t border-gray-200"></div>
        </div>
      </div>
                </div>
    </div>

</x-app-layout>
