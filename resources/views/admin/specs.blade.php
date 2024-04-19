@extends('layouts.app')

@section('content')


<div class="container py-5">

    <div class="d-flex justify-content-end">
        <div class="card" style="width: 30rem;">
            <img src="{{$project->img}}" class="card-img-top" alt="immagine non disponibile">
            <div class="card-body">
              <h5 class="card-title">{{$project->name}}</h5>
              <h6 class="card-title mb-4">{{$project->username_creator}}</h6>
              <p class="card-text">{{$project->program_lang}}</p>
              <p class="card-text">{{$project->link_github}}</p>
              <a href="{{route('admin.edit', $project->id)}}" class="btn btn-primary">Modifica</a>
            </div>
          </div>
    </div>

</div>
@endsection