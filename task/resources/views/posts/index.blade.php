@extends ('layouts.master')

@section('content')

    <div class="col-sm-8 blog-main">

      <div class="blog-post">
        <h2 class="blog-post-title">Read My blog!!!!!</h2>
            <div>
                <p>
                    Create your post to share your thoughts and knowledge here!!!!.<a href="/posts/create" class="btn btn-info" role="button">Create New Post</a>
                </p>
            </div>
            <table class="table table-striped table-responsive">
                @foreach ($posts as $post)
                    <tr>
                        <td>
                            {{ $post->title }}
                        </td>
                        <td>
                            {{ $post->body }}
                        </td>
                    </tr>
                @endforeach
            </table>
      </div>


    </div>

@endsection
