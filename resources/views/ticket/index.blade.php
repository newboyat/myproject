@extends('layouts.master')
@section('css')
  <style>
  /* .modal-header, h4, .close {
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
}*/
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
        <div class="modal-dialog ">
            <div class="modal-content">
                <!-- Content will be loaded here from "remote.php" file -->
            </div>
        </div>
    </div>

 <div  id="myModal2"  class="modal" data-backdrop="static">
    <div class="modal-dialog">
      <div class="modal-content">
            <!-- Content will be loaded here from "remote.php" file -->        
        </div>            
      </div>
    </div>
</div>    
@stop


<!-- /.modal -->
