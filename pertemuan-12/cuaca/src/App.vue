<template>
<div class="container">
  <div class="row ">
    <div class="col-sm">
    <h1 class="display-1">{{ Lokasi }}</h1>
    <h2>{{ Cuaca}} , {{ Temperatur }}</h2>
    <hr>
    <h2 class="tagline">Keep Save</h2>
    </div>
    <div class="col-sm">
      <HelloWorld lok="" :db="database" />
    </div>
  </div>
</div>


  
</template>

<script>
import HelloWorld from './components/HelloWorld.vue'

export default {
  name: 'App',
  components: {
    HelloWorld,
  },
  data() {
    return {
      Lokasi: 'Jakarta',
      Cuaca: 'Berawan',
      Temperatur : '31 C',
      database: [
        {
          Lokasi: 'Yogyakarta',
          Cuaca: 'Berawan ',
          Status: '1',
          Temperatur: '32 C'
        },
        {
          Lokasi: 'Bekasi',
          Cuaca: 'Hujan',
          Status: '2',
          Temperatur: '28 C'
        }
      ]
    } 
  }
  // methods: {
  //   statusCuaca() {
  //     this.database.forEach(cuaca => {
  //       if (cuaca.Cuaca === this.Cuaca) {
  //         cuaca.Status = this.Status
  //       }
  //     })
  //   }

  // }
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
  background: linear-gradient(106.98deg, #27A5F9 0.49%, rgba(39, 165, 249, 0) 99.66%) no-repeat;
  height: 100%;
  width: 100%;
}
.tagline {
  font-family: 'COCOGOOSE', sans-serif;
  font-style:normal;
}
</style>
