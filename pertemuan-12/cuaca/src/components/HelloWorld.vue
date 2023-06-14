<template>



  <div class="hello">
    <h1>{{ msg }}</h1>
    <br><br>
    <section>
      <div v-for="(data, index) in db" :key="index">
        <div id="{{ index }}">
          <div>{{ data.Lokasi }}</div>
          <div>{{ data.Cuaca}}</div>
          <div>{{ data.Temperatur }}</div>
        </div>
      </div>
            <!-- <tbody v-for="(data, index) in db" :key="index">
              <tr>
                <td>{{ index + 1 }}</td>
                <td>{{ data.Lokasi }}</td>
                <td>{{ data.Cuaca }}</td>
                <td>{{ data.Temperatur }}</td>
              </tr>
            </tbody> -->

        </section>
  </div>
</template>

<script>
export default {
  name: 'HelloWorld',
  props: {
    lok: String,
    db: Array
  },
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
  background: linear-gradient(106.98deg, #27A5F9 0.49%, rgba(39, 165, 249, 0) 99.66%) no-repeat;
  height: 100%;
  width: 100%;
}
</style>
