@extends('admin.layouts.app')


@section('content')
 <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Categories
                    </h1>
                </div>
            </div>
            <div class="col-lg-6">
        @if (count($categories) > 0)
            <table class="table table-hover">
            	<thead>
            		<tr>
                        <th>No</th>
                        <th>Category</th>
            			<th>Edit</th>
            			<th>Delete</th>
            		</tr>
            	</thead>
            	<tbody>
                    @foreach ($categories as $key => $single_category)
            		<tr>
            			<td>{{ $key + 1 }}</td>
                        <td>{{ $single_category->cat_title }}</td>
                        <td><a href="{{ route('category_update' , ['id' => $single_category->id]) }}" class="btn btn-primary">Edit</a></td>
                        <td>
                            <form action="{{ route('category_delete',['id' => $single_category->id] ) }}" method='post'>
                                @csrf
                                @method('DELETE')
                            <button onclick="return confirm('Are you sure?')" type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
            		</tr>
                    @endforeach
            	</tbody>
            </table>
                    @else
                    <h2>No Records Found</h2>
                    @endif
            </div>
            <div class="col-lg-6">
                @if ($category)
                <form action="{{ route('category_update_post' , ['id' => $category->id]) }}" method="POST" role="form" enctype="multipart/form-data" style="margin-bottom: 20px;">
                    @csrf
                    @method('PUT')
                    <a href="{{ route('category') }}" class="btn btn-primary">Back</a>
                    <legend>Update Category</legend>
                    <div class="form-group">
                        <label for="">Category</label>
                        <input type="text" class="form-control" name="category_title" value="{{ $category->cat_title }}">
                    </div>
                    <button class="btn btn-primary" type="submit">Update</button>
                </form>
                @else
                <form action="{{ route('category_post') }}" method="POST" role="form" enctype="multipart/form-data" style="margin-bottom: 20px;">
                    @csrf
                    <legend>Add Category</legend>
                    <div class="form-group">
                        <label for="">Category</label>
                        <input type="text" class="form-control" name="category_title" placeholder="Category">
                    </div>
                    <button class="btn btn-primary" type="submit">Add</button>
                </form>
                @endif
            </div>
</div>
@endsection