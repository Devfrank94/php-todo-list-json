const {createApp} = Vue;

createApp({

  data(){
    return{

      errorMsg:''
    }
  },


methods:{

  // Funzione Rimuovi task

  // remtsk(index){
  //   if(this.tasks[index].check){
  //     this.tasks.splice(index,1)
  //     this.errorMsg = '';
  //   }else{
  //     this.errorMsg = 'La task può essere eliminata solo se completata'
  //   }
  // },


  // Funzione aggiungi Task

  // addTsk(){
  //   if(this.newTsk.length > 4){
  //     const newTsk = {
  //       text: this.newTsk,
  //       check: false
  //     }
  //     this.tasks.unshift(newTsk);
  //     this.newTsk = '';
  //   }else{
  //     this.errorMsg = 'Errore! Il testo deve contenere minimo 5 caratteri'
  //   }
  // },





},


}).mount("#app")