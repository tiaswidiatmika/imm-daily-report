@extends('layouts.app')

@section('content')
    <div x-data="{ isOpen: false }">
        <x-post.post-option />
        
        <form action="{{ route('create-report') }}" method="POST"
            class="w-full"
            x-show="isOpen"    
        >
            @method('POST')
            @csrf
            <x-report-input sectionName="case" sectionInfo="section name: Case"/>
            <x-report-input sectionName="summary" sectionInfo="section name: Summary"/>

            <button type="submit"
                class="p-3 bg-blue-500 text-blue-50 ml-10"
            >submit</button>
        </form>
    </div>
@endsection