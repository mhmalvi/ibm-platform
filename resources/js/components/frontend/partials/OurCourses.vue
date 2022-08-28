<template>
  <!--what-loking-for start-->
  <section class="what-looking-for pos-rel">
    <div class="what-look-bg pt-145 pb-130 pt-md-95 pb-md-80 pt-xs-95 pb-xs-80">
      <div class="container">
        <div class="categoris-container">
          <div class="col-xl-12">
            <div class="section-title text-center mb-55">
              <!-- <h5 class="bottom-line mb-25">Browse Industries</h5> -->
              <h2>
                <b
                  ><u><i>Explore Our Courses</i></u></b
                >
              </h2>
            </div>
          </div>

          <div class="row d-flex justify-content-center">
            <div class="col-xs-6 col-sm-6 col-md-4 my-2">
              <a href="/industry/business">
                <div class="card text-center p-4">
                  <div class="card-body">
                    <img
                      class="mb-30"
                      :src="
                        image_url + '/frontend/assets/img/courses/business.svg'
                      "
                      alt=""
                    />

                    <h6 class="sub-title mb-10">
                      <a href="/industry/business">Business</a>
                    </h6>
                    <!-- <p>One Course</p> -->
                  </div>
                </div>
              </a>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-4 my-2">
              <a href="/industry/trade">
                <div class="card text-center p-4">
                  <div class="card-body">
                    <img
                      class="mb-30"
                      :src="
                        image_url + '/frontend/assets/img/courses/trade.svg'
                      "
                      alt=""
                    />

                    <h6 class="sub-title mb-10">
                      <a href="/industry/trade">Trade</a>
                    </h6>
                    <!-- <p>One Course</p> -->
                  </div>
                </div>
              </a>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-4 my-2">
              <a href="/industry/english">
                <div class="card text-center p-4">
                  <div class="card-body">
                    <img
                      class="mb-30"
                      :src="
                        image_url + '/frontend/assets/img/courses/english.svg'
                      "
                      alt=""
                    />

                    <h6 class="sub-title mb-10">
                      <a href="/industry/english">English</a>
                    </h6>
                    <!-- <p>One Course</p> -->
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-12 d-flex justify-content-center mt-4">
              <a href="/courses" class="btn btn-lg theme-bg text-white"
                >All Courses</a
              >
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--what-loking-for end-->
</template>

<script>
import path from "../../../src/global-config/mixin/path-solution";
export default {
  mixins: [path],

  data() {
    return {
      courses: [],
      categories: [],
      selectedCourses: [],
      is_active: 0,
    };
  },

  created() {
    this.getCourse();
    this.getCourseCategory();
    this.getSelectedCourse();
  },

  methods: {
    getCourse() {
      axios.get(this.base_url + "/api/get-course").then((res) => {
        this.courses = res.data.data;
      });
    },

    getCourseCategory() {
      axios.get(this.base_url + "/api/get-course-category").then((res) => {
        this.categories = res.data.data;
      });
    },

    getSelectedCourse(course, index) {
      this.is_active = index;

      if (index == undefined && course.length == 0) {
        // this.selectedCourses = this.courses
        // this.getCourse()
      } else {
        this.selectedCourses = course;
      }
    },
  },
};
</script>

<style scoped>
.single-category {
  background: none !important;
}
.sub-title {
  font-size: 1rem !important;
}
.card {
  border: none !important;
  border: 1px solid rgba(0, 0, 0, 0) !important;
  transition: all 0.3s ease-in-out !important;
}
.card:hover {
  border: 1px solid rgba(0, 0, 0, 0.125) !important;
}
</style>
