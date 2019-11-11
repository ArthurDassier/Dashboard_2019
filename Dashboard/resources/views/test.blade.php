@extends('template')

<script>
function myFunction(var &comments) {
    comments.array_splice(2, 1, 'Julia', 'Php');
    location.reload();
    // alert("PLOP");
}
</script>

@isset($comments)
@foreach($comments as $comment)
    <div>
        <p> There is something ! {{ $comment}}</p>
    </div>
    <hr>
@endforeach
    <p> WOOOOWW <p>
    <!-- <button type="button" class="btn btn-primary" onclick={{wow($comments)}} >Primary</button> -->
    <input type="button" name="envoyer" value="envoyer" onclick="myFunction($comments);">
@endisset

@empty($comments)
    <div>
        <p>There is nothing. {{$comments ?? ''}}</p>
    </div>
@endempty

<?php

function wow(&$comments)
{
    array_splice($comments, -1);
    // var_dump($comments);
    return redirect()->to('home');
}

?>
