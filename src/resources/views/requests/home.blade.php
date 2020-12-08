@extends('layouts.app')

@section('content')
    <main role="main" class="flex-shrink-0">
        <div class="container">

            @if(isset($selectedRequest))
                <div class="card text-white bg-dark">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-md-4">
                                {{ $selectedRequest->name }} information
                            </div>
                            <div class="col-md-5">
                                {{ ucfirst($selectedRequest->status)}} {{Carbon\Carbon::parse($selectedRequest->updated_at)->diffForHumans()}}
                            </div>
                            <div class="col-md-3">
                                <a href="{{route('edit', ['id' => $selectedRequest->id])}}"
                                   class="btn btn-link text-danger float-right">Edit</a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <p>{{$selectedRequest->description}}</p>
                    </div>
                </div>
                <br>
            @endif

            <div class="card text-white bg-dark">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-md-9">
                            {{ auth()->user()->name }} requests
                        </div>
                        <div class="col-md-3">
                            <a href="{{route('create')}}" class="btn btn-link float-right">Create</a>
                        </div>
                    </div>
                </div>

                <div class="card-body">

                    <table class="table table-dark ">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Type</th>
                            <th scope="col">Name</th>
                            <th scope="col">Status</th>
                            <th scope="col">Last Updated</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($requests as $request)
                            <tr>
                                <th scope="row">{{ $loop->index + 1 }}</th>
                                <td>{{ strtoupper($request->type) }}</td>
                                <td>
                                    <a href="{{route('home', ['page' => $requests->currentPage(), 'r' => $request->id ])}}">
                                        <h5 style="display: inline;">{{$request->name}}</h5>
                                    </a>
                                </td>
                                <td>{{ strtoupper($request->status) }}</td>
                                <td>{{ Carbon\Carbon::parse($request->updated_at)->diffForHumans()}}</td>
                            </tr>
                        @empty
                            <div class="alert">
                                <p>No requests exist.</p>
                            </div>
                        @endforelse
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-center">
                        {{$requests->links('pagination::bootstrap-4')}}
                    </div>
                </div>

            </div>
        </div>
    </main>

@endsection
