<template>
    <!--footer-area start-->
    <footer class="footer-area pt-40 pb-40">
        <div class="container">
            <div class="row border-bot border-top" style="padding: 20px 0">
                <div class="col-sm-3 wow fadeInUp2 animated">
                    <div
                        class="footer-log mb-20 text-center text-sm-left my-3 my-sm-0"
                    >
                        <a href="/" class="logo">
                            <img
                                :src="
                                    image_url +
                                    '/frontend/assets/img/logo/logo.png'
                                "
                                alt=""
                            />
                        </a>
                    </div>
                </div>

                <div
                    class="col-sm-9 wow fadeInUp2 animated my-3 my-sm-0 footer-social-icon-list d-flex flex-column flex-md-row justify-content-end align-items-center"
                    style="padding-top: 1%"
                >
                    <div>Contact Now</div>
                    <div class="">
                        <a href="tel:0394783163">
                            <i class="fa fa-phone mr-5" aria-hidden="true"></i
                            >03 9478 3163
                        </a>
                    </div>
                    <div>
                        <a href="mailto:info@ibm.vic.edu.au"
                            ><i class="fa fa-envelope"></i>&nbsp;
                            info@ibm.vic.edu.au</a
                        >
                    </div>
                </div>
            </div>
            <div class="row mb-15 mt-50">
                <div
                    class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp2 animated footer-list"
                    data-wow-delay=".1s"
                >
                    <div class="footer__widget mb-30">
                        <h5 class="widget-title pb-20">
                            Subscribe to our newsletter
                        </h5>
                        <div class="row justify-content-center">
                            <div class="subscribe-wrapper mb-30">
                                <p class="text-left">
                                    Make a click and get updated with our latest
                                    news.
                                </p>
                                <p class="text-left">RTO Code: 45516</p>
                                <p class="text-left">CRICOS CODE: 03785D</p>
                                <div
                                    class="alert alert-success alert-dismissible fade show"
                                    role="alert"
                                    v-show="success"
                                >
                                    {{ this.message }}
                                </div>
                                <div
                                    class="alert alert-warning alert-dismissible fade show"
                                    role="alert"
                                    v-show="fail"
                                >
                                    {{ this.message }}
                                </div>

                                <div class="mt-30 pos-rel">
                                    <form class="subscribe-form">
                                        <input
                                            type="email"
                                            placeholder="Write Your E-mail"
                                        />
                                        <i
                                            class="fa fa-paper-plane"
                                            aria-hidden="true"
                                            @click="subscription"
                                        ></i>
                                    </form>
                                </div>
                                <div
                                    class="mt-25 d-flex justify-content-center justify-content-sm-start footer-social-icon"
                                >
                                    <div>Follow Us:</div>
                                    <div>
                                        <a
                                            href="https://www.facebook.com/ibmmelbourne "
                                            target="_blank"
                                            ><i class="fab fa-facebook-f"></i
                                        ></a>
                                    </div>
                                    <div>
                                        <a
                                            href="https://instagram.com/ibm_vic?igshid=YmMyMTA2M2Y="
                                            target="_blank"
                                            ><i class="fab fa-instagram"></i
                                        ></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div
                    class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp2 animated footer-list"
                    data-wow-delay=".5s"
                >
                    <div class="footer__widget mb-25 pl-90 pl-md-0 pl-xs-0">
                        <h6 class="widget-title mb-35">Navigation</h6>
                        <ul class="fot-list">
                            <li>
                                <router-link to="/contact-us"
                                    >Contact Us</router-link
                                >
                            </li>
                            <li>
                                <router-link to="/about-us"
                                    >About Us</router-link
                                >
                            </li>
                            <li>
                                <router-link to="/why-choose-ibm"
                                    >Why Choose IBM</router-link
                                >
                            </li>

                            <li>
                                <router-link to="/forms-policies"
                                    >Forms & Policies</router-link
                                >
                            </li>
                            <li>
                                <router-link to="/how-to-apply"
                                    >How To Apply</router-link
                                >
                            </li>
                        </ul>
                    </div>
                </div>

                <div
                    class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp2 animated footer-list"
                    data-wow-delay=".7s"
                >
                    <div class="footer__widget mb-30 pl-lg-0 pl-md-0 pl-xs-0">
                        <h6 class="widget-title mb-35">Industries</h6>
                        <ul class="fot-list mb-30">
                            <li>
                                <router-link to="/industry/business"
                                    >Business Industry
                                </router-link>
                            </li>

                            <li>
                                <router-link to="/industry/trade"
                                    >Trade Industry
                                </router-link>
                            </li>
                            <li>
                                <router-link to="/industry/hospitality"
                                    >Hospitality Industry</router-link
                                >
                            </li>
                            <li>
                                <router-link to="/industry/english"
                                    >ELICOS General English</router-link
                                >
                            </li>

                            <!-- <li v-for="(course, index) in courses" :key="index">
                                <router-link
                                    :to="
                                        '/courses/' +
                                        course.slug.replaceAll(
                                            '_',
                                            '-',
                                            course.slug.toLowerCase()
                                        )
                                    "
                                    >{{ course.title }}</router-link
                                >
                            </li> -->
                        </ul>
                    </div>
                </div>

                <div
                    class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp2 animated footer-list"
                    data-wow-delay=".3s"
                >
                    <div class="footer__widget mb-30 pl-40 pl-md-0 pl-xs-0">
                        <h6 class="widget-title mb-35">Address</h6>
                        <ul class="fot-list">
                            <li>
                                <a href="#" class=""
                                    ><i
                                        class="fa fa-map-marker-alt"
                                        aria-hidden="true"
                                    ></i
                                    >&nbsp; 60 Belfast St BROADMEADOWS VIC 3047
                                </a>
                            </li>
                            <li>
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d17864.79608334184!2d144.9151073662912!3d-37.67083702152275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65a9aed0d67b9%3A0xf470bbdbefcba854!2s60%20Belfast%20St%2C%20Broadmeadows%20VIC%203047%2C%20Australia!5e0!3m2!1sen!2sbd!4v1667877726597!5m2!1sen!2sbd"
                                    width="250"
                                    height="160"
                                    style=""
                                    allowfullscreen=""
                                    loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"
                                ></iframe>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="copy-right-area border-bot pt-40">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="copyright text-center">
                            <h5>
                                Copyright@ 2022
                                <a style="color: #ff723a" href="#">IBM</a>. All
                                Rights Reserved | Developed By
                                <a
                                    style="color: #6a30f7"
                                    target="_blank"
                                    href="https://quadque.tech/"
                                    >Quadque Technologies Ltd.</a
                                >
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!--footer-area end-->
</template>
<script>
import path from "../../../src/global-config/mixin/path-solution";
export default {
    mixins: [path],

    data() {
        return {
            courses: [],
            success: false,
            fail: false,
            message: "",
        };
    },

    created() {
        this.getCourse();
    },

    methods: {
        getCourse() {
            axios.get(this.base_url + "/api/get-course").then((res) => {
                this.courses = res.data.data;

                console.log(res.data.data);
            });
        },
        subscription() {
            let email = $(".subscribe-form").find("input").val();

            let input_data = {
                email: email,
            };

            axios
                .post("student/subscription", input_data)
                .then((response) => {
                    let res_data = response.data;
                    let status = res_data.status;
                    let message = res_data.message;

                    if (status == "true") {
                        this.fail = false;
                        this.success = true;
                    } else {
                        this.fail = true;
                        this.success = false;
                    }

                    this.message = message;
                })
                .catch((error) => {
                    console.log(error);
                });
        },
    },
};
</script>

