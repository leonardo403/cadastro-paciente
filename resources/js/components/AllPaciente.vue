<template>
    <div>
        <h2 class="text-center">Lista Pacientes</h2>

        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Detail</th>
                <!-- <th>Actions</th> -->
            </tr>
            </thead>
            <tbody>
            <tr v-for="paciente in pacientes" :key="paciente.id">
                <td>{{ paciente.id }}</td>
                <td>{{ paciente.nome_paciente }}</td>
                <td>{{ paciente.nome_mae }}</td>
                <td>
                    <div class="btn-group" role="group">
                        <router-link :to="{name: 'edit', params: { id: paciente.id }}" class="btn btn-success">Edit</router-link>
                        <button class="btn btn-danger" @click="deletePaciente(paciente.id)">Delete</button>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                pacientes: []
            }
        },
        created() {
            this.axios
                .get('http://localhost:8000/api/pacientes')
                .then(response => {
                    this.pacientes = response.data;
                });
        },
        methods: {
            deletePaciente(id) {
                this.axios
                    .delete(`http://localhost:8000/api/pacientes/${id}`)
                    .then(response => {
                        let i = this.pacientes.map(data => data.id).indexOf(id);
                        this.pacientes.splice(i, 1)
                    });
            }
        }
    }
</script>
