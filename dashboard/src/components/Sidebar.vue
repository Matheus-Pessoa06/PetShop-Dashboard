<template>
    <div class="sidebar-open" :class="{ 'sidebar-close': isSidebarClose }"                                        >
        <p>Aqui está a sidebar</p>
        <img src="../assets/login-alt.png" @click="toggleSidebar">
    </div>
</template>

<script lang="ts" setup>
import { ref } from 'vue';

const isSidebarClose = ref<boolean>(false);
function toggleSidebar(){
    isSidebarClose.value = !isSidebarClose.value;
};
    
</script>
<style lang="scss">
.sidebar-open{
    background-color: red;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    align-items: flex-end;
    padding: 30px;
    height: 100vh;
}
.sidebar-close{
    width: 10px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    img{
        rotate: 180deg;
    }

}
</style>