<template>
  <div class="min-h-screen flex items-center justify-center bg-gray-100">
    <div class="text-center">
      <h1 class="text-4xl font-extrabold text-gray-800 mb-6">¡Bienvenido al Sistema de Marcación!</h1>
      <p class="text-lg text-gray-600 mb-8">
        Registra tus horas de entrada y salida, mantén un seguimiento de tus actividades laborales.
      </p>
      <ul class="list-disc list-inside text-gray-600 mb-8">
        <li>Registro de entrada y salida</li>
        <li>Seguimiento de actividades laborales</li>
        <li>Informes detallados</li>
      </ul>
      <div class="flex flex-col items-center space-y-4">
        <router-link to="/register" class="btn-primary">Registrarse</router-link>
        <router-link to="/login" class="btn-primary">Iniciar Sesión</router-link>
      </div>
    </div>
  </div>
</template>