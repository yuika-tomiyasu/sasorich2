@extends('layouts.app')

@section('content')
<div class="col-xs-offset-4 col-xs-4">
    <h1>My Page</h1>
         Name: {{ Auth::user()->name }}
         <br>
         Email: {{ Auth::user()->email }}
        <br>
        Events that you're going to join:
        <br>
        <?php
        foreach($name as $name){
            print $name;
            ?><br><?php
        }
        ?>
        </div>
        {!! link_to_route('food.index') !!}
@endsection

