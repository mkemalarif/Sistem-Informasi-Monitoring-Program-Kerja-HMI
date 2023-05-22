<template>
    <app-layout>
      <welcome-page :remember="remember" />
    </app-layout>
  </template>

  <script>
  import { useRemember } from '@inertiajs/inertia-vue';

  export default {
    props: ['initialPage'],
    setup() {
      const { remember } = useRemember();

      return {
        remember,
      };
    },
  };
  </script>
