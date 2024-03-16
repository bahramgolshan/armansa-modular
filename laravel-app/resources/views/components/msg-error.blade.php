@if (session()->has('error'))
<div class="alert alert-danger dynamic-align">
    @if(is_array(session('error')))
        <ul>
            @foreach (session('error') as $message)
                <li>{{ $message }}</li>
            @endforeach
        </ul>
    @else
        {{ session('error') }}
    @endif
</div>
@endif