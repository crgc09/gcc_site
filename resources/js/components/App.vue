<template>
  <v-app id="appComponent">
    <!--NAVIGATION-->
      <v-navigation-drawer v-model="drawer" absolute temporary app>
        <div class="nav_title">
          Dashboard <v-icon id="iDashboard">mdi-view-dashboard</v-icon>
        </div >
        <v-divider></v-divider>
        <ul class="nav_options">
          <li>
            <router-link to="/gcc_site/home">
              Home
            </router-link>
          </li>
          <li>
            <router-link to="/gcc_site/acerca_de">
              Acerca de
            </router-link>
          </li>
          <li>
            <router-link to="/gcc_site/educacion">
              Educación
            </router-link>
          </li>
          <li>
            <router-link to="/gcc_site/portafolio">
              Portafolio
            </router-link>
          </li>
          <li>
            <router-link to="/gcc_site/curriculum">
              Curriculum
            </router-link>
          </li>
          <li>
            <router-link to="/gcc_site/contacto">
              Contacto
            </router-link>
          </li>
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
          <v-list>
            <v-list-item @click="">
              <v-list-item-title>Cerrar sesión</v-list-item-title>
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
  </v-app>
</template>
<script>
  export default {
    data: () => ({
      drawer: null,
      fab: false,
    }),
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