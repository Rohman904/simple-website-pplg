@extends('admin.dashboard')
@section('content')
     <h1>Category</h1>
     <form action="{{ url('admin/category') }}" method="post">
          @csrf
          <div class="mb-3">
            <table for="">Title</table>
            <input type="text" name="title" class="from-control">
          </div>
          <div class="mb-3">
            <label for="">Description</label>
            <textarea class="from-control" name="description"  rows="5"></textarea>
          </div>
          <button class="btn btn-primary">Save</button>
     </form>
@endsection