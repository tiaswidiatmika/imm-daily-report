@extends('layouts.app')

@section('content')
    <form action="{{ route('create-report') }}" method="POST"
        class="w-full"
    >
        @method('POST')
        @csrf
        <x-report-input sectionName="case" sectionInfo="section name: Case"/>
        <x-report-input sectionName="summary" sectionInfo="section name: Summary"/>

        <button type="submit">submit</button>
    </form>
@endsection