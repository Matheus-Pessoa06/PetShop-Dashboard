<template>
  <div class="container">
  <Sidebar />
  <Login />
  </div>
</template>

<script setup lang="ts">
import Sidebar from './components/Sidebar.vue';
import Login from './components/Login.vue';
</script>

<style lang="scss">
 *{
  box-sizing: border-box;
  padding: 0;
  margin: 0;
 }
 .container{
  display: flex;
 }
</style>
