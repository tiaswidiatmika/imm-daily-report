<div>
    {{-- check who is present --}}
    <!--============================================================================================-->
    <div class="flex-row p-1" x-data="dropDown()">
        <h1 class="block text-2xl">Daily Presence</h1>
        <hr class="border-solid border-2">
        <h2 class="block">In duty</h2>
        
        <input
            type="text"
            placeholder="select officer(s)"
            wire:model="searchAvailable"
            wire:keyup="search('searchAvailable')"
            class="shadow-lg mb-2 inline-flex"
            autofocus
        >

        <ul
            
            class="flex-row shadow-2xl border border-gray-600 rounded-br-md rounded-bl-md pl-2 pt-1 pb-2 pr-4"
        >
        @if (!empty( $searchAvailable ))
            
            @if ( ! $users->isEmpty() )
                @foreach ($users as $user)
                        <li
                            wire:click.prevent="clickResult('{{ $user->alias }}', 'searchAvailable', 'usersAvailable')"
                            class="block border-b-2">
                            {{ $user->alias }}
                        </li>
                @endforeach
            @else
                <li>No such result</li>
            @endif
        @endif
        </ul>
                        
        
        {{-- =================================== --}}
        {{-- =============selected users======== --}}
        @if ( $usersAvailable !== [] )
            @foreach ($usersAvailable as $user)
            <div
                class="overflow-visible mt-2 ml-2 inline-block px-2 py-1.5 relative bg-gray-500 rounded-md text-white"
            >
                {{ $user }}
                <div
                    class="w-3 h-3 bg-white rounded-full absolute top-0 right-0"
                    wire:model="usersAvailable"
                    wire:click.prevent="removeSelectedUser('{{ $user }}', 'usersAvailable')"
                >
                <svg class="w-3 absolute top-0 right-0 text-gray-900"
                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                >
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
                </div>
            </div>
            @endforeach
        @endif
        
        <button 
            class="p-1 bg-gray-400"
            wire:click.prevent="showarray"
        >
            array
        </button>

        <div>
            selected: {{ $selected }} <br>
            {{ $keys }}
            {{ $array }}
        </div>
        {{-- =================================== --}}
        
    </div>
    <hr class="border-solid border-1">
    <!--============================================================================================-->
</div>
