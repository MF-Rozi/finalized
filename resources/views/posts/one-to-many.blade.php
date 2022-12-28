@extends('app')

@section('content')
<div class="container bg-w p-4">
    <div class="table-responsive">
        <h1>One to Many (User Post)</h1>
        <table id="dataTable" class="table table-striped table-bordered nowrap">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Slug</th>
                    <th>Content</th>
                    <th>User</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->slug }}</td>
                    <td>{{ $post->content }}</td>
                    <td>{{ $user->name }}</td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th>Title</th>
                    <th>Slug</th>
                    <th>Content</th>
                    <th>user</th>
                </tr>
            </tfoot>


        </table>
    </div>
</div>
@endsection
