@extends('layouts.admin')


@section('content')


<div class="bg-white p-8 rounded-xl shadow">


<div class="flex justify-between items-center mb-6">


<h1 class="text-3xl font-bold">
Manajemen Kategori
</h1>


<button 
class="bg-blue-600 text-white px-5 py-2 rounded-lg">

+ Tambah Kategori

</button>


</div>




<table class="w-full border">


<thead class="bg-gray-200">


<tr>

<th class="p-3 border">
No
</th>


<th class="p-3 border">
Nama Kategori
</th>


<th class="p-3 border">
Aksi
</th>


</tr>


</thead>



<tbody>


<tr>


<td class="p-3 border">
1
</td>


<td class="p-3 border">
Seminar
</td>


<td class="p-3 border">


<button
class="bg-yellow-500 text-white px-3 py-1 rounded">

Edit

</button>


<button
class="bg-red-500 text-white px-3 py-1 rounded">

Hapus

</button>


</td>


</tr>




<tr>


<td class="p-3 border">
2
</td>


<td class="p-3 border">
Workshop
</td>


<td class="p-3 border">


<button
class="bg-yellow-500 text-white px-3 py-1 rounded">

Edit

</button>


<button
class="bg-red-500 text-white px-3 py-1 rounded">

Hapus

</button>


</td>


</tr>





<tr>


<td class="p-3 border">
3
</td>


<td class="p-3 border">
Konser
</td>


<td class="p-3 border">


<button
class="bg-yellow-500 text-white px-3 py-1 rounded">

Edit

</button>


<button
class="bg-red-500 text-white px-3 py-1 rounded">

Hapus

</button>


</td>


</tr>



</tbody>


</table>



</div>


@endsection