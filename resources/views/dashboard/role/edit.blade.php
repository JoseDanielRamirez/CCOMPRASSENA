<x-app-layout>
    <x-slot name="header">
    </x-slot>
    
    <form action="{{url('dashboard/role/'.$role->id)}}" method="post">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Nombre de Rol:</label>
            <div>
                <input type="text" name="name" id="name" value="{{$role->name}}">
            </div>
        </div>
        <div>
            <label for="permissions">Permisos del rol</label>
        </div>
        <div>
            <table>
                <tbody>
                    @foreach ($permission as $id=>$permission)
                    <tr>
                        <td>
                            <input type="checkbox" name="permission[]" value="{{ $id }}"
                            {{$role->permissions->contains($id) ? 'checked' : ''}}>
                            {{$permission}}
                        </td>
                    </tr>
                        
                    @endforeach
                </tbody>
            </table>
            <div>
                <button type="submit"> Guardar</button>
                <a href="{{url('dashboard/role')}}"> Cancelar</a>
            </div>
        </div>
    </form>
    
</x-app-layout>
