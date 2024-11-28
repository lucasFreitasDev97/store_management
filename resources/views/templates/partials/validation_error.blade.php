@if($errors->get($inputName))
    <ul class="mb-0">
        @foreach($errors->get($inputName) as $error)
            <li><span class="text-{{$level ?? 'danger'}}">{{$error}}</span></li>
        @endforeach
    </ul>
@endif
