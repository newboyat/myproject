
@section('css')
<style type="text/css">
.modal-open .modal {
  padding-left: 0px !important;
  padding-right: 0px !important;
  overflow-y: scroll;
}
</style>
@stop

@section('script')
<script>
	/* center modal */
function centerModals($element) {
  var $modals;
  if ($element.length) {
    $modals = $element;
  } else {
    $modals = $('.modal-vcenter:visible');
  }
  $modals.each( function(i) {
    var $clone = $(this).clone().css('display', 'block').appendTo('body');
    var top = Math.round(($clone.height() - $clone.find('.modal-content').height()) / 2 );
    top = top > 0 ? top : 0;
    $clone.remove();
    $(this).find('.modal-content').css("margin-top", top);
  });
}
$('.modal-vcenter').on('show.bs.modal', function(e) {
  centerModals($(this));
});
$(window).on('resize', centerModals);
</script>
@stop

