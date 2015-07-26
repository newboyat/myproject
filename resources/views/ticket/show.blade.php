
<div class="modal-header bg-primary">
    <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> -->
    <h4 class="modal-title">Show Info</h4>
</div>
<div class="modal-body">
{{$ticket->tk_id}}

{{$ticket->tk_detail}}

<!-- <a data-toggle="modal" href="{{action('TicketController@show_detail')}}" class="btn btn-primary" 
	data-target="#myModal2">
	Launch modal</a>
 -->	
 <a data-toggle="modal" href="{{action('TicketController@show_detail')}}" class="btn btn-primary" 
 data-target="#myModal2">
	Launch modal</a>

</div>

<div class="modal-footer">

<button type="button" data-dismiss="modal" class="btn btn-primary">Close</button> 
 </div>




