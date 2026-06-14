@extends('layouts.admin')


@section('content')


<form method="POST"
action="{{route('admin.events.store')}}">


@csrf


<input name="title"
placeholder="Judul Event"
class="border p-2">



<select name="category_id"
class="border p-2">


@foreach($categories as $category)

<option value="{{$category->id}}">

{{$category->name}}

</option>

@endforeach


</select>



<input name="date"
type="datetime-local"
class="border p-2">



<input name="location"
placeholder="Lokasi"
class="border p-2">



<input name="price"
placeholder="Harga"
class="border p-2">



<input name="stock"
placeholder="Stock"
class="border p-2">



<textarea name="description"
placeholder="Deskripsi"></textarea>



<button
class="bg-green-600 text-white p-2">

Simpan

</button>


</form>


@endsection