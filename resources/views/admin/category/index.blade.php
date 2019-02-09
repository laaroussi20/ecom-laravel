@extends('admin.layout.admin')
@section('content')


    <div class="navbar">
        <a class="navbar-brand" href="#">

        </a>
        <ul class="nav navbar-nav">

            @if(!empty($categories))
                @forelse($categories as $category)

                    <li>
                        <a href="{{route('category.show',$category->id)}}">{{$category->name}}</a>
                    </li>
                @empty
                    <li>pas de données</li>
                @endforelse
            @endif
        </ul>
        <!--

                 <a class="btn btn-primary" data-toggle="modal" href="#modal-id">Ajouter Gategories</a>


         -->

        <div class="modal fade" id="modal-id">
            <div class="modal-dialog">


                {!! Form::open(['route' => 'category.store', 'method' => 'post']) !!}




                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times</button>
                        <h4 class="modal-title">Ajouter Categorie</h4>

                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            {{ Form::label('name', 'Nom') }}
                            {{ Form::text('name', null, array('class' => 'form-control')) }}


                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal" >Fermer</button>
                        <button type="submit" class="btn btn-primary"  >Ajouter Sub</button>

                    </div>

                </div>

                {!! Form::close() !!}


            </div>
        </div>



    </div>
@if(!empty($products))
<section>



    <table class="table table-hover">
        <thead>
        <tr>
            <th style="text-align: center">Les Produits  </th>
        </tr>
        </thead>
        @forelse($products as $product)
        <tr>
            <td>
           {{$product->name}}
            </td>
        </tr>
            @empty
            <tr><td>
                    pas de données
                </td></tr>
            <tbody>

@endforelse
        </tbody>
    </table>

</section>
    @endif

@endsection