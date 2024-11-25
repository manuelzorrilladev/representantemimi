<script setup>
import CustomBanner from "@/Components/CustomBanner.vue";
import { Head } from "@inertiajs/vue3";
import { isDesktop } from "../utils.js";

import Template from "./Template.vue";
</script>

<template>
  <Head title="Empresa" />
  <Template>
    <CustomBanner>Empresa</CustomBanner>
    <section class="relative">
      <img
        v-if="isDesktop()"
        src="/assets/empresa/fondo.png"
        alt=""
        class="w-full"
      />
      <img
        v-else
        src="/assets/empresa/fondo-mobile.png"
        alt=""
        class="w-full"
      />
      <header
        class="h-full absolute top-0 w-full flex flex-col items-center justify-evenly"
      >
        <h2
          class="w-9/12 text-center text-lg sm:text-xl md:text-2xl lg:text-3xl text-custom-red font-bold"
        >
          Somos una empresa venezolana fundada en 1982 dedicada a la venta al
          detal y por catálogo de prendas en Oro 18kt, Plata 925 y Acero.
        </h2>
        <h2
          class="w-9/12 text-center text-lg sm:text-xl md:text-2xl lg:text-3xl text-custom-red"
        >
          El éxito de Mimi Joyería está basado en ofrecer a sus clientes
          productos de calidad, un servicio excepcional y una experiencia de
          compra satisfactoria
        </h2>
      </header>
    </section>

    <section class="bg-custom-gray-2 flex flex-col items-center text-justify md:text-center py-10 gap-8">
      <header class="w-10/12 md:w-1/2">
        <h3 class="text-custom-golden  text-4xl">¿Quiénes somos?</h3>
        <p class=" text-gray-700">
          Mimí joyería es una empresa venezolana fundada en 1982 dedicada a la
          venta al detal y por catálogo de prendas en Oro 18Kt, Plata 925 y
          Acero.
        </p>
      </header>
      <header class="w-10/12 md:w-1/2">
        <h3 class="text-custom-golden  text-4xl">Misión</h3>
        <p class=" text-gray-700">
          Ofrecer a nuestros clientes la más amplia variedad de prendas
          garantizadas en oro 18Kt, Plata 925 y Acero, así como relojes de las
          marcas más reconocidas a nivel mundial a precios competitivos.
        </p>
      </header>
      <header class="w-10/12 md:w-1/2">
        <h3 class="text-custom-golden  text-4xl">Visión</h3>
        <p class=" text-gray-700">
          Ser la primera opción de las personas al momento de buscar regalos
          para todas y cada una de las ocasiones especiales como cumpleaños,
          graduaciones, bautizos, matrimonios, navidad, entre otros. Ser la
          empresa líder a nivel nacional en la venta por catálogo de prendas de
          oro 18Kt, plata 925 y Acero, con la más amplia red de Representantes
          en todo el territorio nacional.
        </p>
      </header>
    </section>
  </Template>
</template>