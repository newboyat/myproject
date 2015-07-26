
<div class="modal-header bg-primary">
    <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> -->
    <h4 class="modal-title">Show Info</h4>
</div>
<div class="modal-body">
{{$ticket->tk_id}}

{{$ticket->tk_detail}}

<a data-toggle="modal" href="#myModal2" class="btn btn-primary">Launch modal</a>
</div>
<div class="modal-footer">
<!--     <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
    <button type="button" class="btn btn-primary">Save changes</button>
 -->


<button type="button" data-dismiss="modal" class="btn btn-primary">Close</button> 
 </div>


