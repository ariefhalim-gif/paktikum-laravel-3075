@extends('layouts.admin')


@section('content')


<div class="bg-white p-6 rounded shadow">


<h1 class="text-3xl font-bold mb-5">
Edit Event
</h1>



<form method="POST"
action="{{route('admin.events.update',$event->id)}}">


@csrf

@method('PUT')



<label>
Judul Event
</label>

<input 
name="title"
value="{{$event->title}}"
class="border p-2 w-full mb-3">





<label>
Kategori
</label>


<select 
name="category_id"
class="border p-2 w-full mb-3">



@foreach($categories as $category)


<option 

value="{{$category->id}}"

@if($category->id == $event->category_id)

selected

@endif

>


{{$category->name}}


</option>


@endforeach



</select>





<label>
Tanggal
</label>


<input

name="date"

type="datetime-local"

value="{{date('Y-m-d\TH:i',strtotime($event->date))}}"

class="border p-2 w-full mb-3"

>





<label>
Lokasi
</label>


<input

name="location"

value="{{$event->location}}"

class="border p-2 w-full mb-3"

>






<label>
Harga
</label>


<input

name="price"

value="{{$event->price}}"

class="border p-2 w-full mb-3"

>





<label>
Stock
</label>


<input

name="stock"

value="{{$event->stock}}"

class="border p-2 w-full mb-3"

>





<label>
Deskripsi
</label>


<textarea

name="description"

class="border p-2 w-full mb-3"

>{{$event->description}}</textarea>





<button

class="bg-blue-600 text-white px-5 py-2 rounded">


Update Event


</button>



</form>


</div>



@endsection