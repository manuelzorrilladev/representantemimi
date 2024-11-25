<script setup>
import { Link ,usePage} from "@inertiajs/vue3";
import {isDesktop} from '../utils.js'
import ApplicationLogo from "./ApplicationLogo.vue";
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import { computed, ref } from "vue";
const page = usePage()

const nav = ref(false);
const style = computed(() => {
  return nav.value ? "show" : "hid";
});
</script>

<template>
  <nav class="flex items-center flex-col">
 
    <Link :href="'/'">
      <ApplicationLogo />
    </Link>
    <section v-if="isDesktop()" id="desktop" class="bg-custom-red py-2 w-full flex justify-evenly">
      <Link href="/representante" class="text-custom-light uppercase hover:underline">Representante Mimi</Link>
      <Link href="/promociones" class="text-custom-light uppercase hover:underline">Promociones</Link>
      <Link href="/productos" class="text-custom-light uppercase hover:underline">Productos</Link>
      <Link href="/tiendas" class="text-custom-light uppercase hover:underline">Tiendas</Link>
      <Link href="/empresa" class="text-custom-light uppercase hover:underline">Empresa</Link>
      <Link href="/contacto" class="text-custom-light uppercase hover:underline">Contacto</Link>
      <div  class="text-custom-light uppercase hover:underline">Encarte</div>
      <Dropdown v-if="$page.props.auth.user">
        <template #trigger>
          <button
            v-if="$page.props.jetstream.managesProfilePhotos"
            class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-custom-light transition"
          >
            <img
              class="h-8 w-8 rounded-full object-cover"
              :src="$page.props.auth.user.profile_photo_url"
              :alt="$page.props.auth.user.name"
            />
          </button>

          <span v-else class="inline-flex rounded-md">
            <button
              type="button"
              class="inline-flex items-center  border border-transparent text-sm leading-4 font-medium rounded-md text-custom-light uppercase   transition ease-in-out duration-150"
            >
              {{ $page.props.auth.user.name }}

              <svg
                class="ms-2 -me-0.5 h-4 w-4"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M19.5 8.25l-7.5 7.5-7.5-7.5"
                />
              </svg>
            </button>
          </span>
        </template>

        <template #content>
          <!-- Account Management -->
          <div class="block px-4 py-2 text-sm text-custom-light bg-custom-red">
            Cuenta
          </div>

          <DropdownLink :href="route('dashboard')" > Perfil </DropdownLink>

          <DropdownLink
            v-if="$page.props.jetstream.hasApiFeatures"
            :href="route('api-tokens.index')"
          >
            API Tokens
          </DropdownLink>

          <div class="border-t border-gray-200" />

          <!-- Authentication -->
          <form @submit.prevent="logout">
            <DropdownLink as="button"> Cerrar Sesión </DropdownLink>
          </form>
        </template>
      </Dropdown>
      
      <template v-if="!$page.props.auth.user" >
        <Link :href="route('login')" class="text-custom-light uppercase hover:underline">Iniciar Sesión</Link>
        <Link :href="route('register')" class="text-custom-light uppercase hover:underline">Registrar</Link>
      </template>
    </section>




    <section v-else
      id="mobile"
      class="bg-custom-red w-full flex items-start flex-col pl-8"
    >
      <button
        class="relative border w-14 h-12 rounded-lg my-2"
        @click="nav = !nav"
      >
        <font-awesome-icon
          :icon="nav ? ['fas', 'x'] : ['fas', 'bars']"
          class="text-custom-light text-2xl"
        />
      </button>
      <Transition name="appear">
        <div
          v-if="nav"
          class="bg-custom-red w-full flex items-start flex-col gap-6 duration-200"
        >
          <Link class="text-custom-light uppercase hover:underline"
            >Representante Mimi</Link
          >
          <Link class="text-custom-light uppercase hover:underline"
            >Promociones</Link
          >
          <Link class="text-custom-light uppercase hover:underline"
            >Productos</Link
          >
          <Link class="text-custom-light uppercase hover:underline"
            >Tiendas</Link
          >
          <Link class="text-custom-light uppercase hover:underline"
            >Empresa</Link
          >
          <Link class="text-custom-light uppercase hover:underline"
            >Contacto</Link
          >
          <Link class="text-custom-light uppercase hover:underline"
            >Encarte</Link
          >

          <Link
            v-if="$page.props.auth.user"
            :href="route('dashboard')"
            class="text-custom-light uppercase hover:underline"
            >Perfil</Link
          >

          <template v-else>
            <Link
              :href="route('login')"
              class="text-custom-light uppercase hover:underline"
              >Iniciar Sesión</Link
            >
            <Link
              :href="route('register')"
              class="text-custom-light uppercase hover:underline"
              >Registrar</Link
            >
          </template>
        </div>
      </Transition>
    </section>
  </nav>
</template>

<style scoped>
.appear-enter-active,
.appear-leave-active {
  transition: opacity 0.3s ease;
}

.appear-enter-from,
.appear-leave-to {
  opacity: 0;
}
</style>


