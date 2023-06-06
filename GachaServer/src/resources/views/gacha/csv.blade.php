<form method="POST" action="{{ route('csv.finish') }}" enctype="multipart/form-data">
    <input name="csv_file" type="file" accept=".csv,.txt">
        @if($errors->all())
            <p style="color: red;">{{ $errors }}</p>
        @endif
    <p>{{ $message }}</p>
    <button type="submit">送信する</button>
    @csrf
</form>