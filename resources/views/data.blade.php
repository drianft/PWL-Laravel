<x-layout>
    <x-slot:heading>
        Data
    </x-slot:heading>

    <table border="2">
    <tr>
        <th>Nama</th>
        <th>Usia</th>
        <th>Status</th>
        <th>Keterangan</th>
    </tr>
    @foreach ($hasil as $item)
    <tr>
        <td>{{ $item['nama'] }}</td>
        <td>{{ $item['usia'] }}</td>
        <td>{{ $item['status'] }}</td>
        <td>
            @if ($item['status'] == 'Aktif')
                <span style="color: green;">Pekerja ini masih aktif</span>
            @else
                @if ($item['usia'] > 30)
                    <span style="color: red;">Pekerja ini sudah pensiun</span>
                @else
                    <span style="color: blue;">Pekerja ini sudah tidak aktif</span>
                @endif
            @endif
        </td>
    </tr>
    @endforeach
</table>


</x-layout>