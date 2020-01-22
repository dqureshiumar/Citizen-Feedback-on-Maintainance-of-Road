@extends('layouts.app')

@section('content')
@if(auth()->user()->isAdmin == 0)
Get Lost
@else
<div class="container">
<table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Feedarea</th>
            <th scope="col">Remark</th>
            <th scope="col">Address</th>
            <th scope="col">Verified</th>
            <th scope="col">Status</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach($verify as $feed)
          <tr>
            <td>@if($feed->feedarea == 'Other'){{$feed->other}} @else {{$feed->feedarea}} @endif</td>
            <td>{{$feed->remark}}</td>
            <td>{{$feed->address}}</td>
            <td>@if($feed->verified == 1)Verified @else Not Verified @endif</td>
            <td>{{$feed->status}}</td>
            <td><div class="dropdown">
                <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Action
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="{{ route('submit-a-feedback.show',$feed->id) }}">View</a>
                  <a class="dropdown-item" href="submit-a-feedback/{{$feed->id}}/edit">Edit</a>
                  <form action="{{ route('submit-a-feedback.destroy', $feed->id) }}" method="post">
                      @csrf
                      @method('delete')
                      <button type="button" class="dropdown-item" onclick="confirm('{{ __("Are you sure you want to delete this user?") }}') ? this.parentElement.submit() : ''">
                          {{ __('Delete') }}
                      </button>
                  </form>
                </div>
              </div>
            </td>

          </tr>
          @endforeach
        </tbody>
      </table>
</div>
@endif
@endsection