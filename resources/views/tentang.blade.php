<x-layout>
  <x-slot:heading>
    Halaman Tentang
  </x-slot:heading>
  <h1>INI ADALAH HALAMAN TENTANG SAYA</h1>
  <ul>
    @foreach ($data as $job )
      <li><strong>{{ $job['nama'] }}</strong>
          yang berusia {{ $job['usia'] }} usia,
          bekerja sebagai {{ $job['pekerjaan'] }}</li>
    @endforeach
  </ul>
</x-layout>