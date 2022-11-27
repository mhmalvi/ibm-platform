<template>
    <base-layout>
        <div class="text-center mt-5">
            <img
                :src="image_url + '/uploads/useful-link/useful_link.jpg'"
                class="responsive_img"
            />
        </div>
        <section
            class="about-us-area pt-40 pb-80 pt-md-40 pb-md-70 pt-xs-30 pb-xs-10"
        >
            <div class="container">
                <div class="collapsible pb-2">
                    <a
                        @click="changeAngle($event)"
                        data-position="down"
                        class="w-100 collapse-title"
                        data-bs-toggle="collapse"
                        href="#clps1"
                        role="button"
                        aria-expanded="false"
                        aria-controls="clps1"
                    >
                        <i class="fas fa-file-certificate"></i>
                        &nbsp;
                        <span>Checklist for newly arrived students</span>
                        &nbsp;
                        <i class="fas fa-angle-down requirementAddon"></i>
                    </a>
                    <div class="my-3"></div>
                    <div class="collapse show" id="clps1">
                        <div class="card card-body" style="text-align: justify">
                            <a
                                target="_blank"
                                class="btn-link"
                                href="https://www.studymelbourne.vic.gov.au/welcome-2020/checklist-for-newly-arrived-students "
                            >
                                Checklist for newly arrived students&nbsp;
                                <i
                                    class="fa fa-external-link"
                                    aria-hidden="true"
                                ></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="collapsible pb-2">
                    <a
                        @click="changeAngle($event)"
                        data-position="right"
                        class="w-100 collapse-title"
                        data-bs-toggle="collapse"
                        href="#clps2"
                        role="button"
                        aria-expanded="false"
                        aria-controls="clps1"
                    >
                        <i class="fas fa-file-certificate"></i>
                        &nbsp;
                        <span>Standards for RTO’s 2015</span>
                        &nbsp;
                        <i class="fas fa-angle-right requirementAddon"></i>
                    </a>
                    <div class="my-3"></div>
                    <div class="collapse" id="clps2">
                        <div class="card card-body" style="text-align: justify">
                            <a
                                target="_blank"
                                class="btn-link"
                                href="http://www.education.vic.gov.au/training/providers/rto/Pages/competency.aspx "
                            >
                                Standards for RTO’s 2015&nbsp;
                                <i
                                    class="fa fa-external-link"
                                    aria-hidden="true"
                                ></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="collapsible pb-2">
                    <a
                        @click="changeAngle($event)"
                        data-position="right"
                        class="w-100 collapse-title"
                        data-bs-toggle="collapse"
                        href="#clps3"
                        role="button"
                        aria-expanded="false"
                        aria-controls="clps1"
                    >
                        <i class="fas fa-file-certificate"></i>
                        &nbsp;
                        <span>Overseas Students Ombudsman</span>
                        &nbsp;
                        <i class="fas fa-angle-right requirementAddon"></i>
                    </a>
                    <div class="my-3"></div>
                    <div class="collapse" id="clps3">
                        <div class="card card-body" style="text-align: justify">
                            <a
                                target="_blank"
                                class="btn-link"
                                href="http://www.oso.gov.au/"
                            >
                                http://www.oso.gov.au/&nbsp;
                                <i
                                    class="fa fa-external-link"
                                    aria-hidden="true"
                                ></i>
                            </a>
                            <br />
                            <a
                                target="_blank"
                                class="btn-link"
                                href="http://www.oso.gov.au/useful-links/"
                            >
                                http://www.oso.gov.au/useful-links/ &nbsp;
                                <i
                                    class="fa fa-external-link"
                                    aria-hidden="true"
                                ></i>
                            </a>
                            <br />
                            <a
                                target="_blank"
                                class="btn-link"
                                href="https://www.orange.edu.au//wp-content/uploads/pdf/International-students.pdf"
                            >
                                https://www.orange.edu.au//wp-content/uploads/pdf/International-students.pdf
                                &nbsp;
                                <i
                                    class="fa fa-external-link"
                                    aria-hidden="true"
                                ></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="collapsible pb-2">
                    <a
                        @click="changeAngle($event)"
                        data-position="right"
                        class="w-100 collapse-title"
                        data-bs-toggle="collapse"
                        href="#clps4"
                        role="button"
                        aria-expanded="false"
                        aria-controls="clps1"
                    >
                        <i class="fas fa-file-certificate"></i>
                        &nbsp;
                        <span>ASQA</span>
                        &nbsp;
                        <i class="fas fa-angle-right requirementAddon"></i>
                    </a>
                    <div class="my-3"></div>
                    <div class="collapse" id="clps4">
                        <div class="card card-body" style="text-align: justify">
                            <a
                                target="_blank"
                                class="btn-link"
                                href="http://www.asqa.gov.au/for-students/for-students.html"
                            >
                                http://www.asqa.gov.au/for-students/for-students.html
                                &nbsp;
                                <i
                                    class="fa fa-external-link"
                                    aria-hidden="true"
                                ></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="collapsible pb-2">
                    <a
                        @click="changeAngle($event)"
                        data-position="right"
                        class="w-100 collapse-title"
                        data-bs-toggle="collapse"
                        href="#clps5"
                        role="button"
                        aria-expanded="false"
                        aria-controls="clps1"
                    >
                        <i class="fas fa-file-certificate"></i>
                        &nbsp;
                        <span>ELICOS</span>
                        &nbsp;
                        <i class="fas fa-angle-right requirementAddon"></i>
                    </a>
                    <div class="my-3"></div>
                    <div class="collapse" id="clps5">
                        <div class="card card-body" style="text-align: justify">
                            <a
                                target="_blank"
                                class="btn-link"
                                href="http://www.elicos.com/"
                            >
                                http://www.elicos.com/ &nbsp;
                                <i
                                    class="fa fa-external-link"
                                    aria-hidden="true"
                                ></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="collapsible pb-2">
                    <a
                        @click="changeAngle($event)"
                        data-position="right"
                        class="w-100 collapse-title"
                        data-bs-toggle="collapse"
                        href="#clps6"
                        role="button"
                        aria-expanded="false"
                        aria-controls="clps1"
                    >
                        <i class="fas fa-file-certificate"></i>
                        &nbsp;
                        <span> LLN</span>
                        &nbsp;
                        <i class="fas fa-angle-right requirementAddon"></i>
                    </a>
                    <div class="my-3"></div>
                    <div class="collapse" id="clps6">
                        <div class="card card-body" style="text-align: justify">
                            <a
                                target="_blank"
                                class="btn-link"
                                href=" http://www.readingwritinghotline.edu.au "
                            >
                                http://www.readingwritinghotline.edu.au &nbsp;
                                <i
                                    class="fa fa-external-link"
                                    aria-hidden="true"
                                ></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </base-layout>
</template>
<script>
import BaseLayout from "../../../layouts/BaseLayout.vue";
import path from "../../../../../src/global-config/mixin/path-solution";
export default {
    mixins: [path],
    components: { BaseLayout },
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
};
</script>

<style scoped>
.requirementAddon {
    float: right;
}

.collapsible {
    margin: 15px auto !important;
}

.collapsible a.collapse-title {
    padding: 5px 8px !important;
    display: block !important;
    width: 100% !important;
    color: #000000 !important;
    border: 1px solid #f1592a;
    border-radius: 5px;
}
table tbody tr {
    text-align: left !important;
}

.container .bullet-list {
    list-style-type: none;
}

/* Using the pseudo element before to hold a border-triangle */
.bullet-list li:before {
    content: "";
    display: inline-block;
    height: 0;
    width: 0;
    border-color: transparent #111;
    border-style: solid;
    border-width: 4px 0 4px 4px;
    margin-right: 0.5em;
}
</style>
