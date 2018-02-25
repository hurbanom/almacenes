<template>

<form class="form" role="form" method="POST" action="/usuarios/save">

    <div class="box-body" id="app" >

        <input type="hidden" name="_token">
        <fieldset class="form-group">
            <legend><h4>Datos de la requisición</h4></legend>

            <div class="row">

                <div class="form-group col-md-2">
                    <label for="fecha_solicitud" class="control-label">Fecha:</label>
                    <input id="fecha_solicitud" type="text" class="form-control" name="fecha_solicitud" value="" v-model="fecha_solicitud" required autofocus maxlength="60" style="text-transform:uppercase">
                </div>

                <div class="form-group col-md-5">
                    <label for="id_obra" class="control-label">Id de la obra:</label>
                    <input id="id_obra" type="text" class="form-control" name="id_obra" value="" v-model="id_obra" required autofocus maxlength="60" style="text-transform:uppercase">
                </div>

                <div class="form-group col-md-4">
                    <label for="folio" class="control-label">Folio:</label>
                    <input id="folio" type="text" class="form-control" name="folio" value="" v-model="folio" required autofocus maxlength="60" style="text-transform:uppercase">
                </div>

            </div>

            <div class="row">

                <div class="form-group col-md-4">
                    <label for="nombre_obra" class="control-label">Nombre del solicitante:</label>
                    <input id="nombre_solicitante" type="text" class="form-control" name="nombre_solicitante" value="" v-model="nombre_solicitante" required autofocus maxlength="60" style="text-transform:uppercase">
                </div>

                <div class="form-group col-md-5">
                    <label for="nombre_obra" class="control-label">Nombre de la obra:</label>
                    <input id="nombre_obra" type="text" class="form-control" name="nombre_obra" value="" v-model="nombre_obra" required autofocus maxlength="60" style="text-transform:uppercase">
                </div>

                <div class="form-group col-md-3">
                    <label for="fecha_entrega" class="control-label">Fecha requerida de entrega:</label>
                    <input id="fecha_entrega" type="text" class="form-control" name="fecha_entrega" value="" v-model="fecha_entrega" required autofocus maxlength="60" style="text-transform:uppercase; width: 60%;">
                </div>

            </div>

            <div class="row">
                <div class="form-group col-md-4">
                    <label for="categoria" class="control-label">Categoría:</label>
                    <input id="categoria" type="text" class="form-control" name="categoria" value="" v-model="categoria" required autofocus maxlength="60" style="text-transform:uppercase; width: 60%;">
                </div>
            </div>

        </fieldset>

        <articulosrequisicion></articulosrequisicion>

        <div class="row">
            <div class="form-group col-md-12">
                <label for="categoria" class="control-label">Observaciones:</label>
                <textarea class="form-control" rows="2" v-model="observaciones"></textarea>
            </div>
        </div>


    </div>

    <div class="box-footer" style="text-align:center">
        <button type="button" class="btn btn-primary">
            Guardar
        </button>
    </div>

</form>

</template>

<script>

import articulosrequisicion from './ArticulosRequisicion.vue';

export default {
  components: {
    articulosrequisicion
  },

  data: function() {
    return {
        'fecha_solicitud' : '',
        'nombre_solicitante' : '',
        'id_obra' : '',
        'nombre_obra' : '',
        'folio' : '',
        'fecha_entrega' : '',
        'categoria' : '',
        'observaciones' : '',
    }
  },
  mounted() {
      $('#obras_asignadas').select2({
          language: "es",
          placeholder: "Selecciona una Obra",
          allowClear: true,
      });

  },
  methods: {

  }
}

</script>
