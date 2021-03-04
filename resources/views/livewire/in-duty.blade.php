<div>
    <!--============================================================================================-->
    <div class="flex-row p-1">
        <h1 class="block text-2xl">Presence</h1>
        <hr class="border-solid border-2">
        
        <div class="flex items-baseline mb-1.5">
            <h2 class="block mt-5 mb-3">In foreigners: </h2>
        {{-- ===================selected users======================= --}}
        @if ( $usersAvailable !== [] )
            @foreach ($usersAvailable as $user)
                <span class="overflow-visible mt-2 ml-2 inline-block px-2 py-1.5 relative bg-gray-500 rounded-md text-white">
                {{ $user }}
                <button class="w-3 h-3 bg-white rounded-full absolute top-0 right-0" wire:model="usersAvailable" wire:click.prevent="removeSelectedUser('{{ $user }}', 'usersAvailable')">
                    <svg class="w-3 absolute top-0 right-0 text-gray-900" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
                </span>
                
                @endforeach
                @endif
        </div>
        {{-- =========================================================== --}}

        {{-- ============check who available in foreigners counter========== --}}
        <input
            id="searchAvailable"
            type="text"
            placeholder="officer(s) in foreigner counter"
            wire:model="searchAvailable"
            wire:keyup="search('searchAvailable')"
            class="shadow-lg mb-2 block"
        >


        @if (!empty( $searchAvailable ))
            <ul
                
                class="flex-row shadow-2xl border border-gray-600 rounded-br-md rounded-bl-md relative"
            >
            
            @if ( ! $users->isEmpty() )
                @foreach ($users as $user)
                        <li
                            wire:click.prevent="clickResult('{{ $user->alias }}', 'searchAvailable', 'usersAvailable')"
                            class="block border-b-2 hover:text-white hover:bg-gray-600 top-0 right-0">
                            {{ $user->alias }}
                        </li>
                @endforeach
            @else
                <li
                class="block border-b-2 top-0 right-0"
                >
                    No such result
                </li>
            @endif
            </ul>
        @endif
                        
        
        {{-- =================================== --}}
    
        {{-- =============check who is on sick leave====================== --}}
        <div class="flex items-baseline mb-1.5">
            <h2 class="block mt-5 mb-3">Sick leave: </h2>
        {{-- ===================selected users======================= --}}
        @if ( $usersSickLeave !== [] )
            @foreach ($usersSickLeave as $user)
                <span class="overflow-visible mt-2 ml-2 inline-block px-2 py-1.5 relative bg-gray-500 rounded-md text-white">
                {{ $user }}
                <button class="w-3 h-3 bg-white rounded-full absolute top-0 right-0" wire:model="usersSickLeave" wire:click.prevent="removeSelectedUser('{{ $user }}', 'usersSickLeave')">
                    <svg class="w-3 absolute top-0 right-0 text-gray-900" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
                </span> 
            @endforeach
        @endif
        </div>
        {{-- =========================================================== --}}

        {{-- ============list (dropdown) who available in foreigners counter========== --}}
        <input
            id="searchSickLeave"
            type="text"
            placeholder="officer(s) in foreigner counter"
            wire:model="searchSickLeave"
            wire:keyup="search('searchSickLeave')"
            class="shadow-lg mb-2 block"
        >


        @if (!empty( $searchSickLeave ))
            <ul
                
                class="flex-row shadow-2xl border border-gray-600 rounded-br-md rounded-bl-md relative"
            >
            
            @if ( ! $users->isEmpty() )
                @foreach ($users as $user)
                        <li
                            wire:click.prevent="clickResult('{{ $user->alias }}', 'searchSickLeave', 'usersSickLeave')"
                            class="block border-b-2 hover:text-white hover:bg-gray-600 top-0 right-0">
                            {{ $user->alias }}
                        </li>
                @endforeach
            @else
                <li
                class="block border-b-2 top-0 right-0"
                >
                    No such result
                </li>
            @endif
            </ul>
        @endif




    </div>
    <hr class="border-solid border-1">
    <!--============================================================================================-->
    
</div>