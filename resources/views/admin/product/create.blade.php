@extends('admin.layout.admin')

@section('content')



    <h3>Ajouter Produit</h3>

    <div class="row">

        <div class="col-md6 col-md-offset-3">


<div>

        {!! Form::open(['route' => 'product.store', 'method' => 'POST', 'files' => true]) !!}

        <div class="form-group">
            {{ Form::label('name', 'Nom') }}
            {{ Form::text('name', null, array('class' => 'form-control')) }}


        </div>
        <div class="form-group">
            {{ Form::label('description', 'La description') }}
            {{ Form::text('description', null, array('class' => 'form-control')) }}


        </div>
            <div class="form-group">
                {{ Form::label('price', 'Prix') }}
                {{ Form::number('price' , null, array('class' => 'form-control')) }}

            </div>



            <div class="form-group">
                {{ Form::label('size', 'Taille') }}
                {{ Form::select('size' , [ 'petit' => 'Petie', 'moyenne' => 'Moyenne' , 'grand'=>'Grand'], null,['class'=> 'form-control']) }}


            </div>





            <div class="form-group">
                {{ Form::label('category_id', 'Categories') }}
                {{ Form::select('category_id' , $categories , null,['class' => 'form-control','placeholder' => 'Select Category']) }}


            </div>


        <div class="form-group">
            {{ Form::label('image', 'Image') }}
            {{ Form::file('image', array('class' => 'form-control')) }}


        </div>

            {{ Form::submit('Cree', array('class' => 'btn btn-default')) }}

        {!! Form::close() !!}


    </div>

    </div>

    </div>

@endsection