<template>
  <div id="acerca">
    <v-card id="card" max-width="100%" class="mx-auto">
      <HeaderCard :image-comp="image" :title-comp="title"/>
      <!--Acerca content-->    
      <v-card-text id="vct-padding">
        <div class="card_info">
          <div class="card_me">
            <div class="card_datos">
              <h3 id="h3">
                <strong>Un poco de mi</strong>
              </h3>
              <p class="mt-4">
                Mi nombre es <strong>Cristóbal</strong>, nací el 26 de julio de 1990 en la Ciudad de México, ciudad donde he vivido toda mi vida.
              </p>
              <p>
                Me considero una persona bastante racional, a la cual no le da miedo decir lo que piensa, ya que siempre he creido que <b>Al toro siempre por los cuernos</b>, soy perseverante y me gusta saber que lo que tengo y lo qu he logrado ha sido por mi esfuerzo.
              </p>
              <p>
                Me gustan las personas que son congruentes, leales y sarcásticas (Por que hasta para eso hay que ser inteligente). Creo en la amistad y soy fiel creyente de que las personas que se cruzan por nuestro camino ya sea por un tiempo o toda la vida son las personas corractas, ya que tiene algo que enseñarnos. 
              </p>
              <HexaGrid :list-comp="logros" :title-comp="title1"/>
            </div>
            <div class="card_extra">
              <HexaGrid :list-comp="hobbies" :title-comp="title2"/>
              <HexaGrid :list-comp="pendientes" :title-comp="title3"/>
            </div>
          </div>
        </div>  
      </v-card-text>
    </v-card>
  </div>
