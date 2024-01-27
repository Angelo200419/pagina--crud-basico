<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta charset="UTF-8" />
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/@mdi/font@5.x/css/materialdesignicons.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.0.2/dist/sweetalert2.min.css">  
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta charset="UTF-8" />
</head>
<body>
  <h1 class="h1">Inventario </h1>
  <div id="app">
    <v-app>
      <v-main>      
        <v-card class="mx-auto mt-5" max-width="1200">
        <a href="../bienvenido.php"> Regresar </a>
        <!-- Botón CREAR -->
        <v-btn rounded color="green accent-2" @click="formNuevo()">Crear</v-btn>    

        <!-- Tabla y formulario -->
        <v-simple-table class="mt-5">
            <template v-slot:default>
                <thead>
                    <tr class="light-blue darken-2">
                        <th class="white--text">ID</th>
                        <th class="white--text">DESCRIPCIÓN</th>
                        <th class="white--text">PRECIO</th>
                        <th class="white--text">STOCK</th>
                        <th class="white--text text-center">ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="articulo in articulos" :key="articulo.id">
                    <td>{{ articulo.id }}</td>
                    <td>{{ articulo.descripcion }}</td>
                    <td>{{ articulo.precio }}</td>
                    <td>{{ articulo.stock }}</td>
                    <td>
                        <v-btn class="teal accent-4" dark @click="formEditar(articulo.id, articulo.descripcion, articulo.precio, articulo.stock)">Editar</v-btn>  
                        <v-btn class="error" dark @click="borrar(articulo.id)">Borrar</v-btn>
                    </td>
                    </tr>
                </tbody>
            </template>
        </v-simple-table>
        </v-card>        

      <!-- Componente de Diálogo para CREAR y EDITAR -->
      <v-dialog v-model="dialog" max-width="500">        
        <v-card>
          <v-card-title class="blue-grey darken-1 white--text">Artículo</v-card-title>    
          <v-card-text>            
            <v-form>             
              <v-container>
                <v-row>
                  <input v-model="articulo.id" hidden></input>
                  <v-col cols="12" md="4">
                    <v-text-field v-model="articulo.descripcion" label="Descripción" solo required>{{articulo.descripcion}}</v-text-field>
                  </v-col>
                  <v-col cols="12" md="4">
                    <v-text-field v-model="articulo.precio" label="Precio" type="number" prefix="S/" solo required></v-text-field>
                  </v-col>
                  <v-col cols="12" md="4">
                    <v-text-field v-model="articulo.stock" label="Stock" type="number" solo required></v-text-field>
                  </v-col>
                </v-row>
              </v-container>            
          </v-card-text>
          <v-card-actions>
            <v-spacer></v-spacer>
            <v-btn @click="dialog=false">Cancelar</v-btn>
            <v-btn @click="guardar()" type="submit" color="indigo" dark>Guardar</v-btn>
          </v-card-actions>
          </v-form>
        </v-card>
      </v-dialog>

      </v-main>
    </v-app>
  </div>
    

  <script src="https://cdn.jsdelivr.net/npm/vue@2.x/dist/vue.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js" integrity="sha512-quHCp3WbBNkwLfYUMd+KwBAgpVukJu5MncuQaWXgCrfgcxCJAq/fo+oqrRKOj+UKEmyMCG3tb8RB63W+EmrOBg==" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.0.2/dist/sweetalert2.all.min.js"></script>

  <script>
  var url = "http://localhost/login-register/php/crud.php";
    new Vue({
      el: '#app',
      vuetify: new Vuetify(),
       data () {
        return {            
            articulos: [],
            dialog: false,
            operacion: '',
            
            articulo:{
                id: null,
                descripcion:'',
                precio:'',
                stock:''
            }          
        }
       },
       created(){       
            this.mostrar()
       },  
       methods:{          
            //MÉTODOS PARA EL CRUD
            mostrar:function(){
              axios.post(url,{opcion:1})
              .then(response =>{
                this.articulos = response.data;                   
              })
            },
            crear:function(){                
                axios.post(url, {opcion:2, descripcion:this.articulo.descripcion, precio:this.articulo.precio, stock:this.articulo.stock })
                .then(response =>{
                  this.mostrar();
                });   
                this.articulo.descripcion="";
                this.articulo.precio="";
                this.articulo.stock="";
            },  
            editar:function(id, descripcion, precio, stock){
              axios.post(url, {opcion:3, id:this.articulo.id, descripcion:this.articulo.descripcion, precio:this.articulo.precio, stock:this.articulo.stock})
                  .then(response =>{
                    this.mostrar();
              }); 
            },             
            borrar:function(id){
             Swal.fire({
                title: '¿Confirma eliminar el registro?',   
                confirmButtonText: `Confirmar`,                  
                showCancelButton: true,                          
              }).then((result) => {                
                if (result.isConfirmed) {      
                      axios.post(url, {opcion:4, id:id}).then(response =>{           
                          this.mostrar();
                       });      
                  Swal.fire('¡Eliminado!', '', 'success')
                } else if (result.isDenied) {                  
                }
              });              
            },

            //Botones y formularios
            guardar:function(){
              if(this.operacion=='crear'){
                this.crear();                
              }
              if(this.operacion=='editar'){ 
                this.editar();                           
              }
              this.dialog=false;                        
            }, 
            formNuevo:function () {              
              this.dialog=true;
              this.operacion='crear';
              this.articulo.descripcion='';                           
              this.articulo.precio='';
              this.articulo.stock='';
            },
            formEditar:function(id, descripcion, precio, stock){                              
              //capturamos los datos del registro seleccionado y los mostramos en el formulario
              this.articulo.id = id;
              this.articulo.descripcion = descripcion;                            
              this.articulo.precio = precio;
              this.articulo.stock = stock;                      
              this.dialog=true;                            
              this.operacion='editar';
            }
       }      
    });
  </script>
</body>
</html> 