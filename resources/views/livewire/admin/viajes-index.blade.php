<div>
    <div class="card">{{-- este div siempre debe estar en un componente de livewire --}}
        <div class="card-header">
            <input wire:model="search" type="text" class="form-control" placeholder="Ingrese el nombre del pasajero">
        </div>
            @if ($viajes->count())
                <div class="card-body">
                    <table class= "table table-striped">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Nombre</th>
                                <th>Lun</th>
                                <th>Mar</th>
                                <th>Mie</th>
                                <th>Jue</th>
                                <th>Vie</th>
                                <th>Semana</th>
                                <th>Descripcion</th>
                                <th>Ruta</th>
                                <th colspan="2"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($viajes as $viaje)
                            <tr>
                                <td>{{$viaje->id_days}}</td>
                                <td>{{$viaje->nombre}} {{$viaje->apellido}}</td>
                                @if ($viaje->lun == 1)
                                <td ><a  class="btn btn-secondary btn-sm"><i class="fa fa-check-square" aria-hidden="true"></i></a></td>
                                @else
                                <td><a  class="btn btn-danger btn-sm"><i class="fa fa-window-close" aria-hidden="true"></i> </a></td>
                                @endif
                                @if ($viaje->mar == 1)
                                <td ><a  class="btn btn-primary btn-sm"><i class="fa fa-check-square" aria-hidden="true"></i> </a></td>
                                @else
                                <td><a  class="btn btn-danger btn-sm"><i class="fa fa-window-close" aria-hidden="true"></i> </a></td>
                                @endif
                                @if ($viaje->mir == 1)
                                <td ><a  class="btn btn-primary btn-sm"><i class="fa fa-check-square" aria-hidden="true"></i> </a></td>
                                @else
                                <td><a  class="btn btn-danger btn-sm"><i class="fa fa-window-close" aria-hidden="true"></i> </a></td>
                                @endif
                                @if ($viaje->jue == 1)
                                <td ><a  class="btn btn-primary btn-sm"><i class="fa fa-check-square" aria-hidden="true"></i> </a></td>
                                @else
                                <td><a  class="btn btn-danger btn-sm"><i class="fa fa-window-close" aria-hidden="true"></i> </a></td>
                                @endif
                                @if ($viaje->vie == 1)
                                <td ><a  class="btn btn-primary btn-sm"><i class="fa fa-check-square" aria-hidden="true"></i> </a></td>
                                @else
                                <td><a  class="btn btn-danger btn-sm"><i class="fa fa-window-close" aria-hidden="true"></i> </a></td>
                                @endif
                                <td>{{$viaje->semana_id}}</td>
                                <td>{{$viaje->nombre_semana}}</td>
                                <td>{{$viaje->ruta_id}}</td>
                                <td with="10px"><a  class="btn btn-primary btn-sm" href="{{-- {{route('admin.viajes.edit', $viaje)}} --}}"> Editar</a></td>
                                <td with="10px">
                                    <form action="{{-- {{route('admin.viajes.destroy', $viaje)}} --}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            
                        </tbody> 
        
                    </table>
                </div>
                <div class="card-footer">
                    {{$viajes->links()}}{{--  para que se vea con los estilos de bootstrap hayq que hacer lo que esta el el controlador Posts-index --}}  
                </div>
            @else
                <div class="card-body">
                    <strong>No hay resultados</strong>
                </div>
            @endif
                
        </div>
</div>
 