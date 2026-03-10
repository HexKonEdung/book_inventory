
@if ($errors->any())
<div style="color:red;">
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif

@extends('items.layout')

@section('content')

<h2>Add Book</h2>

<form action="{{ route('items.store') }}" method="POST">
@csrf

<input type="text" name="title" placeholder="Title"><br><br>

<input type="text" name="author" placeholder="Author"><br><br>

<input type="text" name="isbn" placeholder="ISBN"><br><br>

<input type="text" name="genre" placeholder="Genre"><br><br>

<input type="number" name="published_year" placeholder="Published Year"><br><br>

<input type="text" name="status" placeholder="Status (Available/Borrowed)"><br><br>

<textarea name="description" placeholder="Description"></textarea><br><br>

<button type="submit">Save</button>

</form>

@endsection