<div>
    @if($editMode==true)
        <form wire:submit.prevent="editMember" class="p-10 bg-white rounded flex justify-center items-center flex-col shadow-md">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-20 h-20 text-gray-600 mb-2" viewbox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd" />
            </svg>
            <p class="mb-5 text-3xl uppercase text-gray-600">Edit Member Account</p>
            <label for="fName">First Name:</label>
            <input type="text" wire:model="fName" id="fName" class="@error('fName') border-red-500 @enderror mb-5 p-3 w-80 focus:border-purple-700 rounded border-2 outline-none"  placeholder="Mary" >
            @error('fName')<p class=" text-xs italic text-red-500">
                {{ $message }}
            </p>
            @enderror

            <label for="lName">Last Name:</label>
            <input type="text" wire:model="lName" id="lName" class="@error('lName') border-red-500 @enderror mb-5 p-3 w-80 focus:border-purple-700 rounded border-2 outline-none"  placeholder="Jane" >
            @error('lName')<p class=" text-xs italic text-red-500">
                {{ $message }}
            </p>
            @enderror

            <label for="gender">Gender:</label>
            <select wire:model="gender" id="gender" class="@error('gender') border-red-500 @enderror mb-5 p-3 w-80 focus:border-purple-700 rounded border-2 outline-none" >
                <option>Select Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
            @error('gender')<p class=" text-xs italic text-red-500">
                {{ $message }}
            </p>
            @enderror

            <label for="address">Address:</label>
            <input type="text" wire:model="address" id="address" class="@error('address') border-red-500 @enderror mb-5 p-3 w-80 focus:border-purple-700 rounded border-2 outline-none" placeholder="22 Amber Street Kingston 7">
            @error('address')<p class=" text-xs italic text-red-500">
                {{ $message }}
            </p>
            @enderror

            <label for="phone">Phone Number:</label>
            <input type="tel" wire:model="phoneNum" id="phone"  class="@error('phoneNum') border-red-500 @enderror mb-5 p-3 w-80 focus:border-purple-700 rounded border-2 outline-none" placeholder="876-234-7777" >
            @error('phoneNum')<p class=" text-xs italic text-red-500">
                {{ $message }}
            </p>
            @enderror

            <label for="mail">Email:</label>
            <input type="email" wire:model="email" id="mail"  class="@error('email') border-red-500 @enderror mb-5 p-3 w-80 focus:border-purple-700 rounded border-2 outline-none"   placeholder="MaryJane@email.com" >
            @error('email')<p class=" text-xs italic text-red-500">
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
                View Member
            </button></a>
                <form wire:submit.prevent="addMember" class="p-10 bg-white rounded flex justify-center items-center flex-col shadow-md">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-20 h-20 text-gray-600 mb-2" viewbox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd" />
                    </svg>
                    <p class="mb-5 text-3xl uppercase text-gray-600">Member Registration</p>
                    <label for="fName">First Name:</label>
                    <input type="text" wire:model="fName" id="fName" class="@error('fName') border-red-500 @enderror mb-5 p-3 w-80 focus:border-purple-700 rounded border-2 outline-none"  placeholder="Mary" >
                     @error('fName')<p class=" text-xs italic text-red-500">
                        {{ $message }}
                    </p>
                    @enderror

                    <label for="lName">Last Name:</label>
                    <input type="text" wire:model="lName" id="lName" class="@error('lName') border-red-500 @enderror mb-5 p-3 w-80 focus:border-purple-700 rounded border-2 outline-none"  placeholder="Jane" >
                    @error('lName')<p class=" text-xs italic text-red-500">
                        {{ $message }}
                    </p>
                    @enderror

                    <label for="gender">Gender:</label>
                    <select wire:model="gender" id="gender" class="@error('gender') border-red-500 @enderror mb-5 p-3 w-80 focus:border-purple-700 rounded border-2 outline-none" >
                        <option>Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                    @error('gender')<p class=" text-xs italic text-red-500">
                        {{ $message }}
                    </p>
                    @enderror

                    <label for="address">Address:</label>
                    <input type="text" wire:model="address" id="address" class="@error('address') border-red-500 @enderror mb-5 p-3 w-80 focus:border-purple-700 rounded border-2 outline-none" placeholder="22 Amber Street Kingston 7">
                    @error('address')<p class=" text-xs italic text-red-500">
                        {{ $message }}
                    </p>
                    @enderror

                    <label for="phone">Phone Number:</label>
                    <input type="tel" wire:model="phoneNum" id="phone"  class="@error('email') border-red-500 @enderror mb-5 p-3 w-80 focus:border-purple-700 rounded border-2 outline-none" placeholder="876-234-7777" >
                    @error('phoneNum')<p class=" text-xs italic text-red-500">
                        {{ $message }}
                    </p>
                    @enderror

                    <label for="mail">Email:</label>
                    <input type="email" wire:model="email" id="mail"  class="@error('email') border-red-500 @enderror mb-5 p-3 w-80 focus:border-purple-700 rounded border-2 outline-none"   placeholder="MaryJane@email.com" >
                    @error('email')<p class=" text-xs italic text-red-500">
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
                Create Member
            </button></a>
        <div class="w-full xl:w-8/12 mb-12 xl:mb-0 px-4 mx-auto mt-24">
            <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded ">
                <div class="rounded-t mb-0 px-4 py-3 border-0">
                    <div class="flex flex-wrap items-center">
                        <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                            <h3 class="font-semibold text-base text-center text-blueGray-700">Member(s)</h3>
                        </div>
                   </div>
                </div>

                <div class="block w-full overflow-x-auto">
                    <table class="items-center bg-transparent w-full border-collapse ">
                        <thead>
                        <tr>
                            <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                First Name
                            </th>
                            <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                Last Name
                            </th>
                            <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                Gender
                            </th>
                            <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                Phone Number
                            </th>
                            <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                Address
                            </th>
                            <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                Email
                            </th>
                        </tr>
                        </thead>

                        <tbody>
                        @forelse($members as $member)
                            <tr>
                                <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left text-blueGray-700 ">
                                    {{$member->fName}}
                                </th>
                                <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left text-blueGray-700 ">
                                    {{$member->lName}}
                                </th>
                                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 ">
                                    {{$member->gender}}
                                </td>
                                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 ">
                                    {{$member->phoneNum}}
                                </td>
                                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 ">
                                    {{$member->address}}
                                </td>
                                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 ">
                                    {{$member->email}}
                                </td>
                                <td>
                                    <a wire:click.prevent="edit({{$member->id}})" href=""> <button type="button" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" >
                                            Edit
                                        </button></a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 ">
                                    No Members Added
                                </td>
                            </tr>
                        @endforelse
                        </tbody>

                    </table>
                    <div class="w-full">
                        {{$members->links()}}
                    </div>
                </div>
            </div>
        </div>
@endif
</div>
