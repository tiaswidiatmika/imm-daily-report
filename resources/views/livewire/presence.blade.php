<div>
    <input
        type="text"
        placeholder="available officer(s)"
        wire:model="searchTerm"
    >
    @if (! empty($users))
        @foreach ($users as $user)
            <div name="alias" value="{{ $user->alias }}"> {{ $user->alias }} </div>
        @endforeach
    @else
        tidak ada hasil
    @endif
</div>