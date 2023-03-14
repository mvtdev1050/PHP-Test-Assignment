@if ($errors->any())
<div class="p-3 rounded bg-red-500 text-white m-3">
    <ul>
        @foreach ($errors->all() as $error)
            @if(is_array($error))
                <li>{{ current($error) }}</li>
            @else
                <li>{{ $error }}</li>
            @endif
        @endforeach
    </ul>
</div>
@endif
