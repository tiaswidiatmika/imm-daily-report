@extends('layouts.app')
@section('content')
<div class="block p-5 m-auto">
    <div class="text-gray-700 text-lg mb-3">CREATE FROM TEMPLATE
        <hr class="border border-gray-400" />
    </div>
    @foreach ($inputNames as $input)
    <div class="flex justify-between space-y-2">
        <label 
            class="text-gray-600 w-full"
            for="">{{ ucfirst($input) }}</label>
        <input 
            class="border border-gray-300 w-full"
            type="text" name="{{ $input }}"
        >
    </div>
    @endforeach
    <button type="submit"
        class="p-2 bg-blue-500 text-blue-50 hover:bg-blue-600 block w-full mt-3"
    >SUBMIT</button>
</div>


@endsection
