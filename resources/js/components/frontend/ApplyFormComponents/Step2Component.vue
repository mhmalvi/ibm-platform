<template>
    <div>
        <div class="d-flex justify-content-end">
            <router-link
                to="#"
                class="btn btn-md theme-bg m-2 text-white"
                @click.native="goToBack"
                ><i class="fa fa-arrow-left"></i> Previous</router-link
            >
            <button class="btn btn-md theme-bg m-2 text-white" @click="save">
                Save & Continue
            </button>
        </div>
        <USIDetailsComponent ref="usi_details" />

        <ContactDetailsComponent ref="contact_details" />

        <div class="d-flex justify-content-end">
            <router-link
                to="#"
                class="btn btn-md theme-bg m-2 text-white"
                @click.native="goToBack"
                ><i class="fa fa-arrow-left"></i> Previous</router-link
            >
            <button class="btn btn-md theme-bg m-2 text-white" @click="save">
                Save & Continue
            </button>
        </div>
    </div>
</template>

<script>
import USIDetailsComponent from "./USIDetailsComponent.vue";
import ContactDetailsComponent from "./ContactDetailsComponent.vue";

export default {
    components: {
        USIDetailsComponent,
        ContactDetailsComponent,
    },

    data() {
        return {};
    },

    methods: {
        save() {
            if (!document.getElementById("phone").value) {
                document.getElementById("phone").style.border =
                    "1px solid #EB4034";
                document.documentElement.scrollTop = 700;

                return;
            } else {
                document.getElementById("phone").style.border =
                    "1px solid #CDCDCD";
            }
            if (!document.getElementById("email").value) {
                document.getElementById("email").style.border =
                    "1px solid #EB4034";
                document.documentElement.scrollTop = 700;

                return;
            } else if (!document.getElementById("email").value.includes("@")) {
                document.getElementById("email_message").innerText =
                    "Insert a valid email address";
                document.getElementById("email_message").style.color =
                    "#EB4034";
                document.getElementById("email").style.border =
                    "1px solid #EB4034";
                document.documentElement.scrollTop = 700;

                return;
            } else {
                document.getElementById("email").style.border =
                    "1px solid #CDCDCD";
            }

            const data = {
                ...this.$refs.usi_details,
                ...this.$refs.contact_details,
            };

            this.$emit("save", data);
        },

        goToBack() {
            this.$emit("goToBack", 1);
        },
    },
};
</script>
