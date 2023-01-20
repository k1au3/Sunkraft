@extends('layout')

@include('components.navbar')


            <section class="product-details">
                <h2> Product Details Page</h2>
                <div class="small-container single-product">

                    <div class="row">

            <form method="POST" action="/{{$listing->id}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')


                <div class="mb-6">
                    <label for="logo" class="inline-block text-lg mb-2">
                        Product Image Edit
                    </label>
                    <input
                        type="file"
                        class="border border-gray-200 rounded p-2 w-full"
                        name="logo"
                        style="width: 200px"
                        {{-- value="{{$listing->logo}}" --}}
                    />

                    <div class="col-2">
                        <img src="{{$listing->logo ? asset ( 'storage/' . $listing->logo) : asset('/images/Sun_Craft_Artistic-17.jpg')}}" width="40%" id="productImage" alt="">
                      </div>

                </div>



                <div class="mb-6">
                    <label
                        for="company"
                        class="inline-block text-lg mb-2"
                        >Product Name</label
                    >
                    <input
                        type="text"
                        class="border border-gray-200 rounded p-2 w-full"
                        name="name"
                        value="{{$listing->name}}"
                        placeholder="Chair"
                        style="width: 200px"
                    />
                    {{-- @error('company')
                        <p class="text-red-500 text-xs mt-1">
                            {{$message}}
                        </p>
                    @enderror --}}

                </div>




                <div class="mb-6">
                    <label for="title" class="inline-block text-lg mb-2"
                        >Product Price Edit</label
                    >
                    <input
                        type="text"
                        class="border border-gray-200 rounded p-2 w-full"
                        name="amount"
                        placeholder="Example: 2000"
                        style="width: 100px"
                        value="{{$listing->amount}}"
                    />
                    {{-- @error('title')
                        <p class="text-red-500 text-xs mt-1">
                            {{$message}}
                        </p>
                    @enderror --}}
                </div>

                <div class="mb-6">
                    <label
                        for="location"
                        class="inline-block text-lg mb-2"
                        >Quantity Edit</label
                    >
                    <input
                        type="text"
                        class="border border-gray-200 rounded p-2 w-full"
                        name="quantity"
                        placeholder="Example: 20"
                        value="{{$listing->quantity}}"
                    />
                    {{-- @error('location')
                        <p class="text-red-500 text-xs mt-1">
                            {{$message}}
                        </p>
                    @enderror --}}
                </div>

                <div class="mb-6">
                    <label for="email" class="inline-block text-lg mb-2"
                        >Additional info about Product
                        </label>
                    <input
                        type="text"
                        class="border border-gray-200 rounded p-2 w-full"
                        name="title"
                        value="{{$listing->title}}"
                        style="width: 200px"
                    />
                    {{-- @error('email')
                        <p class="text-red-500 text-xs mt-1">
                            {{$message}}
                        </p>
                    @enderror --}}
                </div>

                <div class="mb-6">
                    <label
                        for="description"
                        class="inline-block text-lg mb-2"
                    >
                        Product Description
                    </label>

                    <div class="mb-2">

                    <textarea
                        class="border border-gray-200 rounded p-2 w-full"
                        name="description"
                        rows="10"
                        placeholder="Wooden, Rounded, Metallic, etc"
                        {{-- value="{{$listing->description}}" --}}
                    >
                    {{$listing->description}}
                </textarea>
            </div>
                    {{-- @error('description')
                        <p class="text-red-500 text-xs mt-1">
                            {{$message}}
                        </p>
                    @enderror --}}
                </div>

                


                <div class="mb-6">
                    <button
                        class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
                    >
                        Edit Product
                    </button>
                    

                    <a href="/" class="text-black ml-4"> Back </a>
                </div>
            </form>

                    </div>

                </div>
            </section>


@include('components.footer')