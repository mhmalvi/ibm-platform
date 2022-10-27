<template>
  <base-layout>
    <div class="text-center">
      <img
        :src="image_url + '/uploads/news/News-rafiki.jpg'"
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
import path from "../../../../../src/global-config/mixin/path-solution";
export default {
  mixins: [path],
  components: { BaseLayout, SearchCertificate },
};
</script>