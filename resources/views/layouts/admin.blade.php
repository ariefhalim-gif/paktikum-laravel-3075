<!DOCTYPE html>
<html>

<head>

<title>Admin AmikomHub</title>

<script src="https://cdn.tailwindcss.com"></script>

</head>


<body class="bg-gray-100">


<div class="flex">


<!-- SIDEBAR -->

<div class="w-64 bg-gray-900 min-h-screen text-white p-5">


<h1 class="text-2xl font-bold mb-10">
Admin Panel
</h1>


<a href="/admin"
class="block mb-5">

Dashboard

</a>



<a href="/admin/events"
class="block mb-5">

Events

</a>



<a href="/admin/transactions"
class="block mb-5">

Transactions

</a>



</div>





<!-- CONTENT -->

<div class="flex-1 p-10">


@yield('content')


</div>



</div>


</body>

</html>