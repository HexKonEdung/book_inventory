@extends('items.layout')
@section('content')
<h2>Edit Item</h2>
<form action="{{ route('items.update',$item->id) }}" method="POST">@csrf @method('PUT')
<input type="text" name="name" value="{{ $item->name }}"><br><br>
<textarea name="description">{{ $item->description }}</textarea><br><br>
<button>Update</button>
</form>
@endsection
