@extends('layouts.master')

@section('content')

    <h1>Menus <a href="{{ route('menu.create') }}" class="btn btn-primary pull-right btn-sm">Add New Menu</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th>Name</th><th>Meta K</th><th>Meta D</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($menus as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('/menu', $item->id) }}">{{ $item->name }}</a></td><td>{{ $item->meta_k }}</td><td>{{ $item->meta_d }}</td>
                    <td>
                        <a href="{{ route('menu.edit', $item->id) }}">
                            <button type="submit" class="btn btn-primary btn-xs">Update</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'route' => ['menu.destroy', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $menus->render() !!} </div>
    </div>

@endsection
