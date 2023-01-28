@extends('layout')
@include('components.navbar')

<?php
// session_start();

use App\Http\Controllers\ProductsController;
$itemCount= ProductsController::cartItem();

?>

<h3>Hello, I am Cart</h3>

<input type="text" name="user_id" value= {{ Auth::user()->id }}>              

<input type="text" name="product_id" value={{$listing->id}}>


<table style="margin-top:100px">
    <thead>
        <tr style="background-color: brown">
            <th>Name</th>
            <th>Price</th>
            <th>Quantity</th>
        </tr>
    </thead>
    <tbody>
        {{-- @foreach($items as $item)
            <tr>
                <td>{{ $item['product']['name'] }}</td>
                <td>{{ $item['product']['price'] }}</td>
                <td>{{ $item['qty'] }}</td>
            </tr>
        @endforeach --}}
    </tbody>
</table>

        {{$itemCount}}

