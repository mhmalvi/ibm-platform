<template>
    <div>
        <h5 class="input-title">Set a password for your registration</h5>

        <div class="form-group">
            <label for="password" class="form-label">Password*</label>
            <input
                id="password"
                type="password"
                required
                class="form-control"
                v-model="password"
            />
        </div>

        <EssentialDocuments ref="essential_documents" />

        <div class="d-flex justify-content-end">
            <router-link
                to="#"
                class="btn btn-lg theme-bg m-2 text-white"
                @click.native="goToBack"
                ><i class="fa fa-arrow-left"></i> Previous</router-link
            >
            <button class="btn btn-lg theme-bg m-2 text-white" @click="save">
                Submit
            </button>
        </div>
    </div>
</template>

<script>
import EssentialDocuments from "./EssentialDocuments.vue";

export default {
    components: {
        EssentialDocuments,
    },

    data() {
        return {
            password: "",
        };
    },

    methods: {
        save() {
            if (!this.password) {
                document.getElementById("password").style.border =
                    "1px solid #EB4034";
                return;
            } else {
                document.getElementById("password").style.border =
                    "1px solid #CDCDCD";
            }

            // if (!this.password) return;

            this.$emit("save", {
                password: this.password,
            });

            let data = {
                ...this.$refs.essential_documents,
            };

            console.log("data", data);
        },

        goToBack() {
            this.$emit("goToBack", 1);
        },
    },
};
</script>
