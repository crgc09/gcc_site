<template>
  <div id="Universidad">
    <div class="epc_sistemas">
      <div class="epc_sistema" v-for="(item, key) in entSys" @click="openDialog(item.id_sis)"> 
        <img :src="item.img" class="isistema" alt="">
        <span id="h4">
          <strong>Institución:</strong> <span>{{item.empresa}}</span>
        </span>
        <br>
        <span id="h4">
          <strong>Sistema:</strong> {{item.sistema}}
        </span>
      </div>
    </div>
    <!--MODAL DEL SISTEMA-->
      <v-dialog v-model="duni" persistent dark>
        <v-card>
          <v-card-title class="headline">
            <span class="title_dia">{{infoSys[0].sistema}}</span>
          </v-card-title>
          <v-card-text>
            <v-row align="center">
              <v-item-group v-model="window" class="shrink" mandatory tag="v-flex">
                <v-item v-for="n in length" :key="n" v-slot:default="{ active, toggle }">
                  <div>
                    <v-btn icon :input-value="active" @click="toggle">
                      <v-icon>mdi-record</v-icon>
                    </v-btn>
                  </div>
                </v-item>
              </v-item-group>
              <v-col>
                <v-window v-model="window">
                  <!--TECNOLOGIA-->
                    <v-window-item>
                      <v-card flat>
                        <v-card-text>
                          <div class="cont_dia">
                            <div class="info_dia">
                              <v-row class="mb-4" align="center">
                                <span class="subtitle_dia">Tecnología</span>
                                <v-spacer></v-spacer>
                              </v-row>
                              <div>
                                <h4 id="h4">Frontend</h4>
                                <div class="cinfo">
                                  <p>{{infoSys[0].frontend}}</p>
                                </div>
                                <h4 id="h4">Backend</h4>
                                <div class="cinfo">
                                  <p>{{infoSys[0].backend}}</p>
                                </div>
                                <h4 id="h4">Base de datos</h4>
                                <div class="cinfo">
                                  <p>{{infoSys[0].base}}</p>
                                </div>
                              </div>
                            </div>
                            <div class="img_dia">
                              <img class="ip_dia" :src="infoSys[0].url_img" alt="">
                            </div>
                          </div>
                        </v-card-text>
                      </v-card>
                    </v-window-item>
                  <!--FICHA-->
                    <v-window-item>
                      <v-card flat>
                        <v-card-text>
                          <div class="contu_dia">
                            <div class="infoup_dia">
                              <v-row class="mb-4" align="center">
                                <span class="subtitle_dia">Datos del proyecto</span>
                                <v-spacer></v-spacer>
                              </v-row>
                              <div>
                                <h4 id="h4">Responsabilidades</h4>
                                <div class="cinfo" v-html="infoSys[0].responsabilidad"></div>
                                <h4 id="h4">Módulos o tareas desarrolladas</h4>
                                <div class="cinfo" v-html="infoSys[0].tareas"></div>
                                <h4 id="h4">Tiempo de participación</h4>
                                <div class="cinfo" v-html="infoSys[0].tiempo"></div>
                              </div>
                            </div>
                            <div class="infous_dia">
                              <v-row class="mb-4" align="center">
                                <span class="subtitle_dia">Datos del sistema</span>
                                <v-spacer></v-spacer>
                              </v-row>
                              <div>
                                <h4 id="h4">Fecha de desarrollo</h4>
                                <div class="cinfo" v-html="infoSys[0].inicio"></div>
                                <h4 id="h4">Dirección</h4>
                                <div class="cinfo" >
                                  <p>
                                    <a id="link_dia" class="link_dia_max" :href="infoSys[0].direccion">{{infoSys[0].direccion}}</a>
                                    <a id="link_dia" class="link_dia_min" :href="infoSys[0].direccion">AQUÍ</a>
                                  </p>
                                </div>
                                <h4 id="h4">Descripción</h4>
                                <div class="cinfo" v-html="infoSys[0].descripcion"></div>
                              </div>
                            </div>
                          </div>
                        </v-card-text>
                      </v-card>
                    </v-window-item>

                </v-window>
              </v-col>
            </v-row>
          </v-card-text>
          <v-card-actions id="card_buttons">
            <v-btn color="#eeb213" text @click="closeDialog">Cerrar</v-btn>
          </v-card-actions>
        </v-card>
      </v-dialog>
  </div>
</template>
<script>
  export default {
    name: 'Universidad',
    props: [
      'entSys',
    ],
    data:()=>({
      infoSys: [
        {
          sistema: '',
          frontend: '',
          backend: '',
          base: '',
          responsabilidad: '',
          tareas: '',
          tiempo: '',
          inicio: '',
          descripcion: '',
          direccion: '',
          url_img: '',
        }
      ],
      duni: false,
      length: 2,
      window: 0,
    }),
    methods: {
      openDialog(id){
        let url='sistemas/'+id;
        axios
        .get(url)
        .then((res) => {
          if(res.data.length==1){
            this.infoSys = res.data;
            this.duni = true;
          }
          else{
            alert("Error");
          }
        })
        .catch(error => {
          alert("Ha ocurrido un error consultar el registro. Por favor intentalo más tarde.");
        });
      },
      closeDialog(){
        this.window = 0;
        this.duni= false;
      }
    }
  }
</script>
