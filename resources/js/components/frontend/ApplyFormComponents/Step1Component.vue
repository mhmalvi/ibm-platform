<template>
    <div>
        <!-- {{ id }} -->
        <CourseSelectionComponent ref="course_selection" />
        <PersonalDetailsComponent ref="personal_details" />
        <OverseashealthCover ref="overseashealth_details" />

        <div class="d-flex justify-content-end">
            <!-- <button class="btn btn-lg text-white theme-bg m-2" @click="save"> -->
            <button class="btn btn-md theme-bg text-white" @click="save">
                Save & Continue
            </button>
        </div>
    </div>
</template>

<script>
import CourseSelectionComponent from "../ApplyFormComponents/CourseSelectionComponent.vue";
import PersonalDetailsComponent from "../ApplyFormComponents/PersonalDetailsComponent.vue";
import OverseashealthCover from "./OverseashealthCover.vue";
import path from "../../../src/global-config/mixin/path-solution";
export default {
    mixins: [path],
    components: {
        CourseSelectionComponent,
        PersonalDetailsComponent,
        OverseashealthCover,
    },

    data() {
        return {
            data: "",
            id: "",
            course_id: "",
            airport_pickup: null,
            courses: [],
            data: "",
            // courses: [],
        };
    },

    // created() {
    //     this.getCourses();
    // },
    created() {
        this.getCourses();
    },
    methods: {
        // ChangeT(value) {
        //     console.log(value);
        //     this.id = value;
        // },
        // get_id(id){
        //     console.log("here")
        //     console.log(id)
        // },

        save() {
            if (!document.getElementById("family_name").value) {
                document.getElementById("family_name").style.border =
                    "1px solid #EB4034";

                document.documentElement.scrollTop = 700;

                return;
            } else {
                document.getElementById("family_name").style.border =
                    "1px solid #CDCDCD";
            }

            if (!document.getElementById("given_name").value) {
                document.getElementById("given_name").style.border =
                    "1px solid #EB4034";

                document.documentElement.scrollTop = 700;

                return;
            } else {
                document.getElementById("given_name").style.border =
                    "1px solid #CDCDCD";
            }

            let data = {
                ...this.$refs.course_selection,
                ...this.$refs.personal_details,
                ...this.$refs.overseashealth_details,
            };

            console.log("data", data);

            this.$emit("save", data);
        },
    },
};
</script>
