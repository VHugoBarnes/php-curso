@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @include('includes.message')

                @foreach ($images as $image)
                    <div class="card">

                        <div class="card-header pub_image">
                            @if ($image->user->image)
                                <div class="container-avatar">
                                    <img src="{{ route('user.avatar', ['filename' => $image->user->image]) }}" alt="Avatar" class="avatar">
                                </div>
                            @endif
                            <div class="data-user">{{ $image->user->nick }}</div>
                        </div>

                        <div class="card-body">

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
