<template>
    <div class="box box-primary" v-if="vista === 'create'">
        <div class="box-header with-border">
            <h3 class="box-title">Nueva Obra</h3>
        </div>
        <form class="form" role="form" method="POST" action="/usuarios/save" >
            <div class="box-body">

                <fieldset class="form-group">
                    <legend><h4>Datos de la obra</h4></legend>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="nombre_obra" class="control-label">Nombre de la obra:</label>
                            <input id="nombre_obra" type="text" class="form-control" name="nombre_obra" v-model="nombre_obra" v-on:input="uCase($event.target.value, $event.target)" value="" autofocus maxlength="60" style="text-transform:uppercase">
                        </div>

                        <div class="form-group col-md-6">

                            <label>Id de la obra:</label>
                            <input type="text" class="form-control" name="id_obra" id="id_obra" v-model="id_obra" v-on:input="uCase($event.target.value, $event.target)" style="text-transform:uppercase">

                        </div>
                    </div>

                    <div class="row">

                        <div class="form-group col-md-3">
                            <label>Fecha inicio:</label>

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="glyphicon glyphicon-calendar"></i>
                                </div>
                                <input type="text" id="fecha_inicio" name="fecha_inicio" class="form-control">
                            </div>
                        </div>

                        <div class="form-group col-md-3">
                            <label>Fecha cierre:</label>

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="glyphicon glyphicon-calendar"></i>
                                </div>
                                <input type="text" id="fecha_cierre" name="fecha_cierre" class="form-control">
                            </div>
                        </div>

                        <div class="form-group col-md-6">

                            <label>Nombre del cliente:</label>
                            <input type="text" class="form-control" name="nombre_cliente" id="nombre_cliente" v-model="nombre_cliente" v-on:input="uCase($event.target.value, $event.target)" maxlength="30" style="text-transform:uppercase">

                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-md-4">

                            <label>Número de contrato ú Orden de compra:</label>
                            <input type="text" class="form-control" name="numero_contrato" id="numero_contrato" v-model="numero_contrato" v-on:input="uCase($event.target.value, $event.target)" style="text-transform:uppercase">

                        </div>

                    </div>

                </fieldset>

                <fieldset class="form-group">

                    <legend><h4>Ubicación física</h4></legend>

                    <div class="row">

                        <div class="form-group col-md-4">

                            <label>Calle:</label>
                            <input type="text" class="form-control" name="calle" id="calle" v-model="calle" maxlength="60" v-on:input="uCase($event.target.value, $event.target)" style="text-transform:uppercase">

                        </div>

                        <div class="form-group col-md-2">

                            <label>Número exterior:</label>
                            <input type="text" class="form-control" name="numero_exterior" id="numero_exterior" v-model="numero_exterior" v-on:input="uCase($event.target.value, $event.target)" maxlength="5" style="text-transform:uppercase">

                        </div>

                        <div class="form-group col-md-2">

                            <label>Número interior:</label>
                            <input type="text" class="form-control" name="numero_interior" id="numero_interior" v-model="numero_interior" v-on:input="uCase($event.target.value, $event.target)" maxlength="5" style="text-transform:uppercase">

                        </div>

                        <div class="form-group col-xs-4">

                            <label>Colonia:</label>
                            <input type="text" class="form-control" name="colonia" id="colonia" v-model="colonia" maxlength="50" v-on:input="uCase($event.target.value, $event.target)" style="text-transform:uppercase">

                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-xs-4">

                            <label>Estado:</label>
                            <select name="estado" id="estado" v-model="estado" style="width: 100%; height: 35px;">
                                <option v-for="estado in estados" v-bind:value="estado.estado">
                                    {{ estado.estado }}
                                </option>
                            </select>

                        </div>
                        <div class="form-group col-xs-4">

                            <label>Delegación o Municipio:</label>
                            <input type="text" class="form-control" name="delegacion_municipio" id="delegacion_municipio" v-model="delegacion_municipio" v-on:input="uCase($event.target.value, $event.target)" maxlength="50" style="text-transform:uppercase">

                        </div>
                        <div class="form-group col-xs-2">

                            <label>Codigo postal:</label>
                            <input type="text" class="form-control" name="codigo_postal" id="codigo_postal" v-model="codigo_postal" maxlength="5" v-on:input="uCase($event.target.value, $event.target)" style="text-transform:uppercase">

                        </div>
                    </div>

                    <div class="form-group">

                        <label>Referenias adicionales:</label>
                        <textarea class="form-control" rows="2" name="referencias_adicionales" id="referencias_adicionales" v-model="referencias_adicionales" v-on:input="uCase($event.target.value, $event.target)" maxlength="255" style="text-transform:uppercase"></textarea>

                    </div>

                </fieldset>

            </div>

            <div class="box-footer" style="text-align: center">
                <button type="button" v-on:click='guardarRegistro' class="btn btn-primary">
                    Guardar
                </button>
            </div>

        </form>
    </div>

