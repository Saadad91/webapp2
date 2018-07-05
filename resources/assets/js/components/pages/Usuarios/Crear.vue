<template>
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Crear Usuario</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form ref="form" role="form" @submit.prevent="submit">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Nombre</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Ingrese su Usuario" :value="formitems.name" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" name="email" placeholder="Ingrese Email" :value="formitems.email" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="password">Contraseña</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Ingrese Contraseña" :value="formitems.password" required>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <div class="float-right">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Guardar</button>
                        <router-link to="/Usuarios" class="btn btn-danger"><i class="fa fa-times"></i> Cancelar</router-link>
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
                name: null,
                email: null,
                password: null,
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
