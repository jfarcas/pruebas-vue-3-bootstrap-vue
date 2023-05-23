<template>
    <div>
        <h2>Counter: {{ count }}</h2>
        <button @click="increment">Increment</button>
    </div>
</template>

<script>

export default {
    data() {
        return {
            count: 1,
        };
    },
    methods: {
        increment() {
            console.log('increment');
            this.count++;
        },
    },
};
</script>

<style scoped>
h2 {
    color: blue;
}
</style>
