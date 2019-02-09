@extends('layout.main')

@section('content')
    <section class="hero text-center">
        <style>

        </style>
        <br/>
        <br/>
        <br/>
        <br/>
        <h2 >
            <strong >
                Bonjour tout le monde aujourd'hui !!
            </strong>
        </h2>
        <br>
        <a href="{{url('/shirts')}}">
            <button class="button large">Tous les produits !!</button></a>
    </section>
    <br/>

    <!-- Latest SHirts -->












    <table id="table1">

            <div class="row">
                    @forelse($shirts->chunk(4) as $chunk)
                        @foreach($chunk as $shirt)
                        <div class="large-3 columns">
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
                                        {{$shirt->price}} DH
                                    </h5>
                                    <p>
                                        {{$shirt->description}}


                                    </p>
                                </div>
                            </div>



                        <div class="project-wrapper">
                            <ul class="small-block-grid-1 medium-block-grid-2 large-block-grid-3">

                            </ul>
                        </div>




                        @endforeach
                    @empty
                        <h3>N'est pas de  Produit</h3>
                    @endforelse
                </div>

    </table>




    <!-- Footer -->
    <br>
    @endsection