@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">
            @include("partials.create-post")

            <div class="my-5">
                {{-- posts begin --}}

                @foreach ($posts as $post)
                <div class="card border-0 p-0 card-body my-5">
                    <div class="p-2">
                        <div class="d-flex gap-3">
                            <div>
                                <img src="{{ $post->user->avatar }}" alt="" class="rounded-circle" style="width:70px; height:70px">
                            </div>
                            <div>
                                <p class="h5 m-0">{{ $post->user->name }}</p>
                                <p class=" m-0">{{ "@" . $post->user->username }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="" >
                        <div class="mb-1 px-2">
                            {{ $post->content }}
                        </div>
                        <img src="{{ $post->image }}" alt="" class="w-100" style="height:600px; object-fit:cover">
                    </div>
                </div>
                @endforeach

                {{-- posts end --}}
            </div>


        </div>
    </div>
</div>
@endsection
