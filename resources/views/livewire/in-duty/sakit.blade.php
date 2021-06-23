<div class="flex items-baseline mb-1.5">
    <h2 class="block mt-5 mb-3">Izin Sakit: </h2>

{{-- SHOWS LIST OF USERS SELECTED --}}
@if ( $usersSakit !== [] )
    @foreach ($usersSakit as $user)
        <span class="overflow-visible mt-2 ml-2 inline-block px-2 py-1.5 relative bg-gray-500 rounded-md text-white">
        {{ $user }}
        <button class="w-3 h-3 bg-white rounded-full absolute top-0 right-0" wire:model="usersSakit" wire:click.prevent="removeSelectedUser('{{ $user }}', 'usersSakit')">
            <svg class="w-3 absolute top-0 right-0 text-gray-900" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
        </button>
        </span>        
    @endforeach
@endif
</div>
{{-- ============================================= --}}
{{-- ==        Input Izin sakit:          == --}}
{{-- ============================================= --}}
<input
    id="searchSakit"
    type="text"
    placeholder="cari petugas izin sakit.."
    wire:model="searchSakit"
    wire:keyup="search('searchSakit')"
    class="shadow-lg mb-2 block"
>

@if (!empty( $searchSakit ))
    <ul
        
        class="flex-row shadow-2xl border border-gray-600 rounded-br-md rounded-bl-md relative"
    >
    
    @if ( ! $users->isEmpty() )
        @foreach ($users as $user)
                <li
                    wire:click.prevent="clickResult('{{ $user->alias }}', 'searchSakit', 'usersSakit')"
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

<hr class="border-solid border-1">