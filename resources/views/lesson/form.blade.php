
    
        <div class="form-group">
         <label for="fecha_leccion">fecha leccion</label>{{-- En este value se pone en old el nombbre de la casilla no el de la base de datos --}}
        <input type="date" class="form-control" name="fecha_leccion" value="{{isset($lesson->fecha_leccion)?$lesson->fecha_leccion:old('fecha_leccion')}}" id="fecha_leccion" >
        <br>
        </div>

        <div class="form-group">
        <label for="hora_inicio">hora inicio leccion</label>
        <input type="time" class="form-control" name="hora_inicio" value="{{isset($lesson->hora_inicio)?$lesson->hora_inicio:old('hora_inicio')}}" id="hora_inicio">
        <br>
        </div>
        <div class="form-group">
        <label for="hora_fin">hora fin leccion</label>
        <input type="time" class="form-control" name="hora_fin" value="{{isset($lesson->hora_fin)?$lesson->hora_fin:old('hora_fin')}}" id="hora_fin">
        <br>
        </div>

        <div class="form-group">
        <label for="id_instructor">identificacion del instructor</label>
        <input type="text" class="form-control" name="id_instructor" value="{{isset($lesson->id_instructor)?$lesson->id_instructor:old('id_instructor')}}" id="id_instructor">
        <br>
        </div>

        <div class="form-group">
        <label for="id_disciplina">identificacion de la disciplina</label>
        <input type="text" class="form-control" name="id_disciplina" value="{{isset($lesson->id_disciplina)?$lesson->id_disciplina:old('id_disciplina')}}" id="id_disciplina">
        <br>
        </div>

        <div class="form-group">
        <label for="id_salon">id del salon</label>
        <input type="text" class="form-control" name="id_salon" value="{{isset($lesson->id_salon)?$lesson->id_salon:old('id_salon')}}" id="id_salon">
        <br>
        </div>


        <input class="btn btn-success" type="submit" name="enviar"  value="enviar datos">
        <br>

        <a class="btn btn-primary" href="{{url("lesson/")}}">Regresar</a>
        <br>