</template>
<script>
  import HeaderCard from '../components/HeaderCard.vue';
  import HexaGrid from '../components/HexaGrid.vue';
  export default {
    components: {
      HeaderCard,
      HexaGrid
    },
    data:()=>({
      image: 'http://localhost/gcc_site/public/img/menu/me.png',
      title: 'Acerca de',
      intro: 'Muchas gracias por visitar el sitio, ya que es un poquito de lo que hago',

      //
      title1: 'Top teen de logros',
      logros: [
        { 
          titulo: 'Aprender a nadar.',
          img: 'https://www.lacuadrauniversitaria.com/uploads/2/0/9/1/20917732/sports-recovery-slider_orig.jpg'
        },
        { 
          titulo: 'Comprarme mi carro.',
          img: 'https://latam-editorial.pxcrush.net/soloautos/general/editorial/nissan_silphy-sentra_2020_shanghai04.jpg?pxc_method=crop&height=725&width=1087'
        },
        { 
          titulo: 'Titularme como Ingeniero en la FI UNAM.',
          img: 'https://www.contrareplica.mx/uploads/2020/02/06/normal/6fa7a298c0ba87dc1d700b6f0e2cc331.jpg'
        },
        { 
          titulo: 'Pagarme totalmente mis viajes.',
          img: 'https://www.nitu.mx/wp-content/uploads/2018/07/turistas-millenials.jpg'
        },
        { 
          titulo: 'Correr un maratón.',
          img: 'https://www.0800flor.net/wp-content/uploads/2012/05/maraton0705-640x330.jpg'
        },
        { 
          titulo: 'Aventarme de paracaidas.',
          img: 'https://franciscojaviertostado.files.wordpress.com/2019/07/fotooo.jpg'
        },
        { 
          titulo: 'Bailar en el palacio de los deportes.',
          img: 'https://cdn.proceso.com.mx/media/2019/03/WhatsApp-Image-2019-03-24-at-16.13.09-300x225.jpeg'
        },
        { 
          titulo: 'Subir un muro de escalar.',
          img: 'https://mxcity.mx/wp-content/uploads/2019/04/the-muro-el-reto-14.jpg'
        },
        { 
          titulo: 'Montar mi propio gym en casa.',
          img: 'https://powerracks.top/wp-content/uploads/2019/07/Gimnasio-en-casa.jpg'
        }
      ],
      title2: '¿Que me gusta?',
      hobbies: [
        { 
          titulo: 'Seguri aprendiendo',
          img: 'https://img.blogs.es/anexom/wp-content/uploads/2018/03/programar-920x515.jpg'
        },
        { 
          titulo: 'Programar',
          img: 'https://edgy.app/wp-content/uploads/2018/08/programming-FI-970x648.jpg'
        },
        { 
          titulo: 'Hacer ejercicio',
          img: 'https://www.outsideonline.com/sites/default/files/styles/img_850x480/public/2020/06/17/crossfit-gym-glassman_h.jpg?itok=w8Ku_--U'
        },
        { 
          titulo: 'Viajar a la playa',
          img: 'https://www.kayak.com.mx/news/wp-content/uploads/sites/29/2018/07/Playas-baratas-en-Mexico-Cover11-820x572.jpg'
        },
        { 
          titulo: 'Volar papalotes',
          img: 'https://foodandtravel.mx/wp-content/uploads/2020/01/FestivalesPapalotes.jpg'
        },
        { 
          titulo: 'Salir de fiesta',
          img: 'https://laverdadnoticias.com/__export/1577477420322/sites/laverdad/img/2019/12/27/fiesta_axo_nuevo.jpg_1902800913.jpg'
        },
        { 
          titulo: 'La naturaleza',
          img: 'https://i.pinimg.com/originals/84/e6/a0/84e6a04e1fc11abaf1c79ccde4d2d422.jpg'
        },
        { 
          titulo: 'Días lluviosos',
          img: 'https://ecosiba.weebly.com/uploads/1/3/5/5/13554618/6357266_orig.jpg?528'
        },
        { 
          titulo: 'Contemplar la luna',
          img: 'https://static.vix.com/es/sites/default/files/styles/large/public/l/luna_llena_entre_las_nubes.jpg'
        }
      ],
      title3: '¿Que me gustaria hacer?',
      pendientes: [
        { 
          titulo: 'Aprender idiomas',
          img: 'https://www.aprendum.com/blog/wp-content/uploads/2017/09/titulos-de-idiomas.jpg'
        },
        { 
          titulo: 'Escalar una montaña nevad',
          img: 'https://estaticos.elperiodico.com/resources/jpg/8/2/zentauroepp48315907-files-this-file-photo-taken-may-2018-mountaineer190525130044-1558782338228.jpg'
        },
        { 
          titulo: 'Aprender a bucear',
          img: 'https://imagesmx-olympustours1.netdna-ssl.com/thumbnail.php?url=L2dhbGVyaWEvRGl2ZS02LmpwZw==&size=750x389'
        },
        { 
          titulo: 'Aprender un arte marcial',
          img: 'https://ichef.bbci.co.uk/news/ws/410/amz/worldservice/live/assets/images/2014/12/03/141203172936_artes_marciales_estilos_624x351_thinkstock.jpg'
        },
        { 
          titulo: 'Emprender un negocio',
          img: 'https://elucabista.com/wp-content/uploads/2016/11/Consejos-para-montar-un-negocio-y-hacerse-emprendedor-en-Vitoria-Gasteiz-848x478.jpg'
        },
        { 
          titulo: 'Ir a danza aeréa',
          img: 'https://www.superprof.mx/imagenes/anuncios/profesor-home-clases-danza-aerea-telas-puente-unam-para-todas-edades.jpg'
        },
        { 
          titulo: 'Curso de supervivencia',
          img: 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQi9qLz-ZqdgoPkVEh7Ggr08g5Sp72h-flXvw&usqp=CAU'
        },
        { 
          titulo: 'Recorrer el mundo',
          img: 'https://disciplestours.com/wp-content/uploads/2019/09/traveling-around-the-world-featured1-800x400.jpg'
        },
        { 
          titulo: 'Aprender Yoga',
          img: 'https://fotografias.lasexta.com/clipping/cmsimages01/2019/06/14/EB615ADC-D599-488F-9C21-6938C0149ED6/69.jpg'
        }
      ]


    }),

  }
</script>