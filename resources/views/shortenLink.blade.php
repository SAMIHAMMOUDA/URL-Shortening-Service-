
@extends('layouts.app')
@section('content')
<div class="container">
    <a href="{{ url('/dashboard') }} " class="btn bg-danger text-white">Go Dashboard</a>
</div>
<div class="container py-2">
    <h1 class="text-center p-3 mb-2  bg-secondary text-white">Paste The URL To Be Shortened</h1>
    <div class="card">
      <div class="card-header">
        <form method="POST" action="{{ route('generate.shorten.link.post') }}">
            @csrf
            <div class="input-group mb-3">
              <input type="text" name="link" class="form-control" placeholder="Enter URL" aria-label="Recipient's username" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="submit"> Shorten Link</button>
              </div>
            </div>
        </form>
      </div>
      <div class="card-body">
            @if (Session::has('success'))
                <div class="alert alert-success">
                    <p>{{ Session::get('success') }}</p>
                </div>
            @endif
            <table class="table table-bordered table-sm text-center">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Short Link</th>
                        <th>Link</th>
                        <th>Created By</th>
                        <th>views</th>
                        <th>Created_at</th>
                        <th>IP</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($shortLinks as $row)
                        <tr>
                            <td>#</td>
                            <td><a href="{{ route('shorten.link', $row->code) }}" target="_blank">{{ route('shorten.link', $row->code) }}</a></td>
                            <td>{{ $row->link }}</td>
                            <td> {{ Auth::user()->name }}</td>
                            <td> {{ $row->user->name }} </td> 
                            <td>{{ $row->created_at }}</td>
                            <td>{{  $clientIP }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
      </div>
    </div>

    {{ $shortLinks->withQueryString()->links() }}

</div>

@endsection
