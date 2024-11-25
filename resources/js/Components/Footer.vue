<script setup>
import { Link } from "@inertiajs/vue3";
import ApplicationLogo from "./ApplicationLogo.vue";
</script>

<template>
  <footer
    class="bg-custom-gray-2 w-full flex flex-col justify-start items-center"
  >
    <div
      class="py-14 flex flex-col md:flex-row items-center justify-evenly gap-4 w-full md:h-[10vh] border-b border-gray-300"
    >
      <div>
        <h2 class="text-custom-red text-lg font-bold animate-bounce">
          ¡Consigue tu catálogo!
        </h2>

        <h1
          class="md:w-full text-sm md:text-lg text-custom-red text-center tracking-wide"
        >
          Sé la #MUJER<strong>EXITOSA</strong> <br />
          que siempre soñaste.
        </h1>
      </div>
      <Link
        href="/"
        class="border bg-custom-red text-custom-light border-custom-red duration-200 hover:bg-custom-light hover:text-custom-red text-xl w-1/2 md:w-1/4 uppercase text-center py-3 hover:shadow-[5px_5px_0px_0px_#d54d37]"
        >ver más</Link
      >
    </div>

    <div class="p-4 sm:p-6 w-full">
      <div class="mx-auto max-w-screen-xl">
        <div class="md:flex md:justify-between">
          <div class="mb-6 md:mb-0">
            <Link href="/" class="flex items-center justify-center">
              <ApplicationLogo />
            </Link>
          </div>
          <div
            class="grid px-10 grid-cols-1 sm:grid-cols-2 gap-8 sm:gap-6 md:grid-cols-3"
          >
            <div>
              <h2 class="mb-6 text-lg font-bold text-custom-golden uppercase">
                Explorar
              </h2>
              <ul class="text-custom-golden space-y-2">
                <li>
                  <a href="/" class="hover:underline">REPRESENTANTE MIMI </a>
                </li>
                <li>
                  <a href="https://tailwindcss.com/" class="hover:underline">
                    PROMOCIONES</a
                  >
                </li>
                <li>
                  <a href="https://tailwindcss.com/" class="hover:underline">
                    PRODUCTOS</a
                  >
                </li>
                <li>
                  <a href="https://tailwindcss.com/" class="hover:underline">
                    TIENDAS</a
                  >
                </li>
                <li>
                  <a href="https://tailwindcss.com/" class="hover:underline">
                    EMPRESA</a
                  >
                </li>
                <li>
                  <a href="https://tailwindcss.com/" class="hover:underline">
                    CONTACTO</a
                  >
                </li>
              </ul>
            </div>
            <div>
              <h2 class="mb-6 text-lg font-bold text-custom-golden uppercase">
                Inicio
              </h2>
              <ul class="text-custom-golden space-y-2">
                <li>
                  <a href="https://tailwindcss.com/" class="hover:underline">
                    INGRESA</a
                  >
                </li>
                <li>
                  <a href="https://tailwindcss.com/" class="hover:underline">
                    REGÍSTRATE</a
                  >
                </li>
              </ul>
            </div>
            <div>
              <h2
                class="mb-6 text-lg font-bold text-custom-golden uppercase space-y-2"
              >
                Tiendas
              </h2>
              <ul class="text-custom-golden space-y-2">
                <li class="list-disc">
                  CENTRO COMERCIAL <br />SAMBIL CARACAS: <br />
                  (212)264.85.63/264.85.62
                </li>
                <li class="list-disc">
                  TOLÓN FASHION MALL: <br />
                  (212)300.87.41/300.87.42
                </li>
              </ul>
            </div>
          </div>
        </div>
        <hr class="my-6 border-gray-300 sm:mx-auto lg:my-8" />
        <div class="sm:flex sm:items-center sm:justify-between">
          <span class="text-sm text-custom-purple sm:text-center">
            © 2024 Mimi Joyería. Todos los derechos reservados.
          </span>
          <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">
            <a
              href="https://www.facebook.com/profile.php?id=100094196290901"
              class="text-custom-purple hover:text-custom-golden text-xl"
            >
             <font-awesome-icon :icon="['fab','facebook']"/>
            </a>
            <a
              href="https://www.instagram.com/representantemimivzla/"
              class="text-custom-purple hover:text-custom-golden text-xl"
            >
           <font-awesome-icon :icon="['fab','instagram']"/>
            </a>
            <a
              href="#"
              class="text-custom-purple hover:text-custom-golden text-xl"
            >
             <font-awesome-icon :icon="['fab','whatsapp']"/>
            </a>
          </div>
        </div>
      </div>
    </div>
  </footer>
</template>

<style scoped>
</style>

