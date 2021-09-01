@extends('template/backoffice')

@section('content')

<form action="{{route('factUpdate', $factd->id)}}" method="post" class="container">
    @csrf

    titre: <input type="text" value="{{$factd->titre2}}" name="titre2">
    description: <input type="text" value="{{$factd->description2}}" name="description2">

    birthday: <input type="text" value="{{$factd->nombre1}}" name="nombre1">
    website: <input type="text" value="{{$factd->descriptiona}}" name="descriptiona">

    phone: <input type="text" value="{{$factd->nombre2}}" name="nombre2">
    city: <input type="text" value="{{$factd->descriptionb}}" name="descriptionb">

    age: <input type="text" value="{{$factd->nombre3}}" name="nombre3">
    degree: <input type="text" value="{{$factd->descriptionc}}" name="descriptionc">

    email: <input type="text" value="{{$factd->nombre4}}" name="nombre4">
    freelance: <input type="text" value="{{$factd->descriptiond}}" name="descriptiond">

    @method("PUT")
    <button class="btn btn-primary" type="submit">Submit</button>
</form>
@endsection