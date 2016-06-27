<?php
/**
 * Created by PhpStorm.
 * User: Veren
 * Date: 26-6-2016
 * Time: 21:06
 */


@extends('admin.master')

@section('content')

@if (count($results) === 0)
    ... html showing no articles found
@elseif (count($results) >= 1)
    ... print out results
    @foreach($results as $result)
        print article
    @endforeach
@endif

@endsection
