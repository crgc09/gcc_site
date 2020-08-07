<template>
  <div id="Laboral">
    <div class="epc_sistemas">
      <div class="epc_sistema" v-for="(item, key) in entSys" @click="openDialog(item.id_sis)">
        <img :src="item.img" class="isistema" alt="">
        <span id="h4">
          <strong>Empresa:</strong> <span>{{item.empresa}}</span>
        </span>
        <br>
        <span id="h4">
          <strong>Sistema:</strong> {{item.sistema}}
        </span>
      </div>
    </div>
    <!--MODAL DEL SISTEMA-->
      <v-dialog v-model="dlaboral" width="90%" persistent dark>
        <v-card>
          <v-card-title class="headline">
            <span class="title_dia">{{infoSys[0].sistema}}</span>
          </v-card-title>
          <v-card-text>
            <v-row align="center">
              <v-item-group v-model="window" class="shrink" mandatory tag="v-flex">
                <v-item v-for="n in length" v-slot:default="{active, toggle}" :key="n">
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
                          <div class="cont_dia">
                            <div class="info_dia">
                              <v-row class="mb-4" align="center">
                                <span class="subtitle_dia">Ficha del sistema</span>
                                <v-spacer></v-spacer>
                              </v-row>
                              <div>
                                <h4 id="h4">Fecha de desarrollo</h4>
                                <div class="cinfo" v-html="infoSys[0].inicio"></div>
                                <h4 id="h4">Dirección</h4>
                                <div class="cinfo" >
                                  <p>
                                    <a id="link_dia" :href="infoSys[0].direccion">{{infoSys[0].direccion}}</a>
                                  </p>
                                </div>
                                <h4 id="h4">Descripción</h4>
                                <div class="cinfo" v-html="infoSys[0].descripcion"></div>
                              </div>
                            </div>
                            <div class="img_dia">
                              <img class="ip_dia" :src="infoSys[0].url_img1" alt="">
                            </div>
                          </div>
                        </v-card-text>
                      </v-card>
                    </v-window-item>
                  <!--MENU-->
                    <v-window-item>
                      <v-card flat>
                        <v-card-text>
                          <div class="cont_dia">
                            <div class="info_dia">
                              <v-row class="mb-4" align="center">
                                <span class="subtitle_dia">Menú</span>
                                <v-spacer></v-spacer>
                              </v-row>
                              <div class="cinfo" v-html="infoSys[0].menu"></div>
                            </div>
                            <div class="img_dia">
                              <img class="ip_dia" :src="infoSys[0].url_img2" alt="">
                            </div>
                          </div>
                        </v-card-text>
                      </v-card>
                    </v-window-item>
                  <!--MS1-->
                    <v-window-item>
                      <v-card flat>
                        <v-card-text>
                          <div class="cont_dia">
                            <div class="info_dia">
                              <v-row class="mb-4" align="center">
                                <span class="subtitle_dia">Modulo Muestra</span>
                                <v-spacer></v-spacer>
                              </v-row>
                              <div class="cinfo" v-html="infoSys[0].modulo_a"></div>
                            </div>
                            <div class="img_dia">
                              <img class="ip_dia" :src="infoSys[0].url_img3" alt="">
                            </div>
                          </div>
                        </v-card-text>
                      </v-card>
                    </v-window-item>
                  <!--MS2-->
                    <v-window-item>
                      <v-card flat>
                        <v-card-text>
                          <div class="cont_dia">
                            <div class="info_dia">
                              <div class="cinfo" v-html="infoSys[0].modulo_b"></div>
                            </div>
                            <div class="img_dia">
                              <img class="ip_dia" :src="infoSys[0].url_img4" alt="">
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
    name: 'Laboral',
    props: [
      'entSys',
    ],
    data:()=>({
      infoSys: [
        {
          sistema: '',
          backend: '',
          base: '',
          descripcion: '',
          direccion: '',
          frontend: '',
          inicio: '',
          menu: '',
          modulo_a: '',
          modulo_b: '',
          url_img: '',
          url_img1: '',
          url_img2: '',
          url_img3: '',
          url_img4: '',
        }
      ],
      dlaboral: false,
      length: 5,
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
            this.dlaboral = true;
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
        this.dlaboral = false;
      }
    }
  }
</script>