@extends('layouts.app')

@section('content')
<div class="container">
    <table>
    <tr>
        <th>Brand</th>
        <th>Model</th>
        <th>Company</th>
    </tr>
    <tr>
        <td>Oppo
        <img src="/oppo.jpg" alt="">
        </td>
        <td>Oppo F11 pro</td>
        <td>Save n Earn</td>
    </tr>
    <tr>
        <td>Samsung
        <img src="/samsung.jpg" alt="">
        </td>
        <td>Samsung Note 9</td>
        <td>Samsung Company</td>
    </tr>
</table>
</div>
    </tr>
@endsection
<style>

table, th, td{
    border:3px solid black;
    padding:3px;
    background-color: dark gray;
    width: 900px;
    height: 150px;
    text-align: center;
    }
   img{
       width: 150px;
       height: 100px;
   }
</style>

