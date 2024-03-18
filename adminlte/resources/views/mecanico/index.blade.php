@extends('layouts.app')

@section('template_title')
    Mecanico
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Mecanico') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('mecanicos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
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
                                        
										<th>Cedula</th>
										<th>Nombre</th>
										<th>Apellido</th>
										<th>Direccion</th>
										<th>Telefono</th>
										<th>Email</th>
										<th>Ciudad</th>
										<th>Especialidad</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($mecanicos as $mecanico)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $mecanico->cedula }}</td>
											<td>{{ $mecanico->nombre }}</td>
											<td>{{ $mecanico->apellido }}</td>
											<td>{{ $mecanico->direccion }}</td>
											<td>{{ $mecanico->telefono }}</td>
											<td>{{ $mecanico->email }}</td>
											<td>{{ $mecanico->ciudad }}</td>
											<td>{{ $mecanico->especialidad }}</td>

                                            <td>
                                                <form action="{{ route('mecanicos.destroy',$mecanico->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('mecanicos.show',$mecanico->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('mecanicos.edit',$mecanico->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $mecanicos->links() !!}
            </div>
        </div>
    </div>
@endsection
