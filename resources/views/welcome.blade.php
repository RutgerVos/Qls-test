<h1>Select delivery method and click button for pdf order</h1>
{{-- <a href="{{ route('pdf') }}">Create pdf</a> --}}
<form action="{{ route('pdf') }}" method="post">
    {{ csrf_field() }}
    <select id="deliver" name="deliver">
        <option value="2" selected>DHL Pakje</option>
        <option value="3">DHL Brievenbuspakje</option>
    </select>
    <input type="submit" value="Create pdf">
</form>