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
                            @foreach ($listings as $listing)
                            <tbody>
                                <tr>
                                    <td>{{$listing->name}}</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
