<script setup>
import CustomBanner from "@/Components/CustomBanner.vue";
import { Head } from "@inertiajs/vue3";
import { isDesktop } from "../utils.js";
import Template from "./Template.vue";
</script>

<template>
  <Head title="Tiendas" />

  <Template>
    <CustomBanner>nuestras Tiendas</CustomBanner>
    <section class="text-gray-700 space-y-4 py-10">
      <div
        class="flex flex-col lg:flex-row  justify-evenly gap-10 lg:gap-0 items-center py-4"
        >
        <div class="w-10/12 sm:w-1/2 lg:w-56 border border-black p-2">
          <img src="/assets/tiendas/1.png" alt="" />
        </div>
        <div class="flex justify-center h-full w-2/3">
          <header class="w-full">
            <h2 class="text-4xl">Tolón Fashion Mall</h2>
            <ul class="list-disc text-lg">
              <li>
                Dirección: Av. Ppal. De Las Mercedes, C.C. Tolón Piso 1, Plaza
                Norte, Local P1-04. Caracas.
              </li>
              <li>Teléfonos: (0212) 300.87.41 / 300.87.42</li>
              <li>
                Horario Corrido: Lunes a Sábados: 10:00 am a 7:00 pm Domingos de
                12:00 pm a 7:00 pm
              </li>
            </ul>
          </header>
        </div>
      </div>
      <div
        class="flex flex-col lg:flex-row justify-evenly gap-10 lg:gap-0 items-center py-4"
      >
        <div class="w-1/2 lg:w-56 border border-black p-2">
          <img src="/assets/tiendas/2.png" alt="" />
        </div>
        <div class="flex justify-center w-2/3">
          <header class="w-full">
            <h2 class="text-4xl">Centro Comercial Sambil Caracas</h2>
            <ul class="list-disc text-lg">
              <li>
                Dirección: Nivel Feria, Forum Shops, entre Plaza Jardín y Plaza
                Central, Local F-R21. Caracas.
              </li>
              <li>Teléfonos: (0212) 264.85.62 / 264.85.63</li>
              <li>
                Horario Corrido: Lunes a Sábados 10:00 am a 8:00 pm Domingos de
                12:00 pm a 8:00 pm
              </li>
            </ul>
          </header>
        </div>
      </div>
    </section>
  </Template>
</template>

<style scoped>
</style>

