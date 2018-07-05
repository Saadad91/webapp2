<template>
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Crear Fecha de Nacimiento</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form ref="form" role="form" @submit.prevent="submit">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese nombre" :value="formitems.nombre" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="yeasr">Año de Nacimiento</label>
                                <input type="text" class="form-control" id="yeasr" name="yeasr" placeholder="Ingrese el Año de Nacimiento" :value="formitems.yeasr" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="mes">Mes de Nacimiento<</label>
                                <input type="text" class="form-control" id="mes" name="email" placeholder="Ingrese el Mes de Nacimiento" :value="formitems.mes" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="telefono">Dia de Nacimiento</label>
                                <input type="text" class="form-control" id="dia" name="dia" placeholder="Ingrese el Dia de Nacimiento" :value="formitems.dia" required>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <div class="float-right">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Guardar</button>
                        <router-link to="/Edad" class="btn btn-danger"><i class="fa fa-times"></i> Cancelar</router-link>
                    </div>
                </div>
            </form>
        </div>
        <!-- /.card -->
    </div>
</template>

<script>
export default {
    name : 'Crear',

    data() {
        return {
            formitems : {
                nombre: null,
                years: null,
                mes: null,
                dia: null
            }
        }
    },

    methods : {
        submit(){
            const me = this;
            const form = me.$refs.form;

            console.log(formSerialize(form, {hash: true}));

            console.log('submiting form....');
        }
    }
}
</script>
