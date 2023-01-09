<template>
    <base-layout>
        <section
            class="contact-us-area pb-120 pt-30 pt-md-100 pt-xs-20 pb-md-70 pb-xs-70"
        >
            <div class="container">
                <!-- <div class="row">
                    <div class="text-center">
                        <img
                            :src="
                                image_url +
                                '/uploads/how-to-apply/Froms-rafiki.jpg'
                            "
                            class="responsive_img"
                        />
                    </div>
                </div> -->
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <h3 class="mb-10 theme-color">Student Enrolment</h3>
                        <hr />
                    </div>
                    <div class="apply-procedure">
                        <a
                            class="btn-link"
                            :href="
                                image_url +
                                '/frontend/assets/pdf/Enrolment_Form.pdf'
                            "
                            download
                        >
                            <button
                                class="btn btn-lg fs-5 theme-bg text-white wow fadeInUp2 animated"
                                style="width: 18rem; height: 18rem"
                            >
                                <i
                                    class="fa fa-download"
                                    style="
                                        font-size: 2.5rem;
                                        margin-bottom: 0.5rem;
                                    "
                                ></i>
                                <br />
                                Download enrolment form
                            </button>
                        </a>

                        <a
                            class="text-primary btn-link"
                            :href="base_url + '/apply-form'"
                        >
                            <button
                                class="btn btn-lg fs-5 theme-bg text-white wow fadeInUp2 animated"
                                style="width: 18rem; height: 18rem"
                            >
                                <i
                                    class="fa fa-ballot-check"
                                    style="
                                        font-size: 2.5rem;
                                        margin-bottom: 0.5rem;
                                    "
                                ></i>
                                <br />
                                Apply online
                            </button>
                        </a>

                        <!-- <div class="collapsible pb-2">
                            <a
                                @click="changeAngle($event)"
                                data-position="down"
                                class="w-100 collapsible-title"
                                data-bs-toggle="collapse"
                                href="#clps1"
                                role="button"
                                aria-expanded="true"
                                aria-controls="clps1"
                            >
                                <i class="fas fa-file-certificate"></i>
                                &nbsp;
                                <span>Download enrolment form</span>
                                &nbsp;
                                <i
                                    class="fas fa-angle-down requirementAddon"
                                ></i>
                            </a>
                            <div class="my-3"></div>
                            <div class="collapse show" id="clps1">
                                <div class="card card-body">
                                    <p class="pb-2">
                                        Please download and fill up the below
                                        form. Email us at
                                        <strong>info@ibm.vic.edu.au</strong>
                                    </p>

                                    <a
                                        class="btn-link"
                                        :href="
                                            image_url +
                                            '/frontend/assets/pdf/Enrolment_Form.pdf'
                                        "
                                        donwload
                                    >
                                        <i class="fa fa-download"></i>&nbsp;
                                        Enrolment Form (pdf)
                                    </a>
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="collapsible pb-2">
                            <a
                                @click="changeAngle($event)"
                                data-position="right"
                                class="w-100 collapsible-title"
                                data-bs-toggle="collapse"
                                href="#clps2"
                                role="button"
                                aria-expanded="false"
                                aria-controls="clps2"
                            >
                                <i class="fas fa-file-certificate"></i>
                                &nbsp;
                                <span>Apply online</span>
                                &nbsp;
                                <i
                                    class="fas fa-angle-right requirementAddon"
                                ></i>
                            </a>
                            <div class="my-3"></div>
                            <div class="collapse" id="clps2">
                                <div class="card card-body">
                                    <a
                                        class="text-primary btn-link"
                                        :href="base_url + '/apply-form'"
                                        >Please click here to apply</a
                                    >
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </section>
    </base-layout>
</template>

<script>
import path from "../../../../../src/global-config/mixin/path-solution";
import BaseLayout from "../../../layouts/BaseLayout.vue";
export default {
    components: { BaseLayout },
    mixins: [path],
    methods: {
        changeAngle(event) {
            const requirement = event.target;
            let position = $(requirement).attr("data-position");

            if (position == "right") {
                $(requirement).attr("data-position", "down");
                $(requirement)
                    .find(".requirementAddon")
                    .removeClass("fa-angle-right");
                $(requirement)
                    .find(".requirementAddon")
                    .addClass("fa-angle-down");
            } else {
                $(requirement).attr("data-position", "right");
                $(requirement)
                    .find(".requirementAddon")
                    .removeClass("fa-angle-down");
                $(requirement)
                    .find(".requirementAddon")
                    .addClass("fa-angle-right");
            }
        },
    },
    data() {
        return {};
    },
};
</script>
<style scoped>
.requirementAddon {
    float: right;
}
.course-page-title {
    font-size: 24px !important;
    color: #f1592a !important;
}

.collapsible > a {
    /* background-color: #ffeae3 !important;*/
    padding: 5px 10px !important;
    display: block !important;
    width: 100% !important;
    color: #000000 !important;
    border: 1px solid #f1592a;
    border-radius: 5px;
}

.collapsible {
    margin: 15px auto !important;
}

.collapsible .collapsible-title {
    /*  background-color: #ffeae3 !important; */
    padding: 5px 10px !important;
    display: block !important;
    width: 100% !important;
    color: #000000 !important;
}
table tbody tr {
    text-align: left !important;
}
</style>
