@extends('layouts/master')
@section('content')


<form action="{{ route('create') }}" method="post">
    @csrf
    <div id="myDIV" class="header">
        <h2>My To Do List</h2>
        <input type="text" name="newTask" placeholder="Title...">
        <button type="submit" class="addBtn">Add</button>
    </div>
</form>
<ul id="myUL">
    @foreach($tasks as $task)
    <li>
        <div class="task">{{ $task->title }}</div>
        <div class="action">
            <a href=""><i class="fa fa-edit"></i></a>
        </div>
        <div class="action">
            <a href=""><i class="fa fa-trash-alt"></i></a>
        </div>
    </li>
    @endforeach
</ul>

@endsection