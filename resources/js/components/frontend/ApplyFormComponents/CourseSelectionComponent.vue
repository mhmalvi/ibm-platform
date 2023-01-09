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
                    <!-- hello -->

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
            course_title: "",
            course_code: "",
            cricos_code: "",
            airport_pickup: null,
            courses: [],
            id: "",
        };
    },

    // props: ["courses"],

    mounted() {
        this.getCourses();
    },
    methods: {
        getCourses() {
            axios.get(this.base_url + "/api/get-course").then((res) => {
                console.log(res.data.data);
                this.courses = res.data.data;
            });
        },
        onChange(event) {
            var coursee = this.courses.find(
                (course) => course.id === this.course_id
            );

            this.course_title = coursee.title;
            this.course_code = coursee.course_code;
            this.cricos_code = coursee.cricos_code;
        },
    },
};
</script>
