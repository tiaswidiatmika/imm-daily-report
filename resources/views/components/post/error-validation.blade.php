@props(['attribute'])
@error($attribute)
    <ul class="mt-3 list-disc list-inside text-sm text-red-600 dark:text-red-400">
        @foreach ($errors->get($attribute) as $error)
            @if (is_array($error))
                @foreach ($error as $subError)
                    <li>{{ $subError }}</li>
                @endforeach
            @else
                <li>{{ $error }}</li>
            @endif
        @endforeach
    </ul>
@enderror