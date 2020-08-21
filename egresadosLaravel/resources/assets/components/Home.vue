<template>
    @{{ message }}
    <router-link to="/chat/example"><a>url to example</a></router-link>
</template>
<script>
export default {
  data () {
    return {
      message: 'This is the home component!'
    };
  }
};
</script>