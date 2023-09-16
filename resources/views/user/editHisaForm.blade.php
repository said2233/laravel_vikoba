<html>
<h1>Edit Vikoba Data</h1>
@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
<form method="POST" action="{{ route('vikoba.update', $data->id) }}">
    @csrf
    @method('POST')

    <div class="form-group">
        <label for="hisa">Hisa:</label>
        <input type="text" name="hisa" id="hisa" class="form-control" value="{{ $data->hisa }}">
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
</form>

</html>
