<template>
    <div class="hello">
      <div class="d-flex flex-row align-items-center"><h1 class="fs-5 me-1">{{ displayTanggal() }}</h1><div class="background-white  align-items- mb-2 pl-2" style="height:3px !important;background-color: #ffffff;width:250px"></div></div>
      <section>
        <div v-for="(data, index) in db.slice(0,2)" :key="index" class="d-inline-flex flex-row">
          <div class="card mb-3 me-3 ps-3 pe-3 pt-4 pb-4 rounded-4">
            <div class="d-flex justify-content-center"><h2 class="fs-3">{{ data.Lokasi }}</h2></div>
            <div><img :src="data.Cuaca" width="180" height="180" class="img-fluid"></div>
            <div class="d-flex justify-content-center"><h1 class="fs-1 fw-bolder">{{ data.Temperatur }}</h1></div>
          </div>
        </div>
       <img :src="'../assets/' + db[0].Cuaca" alt="">
        <img src="images/IconCloudy.png">
      </section>
    </div>
  </template>
  
  <script>
  export default {
    name: 'CuacaWidget',
    props: {
      db: Array,  
    },
    methods: {
      displayTanggal() {
        const current = new Date();
        const arrHari = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
        const getHari = arrHari[current.getDay()];
        const arrBulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
        const getBulan = arrBulan[current.getMonth()];
        const hariIni = `${getHari}, ${current.getDate()} ${getBulan} ${current.getFullYear()}`;
        return hariIni;
      }
    }
  }
  </script>
  
  <!-- Add "scoped" attribute to limit CSS to this component only -->
  <style scoped>
  h3 {
    margin: 40px 0 0;
  }
  ul {
    list-style-type: none;
    padding: 0;
  }
  li {
    display: inline-block;
    margin: 0 10px;
  }
  a {
    color: #42b983;
  }
  body {
    background: linear-gradient(106.98deg, #27A5F9 0.49%, rgba(39, 165, 249, 0) 99.66%) no-repeat no-scroll;
    height: 100%;
    width: 100%;
  }
  </style>
  