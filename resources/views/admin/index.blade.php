@extends('admin.layout')

<?php
if(Auth::check()){

  $usertype = Auth::user()->usertype;

  if ($usertype == '1') {

    ?>

@include('admin.bar')

@include('admin.products')

<?php

  }
  else {
    ?>
    <h4>You are not Admin</h4>
    <?php
}
}
?>