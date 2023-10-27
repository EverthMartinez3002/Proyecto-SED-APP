<template>
    <v-container>
      <v-row justify="center">
        <v-col cols="12" sm="8" md="6">
          <v-card elevation="2">
            <v-card-title class="text-h5 text-center font-weight-bold">Registro de usuario</v-card-title>
            <v-card-text>
              <v-form @submit.prevent="registrarUsuario">
                <v-text-field :rules="[() => !!nombre || 'Es requerido este campo']" counter v-model="nombre" label="Nombre" outlined maxlength="20" required></v-text-field>
                <v-text-field :rules="[() => !!apellido || 'Es requerido este campo']" counter v-model="apellido" label="Apellido" outlined maxlength="20" required></v-text-field>
                <v-text-field :rules="[() => !!email || 'Es requerido este campo', rules.email]" counter v-model="email" label="Email" outlined maxlength="20" required></v-text-field>
                <v-text-field :rules="[() => !!contrasena || 'Es requerido este campo']" counter v-model="contrasena" label="Contraseña" outlined maxlength="20" type="password" required></v-text-field>
                <v-text-field :rules="[() => !!fechaNacimiento || 'Es requerido este campo']" v-model="fechaNacimiento" label="Fecha de Nacimiento" outlined type="date" required></v-text-field>
                <v-text-field :rules="[() => !!direccion || 'Es requerido este campo']" counter v-model="direccion" label="Dirección" outlined maxlength="30" required></v-text-field>
                <v-autocomplete :rules="[() => !!rol || 'Es requerido este campo']" v-model="rol"  label="Rol" outlined :items="roles" placeholder="Seleciona..." required></v-autocomplete>
                <v-btn color="green" type="submit" block>Registrarse</v-btn>
              </v-form>
            </v-card-text>
          </v-card>
        </v-col>
      </v-row>
    </v-container>
  </template>
  
  <script>
  import api from '../components/utils/axios.config';
  export default {
    data() {
      return {
        nombre: '',
        apellido: '',
        email: '',
        contrasena: '',
        fechaNacimiento: '',
        direccion: '',
        rol: '',
        rules: {
          email: value => {
            const pattern = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
            return pattern.test(value) || 'Invalid e-mail.' },
        },
        roles: ['Usuario', 'Admin', 'SuperAdmin'],
      };
    },
    methods: {
     async registrarUsuario() {
      try {
         const response = await api.post('user/create', {
          nombre: this.nombre,
          apellido: this.apellido,
          email: this.email,
          contrasena: this.contrasena,
          fecha_nacimiento: this.fechaNacimiento,
          direccion: this.direccion,
          rol: this.rol
         });

         if(response.status === 200){
          this.$router.push('/')
         }
      } catch(error){
        console.log(error)
      }
      },
    },
  };
  </script>
  