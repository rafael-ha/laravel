@extends('layouts.app')

@section('content')
<div class="container">
    <ul class="list-group">
        @foreach ($images as $img)
        <li class="list-group-item" style="margin: 2% 0;">
            <div>
                <p><span>{{$img->user->name}}</span>| @<span>{{$img->user->nick}}</span></p>
                <figure class="figure">
                    <img src="{{ route('image.verimagen',['filename'=>$img->image_path])}}" class="img-thumbnail"> 
                    <figcaption class="figure-caption">@<span>{{$img->user->nick}}</span>|<span>{{substr($img->created_at,0,10)}}</span><br><br>
                    <p>{{$img->description}}</p>
                    </figcaption>
                </figure>
            </div>
        </li>
        @endforeach
    </ul>
</div>
@endsection
