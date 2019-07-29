@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Dashboard
                    <a href="/listing/create" class="btn btn-success btn-sm float-right">Add Listing</a></div>
                <div class="card-body">
                    <h3>Your Listings</h3>
                    @if (count($listings) > 0)
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Company</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($listings as $listing)
                                <tr>
                                    <td>{{$listing->name}}</td>
                                    <td><a class="btn btn-outline-secondary btn-sm float-right" href="/listing/{{$listing->id}}/edit">Edit</a></td>
                                    <td></td>
                                </tr>
                            @endforeach
                        </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
