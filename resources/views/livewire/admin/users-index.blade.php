<div>
   <div class="card">
       <div class="card-header">
        <input wire:model="search" class="form-control" placeholder="insegrese el nombre o correo de un usuario">
       </div>

       @if ($users->count())
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Actions</th>
                        </tr>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)  
                            <tr>
                                <td>{{$user->id}} </td>
                                <td>{{$user->name}} </td>
                                <td>{{$user->email}} </td>
                                <td widh="10px">
                                    <a class="btn btn-primary" href="{{route('admin.users.edit', $user) }}">Editar</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                {{ $users->links() }}
            </div>
       @else
            <div class="card-body">
                <p>No hay registros</p>
            </div>
       @endif

      
   </div>
</div>
