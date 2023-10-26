<template>
    <v-container>
      <v-row justify="center">
        <v-col cols="12" sm="8" md="6">
          <v-card elevation="2">
            <v-card-title class="text-h5 text-center">Registro de Usuario</v-card-title>
            <v-card-text>
              <v-form @submit.prevent="registrarUsuario">
                <v-text-field v-model="nombre" label="Nombre" outlined required></v-text-field>
                <v-text-field v-model="apellido" label="Apellido" outlined required></v-text-field>
                <v-text-field v-model="email" label="Email" outlined required></v-text-field>
                <v-text-field v-model="contrasena" label="Contraseña" outlined type="password" required></v-text-field>
                <v-text-field v-model="fechaNacimiento" label="Fecha de Nacimiento" outlined type="date" required></v-text-field>
                <v-text-field v-model="direccion" label="Dirección" outlined required></v-text-field>
                <v-btn color="green" type="submit" block>Registrarse</v-btn>
              </v-form>
            </v-card-text>
          </v-card>
        </v-col>
      </v-row>
    </v-container>
  </template>
  
  <script>
  export default {
    data() {
      return {
        nombre: '',
        apellido: '',
        email: '',
        contrasena: '',
        fechaNacimiento: '',
        direccion: '',
      };
    },
    methods: {
      registrarUsuario() {
        // Aquí puedes enviar los datos del usuario al servidor para el registro.
        // Puedes usar una solicitud HTTP (por ejemplo, Axios) para enviar los datos.
        // Después de registrar al usuario, puedes redirigirlo a la página de inicio de sesión.
      },
    },
  };
  </script>
  