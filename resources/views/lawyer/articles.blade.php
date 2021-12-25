@extends('lawyer.layout')

@section('content')

<!-- End Navbar -->
<div class="panel-header panel-header-sm">
</div>
<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"><i class="fa fa-files-o"></i>My Articles </h4>
          <hr>
        </div>
        <div class="text-right">
          <button type="button" class="add_btn" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> ADD
            ARTICLE </button>
        </div>

        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">

                <th>
                  Article Title
                </th>
                <th >
                  Content
                </th>
                <th >
                  Content
                </th>
              </thead>
              <tbody>
                @foreach($articles as $article)
                <tr>

                  <td>
                    {{$article['title']}}
                  </td>
                  <td >
                    {{$article['content']}}
                  </td>
                  <td >
                    <a href="{{route('deleteArticle', $article['article_id'])}}" class="btn btn-primary">Delete</a> 
                  </td>
                </tr>
              @endforeach
              </tbody>
            </table>
          </div>
        </div>
   
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Article</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('addArticle')}}" method="post">
          @csrf
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Title:</label>
            <input type="text" class="form-control" id="recipient-name" name="title">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Content:</label>
            <textarea class="form-control" id="message-text" name="content"></textarea>
          </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Submit Article</button>
      </form>

      </div>
    </div>
  </div>
</div>
@endsection



