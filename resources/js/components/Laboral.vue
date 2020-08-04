<template>
  <div id="Laboral">
    <div class="epc_sistemas">
      <div class="epc_sistema" v-for="(item, key) in entSys" @click="dlaboral = true">
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
            <span class="title_dia">Intranet</span>
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
                              <img class="ip_dia" src="http://localhost/gcc_site/public/img/sistemas/intranet.png" alt="">
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
                                <div class="cinfo" v-html="infoSys[0].fecha"></div>
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
                              <img class="ip_dia" src="http://localhost/gcc_site/public/img/sistemas/intranet1.png" alt="">
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
                              <img class="ip_dia" src="http://localhost/gcc_site/public/img/sistemas/intranet2.png" alt="">
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
                              <img class="ip_dia" src="http://localhost/gcc_site/public/img/sistemas/intranet3.png" alt="">
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
                              <img class="ip_dia" src="http://localhost/gcc_site/public/img/sistemas/intranet4.png" alt="">
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
            <v-btn color="#eeb213" text @click="closeDL">Cerrar</v-btn>
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
          frontend: 'HTML5, CSS3, JS, VueJS, Vue Material',
          backend: 'PHP - Laravel',
          base: 'MySQL', 
          fecha: '<p>02-Julio-2018</p>',
          descripcion: '<p>Directorio de los sitios y sistemas institucionales. agrupados mediante los pilares organizaciones.<br>Contiene módulos de administración de usuarios, roles y catálogos.</p>',
          direccion: 'https://miespaciolaureate.com/intranet/login',
          menu: '<ul><li><span class="lista_dia">User:</span> contiene las opciones de ver perfil, el cual es una ventana modal con toda la información del este. Y la opción de cerrar sesión</li><li><span class="lista_dia">Admin:</span> opción solo disponible para administradores del sistema, el cual contiene las secciones para el control de "Usuario", "Catálogos" y "Contactos".</li><li><span class="lista_dia">ADN:</span> primer pilar organizacional dedicado a explicar quienes somos y que buscamos como empresa. Junto con todos los sistemas que tengan que ver con estos temas.</li><li><span class="lista_dia">Talento:</span> segundo pilar organizacional especializado unicamente en el desarrollo y objetivos del personal de la empresa </li><li><span class="lista_dia">Bienestar:</span> tercer pilar organizacional el cual contiene toda la informacion de las recompensas, prestaciones y beneficios del colaborador</li><li><span class="lista_dia">Capacitación:</span> cuarto pilar organizacional dedicado exclisivamente a la capacitación de los colaboradores</li><li><span class="lista_dia">Atracción:</span> pilar organizacional encargado de reclutar a los nuvos colaboradores basandonose en los principios de la empresa "Here for good"</li></ul>',
          modulo_a: '<p>Como módulo de muestra describiremos el modulo de "Usuarios".</p><p>Este módulo esta conformado por .</p>',
          modulo_b: '<p>Una vez que se ha agregado un nuevo colaborar, es posible editar su información básica y su respectivo rol, ya que un usuario puede tener o no permisos para interactuar con ciertos sistemas, dependiendo del proposito o la acción que este autorizado a realizar dentro de la institución.</p><p>En el caso puntal del sistema de "Intranet", todos los usuarios pertenecientes al directorio de México tienen automáticamente acceso al sistema.</p>',
        },
      ],
      dlaboral: false,
      length: 5,
      window: 0,
    }),
    methods: {
      closeDL(){
        this.window = 0;
        this.dlaboral = false;
      }
    }
  }
</script>