<template>
  <div id="HexaGrid">
    <h3 id="h3">
      <strong>{{titleComp}}</strong>
    </h3>
    <p class="mt-4">
      <ul id="hexGrid">
        <li class="hex" v-for="(item, key) in listComp">
          <div class="hexIn">
            <a class="hexLink" href="#">
              <img :src="item.img"/>
              <h4 id="h4">{{key+1}}</h4>
              <p>{{item.title}}</p>
            </a>
          </div>
        </li>
      </ul>
    </p>
  </div>
</template>
<script>
  export default {
    name: 'HexaGrid',
    props: [
      'titleComp',
      'listComp'
    ]
  }
</script>