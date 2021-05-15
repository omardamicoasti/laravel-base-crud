@extends('layout.app')

@section("title", "Shoes")

@section("content")

    @foreach ($shoes as $shoe)
    @dump($shoe)
        
    @endforeach
    
@endsection