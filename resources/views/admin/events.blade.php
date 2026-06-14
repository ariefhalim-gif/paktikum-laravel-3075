@extends('layouts.admin')


@section('content')


<h1 class="text-3xl font-bold mb-5">

Manajemen Event

</h1>



<table class="bg-white w-full shadow">


<tr>

<th class="p-3">
Nama Event
</th>

<th>
Kategori
</th>

<th>
Aksi
</th>

</tr>



<tr>

<td class="p-3">
Workshop Laravel
</td>

<td>
Workshop
</td>

<td>

<button
class="bg-blue-500 text-white px-3 py-1 rounded">

Edit

</button>


<button
class="bg-red-500 text-white px-3 py-1 rounded">

Hapus

</button>


</td>

</tr>


</table>



@endsection