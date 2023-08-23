@extends('layout.panel')


@section('content')
<div class="card shadow">
  <div class="card-header border-0">
    <div class="row align-items-center">
      <div class="col">
        <h1 class="mb-0">Clases Retrasadas</h1>
      </div>
      <div class="col text-right">
        <a href="{{route('paneltesoreria.index')}}" class="btn btn-lg btn-success">
          <i class="fas fa-angle-left"></i>
          Regresar</a>
      </div>
    </div>
  </div>
  <div class="card-body">

    @if (session('notification'))
    <div class="alert alert-success" role="alert">
      {{session('notification')}}
    </div>
    @endif
  </div>
  <div class="table-responsive">
    <!-- Projects table -->
    <table class="table align-items-center table-flush">
      <thead class="thead-light">
        <tr>
          <th scope="col">N°</th>
          <th scope="col">Nombre</th>
          <th scope="col">Materia</th>
          <th scope="col">Total a Pagar</th>
          <th scope="row">Opciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($alumnos as $index=> $retrasadas)

        <tr>
          <th scope="row">
            {{$index + 1}}
          </th>
          <td>
            {{$retrasadas->primernombre}} {{$retrasadas->primerapellido}}
          </td>
          <td>
            {{$retrasadas->materiaretrasada}}
          </td>
          <td>
            {{$retrasadas->total}}
          </td>
          <td>
            <a href="{{Route('retrasadas.create', $retrasadas->id)}}" class="btn btn-sm btn-info"> Editar</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection