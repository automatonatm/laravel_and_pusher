<template>
    <div>
    <v-footer
            dark
            padless
    >
        <v-card
                flat
                tile
                class="indigo lighten-1 white--text text-center"
        >
            <v-card-text>
                <v-btn
                        v-for="icon in icons"
                        :key="icon"
                        class="mx-4 white--text"
                        icon
                >
                    <v-icon size="24px">{{ icon }}</v-icon>
                </v-btn>
            </v-card-text>

            <v-card-text class="white--text pt-0">

            </v-card-text>

            <v-divider></v-divider>

            <v-card-text class="white--text">
                {{ new Date().getFullYear() }} — <strong>Vuetify</strong>
            </v-card-text>
        </v-card>
    </v-footer>
    </div>
</template>

<script>
    export default {
        name: "Footer",

        data() {
            return {
                icons: [
                    'fab fa-facebook',
                    'fab fa-twitter',
                    'fab fa-google-plus',
                    'fab fa-linkedin',
                    'fab fa-instagram',
                ],
            }
        },

    }
</script>

<style scoped>

</style>