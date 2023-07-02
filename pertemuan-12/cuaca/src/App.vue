<template>
<div class="container-fluid vh-100">
  <div class="container justify-content-center">
    <div class="row justify-content-center">
      <div class="col-4 d-flex align-items-center text-left">
          <div class="d-flex flex-column">
          <h1 class="display-2">{{ Lokasi }}</h1>
          <div class="card d-inline-flex float border-0 text-white" style="background: rgba(238, 238, 238, 0.5)"><img :src="'assets/' + db[0].Cuaca" width="80" height="80" class="position-absolute" style="margin-top:-10px;"><h2 class="display-8" style="padding:0 50px 0 75px;">{{ Cuaca}} , {{ Temperatur }}</h2></div>
          <div class="background-white mt-4 mb-2" style="height:3px !important;background-color: #ffffff;"></div>
          <h2 class="tagline">Keep Save</h2>
        </div>
      </div>
      <div class="col-6">
        <CuacaWidget :db="database" />
      </div>
    </div>
  </div>
</div>
</template>

<script>

import CuacaWidget from './components/CuacaWidget.vue'

export default {
  name: 'App',
  components: {
    CuacaWidget,
  },
  data() {
    return {
      Lokasi: 'Jakarta',
      Cuaca: 'Berawan',
      Status: 2,
      Temperatur : '31 C',
      database: [
        {
          Lokasi: 'Yogyakarta',
          Cuaca: '../assets/IconCloudySun.png',
          Status: 1,
          Temperatur: '32 C'
        },
        {
          Lokasi: 'Bekasi',
          Cuaca: '../assets/IconRain.png',
          Status: 2,
          Temperatur: '28 C'
        },
        {
          Lokasi: 'Jakarta',
          Cuaca: '../assets/IconCloudy.png',
          Status: 3,
          Temperatur: '28 C'
        },      
      ]
    } 
  }
  }

</script>

<style>
h1 {
  font-weight:
}
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  color: #ffffff;
  margin-top: 60px;
}
body {
  background: linear-gradient(106.98deg, #27A5F9 0.49%, rgba(39, 165, 249, 0) 99.66%);
  height: 100%;
  width: 100%;
}
.tagline {
  font-family: 'COCOGOOSE', sans-serif;
  font-style:normal;
}
hr {
    border-color: #F05F44 !important;
    height: 3px !important;
    max-width: 65px !important;
}
</style>
