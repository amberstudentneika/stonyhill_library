<div>
{{--    @if($editMode==true)--}}
{{--        <form wire:submit.prevent="editBook" class="p-10 bg-white rounded flex justify-center items-center flex-col shadow-md">--}}
{{--            <svg xmlns="http://www.w3.org/2000/svg" class="w-20 h-20 text-gray-600 mb-2" viewbox="0 0 20 20" fill="currentColor">--}}
{{--                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd" />--}}
{{--            </svg>--}}
{{--            <p class="mb-5 text-3xl uppercase text-gray-600">Update A Book Issue</p>--}}
{{--            <label for="member">Member:</label>--}}
{{--            <select wire:model="memberID" id="member" class="text-center  mb-5 p-3 w-80 focus:border-purple-700 rounded border-2 outline-none" >--}}
{{--                <option>Select a member</option>--}}
{{--               @forelse($members as $member)--}}
{{--                <option value="{{$member->id}}">{{$member->fName." ".$member->lName}}</option>--}}
{{--                @empty--}}
{{--                   <option>No member(s) added</option>--}}
{{--                @endforelse--}}
{{--            </select>--}}
{{--            <label for="book">Book:</label>--}}
{{--            <select wire:model="bookID" id="book" class="text-center  mb-5 p-3 w-80 focus:border-purple-700 rounded border-2 outline-none" >--}}
{{--                <option>Select a book</option>--}}
{{--                @forelse($books as $book)--}}
{{--                <option value="{{$book->id}}">{{$books->title}}</option>--}}
{{--                @empty--}}
{{--                    <option>No book(s) added</option>--}}
{{--                @endforelse--}}
{{--            </select>--}}

{{--            <label for="date">Date Issued:</label>--}}
{{--            <input readonly type="text" wire:model="issueDate" id="date"  class="text-center mb-5 p-3 w-80 focus:border-purple-700 rounded border-2 outline-none" >--}}

{{--            <label for="retDate">Return Date:</label>--}}
{{--            <input readonly type="text" wire:model="expReturnDate" id="retDate"  class="text-center  mb-5 p-3 w-80 focus:border-purple-700 rounded border-2 outline-none" >--}}

{{--            <button class="bg-purple-600 hover:bg-purple-900 text-white font-bold p-2 rounded w-80" id="create" type="submit"><span>Update</span></button>--}}
{{--            @if(session('message'))--}}
{{--                <span class="mt-5 bg-red-200 text-red-900">--}}
{{--                 {{session('message')}}--}}
{{--             </span>--}}
{{--            @endif--}}
{{--        </form>--}}
    @if($addMode==false)
        <a wire:click.prevent="view()" href=""> <button type="button" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" >
                View Issued Books
            </button></a>
        <form wire:submit.prevent="addBook" class="p-10 bg-white rounded flex justify-center items-center flex-col shadow-md">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-20 h-20 text-gray-600 mb-2" viewbox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd" />
            </svg>
            <p class="mb-5 text-3xl uppercase text-gray-600">Issue A Book</p>
            <label for="member">Member:</label>
            <select wire:model="memberID" id="member" class="text-center  mb-5 p-3 w-80 focus:border-purple-700 rounded border-2 outline-none" >
                <option>Select a member</option>
                @forelse($members as $member)
                    <option value="{{$member->id}}">{{$member->fName." ".$member->lName}}</option>
                @empty
                    <option>No member(s) added</option>
                @endforelse
            </select>
            <label for="book">Book:</label>
            <select wire:model="bookID" id="book" class="text-center  mb-5 p-3 w-80 focus:border-purple-700 rounded border-2 outline-none" >
                <option>Select a book</option>
                @forelse($books as $book)
                    @if($book->quantity!=0)
                    <option value="{{$book->id}}">{{$book->title}}</option>
                    @endif
                @empty
                    <option>No book(s) added</option>
                @endforelse
            </select>

{{--            {{now("Jamaica")->toDateTimeString()}}--}}

            <label for="date">Date Issued:</label>
            <input readonly type="text" wire:model="issueDate" id="date"  class="text-center  mb-5 p-3 w-80 focus:border-purple-700 rounded border-2 outline-none" >

            <label for="retDate">Return Date:</label>
            <input readonly type="text" wire:model="expReturnDate" id="retDate"  class="text-center  mb-5 p-3 w-80 focus:border-purple-700 rounded border-2 outline-none" >

            <button class="bg-purple-600 hover:bg-purple-900 text-white font-bold p-2 rounded w-80" id="create" type="submit"><span>Done</span></button>
            @if(session('message'))
                <span class="mt-5 bg-red-200 text-red-900">
                 {{session('message')}}
             </span>
            @endif
        </form>
    @elseif($viewMode==true)
        <a wire:click.prevent="add()" href=""> <button type="button" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" >
                Issue Book
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
                                Member
                            </th>
                            <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                Date Issue
                            </th>
                            <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                Expected Return
                            </th>
                        </tr>
                        </thead>

                        <tbody>
                        @forelse($bookIssued as $bookIssue)
                            <tr>
                                <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left text-blueGray-700 ">
                                    {{$bookIssue->book->title}}
                                </th>
                                <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left text-blueGray-700 ">
                                    {{$bookIssue->member->fName." ".$bookIssue->member->lName}}
                                </th>
                                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 ">
                                    {{$bookIssue->issueDate}}
                                </td>
                                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 ">
                                    {{$bookIssue->expReturnDate}}
                                </td>
{{--                                <td>--}}
{{--                                    <a wire:click.prevent="edit({{$bookIssue->id}})" href=""> <button type="button" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" >--}}
{{--                                            Edit--}}
{{--                                        </button></a>--}}
{{--                                </td>--}}
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
                        {{$bookIssued->links()}}
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
