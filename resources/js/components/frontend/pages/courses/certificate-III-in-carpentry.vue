<template>
  <section
    class="about-us-area pt-50 pb-40 pt-md-100 pb-md-70 pt-xs-100 pb-xs-70"
  >
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h3 class="course-page-title">Course Overview</h3>
          <div class="my-3"></div>
          <p class="p-justify">
            This is a trade qualification for carpenters in residential and
            commercial workplaces. It includes setting out, manufacturing,
            constructing, assembling, installing and repairing products made
            using timber and non-timber materials. State and territory
            jurisdictions may have different licensing, legislative, regulatory
            or certification requirements. Relevant state and territory
            regulatory authorities should be consulted to confirm those
            requirements
          </p>
          <div class="my-3"></div>
          <table class="table table-responsive p-justify">
            <tbody>
              <tr>
                <th>Qualification Code and Title</th>
                <td>:</td>
                <td>CPC30220 Certificate III in Carpentry.</td>
              </tr>
              <tr>
                <th>CRICOS Course Code</th>
                <td>:</td>
                <td>107988F.</td>
              </tr>
              <tr>
                <th>Delivery Location</th>
                <td>:</td>
                <td>
                  60 Belfast Street, Broadmeadows, VIC, 3047<br />
                  61 Riggall Street, Broadmeadows, VIC, 3047.
                </td>
              </tr>
              <tr>
                <th>Mode of Delivery</th>
                <td>:</td>
                <td>
                  Face to face classroom, Practical training and assessment is
                  completed in IBM workshop.
                </td>
              </tr>
            </tbody>
          </table>
          <div class="my-2"></div>
          <h3 class="course-page-title">Course Requirement</h3>
          <div class="my-3"></div>
          <div class="collapsible">
            <a
              @click="changeAngle($event)"
              data-position="down"
              class="w-100"
              data-bs-toggle="collapse"
              href="#clps0"
              role="button"
              aria-expanded="true"
              aria-controls="clps1"
            >
              <i class="fas fa-file-certificate"></i>
              &nbsp;
              <span>Age Requirements</span>
              &nbsp;
              <i class="fas fa-angle-down requirementAddon"></i>
            </a>

            <div class="collapse show" id="clps0">
              <div class="card card-body">
                Students must be a minimum age of 18 years or above at the time
                of course commencement.
              </div>
            </div>
          </div>
          <div class="collapsible">
            <a
              @click="changeAngle($event)"
              data-position="down"
              class="w-100"
              data-bs-toggle="collapse"
              href="#clps1"
              role="button"
              aria-expanded="true"
              aria-controls="clps1"
            >
              <i class="fas fa-file-certificate"></i>
              &nbsp;
              <span>Academic Requirements</span>
              &nbsp;
              <i class="fas fa-angle-down requirementAddon"></i>
            </a>

            <div class="collapse show" id="clps1">
              <div class="card card-body">
                Satisfactory completion of Year 11 VCE or its equivalent
                overseas qualification.
              </div>
            </div>
          </div>
          <div class="collapsible">
            <a
              @click="changeAngle($event)"
              data-position="right"
              class="w-100"
              data-bs-toggle="collapse"
              href="#clps2"
              role="button"
              aria-expanded="false"
              aria-controls="clps2"
            >
              <i class="fas fa-file-certificate"></i>
              &nbsp;
              <span>English Language Requirements</span>
              &nbsp;
              <i class="fas fa-angle-right requirementAddon"></i>
            </a>

            <div class="collapse" id="clps2">
              <div class="card card-body">
                <ul class="list-items p-justify">
                  <li>
                    Have a minimum IELTS score of 5.5 for direct entry into a
                    VET course OR.
                  </li>
                  <li>
                    IELTS score of 5.0 or equivalent with an ELICOS course (up
                    to 10 weeks) to be taken before the main VET course;or,
                    IELTS score of 4.5 or equivalent with an ELICOS course (up
                    to 20 weeks) to be taken before the main VET course OR.
                  </li>
                  <li>
                    to provide evidence that they have studied in English for at
                    least five years in Australia, Canada, New Zealand, Republic
                    of Ireland, South Africa, United Kingdom or United State OR.
                  </li>
                  <li>
                    to provide evidence that, within two years* of their signed
                    written agreement date, they have successfully completed in
                    Australia a Certificate IV or higher-level qualification,
                    from the Australian Qualifications Framework.
                  </li>
                  <li>
                    In the 2 years before commencing the course, has completed
                    secondary studies equivalent to an Australian Year 12
                    qualification from an English language speaking country.
                  </li>
                  <li>
                    Institute of Business and Management also has an English
                    proficiency test to ensure that students have the English
                    language capacity to successfully complete this course.
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <div class="collapsible">
            <a
              @click="changeAngle($event)"
              data-position="right"
              class="w-100"
              data-bs-toggle="collapse"
              href="#clps23"
              role="button"
              aria-expanded="false"
              aria-controls="clps23"
            >
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
                    <b>Pre-Training Review:</b> all international students will
                    take the PTR to determine the determine suitability for the
                    course and student needs.
                  </li>
                  <li>
                    <b>Language, Literacy and Numeracy assessment test: </b
                    >prior enrolment to determine the student’s ability to
                    complete the course or any LLN support during the study
                    period.
                  </li>

                  <li>
                    <b>Physical requirements:</b> applicants will need to be
                    physically able to carry out manual handling required to
                    perform tasks involved while undergoing training. As part of
                    this course students are expected to handle complex foods –
                    e.g. cooking of various processed or raw meats, poultry,
                    seafood’s, dairy items and student must keep in mind of any
                    religious or dietary barriers to handle such foods before
                    enrolling in this course. Institute of Business and
                    Management (Victoria) will identify any such barriers
                    presented by applicants during pre-training review and
                    provide required support and reasonable adjustment where
                    possible.
                  </li>
                  <li>
                    <b>Hardware/Software requirements: </b>Institute of Business
                    and Management (Victoria) will provide access to
                    computers/laptops during classroom hours. However, for
                    students to work on assessments, tasks and self-study, all
                    learners are expected to have access to a laptop or computer
                    with Windows/macOS operating system at their own cost.
                  </li>
                  <li>
                    <b>Student Support:</b> Student needs are declared by the
                    applicant at the time of enrolment: the application form
                    allows the applicant to self-declare where they have
                    learning disabilities. Every student is interviewed either
                    face-to-face or over the telephone to attempt to establish
                    the applicant skill and knowledge levels, their current
                    employment and how that relates to the course content and
                    interaction.
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="my-2"></div>
          <h3 class="course-page-title">Pathways</h3>
          <div class="my-3"></div>
          <div class="collapsible">
            <a
              @click="changeAngle($event)"
              data-position="down"
              class="w-100"
              data-bs-toggle="collapse"
              href="#clps5"
              role="button"
              aria-expanded="true"
              aria-controls="clps5"
            >
              <i class="fas fa-file-certificate"></i>
              &nbsp;
              <span>Educational Pathways</span>
              &nbsp;
              <i class="fas fa-angle-down requirementAddon"></i>
            </a>

            <div class="collapse show" id="clps5">
              <div class="card card-body p-justify">
                <p>
                  On completion of CPC30220 Certificate III in Carpentry,
                  students may undertake one or more of following
                  qualifications:
                </p>
                <ul class="list-items">
                  <li>
                    CPC40120 Certificate IV in Building and Construction
                    (Building).
                  </li>
                  <li>
                    A range of other qualifications at Certificate IV level.
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="collapsible">
            <a
              @click="changeAngle($event)"
              data-position="down"
              class="w-100"
              data-bs-toggle="collapse"
              href="#clps6"
              role="button"
              aria-expanded="true"
              aria-controls="clps6"
            >
              <i class="fas fa-file-certificate"></i>
              &nbsp;
              <span>Employment Pathways</span>
              &nbsp;
              <i class="fas fa-angle-down requirementAddon"></i>
            </a>
            <div class="collapse show" id="clps6">
              <div class="card card-body">
                <p>
                  Students completing CPC30220 Certificate III in Carpentry can
                  expect to gain work as a:
                </p>
                <ul class="list-items">
                  <li>Carpenter-commercial/Formwork/Residential.</li>
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
          <div class="my-3"></div>
          <div class="collapsible">
            <a
              @click="changeAngle($event)"
              data-position="down"
              class="w-100"
              data-bs-toggle="collapse"
              href="#clps7"
              role="button"
              aria-expanded="true"
              aria-controls="clps7"
            >
              <i class="fas fa-file-certificate"></i>
              &nbsp;
              <span>RPL / Credit Transfer</span>
              &nbsp;
              <i class="fas fa-angle-down requirementAddon"></i>
            </a>

            <div class="collapse show" id="clps7">
              <div class="p-justify card card-body">
                <p>
                  Students with prior learning and work experience can apply for
                  RPL. Students who have completed corresponding units of
                  competency and/or units contained within the packaging rules
                  can apply for Credit Transfer. RPL evidence must include some
                  of the following:
                </p>

                <ul class="pt-3 list-items">
                  <li>Work experience.</li>
                  <li>Life experience.</li>
                  <li>Previous study.</li>
                  <li>Professional development programs.</li>
                </ul>
                <p class="pt-3">
                  If you wish to apply for RPL or Credit Transfer, please notify
                  Institute of Business and Management (Victoria) at the time of
                  enrolment.
                </p>
              </div>
            </div>
          </div>

          <div class="collapsible">
            <a
              @click="changeAngle($event)"
              data-position="right"
              class="w-100"
              data-bs-toggle="collapse"
              href="#clps8"
              role="button"
              aria-expanded="fasle"
              aria-controls="clps8"
            >
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
            <a
              @click="changeAngle($event)"
              data-position="right"
              class="w-100"
              data-bs-toggle="collapse"
              href="#clps9"
              role="button"
              aria-expanded="false"
              aria-controls="clps9"
            >
              <i class="fas fa-file-certificate"></i>
              &nbsp;
              <span
                >Important Information – Student Handbook, Policies and
                Procedures, Fees and Charges</span
              >
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
            <a
              @click="changeAngle($event)"
              data-position="right"
              class="w-100"
              data-bs-toggle="collapse"
              href="#clps10"
              role="button"
              aria-expanded="false"
              aria-controls="clps10"
            >
              <i class="fas fa-file-certificate"></i>
              &nbsp;
              <span>Course Duration</span>
              &nbsp;
              <i class="fas fa-angle-right requirementAddon"></i>
            </a>

            <div class="collapse" id="clps10">
              <div class="p-justify card card-body">
                <p>
                  The duration of this qualification is 94 weeks, including 24
                  weeks term breaks. The contact hours are 20 contact hours per
                  week.
                </p>
              </div>
            </div>
          </div>

          <div class="collapsible">
            <a
              @click="changeAngle($event)"
              data-position="right"
              class="w-100"
              data-bs-toggle="collapse"
              href="#clps11"
              role="button"
              aria-expanded="false"
              aria-controls="clps11"
            >
              <i class="fas fa-file-certificate"></i>
              &nbsp;
              <span>Student Support</span>
              &nbsp;
              <i class="fas fa-angle-right requirementAddon"></i>
            </a>

            <div class="collapse" id="clps11">
              <div class="card card-body">
                <p class="p-justify pb-2">
                  Student needs are declared by the applicant at the time of
                  enrolment: the application form allows the applicant to
                  self-declare where they have learning disabilities.
                </p>

                <p class="pb-2">
                  Every student is interviewed either face-to-face or over the
                  telephone to attempt to establish the applicant skill and
                  knowledge levels, their current employment and how that
                  relates to the course content and interaction.
                </p>

                <p class="pb-2">
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
              This qualification includes 34 units of competency:
            </p>
            <ul class="list-items">
              <li>27 core units</li>
              <li>7 elective units</li>
            </ul>

            <div class="text-center pt-3">
              <table class="table table-striped table-hover">
                <tbody>
                  <tr>
                    <th colspan="2">CORE UNITS</th>
                  </tr>
                  <!-- <tr>
                    <td>CPCCWHS2001</td>
                    <td>
                      Apply WHS requirements, policies, and procedures in the
                      construction industry
                    </td>
                  </tr>
                  <tr>
                    <td>CPCWHS3001</td>
                    <td>
                      Identify construction work hazards and select risk control
                      strategies
                    </td>
                  </tr>
                  <tr>
                    <td>CPCCOM1012</td>
                    <td>
                      Work effectively and sustainably in the construction
                      industry.
                    </td>
                  </tr>
                  <tr>
                    <td>CPCCCA2002</td>
                    <td>Use carpentry tools and equipment</td>
                  </tr>
                  <tr>
                    <td>CPCCCA2011</td>
                    <td>Handle carpentry materials</td>
                  </tr>
                  <tr>
                    <td>CPCCCA3025</td>
                    <td>
                      Read and interpret plans, specifications and drawings for
                      carpentry work
                    </td>
                  </tr>
                  <tr>
                    <td>CPCCCM2012</td>
                    <td>Work safely at heights</td>
                  </tr>
                  <tr>
                    <td>CPCCOM1015</td>
                    <td>Carry out measurements and calculations</td>
                  </tr>
                  <tr>
                    <td>CPCCOM3001</td>
                    <td>
                      Perform construction calculations to determine carpentry
                      material requirements
                    </td>
                  </tr>
                  <tr>
                    <td>CPCCCA3001</td>
                    <td>
                      Carry out general demolition of minor building structures
                    </td>
                  </tr>
                  <tr>
                    <td>CPCCCA3002</td>
                    <td>Carry out setting out</td>
                  </tr>
                  <tr>
                    <td>CPCCCO2013</td>
                    <td>Carry out concreting to simple forms</td>
                  </tr>
                  <tr>
                    <td>CPCCCM2006</td>
                    <td>Apply basic levelling procedures</td>
                  </tr>
                  <tr>
                    <td>CPCCOM3006</td>
                    <td>Carry out levelling operations</td>
                  </tr>
                  <tr>
                    <td>CPCCCA3004</td>
                    <td>Construct and erect wall frames</td>
                  </tr>
                  <tr>
                    <td>CPCCCA3005</td>
                    <td>Construct ceiling frames</td>
                  </tr>
                  <tr>
                    <td>CPCCCA3007</td>
                    <td>Construct pitched roofs</td>
                  </tr>
                  <tr>
                    <td>CPCCCA3008</td>
                    <td>Construct eaves</td>
                  </tr>
                  <tr>
                    <td>CPCCCA3016</td>
                    <td>
                      Construct, assemble and install timber external stairs
                    </td>
                  </tr>
                  <tr>
                    <td>CPCCCA3006</td>
                    <td>Erect roof trusses</td>
                  </tr>

                  <tr>
                    <td>CPCCCA3028</td>
                    <td>
                      Erect and dismantle formwork for footings and slabs on
                      ground
                    </td>
                  </tr>
                  <tr>
                    <td>CPCCCM2008</td>
                    <td>Erect and dismantle restricted height scaffolding</td>
                  </tr>
                  <tr>
                    <td>CPCCCA3003</td>
                    <td>Install flooring systems</td>
                  </tr>
                  <tr>
                    <td>CPCCCA3010</td>
                    <td>Install windows and doors</td>
                  </tr>
                  <tr>
                    <td>CPCCCA3017</td>
                    <td>Install exterior cladding</td>
                  </tr>
                  <tr>
                    <td>CPCCCA3024</td>
                    <td>Install lining, paneling and molding</td>
                  </tr>
                  <tr>
                    <td>CPCCOM1014</td>
                    <td>Conduct workplace communication</td>
                  </tr> -->
                  <tr>
                    <td>CPCCWHS2001</td>
                    <td>
                      Apply WHS requirements, policies, and procedures in the
                      construction industry
                    </td>
                  </tr>
                  <tr>
                    <td>CPCWHS3001</td>
                    <td>
                      Identify construction work hazards and select risk control
                      strategies
                    </td>
                  </tr>
                  <tr>
                    <td>CPCCOM1012</td>
                    <td>
                      Work effectively and sustainably in the construction
                      industry.
                    </td>
                  </tr>
                  <tr>
                    <td>CPCCCA2002</td>
                    <td>Use carpentry tools and equipment</td>
                  </tr>
                  <tr>
                    <td>CPCCCA2011</td>
                    <td>Handle carpentry materials</td>
                  </tr>
                  <tr>
                    <td>CPCCCA3025</td>
                    <td>
                      Read and interpret plans, specifications and drawings for
                      carpentry work
                    </td>
                  </tr>
                  <tr>
                    <td>CPCCCM2012</td>
                    <td>Work safely at heights</td>
                  </tr>
                  <tr>
                    <td>CPCCOM1015</td>
                    <td>Carry out measurements and calculations</td>
                  </tr>
                  <tr>
                    <td>CPCCOM3001</td>
                    <td>
                      Perform construction calculations to determine carpentry
                      material requirements
                    </td>
                  </tr>
                  <tr>
                    <td>CPCCCA3001</td>
                    <td>
                      Carry out general demolition of minor building structures
                    </td>
                  </tr>
                  <tr>
                    <td>CPCCCA3002</td>
                    <td>Carry out setting out</td>
                  </tr>
                  <tr>
                    <td>CPCCCO2013</td>
                    <td>Carry out concreting to simple forms</td>
                  </tr>
                  <tr>
                    <td>CPCCCM2006</td>
                    <td>Apply basic levelling procedures</td>
                  </tr>
                  <tr>
                    <td>CPCCOM3006</td>
                    <td>Carry out levelling operations</td>
                  </tr>
                  <tr>
                    <td>CPCCCA3004</td>
                    <td>Construct and erect wall frames</td>
                  </tr>
                  <tr>
                    <td>CPCCCA3005</td>
                    <td>Construct ceiling frames</td>
                  </tr>
                  <tr>
                    <td>CPCCCA3007</td>
                    <td>Construct pitched roofs</td>
                  </tr>
                  <tr>
                    <td>CPCCCA3008</td>
                    <td>Construct eaves</td>
                  </tr>
                  <tr>
                    <td>CPCCCA3016</td>
                    <td>
                      Construct, assemble and install timber external stairs
                    </td>
                  </tr>
                  <tr>
                    <td>CPCCCA3006</td>
                    <td>Erect roof trusses</td>
                  </tr>

                  <tr>
                    <td>CPCCCA3028</td>
                    <td>
                      Erect and dismantle formwork for footings and slabs on
                      ground
                    </td>
                  </tr>
                  <tr>
                    <td>CPCCCM2008</td>
                    <td>Erect and dismantle restricted height scaffolding</td>
                  </tr>
                  <tr>
                    <td>CPCCCA3003</td>
                    <td>Install flooring systems</td>
                  </tr>
                  <tr>
                    <td>CPCCCA3010</td>
                    <td>Install windows and doors</td>
                  </tr>
                  <tr>
                    <td>CPCCCA3017</td>
                    <td>Install exterior cladding</td>
                  </tr>
                  <tr>
                    <td>CPCCCA3024</td>
                    <td>Install lining, paneling and molding</td>
                  </tr>
                  <tr>
                    <td>CPCCOM1014</td>
                    <td>Conduct workplace communication</td>
                  </tr>
                  <tr>
                    <td colspan="2"><b>ELECTIVE UNITS</b></td>
                  </tr>

                  <tr>
                    <td>CPCCCA3027</td>
                    <td>
                      Set up, operate, and maintain indirect action
                      powder-actuated power tools
                    </td>
                  </tr>
                  <tr>
                    <td>CPCCCM2002</td>
                    <td>Carry out hand excavation</td>
                  </tr>
                  <tr>
                    <td>CPCCCA3020</td>
                    <td>Erect and dismantle jump-form formwork</td>
                  </tr>
                  <tr>
                    <td>CPCCCM3005</td>
                    <td>Calculate costs of construction work</td>
                  </tr>
                  <tr>
                    <td>CPCCCA3019</td>
                    <td>
                      Erect and dismantle formwork to suspended slabs, columns,
                      beams and walls
                    </td>
                  </tr>
                  <tr>
                    <td>CPCCCM3001</td>
                    <td>Operate elevated work platforms up to 11 meters</td>
                  </tr>
                  <tr>
                    <td>CPCCOM1013</td>
                    <td>Plan and organize work</td>
                  </tr>
                </tbody>
              </table>
              <!--   <table class="table table-striped table-hover">
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
              <a
                @click="changeAngle($event)"
                data-position="down"
                class="w-100"
                data-bs-toggle="collapse"
                href="#fees"
                role="button"
                aria-expanded="true"
                aria-controls="clps1"
              >
                <i class="fas fa-file-certificate"></i>
                &nbsp;
                <span>Fees</span>
                &nbsp;
                <i class="fas fa-angle-down show requirementAddon"></i>
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
                        <td>$750</td>
                      </tr>
                      <tr>
                        <th>Tuition Fee</th>
                        <td>:</td>
                        <td>$24000</td>
                      </tr>
                      <tr>
                        <th>Total Fees</th>
                        <td>:</td>
                        <td>$25000</td>
                      </tr>
                      <tr>
                        <th>Duration</th>
                        <th>:</th>
                        <td>
                          <p class="p-justify">
                            The duration of this qualification is 94 weeks,
                            including 24 weeks term breaks. The contact hours
                            are 20 contact hours per week.
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
              This course includes work-based training of a minimum of 200
              hours/10 weeks. During work-based training, students will be able
              to practice their skills and knowledge in real workplace settings.
              This will assist students to be job-ready at graduation. Institute
              of Business and Management (Victoria) will ensure placement of all
              students. This is to ensure international students with limited
              exposure to Australian workplace are not disadvantaged. Students
              will have the option to arrange their own work placement provided
              it meets all requirements. The assessor will visit and assess the
              student at least twice during this time at a mutually convenient
              time.
            </p>
          </div>
        </div>
      </div> -->
      <div class="row my-2">
        <div class="col-md-12">
          <div class="course-structure">
            <h3 class="course-page-title">Further Information</h3>
            <div class="my-3"></div>
            <p>
              For further information please call Institute of Business and
              Management (Victoria) on 03 9478 3163 or email us on:
              info@ibm.vic.edu.au
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