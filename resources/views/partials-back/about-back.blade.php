@extends('template/backoffice')

@section('content')

<form action="{{route('aboutUpdate', $aboutd->id)}}" method="post" class="container">
    @csrf

    titre: <input type="text" value="{{$aboutd->titre1}}" name="titre1">
    description: <input type="text" value="{{$aboutd->description1}}" name="description">

    birthday: <input type="text" value="{{$aboutd->birthday}}" name="birthday">
    website: <input type="text" value="{{$aboutd->website}}" name="website">

    phone: <input type="text" value="{{$aboutd->phone}}" name="phone">
    city: <input type="text" value="{{$aboutd->city}}" name="city">

    age: <input type="text" value="{{$aboutd->age}}" name="age">
    degree: <input type="text" value="{{$aboutd->degree}}" name="degree">

    email: <input type="text" value="{{$aboutd->email}}" name="email">
    freelance: <input type="text" value="{{$aboutd->freelance}}" name="freelance">

    @method("PUT")
    <button class="btn btn-primary" type="submit">Submit</button>
</form>
@endsection