<template>
    <!-- why-chose-section-wrapper start -->
    <div class="why-chose-section-wrapper theme-bg">
        <!-- why-chose-us start -->
        <section class="why-chose-us subscribe-area">
            <div
                class="why-chose-us-bg pt-100 pb-100 pt-md-95 pb-md-90 pt-xs-30 pb-xs-30 theme-bg"
            >
                <div class="container">
                    <div class="row align-items-center py-50">
                        <div class="col-md-6">
                            <div class="chose-wrapper">
                                <div
                                    class="section-title mb-30 wow fadeInUp2 animated"
                                    data-wow-delay=".1s"
                                >
                                    <img
                                        :src="image_url + '/uploads/02.svg'"
                                        alt=""
                                        class="img-fluid rounded"
                                    />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="chose-wrapper">
                                <div
                                    class="section-title mb-30 wow fadeInUp2 animated"
                                    data-wow-delay=".1s"
                                >
                                    <!-- <h5 class="bottom-line mb-25">Explore IBM</h5> -->
                                    <h2 class="mb-25 text-white">
                                        WELCOME TO IBM
                                    </h2>
                                    <!-- <p
                                        class="text-white text-justify"
                                        style="text-align: justify"
                                    >
                                        IBM enables Australian people to
                                        progress to professional education or
                                        training programs while they are already
                                        experienced and want to grow a sharp
                                        career line. IBM provides a quick
                                        pathway to the higher professional
                                        qualification or equivalent degree under
                                        some conditions. If you've been thinking
                                        about going for a long career, this can
                                        make the process much easier for any
                                        student through Courses for Overseas
                                        Students (CRICOS).
                                    </p> -->
                                    <p
                                        class="text-white text-justify"
                                        style="text-align: justify"
                                    >
                                        Institute of Business and Management is a Registered Training Organisation RTO Number: 45516 | CRICOS Number: 03785D). We offer training and assessment in nationally recognised qualification courses. We are also registered for the provision of vocational education and training to international students studying in Australia. Our aim at IBM (VIC) is to deliver courses and other learning experiences that will empower our students to learn fully, effectively, efficiently, and with great satisfaction.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- why-chose-us end -->
    </div>
    <!-- why-chose-section-wrapper start -->
</template>

<script>
import path from "../../../src/global-config/mixin/path-solution";
export default {
    mixins: [path],
    created() {},

    methods: {},
};
</script>
<style scoped>
.py-100 {
    padding: 100px 0px !important;
}
.section-title p {
    font-size: 17px !important;
}
</style>
