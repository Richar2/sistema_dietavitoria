new Vue({
     el: '#crud',
     created:function() {
         this.getacompanhamento();
     },
     
     data:{
        acompanhamento:[]
    },
    methods:{
        getacompanhamento: function () {
            var urlacompanhamento ='dash/searchAluno/{id}/acompanhamento'
            axios.get(urlacompanhamento).then(response => {
               this.acompanhamento= response.data 
            });
        }
    }

});