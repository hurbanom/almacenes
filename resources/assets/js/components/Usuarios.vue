<template>

    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Nuevo Usuario</h3>
        </div>

        <form class="form" role="form" method="POST" action="/usuarios/save">

            <div class="box-body">

                <div class="row">

                    <div class="form-group col-md-5">
                        <label for="name" class="control-label">Nombre completo:</label>
                        <input id="name" type="text" class="form-control" name="name" value="" required autofocus style="text-transform:uppercase">

                    </div>

                    <div class="form-group col-md-5">

                        <label for="email" class="control-label">E-Mail:</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="glyphicon glyphicon-envelope"></i>
                            </div>
                            <input id="email" type="email" class="form-control" name="email" autocomplete="new-email" value="" required>
                        </div>
                    </div>

                    <div class="form-group col-md-2 checkbox" style="margin-top: 35px;">
                      <label>
                        <input type="checkbox" name="user_active" id="user_active" checked> Activo
                      </label>
                    </div>

                </div>

                <div class="row">

                    <div class="form-group col-md-3">
                        <label>Nextel:</label>

                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="glyphicon glyphicon-earphone"></i>
                            </div>
                            <input type="text" class="form-control" data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask="">
                        </div>
                    </div>

                    <div class="form-group col-md-3">
                        <label>Celular:</label>

                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="glyphicon glyphicon-phone"></i>
                            </div>
                            <input type="text" class="form-control" data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask="">
                        </div>
                    </div>

                    <div class="form-group col-md-3">
                        <label for="password" class="control-label">Contraseña:</label>
                        <input id="password" type="password" class="form-control" name="password" minlength="8" autocomplete="new-password" required>
                    </div>

                    <div class="form-group col-md-3">
                        <label for="password-confirm" class="ccontrol-label">Confirmar contraseña:</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" minlength="8" required>
                    </div>

                </div>

                <obrasusuarios></obrasusuarios>

            </div>

            <div class="box-footer" style="text-align: center">
                <button type="button" class="btn btn-primary" v-on:click='guardarRegistro'>
                    Guardar
                </button>
            </div>

        </form>
    </div>

</template>

<script>

import obrasusuarios from './ObrasUsuarios.vue';

export default {

    components: {
      obrasusuarios
    },

    data: function() {
        return {
            'name' : '',
            'email' : '',
            'nextel' : '',
            'celular' : '',
            'bloqueado' : '',
            'password' : '',
        }
    },
    mounted() {

    },
    methods: {

        uCase: function (value, target) {

            this[target.id] = value.toLowerCase();

        },

        guardarRegistro: function(event) {

            var component = this;

            this.$swal({
              title: "Guardando registro",
              text: "Espere por favor",
              imageUrl: "/images/loading.gif",
              showConfirmButton: false,
              allowEscapeKey: false
            });

            axios.post('/usuarios/save', {
                obras_asignadas : this.$children[0].obras_asignadas
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