<style scoped>
.footer-area p,
a,
li {
    color: #000;
}
.subscribe-form {
    position: relative;
}
.subscribe-form i {
    position: absolute;
    display: inline-block;
    top: 25%;
    right: 5%;
    z-index: 20;
    cursor: pointer;
}
.subscribe-form input {
    color: #afafaf;
    font-size: 15px;
    width: 100%;
    height: 38px;
    border-radius: 5px;
    background-color: #ffffff;
    -webkit-box-shadow: 5px 15px 60px rgba(27, 33, 47, 0.1);
    box-shadow: 5px 15px 60px rgba(27, 33, 47, 0.1);
    border: 0;
    padding-left: 12px;
    position: relative;
    z-index: 1;
    outline: 1px solid;
}

.border-top {
    border-top: 1px solid rgba(112, 112, 112, 0.1);
}
.widget-title {
    color: #ff723a;
}
.fa-facebook-f {
    color: #4267b2;
}
.fa-instagram {
    color: #fd1d1d;
}

.fa-paper-plane {
    color: #c13584;
}
.fa-envelope,
.fa-phone {
    color: #115ea3;
}
.fa-map-marker-alt {
    color: #dc3545;
}

iframe {
    border: 2px solid #ffc107;
}

@media screen and (max-width: 425px) {
    .footer-list {
        text-align: center;
    }
}
.footer-social-icon div {
    margin-right: 10px;
}

.footer-social-icon .fab {
    font-size: 18px;
}

.footer-social-icon-list div {
    margin-right: 30px;
}
.footer-social-icon-list div:nth-of-type(3) {
    margin-right: 0px;
}
</style>
