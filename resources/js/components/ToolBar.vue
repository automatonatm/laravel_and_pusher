<template>
    <v-card
            color="deep-purple accent-4"
            flat
            height="auto"
            tile
    >
        <v-toolbar dense>
            <!--<v-app-bar-nav-icon></v-app-bar-nav-icon>-->

            <v-toolbar-title>Dev Forum</v-toolbar-title>

            <v-spacer></v-spacer>

            <v-toolbar-items class="hidden-sm-and-down">
                <v-btn text>
                    <v-icon>mdi-home</v-icon>
                    Forum
                </v-btn>

                <v-btn text>
                    <v-icon>mdi-forum</v-icon>
                    Ask Question
                </v-btn>

                <v-btn text>
                    <v-icon>mdi-shape</v-icon>
                    Category
                </v-btn>

                <v-btn text>
                    <v-icon>mdi-login</v-icon>
                    Login
                </v-btn>
            </v-toolbar-items>


        </v-toolbar>
    </v-card>
</template>

<script>
    export default {
        name: "ToolBar"
    }
</script>

<style scoped>

</style>