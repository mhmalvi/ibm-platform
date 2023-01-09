<template>
    <div>
        <div class="form-group">
            <h5 class="input-title">Course selection</h5>
            <label for="courses" class="form-label">Select a course</label>
            <div class="row">
                <div id="course_select" class="col-12">
                    <!-- <v-select
                        :options="courses"
                        :reduce="(course) => course.id"
                        v-model="course_id"
                        label="title"
                        placeholder="Select Course"
                        multiple
                    ></v-select> -->

                    <select
                        name="LeaveType"
                        @change="onChange($event)"
                        v-model="course_id"
                        :reduce="(course) => course.id"
                        class="form-control"
                    >
                        <option
                            v-for="(course, index) in courses"
                            :key="index"
                            :value="course.id"
                        >
                            {{ course.title }}
                        </option>
                    </select>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <h5 class="input-title">Do you need Airport pickup?</h5>
            </div>
            <input
                type="radio"
                name="airport_pickup"
                id="airport_pickup_yes"
                class="block input-form-check-input"
                v-model="airport_pickup"
                value="yes"
            />
            <label class="block" for="airport_pickup_yes">Yes</label>
            <input
                type="radio"
                name="airport_pickup"
                id="airport_pickup_no"
                class="input-form-check-input ms-4"
                v-model="airport_pickup"
                value="no"
            />
            <label for="airport_pickup_no">No</label>
        </div>
    </div>
</template>

<script>
import path from "../../../src/global-config/mixin/path-solution";
export default {
    mixins: [path],
    data() {
        return {
            course_id: "",
            airport_pickup: null,
            courses: [],
        };
    },

    mounted() {
        console.log(this.course_id);

        // if (this.course_id) {
        //     document
        //         .getElementById("course_select")
        //         .removeAttribute("multiple");
        // }
    },

    created() {
        this.getCourses();
    },

    methods: {
        onChange(event) {
            console.log(event.target.value);
        },

        
    },
};
</script>
