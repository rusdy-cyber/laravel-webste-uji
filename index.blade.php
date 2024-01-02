<!-- resources/views/wisata/index.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wisata</title>
</head>
<body>
    <h1>Daftar </h1>

    @foreach ($wisatas as $wisata)
    <div>
        <img src="{{ asset('images/' . $wisata->gambar) }}" alt="{{ $wisata->deskripsi }}" style="width: 200px; height: 150px;">
        <p>{{ $wisata->deskripsi }}</p>
        <form action="{{ route('wisata.destroy', $wisata->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Hapus</button>
        </form>
    </div>
@endforeach

{{ $wisatas->links() }}
</body>
</html>
