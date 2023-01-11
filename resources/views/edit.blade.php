
            <header class="text-center">
                <h2 class="text-2xl font-bold uppercase mb-1">
                    Adding products
                </h2>
                <p class="mb-4">Add a Product</p>
            </header>

            <form method="POST" action="/listings" enctype="multipart/form-data">
                @csrf
                {{-- @method('PUT') --}}
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
                        value="{{old('company')}}"
                        placeholder="Chair"
                    />
                    {{-- @error('company')
                        <p class="text-red-500 text-xs mt-1">
                            {{$message}}
                        </p>
                    @enderror --}}

                </div>

                <div class="mb-6">
                    <label for="logo" class="inline-block text-lg mb-2">
                        Product Image Edit
                    </label>
                    <input
                        type="file"
                        class="border border-gray-200 rounded p-2 w-full"
                        name="logo"
                        {{-- value="{{old('logo')}}" --}}
                    />
                    {{-- @error('logo')
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
                        {{-- value="{{old('title')}}" --}}
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
                        {{-- value="{{old('location')}}" --}}
                    />
                    {{-- @error('location')
                        <p class="text-red-500 text-xs mt-1">
                            {{$message}}
                        </p>
                    @enderror --}}
                </div>

                <div class="mb-6">
                    <label for="email" class="inline-block text-lg mb-2"
                        >Additional info about Product</label
                    >
                    <input
                        type="text"
                        class="border border-gray-200 rounded p-2 w-full"
                        name="title"
                        {{-- value="{{old('email')}}" --}}
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
                    <textarea
                        class="border border-gray-200 rounded p-2 w-full"
                        name="description"
                        rows="10"
                        placeholder="Wooden, Rounded, Metallic, etc"
                    >
                    {{-- {{old('company')}} --}}
                </textarea>
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
                        Add Product
                    </button>

                    <a href="/" class="text-black ml-4"> Back </a>
                </div>
            </form>