
@extends('layouts.base') 

@section('title', 'Bienvenue') 

@section('content')
<table>
    @foreach($pog as $unElement)
    <tr>
      <td>{{$unElement->texte}}</td>
    </tr>
    @endforeach
  </table>
  

@endsection