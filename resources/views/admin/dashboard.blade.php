@extends('layouts.app')


@section('content')
<div class="container py-5">
    <h1>
        {{__('Dashboard')}}
    </h1>

    <h2>
       <small> Lista dei progetti </small>
    </h2>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">Nome Progetto</th>
            <th scope="col">Link gitHub</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
        </tbody>
      </table>
</div>
@endsection