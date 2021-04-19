<template>
    <div>
        <p>This is an example Vue component!</p>
        <p>Count: {{ dynamicCount }}</p>
        <button @click="dynamicCount--">Decrease</button>
        <button @click="dynamicCount++">Increase</button>
    </div>
</template>

<script>
export default {
    props: ['count'],
    data() {
        return {
            dynamicCount: this.count || 0,
        }
    },
    methods: {
      //
    },
}
</script>
