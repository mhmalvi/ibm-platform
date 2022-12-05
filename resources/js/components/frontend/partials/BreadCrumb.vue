<template>
    <section
        v-if="this.$route.name != 'Home'"
        class="page-title-area d-flex align-items-end"
        :style="background"
    >
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-12">
                    <div class="page-title-wrapper mb-50">
                        <h1 class="page-title mb-25 theme-color">
                            {{ pageName }}
                        </h1>
                        <div class="breadcrumb-list">
                            <ul class="breadcrumb">
                                <li><a href="/">Home - </a></li>
                                <li>
                                    <a href="#" class="theme-color">{{
                                        pageName
                                    }}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
<script>
export default {
    data() {
        return {
            pageName: "",
            background: "",
            get_slug: "",
        };
    },

    watch: {
        "$route.params.slug"(newSlug, oldSlug) {
            // this.getSingleBlogs();
            if (newSlug == "cpc30220-certificate-iii-in-carpentry") {
                return (this.pageName = "Certificate III In Carpentry");
            } else {
                if (
                    this.$route.name == "SingleCourse" ||
                    this.$route.name == "SingleBlog" ||
                    this.$route.name == "SingleIndustry"
                ) {
                    var text = newSlug;
                    var result = text.replace(/([A-Z])/g, " $1");
                    var finalResult = result.replaceAll("-", " ");
                    return (this.pageName = finalResult.replace(
                        /(?:^|\s)\S/g,
                        function (a) {
                            return a.toUpperCase();
                        }
                    ));
                }
            }
        },
    },

    mounted() {
        this.background =
            "background-image: url(https://ibm.vic.edu.au/public/frontend/assets/img/page-title-bg/01.jpg);";
        if (this.$route.params.slug == "certificate-iii-in-carpentry") {
            this.pageName = "Certificate III In Carpentry";
        } else {
            var text =
                this.$route.name == "SingleCourse" ||
                this.$route.name == "SingleBlog" ||
                this.$route.name == "SingleIndustry"
                    ? this.$route.params.slug
                    : this.$route.name;
            var result = text.replace(/([A-Z])/g, " $1");
            if (result == "sit40521-certificate-iv-in-kitchen-management") {
                /*  this.background =
          "background-image: url(https://ibm.vic.edu.au/public/frontend/assets/img/page-title-bg/01.jpg);"; */
                return (this.pageName =
                    "SIT40521 Certificate IV in Kitchen Management");
            } else if (result == "sit50422-diploma-of-hospitality-management") {
                /*  this.background =
          "background-image: url(https://ibm.vic.edu.au/public/frontend/assets/img/page-title-bg/01.jpg);"; */
                return (this.pageName =
                    "SIT50422 Diploma of Hospitality Management");
            } else if (
                result == "sit30821-certificate-iii-in-commercial-cookery"
            ) {
                /*  this.background =
          "background-image: url(https://ibm.vic.edu.au/public/frontend/assets/img/page-title-bg/01.jpg);"; */
                return (this.pageName =
                    "SIT30821 Certificate III in Commercial Cookery");
            } else if (text == "WelcomeToIbm") {
                return (this.pageName = "Welcome To IBM");
            } else if (text == "WhyChooseIbm") {
                return (this.pageName = "Welcome To IBM");
            } else if (text == "cpc30220-certificate-iii-in-carpentry") {
                return (this.pageName =
                    "CPC30220 Certificate III In Carpentry");
            } else if (text == "cpc30220-certificate-iii-in-carpentry") {
                return (this.pageName =
                    "CPC30220 Certificate III In Carpentry");
            } else if (text == "bsb50120-diploma-of-business") {
                return (this.pageName = "BSB50120 Diploma Of Business");
            } else if (text == "bsb60120-advanced-diploma-of-business") {
                return (this.pageName =
                    "BSB60120 Advanced Diploma Of Business");
            } else if (
                text == "bsb80120-graduate-diploma-of-management-learning"
            ) {
                return (this.pageName =
                    "BSB80120 Graduate Diploma Of Management (Learning)");
            } else {
                var finalResult = result.replaceAll("-", " ");
                this.pageName = finalResult.replace(
                    /(?:^|\s)\S/g,
                    function (a) {
                        return a.toUpperCase();
                    }
                );
            }
        }
    },

    methods: {},
};
</script>
