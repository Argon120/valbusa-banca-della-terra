<template>
  <div class="flex w-screen h-screen">
    <div
      class="flex flex-col h-screen w-screen"
      v-for="terreno in terrenos"
      :key="terreno.id"
    >
      <div>{{ terreno.comune }}</div>
      <div>{{ terreno.imgURL }}</div>
      <div>{{ terreno.dimensione }}</div>
      <div>{{ terreno.terreno }}</div>
      <div>{{ terreno.irrigazione }}</div>
      <br />
    </div>
  </div>
</template>

<script>
import axios from "axios";
export default {
  name: "Lista",
  components: {},
  data() {
    return {
      terrenos: [],
    };
  },
  async mounted() {
    this.terrenos = (
      await axios.get("http://localhost:8000/api/terrenos")
    ).data;
    console.log(this.terrenos);
  },
};
</script>
