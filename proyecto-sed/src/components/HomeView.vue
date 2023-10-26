<template>
  <v-app>
    <v-main>
      <v-container class="text-center">
        <h1 class="text-h3 font-weight-bold mb-4">¡Bienvenido al Sistema de Marcación!</h1>
        <p class="text-h5 mb-8">Registra tus horas de entrada y salida, mantén un seguimiento de tus actividades laborales.</p>
        <ul class="text-h6 custom-list">
          <li>Registro de entrada y salida</li>
          <li>Seguimiento de actividades laborales</li>
          <li>Informes detallados</li>
        </ul>
        <v-row class="mt-8">
          <v-col cols="6">
            <v-btn color="primary" to="/register" block large>Registrarse</v-btn>
          </v-col>
          <v-col cols="6">
            <v-btn color="primary" to="/login" block large>Iniciar Sesión</v-btn>
          </v-col>
        </v-row>
      </v-container>
    </v-main>
  </v-app>
</template>

<style scoped>
.custom-list {
  list-style-type: disc;
  list-style-position: inside; 
  padding-left: 20px;
}
</style>
