@if (session('success'))
    <div class="alert alert-success ">
        {{ session('success') }}
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-warning">
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif
