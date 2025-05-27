@extends('layouts.app')

@section('content')
    <livewire:post.edit :id="$postId" />
@endsection