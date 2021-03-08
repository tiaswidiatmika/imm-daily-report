@extends('layouts.app')
@section('content')
<div class="flex flex-col p-2 space-y-2">
    <div class="px-2 py-1 text-base font-bold text-gray-700 border-b-2 items-center">Template Name</div>
    
    @if ($templateList->isNotEmpty())
        @foreach ($templateList as $key => $template)
            <div class="flex justify-between text-gray-800">
                <span
                    class="px-2 py-1 text-gray-600 m-1"
                > {{ $key+1 . '. ' . $template->template_name }} </span>
                
                <a href="{{ url('create-from-template', ['id' => $template->id]) }}"

                    class="py-1 px-2 m-1 bg-blue-500 text-blue-50 hover:bg-blue-600"
                >use</a>
            </div>
        @endforeach
    @else
    <div class="flex flex-col justify-between text-gray-800">
        <span
            class="px-2 py-1 text-gray-600 m-1"
        > No Template Available </span>
        
        <a href="{{ route('create-report') }}"
            class="py-1 px-2 m-1 bg-blue-500 text-blue-50 text-center hover:bg-blue-600"
        >Back</a>
    </div>
    
    @endif
</div>
@endsection