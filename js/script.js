const {createApp} = Vue;

createApp({

  data(){
    return{
      apiUrl: 'server.php',
      listTasks: [],
      errorMsg:'',
      newTask:''
    }
  },


methods:{

  // 
  getApi(){
    axios.get(this.apiUrl)
    .then(result => {
      this.listTasks = result.data;
      console.log(result.data);
    })
  },

  // Funzione Rimuovi task

  remtsk(index){
    // Creo oggetto formdata
    const data = new FormData()
    // aggiungo variabile all'oggetto
    data.append('text', this.newTask);
    data.append('check', false);
    // chiamata axios
    axios.post(this.apiUrl, data)
    .then(result => {
      this.newTask = '';
      this.listTasks = result.data;
      console.log(this.listTasks);
    })
  },


  // Funzione aggiungi Task

  addTsk(){
    // Creo oggetto formdata
    const data = new FormData()
    // aggiungo variabile all'oggetto
    data.append('text', this.newTask);
    data.append('check', false);
    // chiamata axios
    axios.post(this.apiUrl, data)
    .then(result => {
      this.newTask = '';
      this.listTasks = result.data;
      console.log(this.listTasks);
    })
  },

},

mounted(){
  this.getApi();
}


}).mount("#app")