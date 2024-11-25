<script setup>
import { Head, Link } from "@inertiajs/vue3";
import Template from "./Template.vue";
import NavLink from "@/Components/NavLink.vue";
import { isDesktop } from "../utils.js";
defineProps({
  canLogin: Boolean,
  canRegister: Boolean,
  laravelVersion: String,
  phpVersion: String,
});
</script>

<template>
  <Head title="Inicio" />
  <Template>
    <div class="h-[70vh] md:h-[75vh]">
      <img
        v-if="isDesktop()"
        src="/assets/home/banner-campaña-desktop.png"
        alt=""
      />
      <img v-else src="/assets/home/banner-campaña-mobile.png" alt="" />
    </div>

    <div class="my-3 w-full relative text-custom-light">
      <img
        v-if="isDesktop()"
        src="/assets/home/fondo-2-desktop.png"
        alt=""
        class="w-full h-auto"
      />
      <img
        v-else
        src="/assets/home/fondo-2-mobile.png"
        alt=""
        class="w-full h-auto"
      />
      <div class="absolute z-10 top-0 w-full h-full">
        <div class="w-full text-center flex justify-center items-center h-1/6">
          <h1 class="md:w-10/12 text-xl sm:text-3xl md:text-5xl mt-20">
            Conoce nuestros productos y alcanza el éxito
          </h1>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 w-full h-5/6">
          <div
            class="w-full flex flex-col items-center justify-evenly md:justify-center order-2 md:order-1"
          >
            <img
              src="/assets/home/catalogo.png"
              alt=""
              class="w-2/5 md:w-1/2 shadow-[15px_15px_5px_0px_rgb(0,0,0,0.5)]"
            />
            <NavLink v-if="!isDesktop()" class="w-1/2 flex uppercase"
              >ver más</NavLink
            >
          </div>
          <div
            class="w-full flex items-center justify-center flex-col order-1 md:order-2"
          >
            <header>
              <h2
                class="text-center text-lg sm:text-2xl md:text-3xl py-4 sm:py-0 md:py-6"
              >
                <strong class="italic">Descubre</strong> todas nuestras <br />
                joyas y relojes en <br />
                Oro 18 Kt, Plata 925 y Acero.
              </h2>
              <NavLink v-if="isDesktop()" class="w-full flex uppercase"
                >ver más</NavLink
              >
            </header>
          </div>
        </div>
      </div>
    </div>

    <div class="my-3 w-full relative text-custom-light bg-custom-purple">
      <img
        v-if="isDesktop()"
        src="/assets/home/fondo-1-desktop.png"
        alt=""
        class="w-full h-auto"
      />
      <img
        v-else
        src="/assets/home/fondo-1-mobile.png"
        alt=""
        class="w-full h-auto"
      />
      <div v-if="isDesktop()" class="absolute z-10 top-0 w-full h-full">
        <div
          class="w-full text-center flex flex-col justify-center items-center h-full"
        >
          <h2
            class="h-1/3 md:w-9/12 text-xl sm:text-3xl md:text-4xl lg:text-5xl md:mt-14 lg:mt-36 md:mr-24 md:text-right tracking-wide"
          >
            Conviértete en una <br />Representante Mimi Joyería
          </h2>
          <div
            class="w-full md:w-10/12 flex flex-col items-center h-2/3 md:ml-56"
          >
            <h1
              class="w-1/2 md:w-full md:text-4xl lg:text-5xl text-center tracking-wide"
            >
              Sé una #MUJER<span class="text-custom-red">EXITOSA</span>
            </h1>
            <h1
              class="w-10/12 md:w-1/2 text-center text-lg md:text-2xl lg:text-3xl py-4 sm:py-0 md:py-6"
            >
              Y descubre la libertad de desarrollar tu propio negocio como
              Representante Mimi
            </h1>
            <NavLink v-if="isDesktop()" class="w-1/2 flex uppercase"
              >ver más</NavLink
            >
          </div>
        </div>
      </div>
      <div v-else class="absolute z-10 top-0 w-full h-full">
        <div
          class="w-full text-center flex flex-col justify-evenly items-center h-full"
        >
          <h2 class="text-2xl tracking-wide">
            Conviértete en una <br />Representante Mimi Joyería
          </h2>
          <h1 class="text-4xl text-center tracking-wide">
            Sé una #MUJER<span class="text-custom-red">EXITOSA</span>
          </h1>
          <h1 class="w-10/12 text-center text-xl sm:text-2xl py-4 sm:py-0">
            Y descubre la libertad de desarrollar tu propio negocio como
            Representante Mimi
          </h1>
          <NavLink class="w-1/2 flex uppercase">ver más</NavLink>
        </div>
      </div>
    </div>

    <div
      class="my-3 w-full relative text-custom-light bg-custom-purple grid grid-cols-1 md:grid-cols-2"
    >
      <img src="/assets/home/asset-1-home.png" alt="tienda sambil" />
      <div
        class="h-full flex flex-col items-center justify-evenly text-justify gap-12 md:gap-0 py-20 md:py-0"
      >
        <h2 class="w-9/12 text-3xl sm:text-lg md:text-2xl lg:text-4xl">
          <strong class="italic">Conoce</strong> en dónde puedes retirar tus
          prendas
        </h2>
        <!-- <h2>Conoce en dónde puedes retirar tus prendas</h2> -->
        <p class="w-9/12 text-xl sm:text-2xl">
          Contamos con 2 tiendas en la ciudad de Caracas, si quieres conocer la
          mas cercana a ti, haz click en el botón de abajo.
        </p>
        <NavLink class="w-9/12 flex uppercase">Descubrir</NavLink>
      </div>
    </div>
  </Template>
</template>

<style scoped>
</style>
