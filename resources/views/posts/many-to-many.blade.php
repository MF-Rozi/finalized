@extends('app')

@section('content')
<div class="container bg-w p-4">
    <div class="table-responsive">
        <h1>Many To Many (Post Category)</h1>
        <table id="dataTable" class="table table-striped table-bordered nowrap">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Slug</th>
                    <th>Content</th>
                    <th>Category</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                @foreach ($category->posts as $post)

                <tr>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->slug }}</td>
                    <td>{{ $post->content }}</td>
                    <td>{{ $category->name }}</td>
                </tr>
                @endforeach
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th>Title</th>
                    <th>Slug</th>
                    <th>Content</th>
                    <th>Category</th>
                </tr>
            </tfoot>


        </table>
    </div>
</div>

@endsection
