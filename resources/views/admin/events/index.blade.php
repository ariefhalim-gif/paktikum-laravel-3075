@extends('layouts.admin')


@section('content')


<div class="p-6">


<div class="flex justify-between mb-5">


<h2 class="text-2xl font-bold">
Manajemen Event
</h2>



<a href="{{route('admin.events.create')}}"
class="bg-indigo-600 text-white px-4 py-2 rounded">

Tambah Event

</a>


</div>



<table class="w-full bg-white shadow">


<tr>

<th class="p-3">
Judul
</th>

<th>
Kategori
</th>

<th>
Tanggal
</th>

<th>
Aksi
</th>

</tr>



@foreach($events as $event)


<tr>


<td class="p-3">

{{$event->title}}

</td>



<td>

{{$event->category->name ?? '-'}}

</td>



<td>

{{$event->date}}

</td>



<td>


<a href="{{route('admin.events.edit',$event->id)}}"
class="bg-blue-500 text-white px-3 py-1 rounded">

Edit

</a>



<form action="{{route('admin.events.destroy',$event->id)}}"
method="POST"
style="display:inline">


@csrf

@method('DELETE')


<button
class="bg-red-500 text-white px-3 py-1 rounded">

Hapus

</button>


</form>


</td>



</tr>


@endforeach


</table>


</div>


@endsection