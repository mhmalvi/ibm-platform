<template>
  <!-- subscribe-area start -->
  <section
    class="subscribe-area border-bot pb-50 pt-md-90 pt-xs-90"
    :class="{
      'ibm-pt': this.$route.name == 'SingleIndustry',
      'pt-0': this.$route.name != 'SingleIndustry',
    }"
  >
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-8">
          <div class="subscribe-wrapper text-center mb-30">
            <h2>Make a click and get updated with our latest news.</h2>
            <div class="subscribe-form-box pos-rel">
              <form class="subscribe-form">
                <input type="text" placeholder="Write Your E-mail" />
              </form>
              <button class="sub_btn">Subscribe Now</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- subscribe-area end -->
</template>

<script>
import path from "../../../src/global-config/mixin/path-solution";
export default {
  mixins: [path],
};
</script>

<style scoped>
.ibm-pt {
  padding-top: 365px !important;
}
</style>
