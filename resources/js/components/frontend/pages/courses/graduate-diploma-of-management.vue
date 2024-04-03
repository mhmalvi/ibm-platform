<template>
  <section class="about-us-area pt-50 pb-40 pt-md-100 pb-md-70 pt-xs-100 pb-xs-70">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h3 class="course-page-title">Course Overview</h3>
          <div class="my-3"></div>
          <p class="p-justify">
            This qualification is for international students to build the skills
            in the field of organisational learning and capability development.
            They also initiate, design, and execute major learning and
            development functions within an organization. Typically, they would
            have full responsibility and accountability for the personal output
            and work of others. This qualification may also apply to leaders and
            managers in an organization where learning is used to build
            organisational capability.
          </p>
          <div class="my-3"></div>
          <table class="table table-responsive">
            <tbody>
              <tr>
                <th>Qualification Code and Title</th>
                <td>:</td>
                <td>BSB80120 - Graduate Diploma of Management (Learning)</td>
              </tr>
              <tr>
                <th>CRICOS Course Code</th>
                <td>:</td>
                <td>106515C.</td>
              </tr>
              <tr>
                <th>Delivery Location</th>
                <td>:</td>
                <td>
                  This program is a mixture of a face-to-face classroom and
                  simulated business delivery at
                  <strong>
                    Building D, Belfast Street, Broadmeadows, VIC, 3047.
                  </strong>
                  <!-- <br />170 Victoria St, Richmond, Victoria
                                    3121. -->
                </td>
              </tr>
              <tr>
                <th>Mode of Delivery</th>
                <td>:</td>
                <td>
                  Face to face classroom and simulated, Practical training and
                  assessment and work-based Training arranged by the Institute.
                </td>
              </tr>
            </tbody>
          </table>
          <div class="my-2"></div>
          <h3 class="course-page-title">Course Requirement</h3>
          <div class="my-2"></div>
          <div class="collapsible">
            <a @click="changeAngle($event)" data-position="down" class="w-100" data-bs-toggle="collapse" href="#clps0"
              role="button" aria-expanded="true" aria-controls="clps1">
              <i class="fas fa-file-certificate"></i>
              &nbsp;
              <span>Age Requirements</span>
              &nbsp;
              <i class="fas fa-angle-down requirementAddon"></i>
            </a>

            <div class="collapse show" id="clps0">
              <div class="card card-body">
                Students must be of 18 years of age to apply.
              </div>
            </div>
          </div>
          <div class="collapsible">
            <a @click="changeAngle($event)" data-position="down" class="w-100" data-bs-toggle="collapse" href="#clps1"
              role="button" aria-expanded="true" aria-controls="clps1">
              <i class="fas fa-file-certificate"></i>
              &nbsp;
              <span>Academic Requirements</span>
              &nbsp;
              <i class="fas fa-angle-down requirementAddon"></i>
            </a>

            <div class="collapse show" id="clps1">
              <div class="card card-body">
                Successful completion of a three (3) year bachelor’s degree from
                any country or Completed AQF level 5 (Diploma Level) or higher
                Qualification in Australia.
              </div>
            </div>
          </div>

          <!-- <div class="collapsible">
                        <a
                            @click="changeAngle($event)"
                            data-position="down"
                            class="w-100"
                            data-bs-toggle="collapse"
                            href="#clps11"
                            role="button"
                            aria-expanded="true"
                            aria-controls="clps1"
                        >
                            <i class="fas fa-file-certificate"></i>
                            &nbsp;
                            <span
                                >Academic Requirements for Institute of Business
                                and Management (Victoria)</span
                            >
                            &nbsp;
                            <i class="fas fa-angle-down requirementAddon"></i>
                        </a>

                        <div class="collapse show" id="clps11">
                            <div class="p-justify card card-body">
                               
                                N/A
                            </div>
                        </div>
                        </div> -->

          <div class="collapsible">
            <a @click="changeAngle($event)" data-position="right" class="w-100" data-bs-toggle="collapse" href="#clps2"
              role="button" aria-expanded="false" aria-controls="clps2">
              <i class="fas fa-file-certificate"></i>
              &nbsp;
              <span>English Language Requirements</span>
              &nbsp;
              <i class="fas fa-angle-right requirementAddon"></i>
            </a>

            <div class="collapse" id="clps2">
              <div class="card card-body">
              <p>International Students applying for this qualification must have a minimum English language proficiency
                of IELTS 6.0 or an equivalent exam result recognised by the Department of Home Affairs.</p>
              <p style="font-weight: bold;">You must still take the IBM (VIC)’s pre-entry placement test at Orientation.
                It is used as a guide to determine the level of language, literacy and numeracy required for competent
                performance.</p>
              <p>Other equivalent English language proficiency level is deemed one of the following: </p>
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>English language test providers</th>
                    <th>Minimum score</th>
                    <th>Minimum score and at least 20 weeks English Language Intensive Courses for Overseas Students
                      (ELICOS)</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>International English Language Testing System (IELTS)</td>
                    <td>6</td>
                    <td>5</td>
                  </tr>
                  <tr>
                    <td>Pearson Test of English Academic (PTE Academic)</td>
                    <td>50</td>
                    <td>40</td>
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                </tbody>
              </table>
              <p>OR</p>
              <p>any other form that satisfies the Institution during their pre-enrolment interview</p>
              <p style="font-weight: bold;">English Language Evidence Exemptions: </p>
              <p>You do not need to provide evidence of an English test score with your visa application if one of the
                following applies: </p>
              <ul class="pt-3 list-items">
                <li>you are a citizen and hold a passport from UK, USA, Canada, NZ or Republic of Ireland </li>
                <li>you are an applicant who is a Foreign Affairs or, Defence sponsored student or a Secondary Exchange
                  student (AASES) </li>
                <li>you are enrolled in a principal course of study that is a registered school course, a standalone
                  English Language Intensive Course for Overseas Students (ELICOS), a course registered to be delivered
                  in a language other than English, or a registered post-graduate research course </li>
                <li>you have completed at least 5 years’ study in English in one or more of the following countries:
                  Australia, UK, USA, Canada, New Zealand, South Africa, or the Republic of Ireland </li>
                <li>in the 2 years before applying for the student visa, you completed, in Australia and in the English
                  language, either the Senior Secondary Certificate of Education or a substantial component of a course
                  leading to a qualification from the Australian Qualifications Framework at the Certificate IV or
                  higher level, while you held a student visa. </li>
              </ul>
            </div>
          </div>

          <!-- <div class="collapsible">
                        <a
                            @click="changeAngle($event)"
                            data-position="right"
                            class="w-100"
                            data-bs-toggle="collapse"
                            href="#clps18"
                            role="button"
                            aria-expanded="false"
                            aria-controls="clps18"
                        >
                            <i class="fas fa-file-certificate"></i>
                            &nbsp;
                            <span
                                >Qualification Requirements for Institute of
                                Business and Management (Victoria)</span
                            >
                            &nbsp;
                            <i class="fas fa-angle-right requirementAddon"></i>
                        </a>

                        <div class="collapse" id="clps18">
                            <div class="card card-body">
                                <ul class="list-items p-justify">
                                    <li>
                                        Upon successful completion of the 08
                                        units of competency, students will be
                                        issued an BSB80120- Graduate diploma of
                                        management (Learning)qualification and a
                                        record of results that indicate the
                                        units successfully completed. Students
                                        who successfully complete some but not
                                        all the units of competency in the
                                        course will be issued a Statement of
                                        Attainment detailing the units they have
                                        successfully completed.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div> -->

          <div class="collapsible">
            <a @click="changeAngle($event)" data-position="right" class="w-100" data-bs-toggle="collapse" href="#clps23"
              role="button" aria-expanded="false" aria-controls="clps23">
              <i class="fas fa-file-certificate"></i>
              &nbsp;
              <span>Other Requirement</span>
              &nbsp;
              <i class="fas fa-angle-right requirementAddon"></i>
            </a>

            <div class="collapse" id="clps23">
              <div class="card card-body">
                <ul class="list-items p-justify">
                  <li>
                    Completed a Pre-Training review and Language, Literacy and
                    Numeracy assessment
                  </li>
                  <!-- <li>
                                        <b>Pre-Training Review:</b> all
                                        international students will take the PTR
                                        to determine the determine suitability
                                        for the course and student needs.
                                    </li>
                                    <li>
                                        <b
                                            >Language, Literacy and Numeracy
                                            Assessment Test: </b
                                        >prior enrolment to determine the
                                        student’s ability to complete the course
                                        or any LLN support during the study
                                        period.
                                    </li>
                                    <li>
                                        <b>Kitchen Toolkit: </b>
                                        students will need access to a kitchen
                                        toolkit which includes a chef’s uniform,
                                        safety shoes, various knives, and small
                                        equipment. This will be arranged and
                                        provided by Institute of Business and
                                        Management (Victoria).
                                    </li>
                                    <li>
                                        <b>Physical Requirements:</b> applicants
                                        will need to be physically able to carry
                                        out manual handling required to perform
                                        tasks involved while undergoing
                                        training. As part of this course
                                        students are expected to handle complex
                                        foods – e.g. cooking of various
                                        processed or raw meats, poultry,
                                        seafood’s, dairy items and student must
                                        keep in mind of any religious or dietary
                                        barriers to handle such foods before
                                        enrolling in this course. Institute of
                                        Business and Management (Victoria) will
                                        identify any such barriers presented by
                                        applicants during pre-training review
                                        and provide required support and
                                        reasonable adjustment where possible.
                                    </li>
                                    <li>
                                        <b>Hardware/Software Requirements: </b
                                        >Institute of Business and Management
                                        (Victoria) will provide access to
                                        computers/laptops during classroom
                                        hours. However, for students to work on
                                        assessments, tasks and self-study, all
                                        learners are expected to have access to
                                        a laptop or computer with Windows/macOS
                                        operating system at their own cost.
                                    </li>
                                    <li>
                                        <b>Student Support:</b> Student needs
                                        are declared by the applicant at the
                                        time of enrolment: the application form
                                        allows the applicant to self-declare
                                        where they have learning disabilities.
                                        Every student is interviewed either
                                        face-to-face or over the telephone to
                                        attempt to establish the applicant skill
                                        and knowledge levels, their current
                                        employment and how that relates to the
                                        course content and interaction.
                                    </li> -->
                </ul>
              </div>
            </div>
          </div>
          <div class="my-2"></div>
          <h3 class="course-page-title">Pathways</h3>
          <div class="my-3"></div>
          <div class="collapsible">
            <a @click="changeAngle($event)" data-position="down" class="w-100" data-bs-toggle="collapse" href="#clps5"
              role="button" aria-expanded="true" aria-controls="clps5">
              <i class="fas fa-file-certificate"></i>
              &nbsp;
              <span>Educational Pathways</span>
              &nbsp;
              <i class="fas fa-angle-down requirementAddon"></i>
            </a>

            <div class="collapse show" id="clps5">
              <div class="p-justify card card-body">
                <!-- <p>
                                  Possible future study pathways are to continue to a higher degree. 
                                </p> -->
                Students who have successfully completed BSB80120- Graduate
                diploma of management (Learning) may wish to continue their
                education into:

                <ul class="list-items p-justify">
                  <li>
                    Master’s degree programs offered by Australian Higher
                    Education providers.
                  </li>
                </ul>
                <!-- <ul class="list-items">
                                    <li>
                                        SIT50422 Diploma of Hospitality
                                        Management.
                                    </li>
                                    <li>
                                        A range of other qualifications at
                                        Diploma level.
                                    </li>
                                </ul> -->
              </div>
            </div>
          </div>
          <div class="collapsible">
            <a @click="changeAngle($event)" data-position="down" class="w-100" data-bs-toggle="collapse" href="#clps6"
              role="button" aria-expanded="true" aria-controls="clps6">
              <i class="fas fa-file-certificate"></i>
              &nbsp;
              <span>Employment Pathways</span>
              &nbsp;
              <i class="fas fa-angle-down requirementAddon"></i>
            </a>

            <div class="collapse show" id="clps6">
              <div class="p-justify card card-body">
                <p>
                  Students completing BSB80120- Graduate diploma of management
                  (Learning) may enter into workplace or continue current roles:
                </p>
                <ul class="list-items">
                  <li>Head of School/RTO</li>
                  <li>RTO Compliance Manager</li>
                  <li>Career Development Manager</li>
                  <li>Senior Training Manager</li>
                  <li>RTO General Manager</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="my-2"></div>
      <div class="row">
        <div class="col-md-12">
          <h3 class="course-page-title">Courses Details</h3>
          <div class="my-2"></div>
          <div class="collapsible">
            <a @click="changeAngle($event)" data-position="down" class="w-100" data-bs-toggle="collapse" href="#clps7"
              role="button" aria-expanded="true" aria-controls="clps7">
              <i class="fas fa-file-certificate"></i>
              &nbsp;
              <span>RPL / Credit Transfer</span>
              &nbsp;
              <i class="fas fa-angle-down requirementAddon"></i>
            </a>
            <div class="my-2"></div>
            <div class="collapse show" id="clps7">
              <div class="p-justify card card-body">
                <p>
                  Assessment is undertaken in a variety of ways, happening in
                  the classroom under supervision of a qualification trainer and
                  assessor or can be undertaken outside the classroom (as a home
                  study) due to the need of research or in-depth analysis. In
                  this qualification, assessment methods used include case
                  studies, projects, written questions, written reports,
                  presentation and direct observation (Simulated workplace)
                </p>
              </div>
            </div>
          </div>

          <div class="collapsible">
            <a @click="changeAngle($event)" data-position="right" class="w-100" data-bs-toggle="collapse" href="#clps8"
              role="button" aria-expanded="fasle" aria-controls="clps8">
              <i class="fas fa-file-certificate"></i>
              &nbsp;
              <span>Assessment Method</span>
              &nbsp;
              <i class="fas fa-angle-right requirementAddon"></i>
            </a>

            <div class="collapse" id="clps8">
              <div class="p-justify card card-body">
                <p>
                  Assessment methods used for this qualification will provide a
                  range of ways for individuals to demonstrate that they have
                  met the required outcomes including:
                </p>

                <ul class="pt-3 list-items">
                  <li>Written Questions and Answers.</li>
                  <li>Projects.</li>
                  <li>Case Studies.</li>
                  <li>Observations.</li>
                </ul>
                <p class="pt-3">
                  At the beginning of each unit, trainers will outline the
                  assessment tasks that must be completed.
                </p>
              </div>
            </div>
          </div>

          <div class="collapsible">
            <a @click="changeAngle($event)" data-position="right" class="w-100" data-bs-toggle="collapse" href="#clps9"
              role="button" aria-expanded="false" aria-controls="clps9">
              <i class="fas fa-file-certificate"></i>
              &nbsp;
              <span>Important Information – Student Handbook, Policies and
                Procedures, Fees and Charges</span>
              &nbsp;
              <i class="fas fa-angle-right requirementAddon"></i>
            </a>

            <div class="collapse" id="clps9">
              <div class="p-justify card card-body">
                <p>
                  Information about our training and assessment, policies and
                  procedures are included in student handbook and should be read
                  by you, prior to enrolment, which is available on institute’s
                  website. These documents contain important information about
                  your training course, fees and charges including our refund
                  policy.
                </p>
              </div>
            </div>
          </div>

          <div class="collapsible">
            <a @click="changeAngle($event)" data-position="right" class="w-100" data-bs-toggle="collapse" href="#clps10"
              role="button" aria-expanded="false" aria-controls="clps10">
              <i class="fas fa-file-certificate"></i>
              &nbsp;
              <span>Course Duration</span>
              &nbsp;
              <i class="fas fa-angle-right requirementAddon"></i>
            </a>

            <div class="collapse" id="clps10">
              <div class="card card-body">
                <p>
                  The duration of this qualification is 76 weeks, including 10
                  weeks term break. The contact hours are 20 contact hours per
                  week.
                  <!-- <ul>
                                        <li>104 Weeks Including holidays </li>
                                        <li>20 hours per week</li>
                                    </ul> -->
                </p>
              </div>
            </div>
          </div>

          <div class="collapsible">
            <a @click="changeAngle($event)" data-position="right" class="w-100" data-bs-toggle="collapse" href="#clps11"
              role="button" aria-expanded="false" aria-controls="clps11">
              <i class="fas fa-file-certificate"></i>
              &nbsp;
              <span>Student Support</span>
              &nbsp;
              <i class="fas fa-angle-right requirementAddon"></i>
            </a>

            <div class="collapse" id="clps11">
              <div class="p-justify card card-body">
                <p>
                  Student needs are declared by the applicant at the time of
                  enrolment: the application form allows the applicant to
                  self-declare where they have learning disabilities.
                </p>

                <p>
                  Every student is interviewed either face-to-face or over the
                  telephone to attempt to establish the applicant skill and
                  knowledge levels, their current employment and how that
                  relates to the course content and interaction.
                </p>

                <p>
                  Where language, literacy and numeracy are in question
                  Institute of Business and Management (Victoria) has a
                  language, literacy and numeracy (LLN) assessment they may
                  undertake to confirm their level of language, literacy and
                  numeracy skills.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="my-2"></div>
        <div class="row">
          <div class="col-md-12">
            <h3 class="course-page-title">Course Structure</h3>
            <div class="my-3"></div>
            <p class="p-justify">
              The BSB80120 Graduate Diploma of Management (Learning) requires
              the successful completion of three (3) core units and five (5)
              elective units. Electives for this qualification have been chosen
              by NVR Education to ensure that students achieve a broad range of
              skills and knowledge in marketing and communication.
            </p>

            <div class="text-center pt-5">
              <table class="table table-striped table-hover">
                <tbody>
                  <!-- <tr>
                                        <th colspan="2">CORE UNITS</th>
                                    </tr> -->
                  <tr>
                    <td>BSBHRM613</td>
                    <td>
                      Contribute to the development of learning and development
                      strategies
                    </td>
                    <td>Core</td>
                  </tr>
                  <tr>
                    <td>BSBLDR811</td>
                    <td>Lead strategic transformation</td>
                    <td>Core</td>
                  </tr>
                  <tr>
                    <td>TAELED803</td>
                    <td>Implement improved learning practice</td>
                    <td>Core</td>
                  </tr>
                  <tr>
                    <td>BSBSTR801</td>
                    <td>Lead innovative thinking and practice</td>
                    <td>Elective</td>
                  </tr>
                  <tr>
                    <td>BSBSTR802</td>
                    <td>
                      Lead strategic planning processes for an organisation
                    </td>
                    <td>Elective</td>
                  </tr>
                  <tr>
                    <td>BSBLDR812</td>
                    <td>
                      Develop and cultivate collaborative partnerships and
                      relationships
                    </td>
                    <td>Elective</td>
                  </tr>

                  <tr>
                    <td>BSBINS603</td>
                    <td>Initiate and lead applied research</td>
                    <td>Elective</td>
                  </tr>

                  <tr>
                    <td>BSBPMG810</td>
                    <td>Prioritise projects and programs</td>
                    <td>Elective</td>
                  </tr>
                </tbody>
              </table>
              <!-- <table class="table table-striped table-hover">
                <tbody>
                 
                </tbody>
              </table> -->
            </div>
          </div>
        </div>
      </div>
      <div class="row my-2">
        <div class="col-md-12">
          <div class="course-structure">
            <h3 class="course-page-title">Fees Information</h3>
            <div class="my-3"></div>
            <div class="collapsible">
              <a @click="changeAngle($event)" data-position="down" class="w-100" data-bs-toggle="collapse" href="#fees"
                role="button" aria-expanded="true" aria-controls="clps1">
                <i class="fas fa-file-certificate"></i>
                &nbsp;
                <span>Fees</span>
                &nbsp;
                <i class="fas fa-angle-down requirementAddon"></i>
              </a>

              <div class="collapse show" id="fees">
                <div class="card card-body">
                  <table class="table table-responsive">
                    <tbody>
                      <tr>
                        <th>Application Fee</th>
                        <td>:</td>
                        <td>$250</td>
                      </tr>
                      <tr>
                        <th>Material Fee</th>
                        <td>:</td>
                        <td>$250</td>
                      </tr>
                      <tr>
                        <th>Tuition Fee</th>
                        <td>:</td>
                        <td>$14500</td>
                      </tr>
                      <tr>
                        <th>Total Fees</th>
                        <td>:</td>
                        <td>$15000</td>
                      </tr>
                      <tr>
                        <th>Duration</th>
                        <th>:</th>
                        <td>
                          <p class="p-justify">
                            The duration of this qualification is 76 weeks,
                            including 10 weeks term break. The contact hours are
                            20 contact hours per week.
                          </p>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row my-2">
        <div class="col-md-12">
          <div class="course-structure">
            <h3 class="course-page-title">Intake</h3>
            <div class="my-3"></div>
            <p>Multiple intakes available.</p>
          </div>
        </div>
      </div>
      <!-- <div class="row my-2">
                <div class="col-md-12">
                    <div class="course-structure">
                        <h3 class="course-page-title">Work Based Training</h3>
                        <div class="my-3"></div>
                        <p class="p-justify">
                            This course includes work-based training of a
                            minimum of 200 hours/10 weeks. During work-based
                            training, students will be able to practice their
                            skills and knowledge in real workplace settings.
                            This will assist students to be job-ready at
                            graduation. Institute of Business and Management
                            (Victoria) will ensure placement of all students.
                            This is to ensure international students with
                            limited exposure to Australian workplace are not
                            disadvantaged. Students will have the option to
                            arrange their own work placement provided it meets
                            all requirements. The assessor will visit and assess
                            the student at least twice during this time at a
                            mutually convenient time.
                        </p>
                    </div>
                </div>
            </div> -->
      <div class="row my-2">
        <div class="col-md-12">
          <div class="course-structure">
            <h3 class="course-page-title">Further Information</h3>
            <div class="my-3"></div>
            <p class="p-justify">
              For further information please call Institute of Business and
              Management (Victoria) on 03 9478 3163 or email us on:
              info@ibm.vic.edu.au.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import path from "../../../../src/global-config/mixin/path-solution";

export default {
  components: {},
  mixins: [path],
  props: ["course"],
  methods: {
    changeAngle(event) {
      const requirement = event.target;
      let position = $(requirement).attr("data-position");

      if (position == "right") {
        $(requirement).attr("data-position", "down");
        $(requirement).find(".requirementAddon").removeClass("fa-angle-right");
        $(requirement).find(".requirementAddon").addClass("fa-angle-down");
      } else {
        $(requirement).attr("data-position", "right");
        $(requirement).find(".requirementAddon").removeClass("fa-angle-down");
        $(requirement).find(".requirementAddon").addClass("fa-angle-right");
      }
    },
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

.collapsible {
  margin: 15px auto !important;
}

.collapsible a {
  /* background-color: #ffeae3 !important;*/
  padding: 5px 10px !important;
  display: block !important;
  width: 100% !important;
  color: #000000 !important;
  border: 1px solid #f1592a;
  border-radius: 5px;
}

.list-items {
  padding-left: 2rem !important;
}

.list-items li {
  padding-left: 10px;
  list-style: square;
}

table tbody tr {
  text-align: left !important;
}

ul {
  list-style-type: circle;
}
</style>
