<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Casas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <a type="button" href="{{route('casas.create')}}" class="bg-indigo-500 px-12 py-2 rounded text-gray-200 font-semibold hover:bg-indigo-800 transition duration-200 each-in-out">Crear</a>
                <table class="table-fixed w-full">
                    <thead>
                        <tr class="bg-gray-800 text-white">
                        <th style="display: none;">ID</th>
                        <th class="border px-4 py-2">Nombre</th>
                        <th class="border px-4 py-2">Imagen</th>
                        <th class="border px-4 py-2">Descripcion</th>
                        <th class="border px-4 py-2">Precio</th>
                        <th class="border px-4 py-2">Acciones</th>

                    </tr>
                    </thead>
                    <tbody>
                        @foreach ( $casas as $casa )
                        <tr>
                            <td style="display: none;">{{$casa->id}}</td>
                            <td>{{$casa->nombre}}</td>
                            <td  class="border px-14 py-1">
                                <img src="../public/assents/img/{{$casa->imagen}}" width="60%">
                            </td>

                            <td>{{$casa->descripcion}}</td>
                            <td>{{$casa->precio}}</td>

                            <td class="border px-4 py-2">


                                <div class="flex justify-center rounded-lg text-lg" role="group">
                                    <!--boton editar -->
                                    <a href="{{ route('casas.edit', $casa->id)}}" class="rounded bg-gray-500 hover:bg-grsy-500 text-white font-bold py-2 px-4">Editar</a>
                                   <!--boton borrar -->
                                   <form action="{{ route('casas.destroy', $casa->id) }}" method="POST" class="formEliminar">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="rounded bg-pink-400 hover:bg-pink-500 text-white font-bold py-2 px-4">Borrar</button>
                                </form>
                                </div>
                            </td>

                        </tr>


                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</x-app-layout>
<script>
    (function () {
  'use strict'
  //debemos crear la clase formEliminar dentro del form del boton borrar
  //recordar que cada registro a eliminar esta contenido en un form
  var forms = document.querySelectorAll('.formEliminar')
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
          event.preventDefault()
          event.stopPropagation()
          Swal.fire({
                title: '¿Confirma la eliminación del registro?',
                icon: 'info',
                showCancelButton: true,
                confirmButtonColor: '#20c997',
                cancelButtonColor: '#6c757d',
                confirmButtonText: 'Confirmar'
            }).then((result) => {
                if (result.isConfirmed) {
                    this.submit();
                    Swal.fire('¡Eliminado!', 'El registro ha sido eliminado exitosamente.','success');
                }
            })
      }, false)
    })
})()
</script>
