<template>
    <transition mode="out-in"
    enter-active-class="animate__animated animated--fade-in"
    leave-active-class="animate_animated animated--fade-out">
        <router-view/>
    </transition>
</template>

<script>
    import AppPlayers from './admin/Players'

    export default {
        components: {
            // 'app-players': AppPlayers,
        }
    }
</script>

<style>

</style>
