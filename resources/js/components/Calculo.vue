<template>
    
</template>

<script>
       import axios from 'axios'
    export default{
      data(){
          return{
              dados_aluno:[],
          }

    },      
    created:function(){
        this.getAluno();
    },
    methods: {
        getAluno:function () {
            var urlAluno= 'aluno';
            axios.get(urlAluno).then(response =>{
                this.dados_aluno = response.data
            });
        }
      } 
   } 
    
</script>
