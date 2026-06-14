@extends('layouts.admin')


@section('content')


<h1 class="text-3xl font-bold mb-5">

Partner

</h1>



<form method="POST"
action="/admin/partners"
class="bg-white p-5 rounded shadow mb-5">


@csrf


<input
name="name"
placeholder="Nama Partner"
class="border p-2">



<input
name="logo_url"
placeholder="Logo URL"
class="border p-2">



<button
class="bg-green-600 text-white px-4 py-2 rounded">

Simpan

</button>


</form>





<table class="w-full bg-white shadow">


<tr>

<th class="p-3">
Nama
</th>


<th>
Logo
</th>

</tr>



@foreach($partners as $partner)


<tr>


<td class="p-3">

{{$partner->name}}

</td>


<td>


<img src="{{$partner->logo_url}}"
width="80">


</td>


</tr>



@endforeach


</table>



@endsection