@extends('layouts.app')

@section('content')
<div class="container">
    <table>
    <tr>
        <th>Brand</th>
        <th>Model</th>
        <th>Company</th>
        <th>Price</th>
    </tr>
    <tr>
        <td>Oppo
        <img src="/oppo.jpg" alt="">
        </td>
        <td>Oppo F11 pro</td>
        <td>Save n Earn</td>
        <td>From ₱ 1,700.00 to ₱ 10,556.00</td>
    </tr>
    <tr>
        <td>Samsung
        <img src="/samsung.jpg" alt="">
        </td>
        <td>Samsung Note 9</td>
        <td>Samsung Company</td>
        <td>₱14,014.00</td>
    </tr>

</table>
</div>
    </tr>
@endsection
<style>

table, th, td{
    border:3px solid black;
    padding:5px;
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

