@extends('app')

@section('top')
@include('forum::partials.alerts')
@stop

@section('bottom')
<script>
$('a[data-confirm]').click(function(event) {
    if (!confirm('{!! trans('forum::base.generic_confirm') !!}')) {
        event.stopImmediatePropagation();
        event.preventDefault();
    }
});

$('[data-method]:not(.disabled)').click(function(event) {
    $('<form action="' + $(this).attr('href') + '" method="POST">' +
    '<input type="hidden" name="_method" value="' + $(this).data('method') + '">' +
    '<input type="hidden" name="_token" value="{!! Session::getToken() !!}"' +
    '</form>').submit();

    event.preventDefault();
});
</script>
@stop
