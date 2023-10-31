<template>
    <v-container fluid>
        <v-row justify="center">
            <v-col cols="12" sm="8" md="6">
                <v-card class="elevation-12 mx-auto" style="margin-top:5em;"> 
                    <v-toolbar color="primary" dark flat>
                        <v-toolbar-title class="text-center">Iniciar sesión</v-toolbar-title>
                    </v-toolbar>
                    <v-card-text>
                        <v-form @submit.prevent="login">
                            <v-text-field :rules="[() => !!email || 'Es requerido este campo', rules.email]" v-model="email" label="Correo Electrónico" required></v-text-field>
                            <v-text-field :rules="[() => !!password || 'Es requerido este campo']" v-model="password" label="Contraseña" type="password" required></v-text-field>
                            <v-btn color="primary" dark block type="submit">Iniciar Sesión</v-btn>
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
            email: '',
            password: '',
            rules: {
                email: value => {
                    const pattern = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
                    return pattern.test(value) || 'Invalid e-mail.'
                }
            }
        };
    },
    methods: {
        login() {
            // Aquí puedes enviar la solicitud de inicio de sesión al servidor.
            // Puedes usar Axios u otra librería para hacer la solicitud HTTP.
            // Verifica las credenciales en el servidor y maneja la respuesta.
        },
    },
}
</script>
