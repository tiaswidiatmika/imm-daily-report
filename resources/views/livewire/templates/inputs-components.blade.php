@extends('layouts.app')
@section('content')
    <form action="{{ route('create-from-template') }}" method="post">
    @csrf
    <div class="block p-5 m-auto">
        <div class="text-gray-700 text-lg mb-3">CREATE FROM TEMPLATE - {{ strtoupper($template->template_name)}}
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

        <input type="hidden" name="ref" value="{{ $ref }}">
        <input type="hidden" name="templateId" value="{{ $template->id }}">
        <button type="submit"
            class="p-2 bg-blue-500 text-blue-50 hover:bg-blue-600 block w-full mt-3"
        >SUBMIT</button>
    </div>
</form>


@endsection
