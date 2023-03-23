<template>
    <div>
        <h3 class="text-center">Editar Paciente</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="updatePaciente">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" v-model="paciente.nome_paciente">
                    </div>
                    <div class="form-group">
                        <label>Detail</label>
                        <input type="text" class="form-control" v-model="paciente.nome_mae">
                    </div>
                    <button type="submit" class="btn btn-primary">Atualizar</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                paciente: {}
            }
        },
        created() {
            this.axios
                .get(`http://localhost:8000/api/paciente/${this.$route.params.id}`)
                .then((res) => {
                    this.paciente = res.data;
                });
        },
        methods: {
            updatePaciente() {
                this.axios
                    .patch(`http://localhost:8000/api/paciente/${this.$route.params.id}`, this.paciente)
                    .then((res) => {
                        this.$router.push({ name: 'home' });
                    });
            }
        }
    }
</script>
