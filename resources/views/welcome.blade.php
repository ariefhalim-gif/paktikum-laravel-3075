@extends('layouts.app')


@section('content')


<div class="p-10">


<h1 class="text-4xl font-bold mb-8">

Daftar Event

</h1>




<div class="flex gap-3 mb-8">


<a href="/"
class="px-4 py-2 bg-gray-200 rounded">

Semua

</a>



@foreach($categories as $cat)


<a href="/?category={{$cat->slug}}"

class="px-4 py-2 bg-indigo-100 text-indigo-700 rounded">


{{$cat->name}}


</a>



@endforeach


</div>





<div class="grid grid-cols-3 gap-8">



@foreach($events as $event)



<div class="bg-white shadow rounded-xl overflow-hidden">



<img 
src="/{{$event->poster_path}}"
class="w-full h-60 object-cover">



<div class="p-5">


<h2 class="text-xl font-bold">

{{$event->title}}

</h2>



<p class="text-gray-500">

{{$event->category->name}}

</p>



<p>

{{ \Carbon\Carbon::parse($event->date)->format('d-m-Y H:i') }}

</p>




<p class="text-indigo-600 font-bold mt-3">

Rp {{number_format($event->price,0,',','.')}}

</p>



<a href="/event/1"

class="inline-block mt-4 bg-indigo-600 text-white px-4 py-2 rounded">


Detail


</a>



</div>



</div>



@endforeach



</div>



</div>



@endsection