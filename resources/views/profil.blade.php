<h2>Data Mahasiswa</h2>

@foreach($profil as $p)
    <p>Nama: {{ $p['nama'] }}</p>
    <p>NIM: {{ $p['nim'] }}</p>
    <p>Prodi: {{ $p['prodi'] }}</p>
    <p>Semester: {{ $p['semester'] }}</p>

    <p>Keahlian:</p>
    <ul>
        @foreach($p['keahlian'] as $k)
            <li>{{ $k }}</li>
        @endforeach
    </ul>
@endforeach