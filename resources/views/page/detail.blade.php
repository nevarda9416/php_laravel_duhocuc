@extends('layouts.default')
@section('content')
 <?php echo html_entity_decode($page->content) ?>
@endsection()
