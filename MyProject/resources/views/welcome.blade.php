@extends('layout.default')

@section('page_title', 'laravel-comics-homepage')

@section('section1')
<div class="bgimage">

</div>
@endsection
@section('section2')
<div class="bgcolor">
    <div class="container2">
        <button class="button"> <strong>CURRENT SERIES</strong></button>

        @foreach($listacomics as $comic)
            <div class="card">
                <img src="{{$comic['thumb']}}"  alt="" class="coverimg">
                <h4>{{ $comic['title']}}</h4>

            </div>
    
    
        @endforeach
        
    </div>    

</div>

@endsection
@section('section3')
    <div class="bgimage2" >
        <div class="container3">
            <ul >
                <li>DIGITAL COMICS</li>
                <li>DC MERCHANDISE</li>
                <li>SUBSCRIPTION</li>
                <li>COMIC SHOP LOCATOR</li>
                <li>DC POWER VISA</li>
            </ul>
        </div>
        
    </div>
@endsection

