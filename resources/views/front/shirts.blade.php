@extends('layout.main')
@section('title' , 'Product')
@section('content')
    <!-- products listing -->
    <!-- Latest SHirts -->
    <div class="row">
        @forelse($shirts as $shirt)
        <div class="small-3 medium-3 large-3 columns">
            <div class="item-wrapper">
                <div class="img-wrapper">
                    <a href="{{route('cart.edit',$shirt->id)}}" class="button expanded add-to-cart">
                        Ajouter au panier
                    </a>
                    <a href="#">
                        <img src="{{url('images',$shirt->image)}}"/>
                    </a>
                </div>
                <a >
                    <h3>
                        {{$shirt->name}}
                    </h3>
                </a>
                <h5>
                    {{$shirt->price}}

                </h5>
                <p>
                    {{$shirt->description}}


                </p>
            </div>
        </div>

            @empty
            <h3>N'est pas de produit</h3>
            @endforelse
    </div>
    @endsection