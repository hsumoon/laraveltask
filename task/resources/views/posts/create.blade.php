@extends ('layouts.master')

    @section('content')
        <div class="col-sm-8 blog-main">
            <h1>Publish A Post</h1>
            <form action="/posts" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" placeholder="Title" name="title" autofocus>
                </div>
                <div class="form-group">
                    <label for="body">Body</label>
                    <textarea id="body" name="body" class="form-control" placeholder="Place your options here."></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Publish</button>
            </form>
        </div>
    @endsection
