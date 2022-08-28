<template>
  <base-layout>
    <div class="text-center">
      <img
        :src="'https://ibm.vic.edu.au/public/uploads/news/News-rafiki.svg'"
        style="height: 600px"
      />
    </div>
    <search-certificate></search-certificate>
    <div style="margin-top: 200px"></div>
  </base-layout>
</template>
<script>
import BaseLayout from "../../../layouts/BaseLayout.vue";
import SearchCertificate from "../../../partials/SearchCertificate.vue";
export default {
  components: { BaseLayout, SearchCertificate },
};
</script>