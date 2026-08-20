<template>
<div class="modal-overlay" v-if="modalVision">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="modal-head">
                    <button @click="close_modal"><b>X</b></button>
                </div>
            </div>
            <div class="col-md-12">
                <iframe :src="'https://web-site.tech'+this.$parent.modalUrl" class="modal-content"></iframe>
            </div>
        </div>
    </div>
</div>
</template>
<script>
import {defineComponent} from "vue";

export default defineComponent({
    data(){
        return {

        }
    },
    props: {
        modalVision:{
            type:Boolean,
            required: true
        }
    },
    components: {},
    mounted() {

    },
    methods:{
        close_modal(){
            this.$parent.modalVision = false
            this.$parent.modalUrl = ''
        }
    }
})
</script>
<style scoped>

 .modal-overlay {
     position: fixed; top: 0; left: 0; width: 100vw; height: 100vh;
     background: rgba(0,0,0,0.5); display: flex; align-items: center; justify-content: center;
     z-index: 9999;
 }
.modal-content {
    top: 0;
    left: 0;
    width: 100vw;
    height: 100vh;
}
.modal-head{
    padding: 10px;
    font-size: 30px;
    margin-right: 20px;
    right: 0;
    position: absolute;
    z-index: 100;
}
</style>
