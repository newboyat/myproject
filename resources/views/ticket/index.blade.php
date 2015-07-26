@extends('layouts.master')
@section('css')
  <style>
   .modal-header, h4, .close {
      background-color: #5cb85c;
      color:white !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-footer {
      background-color: #f9f9f9;
  }
  .navbar-custom {
    color: #FFFFFF;
    background-color: #5cb85c;
}
  </style>
@stop

@section('content')

<fieldset> 
  <legend> Ticket List</legend>   
<ul>
    @foreach($tickets as $ticket)
		<li> <a href="{{action('TicketController@show', ['id' => $ticket->tk_id])}}" 
				  data-toggle="modal" data-target="#myModal">{{$ticket->tk_id}}</a>
    @endforeach
</ul>
</fieldset> 
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <!-- Content will be loaded here from "remote.php" file -->
            </div>
        </div>
    </div>

 <div class="modal" id="myModal2" data-backdrop="static">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-primary">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h4 class="modal-title">Second Modal title</h4>
        </div><div class="container"></div>
        <div class="modal-body">
          <!--Content for the dialog / modal goes here.-->
        </div>
        <div class="modal-footer">
          <a href="#" data-dismiss="modal" class="btn">Close</a>
          <a href="#" class="btn btn-primary">Save changes</a>
        </div>
      </div>
    </div>
</div>    
@stop


<!-- /.modal -->
