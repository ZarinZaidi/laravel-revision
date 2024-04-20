<h1>Header page</h1>

{{-- call var from welcome.blade --}}
{{-- <h3>{{ $name }}</h3> --}}

@foreach ($fruits as $key => $value)
    <p>{{ $key }} - {{ $value }}</p>
@endforeach

{{-- @forelse ($fruits as $key => $value)
    <p>{{ $key }} - {{ $value }}</p>
@empty
    <p>no value found</p>
@endforelse --}}