</template>

<script>

export default {
    props: ['post_vista'],
    data: function() {
        return {
            'vista' : '',
            'nombre_obra' : '',
            'id_obra' : '',
            'fecha_inicio' : '',
            'fecha_cierre' : '',
            'nombre_cliente' : '',
            'numero_contrato' : '',
            'calle' : '',
            'numero_exterior' : '',
            'numero_interior' : '',
            'colonia' : '',
            'estado' : '',
            'delegacion_municipio' : '',
            'codigo_postal' : '',
            'referencias_adicionales' : '',
            'estados' : [
                { 'estado' : 'SELECCIONA' },
                { 'estado' : 'AGUASCALIENTES' },
                { 'estado' : 'BAJA CALIFORNIA' },
                { 'estado' : 'BAJA CALIFORNIA SUR' },
                { 'estado' : 'CAMPECHE' },
                { 'estado' : 'CHIAPAS' },
                { 'estado' : 'CHIHUAHUA' },
                { 'estado' : 'CIUDAD DE MÉXICO' },
                { 'estado' : 'COAHUILA' },
                { 'estado' : 'COLIMA' },
                { 'estado' : 'DURANGO' },
                { 'estado' : 'GUANAJUATO' },
                { 'estado' : 'GUERRERO' },
                { 'estado' : 'HIDALGO' },
                { 'estado' : 'JALISCO' },
                { 'estado' : 'MÉXICO' },
                { 'estado' : 'MICHOACÁN' },
                { 'estado' : 'MORELOS' },
                { 'estado' : 'NAYARIT' },
                { 'estado' : 'NUEVO LEÓN' },
                { 'estado' : 'OAXACA' },
                { 'estado' : 'PUEBLA' },
                { 'estado' : 'QUERÉTARO' },
                { 'estado' : 'QUINTANA ROO' },
                { 'estado' : 'SAN LUIS POTOSÍ' },
                { 'estado' : 'SINALOA' },
                { 'estado' : 'SONORA' },
                { 'estado' : 'TABASCO' },
                { 'estado' : 'TAMAULIPAS' },
                { 'estado' : 'TLAXCALA' },
                { 'estado' : 'VERACRUZ' },
                { 'estado' : 'YUCATÁN' },
                { 'estado' : 'ZACATECAS' },
            ]
        }
    },
    created: function () {
        var component = this;

        component.vista = component.post_vista;

    },
    mounted() {

        var component = this;

        $('#fecha_inicio').datepicker({
            autoclose: true,
            format: 'dd/M/yyyy',
            language: 'es',
        }).on('changeDate', function(e) {
            component.fecha_inicio = e.format('yyyy-mm-dd');
        });

        $('#fecha_cierre').datepicker({
            autoclose: true,
            format: 'dd/M/yyyy',
            startDate: 'today',
            language: 'es',
        }).on('changeDate', function(e) {
            component.fecha_cierre = e.format('yyyy-mm-dd');
        });

    },
    methods: {

        uCase: function (value, target) {

            this[target.id] = value.toLowerCase();

        },

        guardarRegistro: function(event) {

            var component = this;

            component.$swal({
                title: "Guardando registro",
                text: "Espere por favor",
                imageUrl: "/images/loading.gif",
                showConfirmButton: false,
                allowEscapeKey: false
            });

            axios.post('/obras/save', {
                'nombre_obra' : this.nombre_obra,
                'id_obra' : this.id_obra,
                'fecha_inicio' : this.fecha_inicio,
                'fecha_cierre' : this.fecha_cierre,
                'nombre_cliente' : this.nombre_cliente,
                'numero_contrato' : this.numero_contrato,
                'calle' : this.calle,
                'numero_exterior' : this.numero_exterior,
                'numero_interior' : this.numero_interior,
                'colonia' : this.colonia,
                'estado' : this.estado,
                'delegacion_municipio' : this.delegacion_municipio,
                'codigo_postal' : this.codigo_postal,
                'referencias_adicionales' : this.referencias_adicionales
            })
            .then(function (response) {

                component.$swal.close();

            })
            .catch(function (error) {

                component.$swal({
                    type: 'error',
                    title: 'Oops...',
                    text: error,
                });

            });

        }
    }
}

</script>
