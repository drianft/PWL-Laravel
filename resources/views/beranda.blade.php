<x-layout>
  <x-slot:heading>
    Halaman Beranda
  </x-slot:heading>
  <h1> {!! $salam !!}</h1>
  <h1>INI ADALAH HALAMAN WEB SAYA , </h1> 
  <h1>saya : {!! $nama !!}</h1>
  @if ($nama == 'Admin') 
      <b> Dingin bgt si bang admin</b>
  @else
      <b>  {!! $nama !!}</b>
  @endif

</x-layout>