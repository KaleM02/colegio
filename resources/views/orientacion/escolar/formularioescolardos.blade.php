@extends('layout.panel')

@section('content')

<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h1 class="mb-0">Paso-2</h1>
            </div>
            <div class="col text-right">
                <a  href="{{route('escolar.edit', ['escolar' => $escolar->id])}}" class="btn btn-lg btn-success">
                    <i class="fas fa-angle-left"></i>
                    Regresar</a>
            </div>
        </div>
    </div>

    <div class="card-body">
        @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
        @endif
        <!-- inicio formulario -->

        <form class="row g-3 mt-3" action="{{route('escolar.updatedos', $alumnos->id) }}" method="POST">
            @csrf
            @method('PUT')

            <h2 class="col-12 mt-3">III. Datos familiares:</h2>


            <!-- padre -->
            <div class="col-6 mt-3">
                <label><b>Nombre del padre:</b></label> <input type="text" class="form-control" value="{{$padres->primernombre}}" readonly> </input>
            </div>

            <div class="col-6 mt-3">
                <label for="nidentidadpadre">Número de identidad:</label>
                <input type="text" class="form-control" value="{{$padres->numerodeidentidad}}" readonly> </input>
            </div>

            <div class="col-6 mt-3">
                <label for="nacimientopadre">Fecha de nacimiento:</label>
                <input type="date" id="nacimientopadre" name="nacimientopadre" class="form-control" value="{{old('nacimientopadre', $escolar->nacimientopadre)}}"></input>
                <div class="valid-feedback"></div>
            </div>

            <div class="col-6 mt-3">
                <label for="edadpadre">Edad cumplida:</label>
                <input type="text" id="edadpadre" name="edadpadre" class="form-control" value="{{old('edadpadre', $escolar->edadpadre)}}" placeholder="Ingrese la edad" maxlength="3"></input>
                <div class="valid-feedback"></div>
            </div>

            <div class="col-6 mt-3">
                <label for="ncelularpadre">Número de celular:</label>
                <input type="text" class="form-control" value="{{$padres->telefonopersonal}}" readonly> </input>
                <div class="valid-feedback"></div>
            </div>

            <div class="col-6 mt-3">
                <label for="nestudiopadre">Nivel de estudio:</label>
                <select type="text" id="nestudiopadre" name="nestudiopadre" class="form-control">
                    <option value="">Elegir</option>
                    <option @if(old('nestudiopadre')=='Primaria' || (isset($escolar->nestudiopadre)?$escolar->nestudiopadre:'') == 'Primaria')
                        selected
                        @else

                        @endif value="Primaria">Primaria</option>
                    <option @if(old('nestudiopadre')=='Media' || (isset($escolar->nestudiopadre)?$escolar->nestudiopadre:'') == 'Media')
                        selected
                        @else

                        @endif value="Media">Media</option>
                    <option @if(old('nestudiopadre')=='Superior' || (isset($escolar->nestudiopadre)?$escolar->nestudiopadre:'') == 'Superior')
                        selected
                        @else

                        @endif value="Superior">Superior</option>
                </select>
                <div class="valid-feedback"></div>
            </div>

            <div class="col-6 mt-3">
                <label for="profesionpadre">Profesión:</label>
                <input type="text" id="profesionpadre" name="profesionpadre" class="form-control" value="{{old('profesionpadre', $escolar->profesionpadre)}}" placeholder="Ingrese la profesión"></input>
                <div class="valid-feedback"></div>
            </div>

            <div class="col-6 mt-3">
                <label for="ocupacionpadre">Ocupación actual:</label>
                <input type="text" id="ocupacionpadre" name="ocupacionpadre" class="form-control" value="{{old('ocupacionpadre', $escolar->ocupacionpadre)}}" placeholder="Ingrese la ocupación"></input>
                <div class="valid-feedback"></div>
            </div>

            <div class="col-6 mt-3">
                <label for="teltrabajopadre">Teléfono del trabajo:</label>
                <input type="text" class="form-control" value="{{$padres->telefonooficina}}" readonly> </input>
            </div>

            <div class="col-12 mt-3">
            </div>

            <!-- madre -->

            <div class="col-6 mt-3">
                <label style="font-weight: bold" for="nombremadre">Nombre de la madre:</label>
                <input type="text" id="nombremadre" name="nombremadre" class="form-control" value="{{old('nombremadre', $escolar->nombremadre)}}" placeholder="Ingrese nombre completo"></input>
                <div class="valid-feedback"></div>
            </div>

            <div class="col-6 mt-3">
                <label for="nidentidadmadre">Número de identidad:</label>
                <input type="text" id="nidentidadmadre" name="nidentidadmadre" class="form-control" value="{{old('nidentidadmadre', $escolar->nidentidadmadre)}}" placeholder="Ingrese el número de identidad" maxlength="13"></input>
                <div class="valid-feedback"></div>
            </div>

            <div class="col-6 mt-3">
                <label for="nacimientomadre">Fecha de nacimiento:</label>
                <input type="date" id="nacimientomadre" name="nacimientomadre" class="form-control" value="{{old('nacimientomadre', $escolar->nacimientomadre)}}"></input>
                <div class="valid-feedback"></div>
            </div>

            <div class="col-6 mt-3">
                <label for="edadmadre">Edad cumplida:</label>
                <input type="text" id="edadmadre" name="edadmadre" class="form-control" value="{{old('edadmadre', $escolar->edadmadre)}}" placeholder="Ingrese la edad" maxlength="3"></input>
                <div class="valid-feedback"></div>
            </div>

            <div class="col-6 mt-3">
                <label for="ncelularmadre">Número de celular:</label>
                <input type="text" id="ncelularmadre" name="ncelularmadre" class="form-control" value="{{old('ncelularmadre', $escolar->ncelularmadre)}}" placeholder="Ingrese el número de celular" maxlength="8"></input>
                <div class="valid-feedback"></div>
            </div>

            <div class="col-6 mt-3">
                <label for="nestudiomadre">Nivel de estudio:</label>
                <select type="text" id="nestudiomadre" name="nestudiomadre" class="form-control">
                    <option value="">Elegir</option>
                    <option @if(old('nestudiomadre')=='Primaria' || (isset($escolar->nestudiomadre)?$escolar->nestudiomadre:'') == 'Primaria')
                        selected
                        @else

                        @endif value="Primaria">Primaria</option>
                    <option @if(old('nestudiomadre')=='Media' || (isset($escolar->nestudiomadre)?$escolar->nestudiomadre:'') == 'Media')
                        selected
                        @else

                        @endif value="Media">Media</option>
                    <option @if(old('nestudiomadre')=='Superior' || (isset($escolar->nestudiomadre)?$escolar->nestudiomadre:'') == 'Superior')
                        selected
                        @else

                        @endif value="Superior">Superior</option>
                </select>
                <div class="valid-feedback"></div>
            </div>

            <div class="col-6 mt-3">
                <label for="profesionmadre">Profesión:</label>
                <input type="text" id="nestudiomadre" name="profesionmadre" class="form-control" value="{{old('profesionmadre', $escolar->profesionmadre)}}" placeholder="Ingrese la profesión"></input>
                <div class="valid-feedback"></div>
            </div>

            <div class="col-6 mt-3">
                <label for="ocupacionmadre">Ocupación actual:</label>
                <input type="text" id="ocupacionmadre" name="ocupacionmadre" class="form-control" value="{{old('ocupacionmadre', $escolar->ocupacionmadre)}}" placeholder="Ingrese la ocupación"></input>
                <div class="valid-feedback"></div>
            </div>

            <div class="col-6 mt-3">
                <label for="teltrabajomadre">Teléfono del trabajo:</label>
                <input type="text" id="teltrabajomadre" name="teltrabajomadre" class="form-control" value="{{old('teltrabajomadre', $escolar->teltrabajomadre)}}" placeholder="Ingrese el teléfono de trabajo" maxlength="8"></input>
                <div class="valid-feedback"></div>
            </div>

            <div class="col-12 mt-3">
            </div>

            <!-- encargado -->
            <div class="col-12 mt-3">
                <label style="font-weight: bold">Llenar solo en caso de vivir con un encargado:</label>
            </div>

            <div class="col-6 mt-3">
                <label style="font-weight: bold" for="nombreencargado">Nombre del encargado(a):</label>
                <input type="text" id="nombreencargado" name="nombreencargado" class="form-control" value="{{old('nombreencargado', $escolar->nombreencargado)}}" placeholder="Ingrese nombre completo"></input>
                <div class="valid-feedback"></div>
            </div>

            <div class="col-6 mt-3">
                <label for="nidentidadencargado">Número de identidad:</label>
                <input type="text" id="nidentidadencargado" name="nidentidadencargado" class="form-control" value="{{old('nidentidadencargado', $escolar->nidentidadencargado)}}" placeholder="Ingrese el número de identidad" maxlength="13"></input>
                <div class="valid-feedback"></div>
            </div>

            <div class="col-6 mt-3">
                <label for="nacimientoencargado">Fecha de nacimiento:</label>
                <input type="date" id="nacimientoencargado" name="nacimientoencargado" class="form-control" value="{{old('nacimientoencargado', $escolar->nacimientoencargado)}}"></input>
                <div class="valid-feedback"></div>
            </div>

            <div class="col-6 mt-3">
                <label for="edadencargado">Edad cumplida:</label>
                <input type="text" id="edadencargado" name="edadencargado" class="form-control" value="{{old('edadencargado', $escolar->edadencargado)}}" placeholder="Ingrese la edad" maxlength="3"></input>
                <div class="valid-feedback"></div>
            </div>

            <div class="col-6 mt-3">
                <label for="ncelularencargado">Número de celular:</label>
                <input type="text" id="ncelularencargado" name="ncelularencargado" class="form-control" value="{{old('ncelularencargado', $escolar->ncelularencargado)}}" placeholder="Ingrese el número de celular" maxlength="8"></input>
                <div class="valid-feedback"></div>
            </div>

            <div class="col-6 mt-3">
                <label for="nestudioencargado">Nivel de estudio:</label>
                <select type="text" id="nestudioencargado" name="nestudioencargado" class="form-control">
                    <option value="">Elegir</option>
                    <option @if(old('nestudioencargado')=='Primaria' || (isset($escolar->nestudioencargado)?$escolar->nestudioencargado:'') == 'Primaria')
                        selected
                        @else

                        @endif value="Primaria">Primaria</option>
                    <option @if(old('nestudioencargado')=='Media' || (isset($escolar->nestudioencargado)?$escolar->nestudioencargado:'') == 'Media')
                        selected
                        @else

                        @endif value="Media">Media</option>
                    <option @if(old('nestudioencargado')=='Superior' || (isset($escolar->nestudioencargado)?$escolar->nestudioencargado:'') == 'Superior')
                        selected
                        @else

                        @endif value="Superior">Superior</option>
                </select>
                <div class="valid-feedback"></div>
            </div>

            <div class="col-6 mt-3">
                <label for="profesionencargado">Profesión:</label>
                <input type="text" id="profesionencargado" name="profesionencargado" class="form-control" value="{{old('profesionencargado', $escolar->profesionencargado)}}" placeholder="Ingrese la profesión"></input>
                <div class="valid-feedback"></div>
            </div>

            <div class="col-6 mt-3">
                <label for="ocupacionencargado">Ocupación actual:</label>
                <input type="text" id="ocupacionencargado" name="ocupacionencargado" class="form-control" value="{{old('ocupacionencargado', $escolar->ocupacionencargado)}}" placeholder="Ingrese la ocupación"></input>
                <div class="valid-feedback"></div>
            </div>

            <div class="col-6 mt-3">
                <label for="teltrabajoencargado">Teléfono del trabajo:</label>
                <input type="text" id="teltrabajoencargado" name="teltrabajoencargado" class="form-control" value="{{old('teltrabajoencargado', $escolar->teltrabajoencargado)}}" placeholder="Ingrese el teléfono de trabajo" maxlength="8"></input>
                <div class="valid-feedback"></div>
            </div>

            <div class="col-12 mt-3">
            </div>

            <!-- otros datos -->

            <div class="col-6 mt-3">
                <label style="font-weight: bold" for="vivescon">Vives con:</label>
                <select type="text" id="vivescon" name="vivescon" class="form-control">
                    <option value="">Elegir</option>
                    <option @if(old('vivescon')=='Ambos padres' || (isset($escolar->vivescon)?$escolar->vivescon:'') == 'Ambos padres')
                        selected
                        @else

                        @endif value="Ambos padres">Ambos padres</option>
                    <option @if(old('vivescon')=='Solo con la madre' || (isset($escolar->vivescon)?$escolar->vivescon:'') == 'Solo con la madre')
                        selected
                        @else

                        @endif value="Solo con la madre">Solo con la madre</option>
                    <option @if(old('vivescon')=='Solo con el padre' || (isset($escolar->vivescon)?$escolar->vivescon:'') == 'Solo con el padre')
                        selected
                        @else

                        @endif value="Solo con el padre">Solo con el padre</option>
                    <option @if(old('vivescon')=='Otros' || (isset($escolar->vivescon)?$escolar->vivescon:'') == 'Otros')
                        selected
                        @else

                        @endif value="Otros">Otros</option>
                </select>
                <div class="valid-feedback"></div>
            </div>

            <div class="col-6 mt-3">
                <label for="especifiquevives">Especifique con quien vive:</label>
                <input type="text" id="especifiquevives" name="especifiquevives" class="form-control" value="{{old('especifiquevives', $escolar->especifiquevives)}}" placeholder="Especifique"></input>
                <div class="valid-feedback"></div>
            </div>

            <div class="col-6 mt-3">
                <label for="motivo">Motivo:</label>
                <input type="text" id="motivo" name="motivo" class="form-control" value="{{old('motivo', $escolar->motivo)}}" placeholder="Ingrese el motivo"></input>
                <div class="valid-feedback"></div>
            </div>

            <div class="col-12 mt-3">
                <label style="font-weight: bold">Número de hermanos:</label>
            </div>

            <div class="col-6 mt-3">
                <label for="nmujeres">Mujeres:</label>
                <input type="text" id="nmujeres" name="nmujeres" class="form-control" value="{{old('nmujeres', $escolar->nmujeres)}}" placeholder="#" maxlength="2"></input>
                <div class="valid-feedback"></div>
            </div>

            <div class="col-6 mt-3">
                <label for="nhombres">Hombres:</label>
                <input type="text" id="nhombres" name="nhombres" class="form-control" value="{{old('nhombres', $escolar->nhombres)}}" placeholder="#" maxlength="2"></input>
                <div class="valid-feedback"></div>
            </div>

            <div class="col-6 mt-3">
                <label for="lugarocupado">Lugar que ocupa entre ellos:</label>
                <input type="text" id="lugarocupado" name="lugarocupado" class="form-control" value="{{old('lugarocupado', $escolar->lugarocupado)}}" placeholder="Ingrese el lugar que ocupa"></input>
                <div class="valid-feedback"></div>
            </div>

            <div class="col-12 mt-3">
            </div>

            <label class="col-6 mt-3">
                <input type="checkbox" name="checkpadrastro" value="1" @if(old('checkpadrastro')=='1' || (isset($escolar->checkpadrastro) ? $escolar->checkpadrastro : '') == '1')
                checked
                @endif> ¿Tiene padrastro?
            </label>
            <label class="col-6 mt-3">
                <input type="checkbox" name="checkmadrastra" value="1" @if(old('checkmadrastra')=='1' || (isset($escolar->checkmadrastra) ? $escolar->checkmadrastra : '') == '1')
                checked
                @endif> ¿Tiene madrastra?
            </label>

            <div class="col-12 mt-3">
            </div>

            <div class="col-6 mt-3">
                <label for="otrapersona">Otra persona que vive en el hogar:</label>
                <input type="text" id="otrapersona" name="otrapersona" class="form-control" value="{{old('otrapersona', $escolar->otrapersona)}}" placeholder="Ingrese quien es"></input>
                <div class="valid-feedback"></div>
            </div>

            <div class="col-12 mt-3">
            </div>


            <div class="col-3 mt-3">
                <button type="submit" class="btn btn-primary" id="guardarButton">Guardar y seguir</button>
                <!-- <a class="btn btn-success" href="{{ route('escolar.edittres', ['escolar' => $escolar->id])  }}">Siguiente</a> -->
                <script>
                    document.getElementById("guardarButton").addEventListener("click", function() {
                        window.location.href = "{{ route('escolar.edittres', ['escolar' => $escolar->id])}}" ;
                    });
                </script>
            </div>
        </form>
    </div>
</div>
@endSection