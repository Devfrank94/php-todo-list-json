<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font-awesome icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- CDN VueJs -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <!-- Axios CDN -->
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

    <!-- stile -->
    <link rel="stylesheet" href="css/style.css">
    <title>PHP ToDo List JSON</title>
</head>
<body>
  

  <div id="app">
    
    <!-- <div class="logo">
      <img src="img/logo.png" alt="logo">
    </div>

    <div class="ins-data">
      <input v-model.trim="newTsk" @keyup.enter="addTsk" type="text" placeholder="Nuovo Promemoria">
      <button @click="addTsk">Aggiungi</button>

        <div class="mess-err">{{errorMsg}}</div>
      
    </div>

    <div class="container">

      <h2 v-if="tasks.length === 0">Non ci sono promemoria in lista &#128521;</h2>

      <ul v-else class="list">

        <li v-for="(task,index) in tasks" :class="{'check' : task.check}" @click="task.check = !task.check">

          <span>{{task.text}}</span>
          <i @click.stop="remtsk(index)" class="fa-solid fa-trash fa-beat"></i>

        </li>
        
      </ul>



    </div> -->





  </div>


  <script src="js/script.js"></script>
</body>
</html>