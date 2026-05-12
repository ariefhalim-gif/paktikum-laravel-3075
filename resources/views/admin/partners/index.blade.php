<!DOCTYPE html>
<html>
<head>
    <title>Partner</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h2>Data Partner</h2>

    <form action="/admin/partners" method="POST">
        @csrf

        <input type="text" name="name" class="form-control mb-2" placeholder="Nama Partner">

        <select name="logo_url" class="form-control mb-2">
            <option value="https://placehold.co/200x200">Logo 200x200</option>
            <option value="https://placehold.co/300x300">Logo 300x300</option>
        </select>

        <button class="btn btn-primary mb-3">Simpan</button>
    </form>

    <table class="table table-bordered">

        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Logo</th>
        </tr>

        @foreach($partners as $partner)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $partner->name }}</td>
            <td><img src="{{ $partner->logo_url }}" width="80"></td>
        </tr>
        @endforeach

    </table>

</div>

</body>
</html>