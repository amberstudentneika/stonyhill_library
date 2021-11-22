<div>
    @if($editMode==true)
        <form wire:submit.prevent="editBook" class="p-10 bg-white rounded flex justify-center items-center flex-col shadow-md">
            <img class="h-15 rounded-full" src="/images/book.png" alt="book"><br/>
            <p class="mb-5 text-3xl uppercase text-gray-600">Edit Book Account</p>
            <label for="title">Title:</label>
            <input type="text" wire:model="title" id="title" class="@error('title') border-red-500 @enderror mb-5 p-3 w-80 focus:border-purple-700 rounded border-2 outline-none"  placeholder="Breakthrough Anxiety" >
            @error('title')<p class=" text-xs italic text-red-500">
                {{ $message }}
            </p>
            @enderror

            <label for="author">Author:</label>
            <input type="text" wire:model="author" id="author" class="@error('author') border-red-500 @enderror mb-5 p-3 w-80 focus:border-purple-700 rounded border-2 outline-none"  >
            @error('author')<p class=" text-xs italic text-red-500">
                {{ $message }}
            </p>
            @enderror

            <label for="date">Date of Publish:</label>
            <input type="date" wire:model="pubDate" id="date" class="@error('pubDate') border-red-500 @enderror mb-5 p-3 w-80 focus:border-purple-700 rounded border-2 outline-none"  >
            @error('pubDate')<p class=" text-xs italic text-red-500">
                {{ $message }}
            </p>
            @enderror

            <label for="publisher">publisher:</label>
            <input type="text" wire:model="publisher" id="publisher" class="@error('publisher') border-red-500 @enderror mb-5 p-3 w-80 focus:border-purple-700 rounded border-2 outline-none">
            @error('publisher')<p class=" text-xs italic text-red-500">
                {{ $message }}
            </p>
            @enderror

            <label for="isbn">ISBN:</label>
            <input type="text" wire:model="isbn" id="isbn"  class="@error('isbn') border-red-500 @enderror mb-5 p-3 w-80 focus:border-purple-700 rounded border-2 outline-none"  >
            @error('isbn')<p class=" text-xs italic text-red-500">
                {{ $message }}
            </p>
            @enderror

            <label for="condition">Condition:</label>
            <select wire:model="condition" id="condition" class="@error('condition') border-red-500 @enderror mb-5 p-3 w-80 focus:border-purple-700 rounded border-2 outline-none" >
                <option>Choose condition</option>
                <option value="New">New</option>
                <option value="Good">Good</option>
                <option value="Fairly good">Fairly good</option>
                <option value="Bad">Bad</option>
            </select>
            @error('condition')<p class=" text-xs italic text-red-500">
                {{ $message }}
            </p>
            @enderror

            <label for="quantity">Quantity:</label>
            <input type="number" wire:model="quantity" id="quantity"  class="@error('quantity') border-red-500 @enderror mb-5 p-3 w-80 focus:border-purple-700 rounded border-2 outline-none" >
            @error('quantity')<p class=" text-xs italic text-red-500">
                {{ $message }}
            </p>
            @enderror

            <button class="bg-purple-600 hover:bg-purple-900 text-white font-bold p-2 rounded w-80" id="create" type="submit"><span>Done</span></button>
            @if(session('message'))
                <span class="mt-5 bg-red-200 text-red-900">
                 {{session('message')}}
             </span>
            @endif
        </form>
    @elseif($addMode==false)
        <a wire:click.prevent="view()" href=""> <button type="button" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" >
                View Book
            </button></a>
        <form wire:submit.prevent="addBook" class="p-10 bg-white rounded flex justify-center items-center flex-col shadow-md">
            <img class="h-15 rounded-full" src="/images/book.png" alt="book"><br/>
            <p class="mb-5 text-3xl uppercase text-gray-600">Book Registration</p>
            <label for="title">Title:</label>
            <input type="text" wire:model="title" id="title" class="@error('title') border-red-500 @enderror mb-5 p-3 w-80 focus:border-purple-700 rounded border-2 outline-none"  placeholder="Breakthrough Anxiety" >
            @error('title')
            <p class=" text-xs italic text-red-500">
                {{ $message }}
            </p>
            @enderror


            <label for="author">Author:</label>
            <input type="text" wire:model="author" id="author" class="@error('author') border-red-500 @enderror mb-5 p-3 w-80 focus:border-purple-700 rounded border-2 outline-none"  >
            @error('author')<p class=" text-xs italic text-red-500">
                {{ $message }}
            </p>
            @enderror

            <label for="date">Date of Publish:</label>
            <input type="date" wire:model="pubDate" id="date" class="@error('pubDate') border-red-500 @enderror mb-5 p-3 w-80 focus:border-purple-700 rounded border-2 outline-none"  >
            @error('pubDate')<p class=" text-xs italic text-red-500">
                {{ $message }}
            </p>
            @enderror

            <label for="publisher">publisher:</label>
            <input type="text" wire:model="publisher" id="publisher" class="@error('publisher') border-red-500 @enderror mb-5 p-3 w-80 focus:border-purple-700 rounded border-2 outline-none">
            @error('publisher')<p class=" text-xs italic text-red-500">
                {{ $message }}
            </p>
            @enderror

            <label for="isbn">ISBN:</label>
            <input type="text" wire:model="isbn" id="isbn"  class="@error('isbn') border-red-500 @enderror mb-5 p-3 w-80 focus:border-purple-700 rounded border-2 outline-none"  >
            @error('isbn')<p class=" text-xs italic text-red-500">
                {{ $message }}
            </p>
            @enderror

            <label for="condition">Condition:</label>
            <select wire:model="condition" id="condition" class=@error('condition') border-red-500 @enderror "mb-5 p-3 w-80 focus:border-purple-700 rounded border-2 outline-none" >
                <option>Choose condition</option>
                <option value="New">New</option>
                <option value="Good">Good</option>
                <option value="Fairly good">Fairly good</option>
                <option value="Bad">Bad</option>
            </select>
            @error('condition')<p class=" text-xs italic text-red-500">
                {{ $message }}
            </p>
            @enderror

            <label for="quantity">Quantity:</label>
            <input type="number" wire:model="quantity" id="quantity"  class="@error('quantity') border-red-500 @enderror mb-5 p-3 w-80 focus:border-purple-700 rounded border-2 outline-none" >
            @error('quantity')<p class=" text-xs italic text-red-500">
                {{ $message }}
            </p>
            @enderror

            <button class="bg-purple-600 hover:bg-purple-900 text-white font-bold p-2 rounded w-80" id="create" type="submit"><span>Create</span></button>
            @if(session('message'))
                <span class="mt-5 bg-red-200 text-red-900">
                 {{session('message')}}
             </span>
            @endif
        </form>
    @elseif($viewMode==true)
        <a wire:click.prevent="add()" href=""> <button type="button" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" >
                Create Book
            </button></a>
        <div class="w-full xl:w-8/12 mb-12 xl:mb-0 px-4 mx-auto mt-24">
            <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded ">
                <div class="rounded-t mb-0 px-4 py-3 border-0">
                    <div class="flex flex-wrap items-center">
                        <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                            <h3 class="font-semibold text-base text-center text-blueGray-700">Book(s)</h3>
                        </div>
                    </div>
                </div>

                <div class="block w-full overflow-x-auto">
                    <table class="items-center bg-transparent w-full border-collapse ">
                        <thead>
                        <tr>
                            <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                Title
                            </th>
                            <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                Author
                            </th>
                            <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                ISBN
                            </th>
                            <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                Publisher
                            </th>
                            <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                Condition
                            </th>
                            <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                Quantity
                            </th>
                        </tr>
                        </thead>

                        <tbody>
                        @forelse($books as $book)
                            <tr>
                                <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left text-blueGray-700 ">
                                    {{$book->title}}
                                </th>
                                <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left text-blueGray-700 ">
                                    {{$book->author}}
                                </th>
                                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 ">
                                    {{$book->condition}}
                                </td>
                                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 ">
                                    {{$book->isbn}}
                                </td>
                                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 ">
                                    {{$book->publisher}}
                                </td>
                                @if($book->quantity==0)
                                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 ">
                                    Unavailable
                                </td>
                                @else
                                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 ">

                                        {{$book->quantity}}
                                </td>
                                @endif
                                <td>
                                    <a wire:click.prevent="edit({{$book->id}})" href=""> <button type="button" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" >
                                            Edit
                                        </button></a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 ">
                                    No Books Added
                                </td>
                            </tr>
                        @endforelse
                        </tbody>

                    </table>
                    <div class="w-full">
                        {{$books->links()}}
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
