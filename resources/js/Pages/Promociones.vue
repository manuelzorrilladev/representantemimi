<script setup>
import CustomBanner from "@/Components/CustomBanner.vue";
import SliderVue from "@/Components/SliderVue.vue";
import { Head } from "@inertiajs/vue3";
import { isDesktop } from "../utils.js";

import { ref } from "vue";
import Template from "./Template.vue";

const items = ref({
    "banner-1":"https://www.instagram.com/p/DB1PTzmRdGK/",
    "banner-2":"https://www.instagram.com/p/DAt9U4myvEb/",
    "banner-3":"https://www.instagram.com/p/DBruUYtS_72/",
    "banner-4":"https://www.instagram.com/p/DA1l5BuyW8j/",
    "banner-5":"https://www.instagram.com/p/DCAN0_GuzlP/"
})

</script>

<template>
    <Head title="Promociones"/>


  <Template> 
    <CustomBanner>PROMOCIONES</CustomBanner>
    
        <SliderVue v-if="isDesktop()" :items-to-show="1" navigation="border-rounded"  class="w-full pb-10">
            <a  v-for="(item,index,pos) in items" :key="item" :href="item" class="w-screen">
                <img :src="`/assets/banners/banner-${pos+1}.png`" alt="" class="w-full">
            </a>
        </SliderVue>
       
        <SliderVue v-else :items-to-show="1" navigation="border-rounded"  class="w-full pb-10">
            <a  v-for="(item,index,pos) in items" :key="item" :href="item" class="w-screen">
                <img :src="`/assets/banners/banner-${pos+1}-mobile.png`" alt="" class="w-full">
            </a>
        </SliderVue>
  </Template>
</template>

<style scoped>
</style>

