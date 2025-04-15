<h1>Daftar Buku</h1>
    <style>
        table {
    width: 100%;
    border-collapse: collapse;
    margin: 20px 0;
}

th, td {
    padding: 12px;
    text-align: left;
    border: 1px solid #ddd;
}

th {
    background-color: #007bff;
    color: white;
}

tbody tr:nth-child(even) {
    background-color: #f2f2f2;
}

tbody tr:hover {
    background-color: #ddd;
}
    </style>
    <td>
    <div class="add-book">
    <a href="/buku/create">Tambah Buku</a>
    <style>
        .add-book {
    max-width: 7000px;
    margin: 20px auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #f9f9f9;
}

.add-book h2 {
    text-align: center;
    margin-bottom: 20px;
}
    </style>

    <td>
    <table border="1" class="table table-hover">
    <thead>
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Sinopsis</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Jumlah Halaman</th>
            <th>Tahun Terbit</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Kategori</th>
            <th> action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($buku as $index => $item)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $item->judul }}</td>
            <td>{{ $item->sinopsis }}</td>
            <td>{{ $item->penulis }}</td>
            <td>{{ $item->penerbit }}</td>
            <td>{{ $item->jumlah_halaman }}</td>
            <td>{{ $item->tahun_terbit }}</td>
            <td>{{ $item->harga }}</td>
            <td>{{ $item->stok }}</td>
            <td>{{ $item->kategori_id}}</td>
            
            <td>
                <a href="/buku/{{ $item-> }}/edit" class="btn btn-primary">Edit</a>
                <a href="/buku/{{ $item-> }}/delete" class="btn btn-primary">Delete</a>
                <a href="/buku/{{ $item-> }}/detail" class="btn btn-primary">Detail</a>
</td>