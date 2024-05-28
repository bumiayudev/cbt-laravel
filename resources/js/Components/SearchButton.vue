<script setup>

    const props = defineProps({
        action:{
            type: String,
            required: true
        },
        placeholder:{
            type: String,
            required: true
        }
    })
</script>

<template>
    <form :action="action" method="POST">
        <input type="text" name="term" class="rounded-l-lg tex-gray-400" :placeholder="placeholder"
            autocomplete="off" />
        <slot />
    </form>
</template>