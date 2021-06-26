@extends('layouts.app')

@section('content')
<script>
    $(document).ready(function () {
        // hide sections before #pick-a-section-button is clicked
        $('.sections').hide();
        $('.section-option').hide();

        $('#pick-a-section-button').click(function (e) { 
            e.preventDefault();
            $(this).toggle();
            $('.sections').show("slow");
        });

        $('#arrival').click(function (e) { 
            e.preventDefault();
            $('#departure').toggle("slow");
            $('#selatan').toggle("slow");
            $('#section-option-arrival').toggle("slow");
        });

        $('#departure').click(function (e) { 
            e.preventDefault();
            $('#arrival').toggle("slow");
            $('#selatan').toggle("slow");
            $('#section-option-departure').toggle("slow");
        });

        $('#selatan').click(function (e) { 
            e.preventDefault();
            $('#departure').toggle("slow");
            $('#arrival').toggle("slow");
            $('#section-option-selatan').toggle("slow");
        });
    });
</script>
<div class="flex-row space- text-center w-1/4 bg-green-100"
    id="container"
>
    <h1
        class="block"
    >
        this is the home page
    </h1>
    
    <a
        href="#"
        class="flex px-2 py-2 bg-indigo-600 w-full hover:bg-indigo-800 rounded-lg text-blue-200 cursor-pointer justify-center"
        id="pick-a-section-button"
    >
        pick a section
    </a>
    @include('sections.index')
</div>

@endsection