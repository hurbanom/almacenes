<template>
    <fieldset class="form-group">

        <legend><h4>Obras asignadas</h4></legend>

        <div class="row">
            <div class="form-group col-md-6">
                <select id="obras" style="width: 100%">
                    <option></option>
                </select>
            </div>
            <div class="form-group col-md-3">
                <select id="cargos" style="width: 100%">
                    <option></option>
                </select>
            </div>

            <div class="form-group col-md-1" style="padding-right: 0px !important; padding-left: 2px !important; width:7% !important" >
                <button v-on:click='agregar_obra' class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus-sign"></i></button>
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
            <tbody v-if="(obras_asignadas.length > 0)">
                <tr v-for="entry in obras_asignadas">
                    <td>
                        {{ entry.nombre_obra }}
                    </td>
                    <td>
                        {{ entry.nombre_cargo }}
                    </td>
                </tr>
            </tbody>
            <tbody v-else>
                <tr>
                    <td colspan="2">No se han agregado obras</td>
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
                    'name' : 'Nombre de la obra'
                },
                {
                    'name' : 'Cargo'
                }
            ],
            obras : [],
            cargos : [
                {'id' : 1, 'text' : 'Control de Obra'},
                {'id' : 2, 'text' : 'Gerente de Obra'},
                {'id' : 3, 'text' : 'Superintendente'},
                {'id' : 4, 'text' : 'Residente'},
                {'id' : 5, 'text' : 'Auxiliar'},
            ],
            obra : [],
            cargo : [],
            obras_asignadas : [],
        }

    },
    mounted() {

        var component = this;

        component.$swal({
            title: "Obteniendo datos...",
            text: "Espere por favor",
            imageUrl: "/images/loading.gif",
            showConfirmButton: false,
            allowEscapeKey: false
        });

        $('#cargos').select2({
            data: component.cargos,
            placeholder: 'Seleccione un cargo',
            language: "es",
            allowClear: true,
        }).on("change", function (e) {

            var option = $('#cargos').find(':selected')[0];
            component.cargo = [{
                'id' : option.value,
                'nombre' : option.text
            }];

         });

        axios.get('/obras')
        .then(function (response) {

            var data = response.data;

            $.each(data, function( index, value ) {
                component.obras.push({
                    'id' : value.id,
                    'text' : value.id_obra + ' - ' + value.nombre_obra
                })
            });

            $('#obras').select2({
                data: component.obras,
                placeholder: 'Seleccione una obra',
                language: "es",
                allowClear: true,
            }).on("change", function (e) {

                var option = $('#obras').find(':selected')[0];
                component.obra = [{
                    'id' : option.value,
                    'nombre' : option.text
                }];

             });

            component.$swal.close();

        })
        .catch(function (error) {

            component.$swal({
                type: 'error',
                title: 'Oops...',
                text: error,
            });

        });

    },
    methods: {

        agregar_obra: function(event) {

            var cargo = this.cargo;
            var obra = this.obra;

            if (cargo.length == 0 || obra.length == 0) {
                return
            }

            this.obras_asignadas.push({
                obra_id: obra[0].id,
                cargo_id: cargo[0].id,
                nombre_obra: obra[0].nombre,
                nombre_cargo: cargo[0].nombre
            });

            $('#obras').val(null).trigger('change');
            $('#cargos').val(null).trigger('change');
            this.obras = [];
            this.cargo = [];
        }
    }
}

</script>
