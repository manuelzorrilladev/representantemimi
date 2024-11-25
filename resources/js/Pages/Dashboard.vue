<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import Welcome from "@/Components/Welcome.vue";
import Navbar from "@/Components/Navbar.vue";
import Dropdown from "@/Components/Dropdown.vue";
import DropdownLink from "@/Components/DropdownLink.vue";
import Flipbook from "flipbook-vue";
import { ref } from "vue";
const flip = ref(false);
const cover = ref(true);
const arrayPage = [
  [],
  ["/assets/catalogo/3.jpg", "/assets/catalogo/4.jpg"],
  ["/assets/catalogo/5.jpg", "/assets/catalogo/6.jpg"],
  ["/assets/catalogo/7.jpg", "/assets/catalogo/8.jpg"],
  ["/assets/catalogo/9.jpg", "/assets/catalogo/10.jpg"],
  ["/assets/catalogo/11.jpg", "/assets/catalogo/12.jpg"],
  ["/assets/catalogo/13.jpg", "/assets/catalogo/14.jpg"],
  ["/assets/catalogo/15.jpg", "/assets/catalogo/16.jpg"],
  ["/assets/catalogo/17.jpg", "/assets/catalogo/18.jpg"],
  ["/assets/catalogo/19.jpg", "/assets/catalogo/20.jpg"],
  ["/assets/catalogo/21.jpg", "/assets/catalogo/22.jpg"],
  ["/assets/catalogo/23.jpg", "/assets/catalogo/24.jpg"],
  ["/assets/catalogo/25.jpg", "/assets/catalogo/26.jpg"],
  ["/assets/catalogo/27.jpg", "/assets/catalogo/28.jpg"],
  ["/assets/catalogo/29.jpg", "/assets/catalogo/30.jpg"],
];

</script>

<template>
  <Navbar />
  <button @click="flip = !flip">{{ flip }}</button>
  {{ cover }}
 
  <section class="body">
    <input type="checkbox" id="checkbox-cover" />
    <input type="checkbox" id="checkbox-page1" />
    <input type="checkbox" id="checkbox-page2" />
    <input type="checkbox" id="checkbox-page3" />
    <input type="checkbox" id="checkbox-page4" />
    <input type="checkbox" id="checkbox-page5" />
    <input type="checkbox" id="checkbox-page6" />
    <input type="checkbox" id="checkbox-page8" />
    <input type="checkbox" id="checkbox-page9" />
    <input type="checkbox" id="checkbox-page10" />
    <input type="checkbox" id="checkbox-page11" />
    <input type="checkbox" id="checkbox-page12" />
    <input type="checkbox" id="checkbox-page13" />
    <input type="checkbox" id="checkbox-page14" />
    <input type="checkbox" id="checkbox-page15" />
    <input type="checkbox" id="checkbox-page16" />
    <input type="checkbox" id="checkbox-page18" />
    <input type="checkbox" id="checkbox-page19" />
    <input type="checkbox" id="checkbox-page20" />
    <input type="checkbox" id="checkbox-page21" />
    <input type="checkbox" id="checkbox-page22" />
    <input type="checkbox" id="checkbox-page23" />
    <input type="checkbox" id="checkbox-page24" />
    <input type="checkbox" id="checkbox-page25" />
    <input type="checkbox" id="checkbox-page26" />
    <input type="checkbox" id="checkbox-page28" />
    <input type="checkbox" id="checkbox-page29" />
    <div class="book">
      <div class="cover page">
        <label for="checkbox-cover" class="front-page">
          <img src="/assets/catalogo/1.jpg" class="absolute top-0 z-0" />
        </label>
        <label for="checkbox-cover" class="back-page">
          <img src="/assets/catalogo/2.jpg" class="absolute top-0 z-0" />
        </label>
      </div>

      <div v-for="pages in 3" :key="pages" class="page" :id="`page${pages}`">
        <label class="front-page" :for="`checkbox-page${pages}`">
          <img :src="arrayPage[pages][0]" />
        </label>
        <label class="back-page" :for="`checkbox-page${pages}`">
          <img :src="arrayPage[pages][1]" />
        </label>
      </div>

      <div class="back-cover"></div>
    </div>
  </section>
</template>

<style scoped>
.body {
  font-family: "Poppin", sans-serif;
  height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
}
.reverse {
  transform: rotateY(180deg);
}
.book {
  width: 350px;
  height: 450px;
  position: relative;
  transition-duration: 0.2s;
  perspective: 1500;
}
input {
  display: none;
}
.cover,
.back-cover {
  width: 100%;
  height: 100%;
  border-radius: 0 15px 15px 0;
  display: flex;
  align-items: center;
  justify-content: center;
  transform-origin: center left;
}
.cover {
  position: absolute;
  z-index: 35;
  transition: transform 1s;
}
.cover label {
  width: 100%;
  height: 100%;
  cursor: pointer;
}
.back-cover {
  position: relative;
  z-index: -1;
}
.page {
  position: absolute;
  width: 100%;
  height: 100%;
  border-radius: 0 15px 15px 0;
  transform-origin: left;
  transform-style: preserve-3d;
  transform: rotateY(0deg);
  transition-duration: 1.5s;
}
img {
  width: 100%;
  height: 100%;
}
.front-page {
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
  box-sizing: border-box;
}
.back-page {
  transform: rotateY(180deg);
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
  z-index: 99;
}
.next,
.prev {
  position: absolute;
  bottom: 1em;
  cursor: pointer;
}
.next {
  right: 1em;
}
.prev {
  left: 1em;
}
#page1 {
  z-index: 14;
}
#page2 {
  z-index: 13;
}
#page3 {
  z-index: 12;
}
#page4 {
  z-index: 11;
}
#page5 {
  z-index: 10;
}
#page6 {
  z-index: 9;
}
#page7 {
  z-index: 8;
}
#page1 {
  z-index: 7;
}
#page2 {
  z-index: 6;
}
#page3 {
  z-index: 5;
}
#page4 {
  z-index: 4;
}
#page5 {
  z-index: 3;
}
#page6 {
  z-index: 2;
}
#page7 {
  z-index: 1;
}
#checkbox-cover:checked ~ .book {
  transform: translateX(200px);
}
#checkbox-cover:checked ~ .book .cover {
  transition: transform 1s, z-index 0.5s 0.5s;
  transform: rotateY(-180deg);
  z-index: 1;
}

#checkbox-page1:checked ~ .book #page1 {
  transform: rotateY(-180deg);
  z-index: 2;
}
#checkbox-page2:checked ~ .book #page2 {
  transform: rotateY(-180deg);
  z-index: 3;
}
#checkbox-page3:checked ~ .book #page3 {
  transform: rotateY(-180deg);
  z-index: 4;98
}
#checkbox-page4:checked ~ .book #page4 {
  transform: rotateY(-180deg);
  z-index: 5;
}
#checkbox-page5:checked ~ .book #page5 {
  transform: rotateY(-180deg);
  z-index: 6;
}
#checkbox-page6:checked ~ .book #page6 {
  transform: rotateY(-180deg);
  z-index: 7;
}
#checkbox-page7:checked ~ .book #page7 {
  transform: rotateY(-180deg);
  z-index: 8;
}

</style>