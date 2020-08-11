<template>
  <v-app id="appComponent">
    <!--NAVIGATION-->
      <v-navigation-drawer v-model="drawer" absolute temporary app>
        <div class="nav_title">
          Dashboard <v-icon id="iDashboard">mdi-view-dashboard</v-icon>
        </div >
        <v-divider></v-divider>
        <ul class="nav_options">
          <li v-for="(me, key) in menu" :key="me.id_opt">
            <router-link :to="me.url">
              {{me.opcion}}
            </router-link>
          </li>
          <!--
            <li>
              <router-link to="admin_demo">
                Admin Demo
              </router-link>
            </li>
          -->
        </ul>
      </v-navigation-drawer>
    <!--BARNAV-->
      <v-app-bar :absolute="true" app>
        <v-app-bar-nav-icon id="toolbar_icon" @click.stop="drawer = !drawer"></v-app-bar-nav-icon>
        <v-toolbar-title id="toolbar_title">
          <h1 id="h1" class="bar_title">El Sitio</h1>
        </v-toolbar-title>
        <v-spacer></v-spacer>
        <v-menu transition="slide-x-transition" bottom right>
          <template v-slot:activator="{ on, attrs }">
            <v-btn icon color="#fff" v-bind="attrs" v-on="on">
              <v-icon>mdi-account-circle</v-icon>
            </v-btn>
          </template>
          <v-list id="bar_session">
            <v-list-item>
              <v-btn text small block dark @click="profile = true">
                {{user[0]['name']}}
              </v-btn>
            </v-list-item>
            <v-list-item v-if="user[0]['rol']===1">
              <v-btn text small block dark :link="true" to="/gcc_site/admin">
                Admin
              </v-btn>
            </v-list-item>
            <v-list-item>
              <v-btn text small block dark onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                Cerrar sesión
              </v-btn>
              <form id="logout-form" action="http://localhost/gcc_site/logout" method="POST" style="display: none;">
                <input type="hidden" name="_token" v-model="csrft">
              </form>
            </v-list-item>
          </v-list>
        </v-menu>
      </v-app-bar>
    <!--MAIN-->
      <v-main>
        <v-container fluid>
          <!--<v-row align="center" justify="center">-->
          <v-row align="center">
            <div class="container">
              <router-view></router-view>  
            </div>
          </v-row>
        </v-container>
      </v-main>
    <!--SOCIAL NETWORK-->
      <v-speed-dial
        v-model="fab"
        :top="false"
        :bottom="true"
        :right="true"
        :left="false"
        :open-on-hover="false"
        direction="top"
        transition="'slide-y-reverse-transition"
      >
        <template v-slot:activator>
          <v-btn v-model="fab" outlined color="white" dark fab>
            <v-icon v-if="fab">mdi-close</v-icon>
            <v-icon v-else>mdi-chat-processing</v-icon>
          </v-btn>
        </template>
        <v-btn href="#" fab dark small outlined color="#923bba">
          <v-icon>mdi-instagram</v-icon>
        </v-btn>
        <v-btn href="#" fab dark small outlined color="#1da1f2">
          <v-icon>mdi-twitter</v-icon>
        </v-btn>
        <v-btn href="#" fab dark small outlined color="#097eeb">
          <v-icon>mdi-facebook</v-icon>
        </v-btn>
        <v-btn href="#" fab dark small outlined color="#0073b0">
          <v-icon>mdi-linkedin</v-icon>
        </v-btn>
        <v-btn href="https://www.google.com/" target="_blank" fab dark small outlined color="#24292e">
          <v-icon>mdi-github</v-icon>
        </v-btn>
      </v-speed-dial>   
    <!--FOOTER-->
      <v-footer padless>
        <v-col id="footer_c1" class="text-center" cols="12">
          <span class="footer_texts">Powered By</span> <span class="footer_text">Cris GCC</span>
        </v-col>
        <v-col id="footer_c2" class="text-center" cols="12">
          <span class="footer_text">©{{ new Date().getFullYear() }}</span>
        </v-col> 
      </v-footer>
    <!--DIALOG-->
    <v-dialog v-model="profile" persistent dark max-width="320">
      <v-card>
        <v-card-title class="headline">
          <span class="title_dia">Perfil</span>
        </v-card-title>
        <v-card-text id="pd">
          <p>Nombre: <strong>{{user[0]['name']}} {{user[0]['last_name']}}</strong></p>
          <p>Email: <strong>{{user[0]['email']}}</strong></p>
        </v-card-text>
        <v-card-actions id="card_buttons">
          <v-btn color="#eeb213" text @click="profile = false">Aceptar</v-btn>
        </v-card-actions>
      </v-card>
    </v-dialog>
  </v-app>
</template>
<script>
  export default {
    data: () => ({
      user: [
        {
          name:'',
          last_name:'',
          emai:'',
          rol:''
        }
      ],
      menu: [],
      profile: false,
      drawer: null,
      fab: false,
      csrft: '',
      id: ''
    }),
    mounted(){
      this.csrft = window.lct.ct;
      this.id = window.lct.tok;
      //USER
      axios
      .get('user/'+this.id)
      .then((res) => {
        this.user = res.data;
        localStorage.setItem('ur', JSON.stringify(this.user[0].rol));
      });
      //MENU
      axios
      .get('menu/')
      .then((res) => {
        this.menu = res.data;
      });
    }
  }
</script>
<style lang="scss" scoped>
  /*APLICATION*/
    .v-application{
      background: transparent;
    }
  /*NAVIGATION*/
    .v-navigation-drawer{
      background: rgba(0,0,0,0.7);
    }
    .v-navigation-drawer .v-divider{
      border-color: #808080;
      margin: 0 auto;
    }
    .v-application a, .v-application a:hover{
      text-decoration: none;
    }
    .v-application ol, .v-application ul{
      padding-left: 0;
    }
  /*TOOLBAR*/
    .v-sheet.v-app-bar.v-toolbar:not(.v-sheet--outlined) {
      background: rgba(46, 49, 49, 0.6);
    }
  /*MAIN*/
    .v-main{
      /*
      box-shadow: 0 2px 4px -1px rgba(0,0,0,.2), 0 4px 5px 0 rgba(0,0,0,.14), 0 1px 10px 0 rgba(0,0,0,.12);
      */
    }
  /*SOCIAL NETWORK*/
    .v-speed-dial{
      position: fixed;
    }
  /*FOOTER*/
    .v-footer {
      /*background: transparent;*/
      background: rgba(46, 49, 49, 0.6);
    }
</style>