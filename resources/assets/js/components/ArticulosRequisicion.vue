<template>
    <fieldset class="form-group">

        <legend><h4>Articulos requeridos</h4></legend>

        <div class="row">
            <div class="form-group col-md-3" style="padding-right: 0px !important; padding-left: 15px !important">
                <input id="familia" type="text" class="form-control" name="familia" value="" v-model="familia" placeholder="Familia" required autofocus maxlength="60" style="text-transform:uppercase">
            </div>
            <div class="form-group col-md-3" style="padding-right: 0px !important; padding-left: 2px !important">
                <input id="descripcion" type="text" class="form-control" name="descripcion" value="" v-model="descripcion" placeholder="Descripción" required autofocus maxlength="60" style="text-transform:uppercase">
            </div>
            <div class="form-group col-md-3" style="padding-right: 0px !important; padding-left: 2px !important">
                <input id="nota_adicional" type="text" class="form-control" name="nota_adicional" value="" v-model="nota_adicional" placeholder="Nota adicional" required autofocus maxlength="60" style="text-transform:uppercase">
            </div>
            <div class="form-group col-md-1" style="padding-right: 0px !important; padding-left: 2px !important">
                <input id="nota_adicional" type="text" class="form-control" name="unidad" value="" v-model="unidad" placeholder="Unidad" required autofocus maxlength="60" style="text-transform:uppercase">
            </div>
            <div class="form-group col-md-1" style="padding-right: 0px !important; padding-left: 2px !important; width:9% !important">
                <input id="nota_adicional" type="text" class="form-control" name="cantidad" value="" v-model="cantidad" placeholder="Cantidad" required autofocus maxlength="60" style="text-transform:uppercase">
            </div>
            <div class="form-group col-md-1" style="padding-right: 0px !important; padding-left: 2px !important; width:7% !important" >
                <button v-on:click='agregar_articulo' class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus-sign"></i></button>
            </div>
        </div>

        <table class="table table-bordered">
          <thead>
            <tr>
              <th v-for="entry in columnas">
                {{ entry.name }}
              </th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="entry in articulos">
                <td> {{ entry.no }} </td>
                <td> {{ entry.familia }} </td>
                <td> {{ entry.descripcion }} </td>
                <td> {{ entry.nota_adicional }} </td>
                <td> {{ entry.unidad }} </td>
                <td> {{ entry.cantidad }} </td>
            </tr>
          </tbody>
        </table>

    </fieldset>
</template>
<script>

export default {

  data: function() {

    return {
        columnas : [
            {
                'name' : 'No.'
            },
            {
                'name' : 'Familia'
            },
            {
                'name' : 'Descripción'
            },
            {
                'name' : 'Nota adicional'
            },
            {
                'name' : 'Unidad'
            },
            {
                'name' : 'Cantidad'
            }

        ],

        articulos : [],
        familia : '',
        descripcion : '',
        nota_adicional : '',
        unidad : '',
        cantidad : ''
    }

  },
  mounted() {


  },
  methods: {
      agregar_articulo: function(event) {

          var familia = this.familia && this.familia.trim();
          var descripcion = this.descripcion && this.descripcion.trim();
          var nota_adicional = this. nota_adicional && this.nota_adicional.trim();
          var unidad = this.unidad && this.unidad.trim();
          var cantidad = this.cantidad && this.cantidad.trim();

          if (!familia && !descripcion && !nota_adicional && !unidad && !cantidad) {
              return
          }

          this.articulos.push({
              no: this.articulos.length + 1,
              familia: familia.toUpperCase(),
              descripcion: descripcion.toUpperCase(),
              nota_adicional: nota_adicional.toUpperCase(),
              unidad: unidad.toUpperCase(),
              cantidad: cantidad.toUpperCase(),
          })

      }
  }
}

</script>
