<template>
<div class="col-12 col-md-8 offset-md-2">
    <div class="row">
        <button class="col btn btn-elegant botao-interacao" title="Curtir"
            @click="curtir(id)"
        >
            <span v-show="curtidas" :id="'curtidas-' + id">
                {{ curtidas }}
            </span>
            <i class="fab fa-pagelines"></i>
        </button>

        <a class="col btn btn-elegant botao-interacao" title="Comentários"
            :href="'/comentarios/' + id"
        >
            <span v-show="comentarios" :id="'comentarios-' + id">
                {{ comentarios }}
            </span>
            <i class="fas fa-signature"></i>
        </a>

        <button class="col btn btn-elegant botao-interacao" title="Compartilhar"
            @click="compartilhar(id)"
        >
            <span v-show="compartilhamentos" :id="'compartilhamentos-' + id">
                {{ compartilhamentos }}
            </span>
            <i class="fas fa-share-alt"></i>
        </button>
    </div>
</div>
</template>

<script>
export default {
    props: ['publicacao'],
    data () {
        return {
            id: this.publicacao.id,
            curtidas: this.publicacao.curtidas,
            comentarios: this.publicacao.comentarios,
            compartilhamentos: this.publicacao.compartilhamentos,
        }
    },
    methods: {
        curtir(id) {
            window.axios
                .get('/curtir/' + id)
                .then(() => {
                    this.curtidas += 1;
                })
        },
        compartilhar(id) {
            window.axios
                .get('/compartilhar/' + id)
                .then(() => {
                    this.compartilhamentos += 1;
                })
        }
    }
}
</script>

<style scoped>

</style>