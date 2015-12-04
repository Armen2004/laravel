@extends('layouts.master')

@section('content')

    <h1>Menu</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Name</th><th>Meta K</th><th>Meta D</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $menu->id }}</td> <td> {{ $menu->name }} </td><td> {{ $menu->meta_k }} </td><td> {{ $menu->meta_d }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection