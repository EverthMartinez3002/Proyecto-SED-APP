<template>
    <v-container fluid>
      <v-row justify="center">
        <v-col cols="12" sm="8" md="6">
          <v-card class="elevation-12" style="margin-top: 5em;">
            <v-toolbar color="#3F51B5" dark flat>
              <v-toolbar-title class="text-center">Marcar Asistencia</v-toolbar-title>
            </v-toolbar>
            <v-card-text>
              <v-form @submit.prevent="marcarAsistencia">
                <v-text-field :rules="[() => !!nombre || 'Este campo es requerido']" v-model="nombre" label="Nombre" required></v-text-field>
                <v-text-field :rules="[() => !!apellido || 'Este campo es requerido']" v-model="apellido" label="Apellido" required></v-text-field>
                <v-btn color="#5C6BC0" dark block type="submit">Marcar Asistencia</v-btn>
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
      };
    },
    methods: {
      marcarAsistencia() {
        // Aquí puedes enviar la solicitud para marcar la asistencia al servidor.
        // Puedes usar Axios u otra librería para hacer la solicitud HTTP.
        // Verifica la información en el servidor y maneja la respuesta.
      },
    },
  };
  </script>
  