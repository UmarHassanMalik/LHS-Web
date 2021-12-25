@extends('Profile.layout')
@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-6">
                            <h4 class="card-title"> Messages ( {{$case['title']}} )</h4>
                        </div>
                    </div>
                    <div class="col-5">
                        <form action="{{route('sendMessage')}}" method="post">
                            @csrf
                            <input type="hidden" value="{{$case['title']}}" name="title">
                            <textarea class="form-control" id="message-text" placeholder="Write a new message"
                                name="message" style="width:100%;"></textarea>
                                <button type="submit" class="btn btn-primary">Send</button>
                     


                        </form>






                    </div>


                    <div class="col-5">
                        
                     <form action="{{route('sendFile')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="{{$case['title']}}" name="title">
                            

                            <input type="file" name="fileUpload">
                                <button type="submit" class="btn btn-primary">Upload File</button>
                     
                            

                        </form>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <th>
                                    Message From
                                </th>
                                <th>
                                    Message
                                </th>
                                <th>
                                    Time
                                </th>

                            </thead>
                            <tbody>
                                @foreach($messages as $message)
                                <tr>

                                    <td>
                                        @if($user['email'] == $message['messageUser'])
                                        You
                                        @else
                                        {{$message['messageUser']}}
                                        @endif
                                    </td>
                                    <td>
                                        @if(isset($message['messageFile']))
                                      <a href="http://lhs.daxtrum.com/uploads/{{$message['messageText']}}" target="_blank">{{$message['messageText']}}</a>   

                                        @else 

                                        {{$message['messageText']}}
                                        @endif

                                    </td>
                                    <td>
                                        {{$message['messageTime']}}
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

@include('Profile.footer')

@endsection