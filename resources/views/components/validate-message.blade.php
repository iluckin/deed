@if($errors->count())
    <div class="alert alert-warning">
        {{ $errors->first() }}
    </div>
@endif