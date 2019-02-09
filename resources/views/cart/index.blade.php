@extends('layout.main')
@section('content')
    <style>

        .button {
            background-color: #000000; /* Green */
            border: none;
            color: white;
            padding: 16px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            -webkit-transition-duration: 0.4s; /* Safari */
            transition-duration: 0.4s;
            cursor: pointer;
        }

        .button1 {
            background-color: white;
            color: black;
            border: 2px solid #000000;
        }

        .button1:hover {
            background-color: #4CAF50;
            color: white;
        }





        table {
            border-collapse: collapse;
            width: 100%;
            border:0px;
        }

        th, td {
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even){background-color: #f2f2f2}

        th {
            background-color: #000000;
            color: white;
        }
    </style>

    <div class="row">

        <h3 style="text-align: center;">Articles du panier</h3>


        <table class="table table-hover">
            <thead>
            <tr>
                <th>nom    </th>
                <th>prix    </th>
                <th>Qnt    </th>
                <th>Taille    </th>
                <th>Suppression    </th>
            </tr>
            </thead>
            <tbody>
            @foreach($cartItems as $cartItem)

                <tr>
                    <td>{{$cartItem->name}}</td>
                    <td>{{$cartItem->price}}</td>

                    <td>

                        {!! Form::open(['route' => ['cart.update', $cartItem->rowId],'method' => 'PUT']) !!}
                        <input name="qty" type="text" value="{{$cartItem->qty}}">
                        <input type="submit" class="btn btn-sm btn-default" value="ok">
                        {!! Form::close() !!}

                    </td>
                    <td>{{$cartItem->options->has('size')?$cartItem->options->size:''}}</td>
                    <td>

                        <form action="{{route('cart.destroy',$cartItem->rowId)}}" method="POST">
                        {{csrf_field()}}
                                {{method_field('DELETE')}}
                                <input class="button" type="submit" value="supprimer">

                        </form>


                    </td>

                </tr>
            @endforeach
            <tr>
                <td></td>
                <td>
                    Impôt : {{Cart::tax()}} DH<br>
                    La somme : {{Cart::subtotal()}} DH<br>
                    Somme finale : {{Cart::total()}} DH</br>

                </td>
                <td>      Articles : {{Cart::count()}}</td>
                <td></td>
                <td></td>
            </tr>


            </tbody>

        </table>











    </div>



@endsection










