<script setup>
import { computed, ref } from "vue";
import Template from "./Template.vue";
import CustomBanner from '@/Components/CustomBanner.vue';    
import { Head } from "@inertiajs/vue3";
const section = ref(1);
const activeClass = (id) => {
  return section.value == id ? "bg-custom-purple text-custom-light" : "";
};
function changeClass(id){
    section.value = 0 
    setTimeout(() => {
       section.value = id
    },300)
}

const check = ref(true)

</script>

<template>
  <Head title="Representante" />
  <Template>
    <CustomBanner>
        REPRESENTANTE MIMI
    </CustomBanner>
    <section class="border flex items-center justify-center h-[120vh]">
      <div class="border border-gray-400 rounded-xl overflow-hidden w-10/12 flex h-2/3">
        <aside class="w-1/3 border-r border-gray-400  overflow-hidden h-full bg-custom-gray-2">
          <ul>
            <li>
              <button
                @click="changeClass(1)"
                :class="activeClass(1)"
                class="border w-full py-4 text-gray-700 bg-custom-gray-2 duration-200 hover:bg-custom-purple hover:text-custom-light"
              >
                ¿CÓMO SER REPRESENTANTE MIMI?
              </button>
            </li>
            <li>
              <button
                @click="changeClass(2)"
                :class="activeClass(2)"
                class="border w-full py-4 text-gray-700 bg-custom-gray-2 duration-200 hover:bg-custom-purple hover:text-custom-light"
              >
                SOLICITA TU CATÁLOGO
              </button>
            </li>
            <li>
              <button
                @click="changeClass(3)"
                :class="activeClass(3)"
                class="border w-full py-4 text-gray-700 bg-custom-gray-2 duration-200 hover:bg-custom-purple hover:text-custom-light"
              >
                ¿CÓMO REALIZAR UN PEDIDO?
              </button>
            </li>
            <li>
              <button
                @click="changeClass(4)"
                :class="activeClass(4)"
                class="border w-full py-4 text-gray-700 bg-custom-gray-2 duration-200 hover:bg-custom-purple hover:text-custom-light"
              >
                PREGUNTAS FRECUENTES
              </button>
            </li>
          </ul>
        </aside>
        <div class="w-2/3 px-10 text-gray-700 h-full py-8">
          <Transition name="appear">
            <div v-if="section == 1" class="space-y-5">
              <p>
                Ser Representante Mimi Joyería significa que tendrás la
                oportunidad de independizarte, tener tu negocio propio, ser tu
                propia jefa y organizar tu tiempo en función de tus necesidades.
                No esperes más para alcanzar el éxito que tanto deseas, ven y
                forma parte de nuestro equipo de Representantes Mimi Joyería.
              </p>
              <h2 class="text-3xl">
                ¿Qué Beneficios obtienes al convertirte en Representante Mimi
                Joyería?
              </h2>
              <ul class="list-disc">
                <li>Independencia financiera</li>
                <li>Libertad para alcanzar tus sueños</li>
              </ul>
            </div>
            </Transition
          >
          <Transition name="appear">
            <div v-if="section == 2" class="flex flex-col gap-4">
              <p>
                Si te encuentras en el Área Metropolitana de Caracas busca tu
                catálogo Gratis en cualquiera de nuestras tiendas.
              </p>
              <p>
                Si te encuentras en el interior del país el catálogo es Gratis,
                para obtenerlo debes cancelar el flete de envío. Para mayor
                informacion contáctanos a través de WhatsApp: (0414)309.25.01
              </p>
              <a
                href="https://api.whatsapp.com/send/?phone=584143092501&text&type=phone_number&app_absent=0"
                class="border bg-custom-purple border-custom-purple duration-200 hover:bg-custom-light hover:text-custom-purple text-xl w-fit text-center py-2 px-6 hover:shadow-[5px_5px_0px_0px_#c980ab] rounded-lg"
                target="_blank"
                >Contáctanos a traves de WhatsApp</a
              >
            </div></Transition
          >
          <Transition name="appear">
            <div v-if="section == 3" class="flex flex-col gap-4">
              <h2 class="text-3xl">¿Cómo Realizar tus Pedidos?</h2>
              <p>
                Visita cualquiera de nuestras tiendas Mimi Joyería. Un
                especialista de nuestra tienda te guiará paso a paso. Para mayor
                información contáctanos a través de WhatsApp: (0414)309.25.01.
                Para asegurar una pronta respuesta.
              </p>
              <a
                href="https://api.whatsapp.com/send/?phone=584143092501&text&type=phone_number&app_absent=0"
                class="border bg-custom-purple border-custom-purple duration-200 hover:bg-custom-light hover:text-custom-purple text-xl w-fit text-center py-2 px-6 hover:shadow-[5px_5px_0px_0px_#c980ab] rounded-lg"
                target="_blank"
                >Contáctanos a traves de WhatsApp</a
              >
            </div></Transition
          >
          <Transition name="appear">
            <div v-if="section == 4" class="flex flex-col gap-3 ">
              <h2 class="text-3xl">Preguntas Frecuentes</h2>
              <ul class="text-sm list-disc space-y-2">
                <li>
                  <strong>CÓMO OBTENER UN CATÁLOGO:</strong> Para obtener un
                  Catálogo en físico totalmente gratis, visítanos en cualquiera
                  de nuestras tiendas ubicadas en la esquina Cují en el centro
                  de Caracas, en el Centro Comercial Sambil Caracas nivel Feria
                  y en el Tolón Fashion Mall piso 1. También podemos enviar el
                  catálogo totalmente gratis a cualquier parte del país, pagando
                  únicamente el envío. De igual forma, puedes solicitar el
                  Catálogo en formato digital a través de nuestro Canal de
                  Atención vía WhatsApp al número 0414 3092501
                </li>

                <li>
                  <strong>GANANCIA PARA EL REPRESENTANTE:</strong> Al ser un
                  Representante Mimi obtienes un 30% de ganancia sobre tus
                  ventas de prendas garantizadas en Oro 18 quilates y Plata 925.
                  Esto quiere decir, que si vendes un producto cuyo precio de
                  lista es 100, tú pagas únicamente 70, lo vendes en 100 y ganas
                  30. ¡Así de fácil!
                </li>

                <li>
                  <strong>AFILIACIÓN Y COMPRA MÍNIMA:</strong> Para afiliarte
                  como Representante Mimí solo debes adquirir una (1) prenda. No
                  existe límite de prendas a adquirir.
                </li>

                <li>
                  <strong>GARANTÍA Y DEVOLUCIONES:</strong> En Mimi Joyería
                  todas nuestras prendas están garantizadas, en Oro 18 quilates
                  y Plata 925. Puedes devolver una prenda cuando gustes,
                  presentando la factura de compra y la pieza en buen estado sin
                  uso.
                </li>

                <li>
                  <strong
                    >CADA CUÁNTO TIEMPO PUEDE UN CLIENTE SOLICITAR
                    CATÁLOGO:</strong
                  >
                  Las veces que lo desee siempre y cuando cancele el envío.
                </li>

                <li>
                  <strong>ENVÍO DE MERCANCÍA:</strong> En Mimi Joyería
                  realizamos envíos a nivel nacional.
                </li>

                <li>
                  <strong>MÉTODOS DE PAGO:</strong> En Mimi Joyería podrá
                  cancelar sus compras a través de cualquiera de nuestros
                  múltiples métodos de pago, tales como efectivo, tarjeta de
                  débito y crédito, transferencias bancarias nacionales y
                  extranjeras, Zelle y Tarjetas Internacionales.
                </li>
              </ul>
              <p>
                Para mayor información Contáctanos a través de WhatsApp:
                (0414)309.25.01.
              </p>
            </div></Transition
          >
        </div>
      </div>
    </section>
  </Template>
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

