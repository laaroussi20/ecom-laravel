@extends('admin.layout.admin')

@section('content')



<br>



<table class="table table-hover">
    <thead>
    <tr>
        <th style="text-align: center;">Le Nom de produit:   </th>

    </tr>
    </thead>
    <tbody>

    @forelse($products as $product)
        <tr>

         <td>{{$product->name}}</td>


        </tr>


    @empty
        <h3>N'est pas De produits</h3>


    @endforelse

    </tbody>

</table>


@endsection