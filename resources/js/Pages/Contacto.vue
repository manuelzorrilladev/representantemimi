<script setup>
import CustomBanner from "@/Components/CustomBanner.vue";
import { Head } from "@inertiajs/vue3";
import Template from "./Template.vue";
</script>

<template>
  <Head title="Contacto" />
  <Template>
    <CustomBanner>Contacto</CustomBanner>

    <section class="text-gray-700 flex flex-col gap-10 items-center py-20">
      <header class="flex flex-col items-center gap-3 w-10/12 md:w-1/3 text-center">
        <h2 class="text-3xl">Escríbenos</h2>

        <p>
          Para mayor información puede contáctarnos vía WhatsApp para asegurarle
          una pronta respuesta a su inquietud. Gracias por su interés.
        </p>
        <a
          href="https://api.whatsapp.com/send/?phone=584143092501&text&type=phone_number&app_absent=0"
          class="border bg-custom-purple border-custom-purple duration-200 hover:bg-custom-light hover:text-custom-purple text-xl w-fit text-center py-2 px-6 hover:shadow-[5px_5px_0px_0px_#c980ab] rounded-lg"
          target="_blank"
          >Contáctanos a traves de WhatsApp</a
        >
      </header>
      <header class="flex flex-col gap-3 w-10/12 md:w-1/3">
        <h2 class="text-3xl">Centro de Atención Telefónica</h2>
        <p>
          Contamos con un excelente Equipo de Servicio a la Representante Mimi
          Joyería que estará encantado de atender todos tus requerimientos.
        </p>

        <ul class="text-sm list-disc space-y-2">
          <li>
            <strong> Teléfonos: </strong>(0212) 564.55.62 / 564.87.20 /
            561.35.54/ 561.91.84/ 561.39.60
          </li>
          <li>
            <strong>Horario de Atención:</strong> Lunes a Viernes 8:30 am a 5:30
            pm. Sábados y Domingos: (0212) 264.85.62 / 264.85.63 / 300.87.41 /
            300.87.42
          </li>
        </ul>
        <p>
          A través de nuestro Centro de Atención Telefónica podrás recibir o
          solicitar información sobre:
        </p>
        <ul class="text-sm list-disc space-y-2">
          <li>Catálogo e inscripciones.</li>
          <li>Cambios y, garantías.</li>
          <li>Realizar tus pedidos.</li>
          <li>Confirmar el estatus de tus pedidos.</li>
          <li>Sugerencias y reclamos.</li>
        </ul>
        <p>
          Para mayor información Contáctanos a través de WhatsApp:
          (0414)309.25.01.
        </p>
      </header>
      <header class="flex flex-col gap-3 w-10/12 md:w-1/3 ">
        <h2 class="text-3xl">Correo Electrónico</h2>
        <p>A través de este medio podrás:</p>
        
        <ul class="text-sm list-disc space-y-2">
            <li>Realizar pedidos.</li>
            <li>Recibir información y notificaciones.</li>
            <li>Solicitar Catálogos.</li>
            <li>Verificar el estatus de tus pagos.</li>
        </ul>
       
        <p>No dudes en escribirnos, todos tus comentarios son importantes para nosotros y te responderemos a la brevedad posible.</p>
        
        <ul class="text-sm list-disc space-y-2">
          <li>Para información sobre pedidos: pedidos@mimijoyeria.com</li>
          <li>Contáctanos a través de WhatsApp: (+58)414-309-2501</li>
          
        </ul>
       
      </header>
    </section>
  </Template>
</template>