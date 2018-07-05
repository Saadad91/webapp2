<template>
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
                <h5 class="card-title">Listado</h5>
            </div>
            <div class="card-body p-0">
                <table class="table table-sm table-hover table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Email</th>
                            <th scope="col">Contraseña</th>
                            <th scope="col">Ops.</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="usuario in usuarios">
                            <td>{{usuario.name}}</td>
                            <td>{{usuario.email}}</td>
                            <td>{{usuario.password}}</td>
                            <td>
                            <button type="button" class="btn btn-danger btn-xs" disabled="disabled">Eliminar</button>
                            <button type="button" class="btn btn-primary btn-xs" disabled="disabled">Agregar</button>
                            <button type="button" class="btn btn-warning btn-xs" disabled="disabled">Editar</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name : 'Listar',
    
    data(){
        return {
            usuarios: []
        }
    },

    mounted() {
        const me = this;

        axios.get('/Usuarios')
            .then((response) => {
                me.usuarios = response.data.data;
            })
            .catch((error) => {
                console.log(error);
            });
    }
}
</script>
