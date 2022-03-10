@if ($errors->any())
    <div class="alert">
        <h3>Errors List</h3>
        <ul>
            @foreach ($errors->all() as $error)
                <li><strong>•</strong> {{ $error }} You must correct the information in the field to continue.</li>
            @endforeach
        </ul>
    </div>
@endif