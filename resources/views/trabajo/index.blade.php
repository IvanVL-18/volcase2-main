@extends('layouts.app')

@section('template_title')
    Trabajo
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Trabajo') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('trabajo.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Nuevo Trabajo') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Trabajo</th>
										<th>Descripcion</th>
										<th>Fecha Inicio</th>
										<th>Fecha Fin</th>
										<th>Comentario</th>
										<th>Status</th>
										<th>Id Trabajador</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($trabajos as $trabajo)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $trabajo->trabajo }}</td>
											<td>{{ $trabajo->descripcion }}</td>
											<td>{{ $trabajo->fecha_Inicio }}</td>
											<td>{{ $trabajo->fecha_Fin }}</td>
											<td>{{ $trabajo->comentario }}</td>
											<td>{{ $trabajo->status }}</td>
											<td>{{ $trabajo->ID_Trabajador }}</td>

                                            <td>
                                                <form action="{{ route('trabajo.destroy',$trabajo->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('trabajo.show',$trabajo->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('trabajo.edit',$trabajo->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $trabajos->links() !!}
            </div>
        </div>
    </div>
@endsection
