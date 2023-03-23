<template>
    <div>
        <h3 class="text-center">Cadastrar Paciente</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="addPaciente">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" v-model="paciente.nome_paciente">
                    </div>
                    <div class="form-group">
                        <label>Detail</label>
                        <input type="text" class="form-control" v-model="paciente.nome_mae">
                    </div>
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
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
        methods: {
            addPaciente() {
                this.axios
                    .post('http://localhost:8000/api/paciente', this.paciente)
                    .then(response => (
                        this.$router.push({ name: 'home' })
                    ))
                    .catch(err => console.log(err))
                    .finally(() => this.loading = false)
            }
        }
    }
</script>
