@extends('Templete.Templete')
@section('plantillaweb')
    <h2> Registro de grupos</h2>
    <form action="{{ route('grupos.store') }}" method="post">
        {{ csrf_field() }}
        <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="" class="form-label">Año</label>
            <input type="text" class="form-control" name="anio">
        </div>
        <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="" class="form-label">periodo</label>
            <input type="text" class="form-control" name="periodo">
        </div>
        <div class="col-lg-6 col-md-4 col-sm-2">
            <select  class="form-control" name="teacher_id">
            <option selected ="true" disabled="disabled">Profesor</option>
            @foreach ($teachers as $teacher)
            <option value ="{{$teacher->id}}"> {{$teacher->nombres}} {{$teacher->apellidos}}</option>
            @endforeach
            </select>
        </div>
        <div class="col-lg-6 col-md-4 col-sm-2">
            <select class="form-control" name="subject_id">
            <option selected ="true" disabled="disabled">Materia</option>
            @foreach ($subjects as $subjects)
            <option value ="{{$subjects->id}}"> {{$subjects->nombre}}</option>
            @endforeach
            </select>

            
        </div>



        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
@endsection
