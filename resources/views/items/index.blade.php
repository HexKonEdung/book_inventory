@extends('items.layout')
@section('content')
<a onclick="index()" class="button">Add Item</a>
<div>
@foreach($items as $i)
<div class="card">
<h3>{{ $i->name }}</h3>
<p>{{ $i->description }}</p>
<a href="{{ route('items.edit',$i->id) }}" class="button">Edit</a>
<form action="{{ route('items.destroy',$i->id) }}" method="POST" style="display:inline">@csrf @method('DELETE')<button>Delete</button></form>
</div>
@endforeach
</div>
@endsection
