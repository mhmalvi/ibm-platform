<template>
    <div class="">
        <form
            id="domestic_student"
            class="pte_form international_student sigPad dropzone"
            method="post"
            action=""
            enctype="multipart/form-data"
            novalidate="novalidate"
        >
            <!-- <input
                type="hidden"
                name="csrf_test_name"
                value="90a4d816c9386721cdc39bb1a84862db"
            /> -->

            <!-- <input type="hidden" name="is_number" id="is_number" value="1" />
            <input
                type="hidden"
                name="student_number"
                id="student_number"
                value=""
            />
            <input type="hidden" name="LearnerId" id="LearnerId" value="" />
            <input
                type="hidden"
                name="prev_oic"
                id="prev_oic"
                value="no"
                class="valid"
            />
            <input
                type="hidden"
                name="course_offer"
                id="course_offer"
                value="no"
            /> -->

            <!-- Section 1 -->
            <!-- <div id="sf1" class="frm" style="display: none"> -->
            <!-- <div class="get_existing">
                    <div class="form_header_title">
                        Is this a new or existing application?
                    </div>
                    <div class="row hide_after_new_or_existing">
                        <div class="col-md-12 pte_title" id="existing_oic">
                            <span class="wpcf7-form-control-wrap pte_title">
                                <span
                                    class="d-flex wpcf7-form-control wpcf7-radio"
                                >
                                    <span class="wpcf7-list-item first">
                                        <input
                                            class="input_radio valid"
                                            type="radio"
                                            name="existing_oic"
                                            value="New"
                                            aria-required="true"
                                        />
                                        <span
                                            class="wpcf7-list-item-label text_radio"
                                            >New</span
                                        >
                                    </span>
                                    <span class="wpcf7-list-item last">
                                        <input
                                            class="input_radio valid"
                                            type="radio"
                                            name="existing_oic"
                                            value="Existing"
                                        />
                                        <span
                                            class="wpcf7-list-item-label text_radio"
                                            >Existing</span
                                        >
                                    </span>
                                </span>
                            </span>
                            <div
                                id="existing_oic_custom_error"
                                class="select_box_error_fix"
                            ></div>
                        </div>
                    </div>
                </div> -->
            <!-- <div
                    class="row existing_oic_toggle get_reference m_t_10"
                    style="display: none"
                >
                    <div class="col-md-4 m_t_10">
                        If Existing, please provide Reference Number:
                    </div>
                    <div class="col-md-6">
                        <span class="wpcf7-form-control-wrap input-group">
                            <input
                                type="text"
                                name="reference_no"
                                id="reference_no"
                                value=""
                                size="40"
                                class="input_text wpcf7-form-control form-control wpcf7-text"
                                placeholder="Reference Number * (Example: OICOA19-2003201220)"
                                disabled="disabled"
                            />
                        </span>
                    </div>
                    <div class="col-md-2">
                        <span class="wpcf7-form-control-wrap m_t_30">
                            <span
                                class="file_btn btn-primary check_existing"
                                onclick="return getReferenceData();"
                                >Check</span
                            >
                        </span>
                    </div>
                </div>
                <div
                    class="panel panel-danger m_t_30 existing_error"
                    style="display: none"
                >
                    <div class="panel-heading">
                        <h3 class="panel-title">Error</h3>
                    </div>
                    <div class="panel-body">
                        Reference ID is Wrong. Please try again with correct
                        information... <br />
                        OR Try with New Application
                    </div>
                </div> -->
            <!-- <div class="show_after_existing_or_new">
                    <div class="form_header_title">General Information</div>
                    <div class="row">
                        <div class="col-md-5 pte_title" id="prev_oic">
                            <b
                                >Have you been previously enrolled at IBM
                                College (OIC)? :</b
                            >
                        </div>
                        <div class="col-md-4">
                            <span class="wpcf7-form-control-wrap pte_title">
                                <span
                                    class="d-flex wpcf7-form-control wpcf7-radio"
                                >
                                    <span class="wpcf7-list-item first">
                                        <input
                                            class="input_radio valid"
                                            type="radio"
                                            name="prev_oic"
                                            id="prev_oic_yes"
                                            value="yes"
                                            aria-required="true"
                                            aria-describedby="prev_oic-error"
                                        />
                                        <span
                                            class="wpcf7-list-item-label text_radio"
                                            >Yes</span
                                        >
                                    </span>
                                    <span class="wpcf7-list-item last">
                                        <input
                                            class="input_radio valid"
                                            type="radio"
                                            name="prev_oic"
                                            id="prev_oic_no"
                                            value="no"
                                            aria-invalid="false"
                                        />
                                        <span
                                            class="wpcf7-list-item-label text_radio"
                                            >No</span
                                        >
                                    </span>
                                </span>
                            </span>
                            <div
                                id="prev_oic_custom_error"
                                class="select_box_error_fix"
                            >
                                <i
                                    id="prev_oic-error"
                                    class="error"
                                    style="display: none"
                                ></i>
                            </div>
                        </div>
                    </div>
                    <div
                        class="row prev_oic_toggle get_wisenet"
                        style="display: none"
                    >
                        <div class="col-md-12">
                            If yes, please provide following details:
                        </div>
                        <div class="col-md-4">
                            <span class="wpcf7-form-control-wrap">
                                <input
                                    type="text"
                                    name="student_number"
                                    id="student_number"
                                    value=""
                                    size="40"
                                    class="input_text wpcf7-form-control wpcf7-text"
                                    placeholder="Student Number *"
                                    disabled="disabled"
                                />
                            </span>
                            <input
                                type="hidden"
                                name="LearnerId"
                                id="LearnerId"
                                value=""
                                disabled="disabled"
                            />
                        </div>
                        <div class="col-md-4">
                            <span class="wpcf7-form-control-wrap">
                                <input
                                    type="email"
                                    name="pre_email"
                                    id="pre_email"
                                    pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"
                                    value=""
                                    size="40"
                                    class="input_text wpcf7-form-control wpcf7-text"
                                    placeholder="E-mail Address *"
                                    disabled="disabled"
                                />
                            </span>
                        </div>
                        <div class="col-md-4 m_t_30">
                            <span class="wpcf7-form-control-wrap m_t_30">
                                <span class="file_btn btn-primary check_wisent"
                                    >Check</span
                                >
                            </span>
                        </div>
                    </div>
                    <div class="ab_show_message" style="display: none"></div>
                    <div
                        class="panel panel-danger m_t_30 app_error"
                        style="display: none"
                    >
                        <div class="panel-heading">
                            <h3 class="panel-title">Error</h3>
                        </div>
                        <div class="panel-body">
                            Learner ID and Email ID is not correct. Please try
                            again with correct information...
                        </div>
                    </div>
                    <div
                        class="panel panel-success m_t_30 app_success"
                        style="display: none"
                    >
                        <div class="panel-heading">
                            <h3 class="panel-title">Success</h3>
                        </div>
                        <div class="panel-body">
                            We found your application <br />
                            <br />Name:
                            <strong>
                                <span class="app_name"></span>
                            </strong>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date
                            of Birth:
                            <strong><span class="app_birth"></span></strong>
                            <p class="m_t_10">
                                If this information is correct then click on
                                <strong>GO</strong> or else click on
                                <strong>RESET</strong>
                            </p>
                            <div class="m_t_20">
                                <span class="file_btn btn-success app_go">Go</span>
                                <span class="file_btn btn-warning app_reset"
                                    >Reset</span
                                >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <b>Are you an ibm college employee? :</b>
                        </div>
                        <div class="col-md-4">
                            <span class="wpcf7-form-control-wrap">
                                <span class="wpcf7-form-control-wrap pte_title">
                                    <span
                                        class="d-flex wpcf7-form-control wpcf7-radio"
                                    >
                                        <span class="wpcf7-list-item first">
                                            <input
                                                class="input_radio valid"
                                                type="radio"
                                                id="employee_of_orange_yes"
                                                name="employee_of_orange"
                                                value="Yes"
                                                aria-required="true"
                                                aria-describedby="employee_of_orange-error"
                                            />
                                            <span
                                                class="wpcf7-list-item-label text_radio"
                                                >Yes</span
                                            >
                                        </span>
                                        <span class="wpcf7-list-item last">
                                            <input
                                                class="input_radio valid"
                                                type="radio"
                                                id="employee_of_orange_no"
                                                name="employee_of_orange"
                                                value="No"
                                                aria-invalid="false"
                                            />
                                            <span
                                                class="wpcf7-list-item-label text_radio"
                                                >No</span
                                            >
                                        </span>
                                    </span>
                                </span>
                            </span>
                            <div
                                id="employee_of_orange_custom_error"
                                class="select_box_error_fix"
                            >
                                <i
                                    id="employee_of_orange-error"
                                    class="error"
                                    style="display: none"
                                ></i>
                            </div>
                        </div>
                        <div class="col-md-5"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <b
                                >Is this enrolment a new
                                traineeship/apperenticeship? :</b
                            >
                        </div>
                        <div class="col-md-4">
                            <span class="wpcf7-form-control-wrap">
                                <span class="wpcf7-form-control-wrap pte_title">
                                    <span
                                        class="d-flex wpcf7-form-control wpcf7-radio"
                                    >
                                        <span class="wpcf7-list-item first">
                                            <input
                                                class="input_radio valid"
                                                type="radio"
                                                id="enrolment_train_yes"
                                                name="enrolment_train"
                                                value="Yes"
                                                aria-required="true"
                                                aria-describedby="enrolment_train-error"
                                            />
                                            <span
                                                class="wpcf7-list-item-label text_radio"
                                                >Yes</span
                                            >
                                        </span>
                                        <span class="wpcf7-list-item last">
                                            <input
                                                class="input_radio valid"
                                                type="radio"
                                                id="enrolment_train_no"
                                                name="enrolment_train"
                                                value="No"
                                                aria-invalid="false"
                                            />
                                            <span
                                                class="wpcf7-list-item-label text_radio"
                                                >No</span
                                            >
                                        </span>
                                    </span>
                                </span>
                            </span>
                            <div
                                id="enrolment_train_custom_error"
                                class="select_box_error_fix"
                            >
                                <i
                                    id="enrolment_train-error"
                                    class="error"
                                    style="display: none"
                                ></i>
                            </div>
                        </div>
                    </div>
                    <div class="row enrolment_train_toggle" style="">
                        <div class="col-md-5">
                            <b
                                >Is this a transfer of enrolment under
                                traineeship/apperenticeship :</b
                            >
                        </div>
                        <div class="col-md-4">
                            <span class="wpcf7-form-control-wrap">
                                <span class="wpcf7-form-control-wrap pte_title">
                                    <span
                                        class="d-flex wpcf7-form-control wpcf7-radio"
                                    >
                                        <span class="wpcf7-list-item first">
                                            <input
                                                class="input_radio valid"
                                                type="radio"
                                                id="transfer_enrolment_train_yes"
                                                name="transfer_enrolment_train"
                                                value="Yes"
                                                aria-required="true"
                                            />
                                            <span
                                                class="wpcf7-list-item-label text_radio"
                                                >Yes</span
                                            >
                                        </span>
                                        <span class="wpcf7-list-item last">
                                            <input
                                                class="input_radio valid"
                                                type="radio"
                                                id="transfer_enrolment_train_no"
                                                name="transfer_enrolment_train"
                                                value="No"
                                            />
                                            <span
                                                class="wpcf7-list-item-label text_radio"
                                                >No</span
                                            >
                                        </span>
                                    </span>
                                </span>
                            </span>
                            <div
                                id="transfer_enrolment_train_custom_error"
                                class="select_box_error_fix"
                            ></div>
                        </div>
                    </div>
                    <div
                        class="row transfer_enrolment_train_toggle"
                        style="display: none; margin-bottom: 20px"
                    >
                        <div class="col-md-5">
                            <b
                                >If yes, please provide your
                                traineeship/apperenticeship number :</b
                            >
                        </div>
                        <div class="col-md-4">
                            <span class="wpcf7-form-control-wrap">
                                <input
                                    type="text"
                                    name="traineeship_num"
                                    id="traineeship_num"
                                    value=""
                                    size="40"
                                    class="input_text wpcf7-form-control"
                                    placeholder="Enter Traineeship/Apperenticeship Number *"
                                    disabled="disabled"
                                />
                            </span>
                            <div
                                id="traineeship_num_custom_error"
                                class="select_box_error_fix"
                            ></div>
                        </div>
                    </div>
                    <div class="preferred_campus">
                        <div class="wpcf7-form-control-wrap pte_title">
                            <span class="wpcf7-form-control wpcf7-radio">
                                <span class="first">
                                    <input
                                        type="hidden"
                                        name="campus[1]"
                                        class="campus campus_group campus_melbourne"
                                        id="campus_melbourne"
                                        value="3000"
                                    />
                                </span>
                            </span>
                        </div>
                    </div>
                    <div class="row hide_after_new_or_existing_app">
                        <div class="col-md-5"><b>Location of training:</b></div>
                        <div class="col-md-4">
                            <span class="wpcf7-form-control-wrap">
                                <select
                                    name="training_location"
                                    id="training_location"
                                    class="input_select wpcf7-form-control wpcf7-text valid"
                                    aria-required="true"
                                    aria-describedby="training_location-error"
                                    aria-invalid="false"
                                >
                                    <option value="">Select State</option>
                                    <option value="Victoria">Victoria</option>
                                    <option value="New South Wales">
                                        New South Wales
                                    </option>
                                    <option value="Queensland">
                                        Queensland
                                    </option>
                                    <option value="South Australia">
                                        South Australia
                                    </option>
                                    <option value="Western Australia">
                                        Western Australia
                                    </option>
                                    <option value="Tasmania">Tasmania</option>
                                    <option value="Northern Territory">
                                        Northern Territory
                                    </option>
                                </select>
                            </span>
                            <div
                                id="training_location_custom_error"
                                class="select_box_error_fix"
                            >
                                <i
                                    id="training_location-error"
                                    class="error"
                                    style="display: none"
                                ></i>
                            </div>
                        </div>
                    </div>
                    <div class="course_preferences">
                        <div class="cam_melbourne table-responsive">
                            <div
                                id="cam_melbourne_custom_error"
                                class="select_box_error_fix"
                            ></div>
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th>Select</th>
                                        <th>Course Code</th>
                                        <th>Course Name</th>
                                        <th>Weeks</th>
                                        <th>Specialisations</th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="wpcf7-list-item first">
                                                <input
                                                    type="checkbox"
                                                    name="course1[]"
                                                    class="input_checkbox mel_BSB30120 valid"
                                                    value="BSB30120"
                                                    aria-required="true"
                                                />
                                                <span
                                                    class="wpcf7-list-item-label"
                                                ></span>
                                            </span>
                                        </td>
                                        <td>BSB30120</td>
                                        <td>Certificate III in Business</td>
                                        <td>52</td>
                                        <td>
                                            <ol>
                                                <li>General Qualification</li>
                                                <li>
                                                    Customer and Client
                                                    Engagement
                                                </li>
                                                <li>Business Administration</li>
                                            </ol>
                                        </td>
                                        <input
                                            type="hidden"
                                            class="ab_dt course_date_id_3000_BSB30120"
                                            name="course_date_id_3000_BSB30120"
                                            value="1199"
                                        />
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="wpcf7-list-item first">
                                                <input
                                                    type="checkbox"
                                                    name="course1[]"
                                                    class="input_checkbox mel_BSB50120"
                                                    value="BSB50120"
                                                />
                                                <span
                                                    class="wpcf7-list-item-label"
                                                ></span>
                                            </span>
                                        </td>
                                        <td>BSB50120</td>
                                        <td>Diploma of Business</td>
                                        <td>52</td>
                                        <td>
                                            <ol>
                                                <li>General Qualification</li>
                                                <li>Operations</li>
                                                <li>Business Development</li>
                                                <li>Leadership</li>
                                                <li>
                                                    Organisational Development
                                                </li>
                                            </ol>
                                        </td>
                                        <input
                                            type="hidden"
                                            class="ab_dt course_date_id_3000_BSB50120"
                                            name="course_date_id_3000_BSB50120"
                                            value="1644"
                                        />
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="wpcf7-list-item first">
                                                <input
                                                    type="checkbox"
                                                    name="course1[]"
                                                    class="input_checkbox mel_BSB40120"
                                                    value="BSB40120"
                                                />
                                                <span
                                                    class="wpcf7-list-item-label"
                                                ></span>
                                            </span>
                                        </td>
                                        <td>BSB40120</td>
                                        <td>Certificate IV in Business</td>
                                        <td>52</td>
                                        <td>
                                            <ol>
                                                <li>General Qualification</li>
                                                <li>Leadership</li>
                                                <li>Business Administration</li>
                                                <li>
                                                    Financial Administration
                                                </li>
                                                <li>Business Operations</li>
                                            </ol>
                                        </td>
                                        <input
                                            type="hidden"
                                            class="ab_dt course_date_id_3000_BSB40120"
                                            name="course_date_id_3000_BSB40120"
                                            value="1207"
                                        />
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="wpcf7-list-item first">
                                                <input
                                                    type="checkbox"
                                                    name="course1[]"
                                                    class="input_checkbox mel_CPC50220"
                                                    value="CPC50220"
                                                />
                                                <span
                                                    class="wpcf7-list-item-label"
                                                ></span>
                                            </span>
                                        </td>
                                        <td>CPC50220</td>
                                        <td>
                                            Diploma of Building and Construction
                                            (Building)
                                        </td>
                                        <td>50.9</td>
                                        <td>
                                            <ol>
                                                <li>Not Applicable</li>
                                            </ol>
                                        </td>
                                        <input
                                            type="hidden"
                                            class="ab_dt course_date_id_3000_CPC50220"
                                            name="course_date_id_3000_CPC50220"
                                            value="1662"
                                        />
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="wpcf7-list-item first">
                                                <input
                                                    type="checkbox"
                                                    name="course1[]"
                                                    class="input_checkbox mel_BSB50820"
                                                    value="BSB50820"
                                                />
                                                <span
                                                    class="wpcf7-list-item-label"
                                                ></span>
                                            </span>
                                        </td>
                                        <td>BSB50820</td>
                                        <td>Diploma of Project Management</td>
                                        <td>52</td>
                                        <td>
                                            <ol>
                                                <li>Not Applicable</li>
                                            </ol>
                                        </td>
                                        <input
                                            type="hidden"
                                            class="ab_dt course_date_id_3000_BSB50820"
                                            name="course_date_id_3000_BSB50820"
                                            value="1647"
                                        />
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="wpcf7-list-item first">
                                                <input
                                                    type="checkbox"
                                                    name="course1[]"
                                                    class="input_checkbox mel_BSB50420"
                                                    value="BSB50420"
                                                />
                                                <span
                                                    class="wpcf7-list-item-label"
                                                ></span>
                                            </span>
                                        </td>
                                        <td>BSB50420</td>
                                        <td>
                                            Diploma of Leadership and Management
                                        </td>
                                        <td>52</td>
                                        <td>
                                            <ol>
                                                <li>Not Applicable</li>
                                            </ol>
                                        </td>
                                        <input
                                            type="hidden"
                                            class="ab_dt course_date_id_3000_BSB50420"
                                            name="course_date_id_3000_BSB50420"
                                            value="1648"
                                        />
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> -->
            <!-- <div class="row">
                    <div class="col-md-12 m_t_10">
                        <button
                            type="button"
                            value="Next"
                            class="file_btn btn-xs-inline open1 next_button wpcf7-form-control wpcf7-submit pull-right"
                        >
                            Next<span class="fa fa-arrow-right"></span>
                        </button>
                    </div>
                </div> -->
            <!-- </div> -->
            <!-- Section 1 -->

            <!-- Section 2 -->
            <!-- <div id="sf2" class="frm" style="display: none">
                <div class="personal_details">
                    <div class="form_header_title">Personal Details</div>
                    <div class="row">
                        <div class="col-md-6 pte_title" id="sr_title">
                            <b>Title :</b>
                            <span class="wpcf7-form-control-wrap">
                                <span
                                    class="d-flex wpcf7-form-control wpcf7-radio"
                                    id="sr_title"
                                >
                                    <span class="wpcf7-list-item first">
                                        <input
                                            class="input_radio valid"
                                            type="radio"
                                            name="sr_name_title"
                                            id="sr_name_1"
                                            value="Mr"
                                            aria-required="true"
                                        />
                                        <span
                                            class="wpcf7-list-item-label text_radio"
                                            >Mr</span
                                        >
                                    </span>
                                    <span class="wpcf7-list-item first">
                                        <input
                                            class="input_radio valid"
                                            type="radio"
                                            name="sr_name_title"
                                            id="sr_name_2"
                                            value="Miss"
                                        />
                                        <span
                                            class="wpcf7-list-item-label text_radio"
                                            >Miss</span
                                        >
                                    </span>
                                    <span class="wpcf7-list-item last">
                                        <input
                                            class="input_radio valid"
                                            type="radio"
                                            name="sr_name_title"
                                            id="sr_name_3"
                                            value="Ms"
                                        />
                                        <span
                                            class="wpcf7-list-item-label text_radio"
                                            >Ms</span
                                        >
                                    </span>
                                    <span class="wpcf7-list-item last">
                                        <input
                                            class="input_radio valid"
                                            type="radio"
                                            name="sr_name_title"
                                            id="sr_name_4"
                                            value="Other"
                                        />
                                        <span
                                            class="wpcf7-list-item-label text_radio"
                                            >Other</span
                                        >
                                    </span>
                                </span>
                            </span>
                            <div
                                id="sr_name_title_error"
                                class="select_box_error_fix"
                            ></div>
                        </div>
                        <div class="col-md-6 pte_title" id="sex">
                            <b>Sex :</b>
                            <span class="wpcf7-form-control-wrap gender">
                                <span
                                    class="d-flex wpcf7-form-control wpcf7-radio"
                                    id="sex"
                                >
                                    <span class="wpcf7-list-item first">
                                        <input
                                            class="input_radio valid"
                                            type="radio"
                                            name="sex"
                                            id="sex_2"
                                            value="male"
                                            aria-required="true"
                                        />
                                        <span
                                            class="wpcf7-list-item-label text_radio"
                                            >Male</span
                                        >
                                    </span>
                                    <span class="wpcf7-list-item last">
                                        <input
                                            class="input_radio valid"
                                            type="radio"
                                            name="sex"
                                            id="sex_1"
                                            value="female"
                                        />
                                        <span
                                            class="wpcf7-list-item-label text_radio"
                                            >Female</span
                                        >
                                    </span>
                                    <span class="wpcf7-list-item last">
                                        <input
                                            class="input_radio valid"
                                            type="radio"
                                            name="sex"
                                            id="sex_4"
                                            value="other"
                                        />
                                        <span
                                            class="wpcf7-list-item-label text_radio"
                                            >other</span
                                        >
                                    </span>
                                </span>
                            </span>
                            <div
                                id="sex_custom_error"
                                class="select_box_error_fix"
                            ></div>
                        </div>
                        <div class="col-md-6 col-sm-4">
                            <span class="wpcf7-form-control-wrap">
                                <input
                                    type="text"
                                    name="family_name"
                                    id="family_name"
                                    value=""
                                    size="40"
                                    class="input_text wpcf7-form-control wpcf7-text valid"
                                    placeholder="Family Name (Surname)*"
                                    aria-required="true"
                                    aria-invalid="false"
                                />
                            </span>
                        </div>
                        <div class="col-md-3 col-sm-4">
                            <span class="wpcf7-form-control-wrap">
                                <input
                                    type="text"
                                    name="middle_name"
                                    id="middle_name"
                                    value=""
                                    size="40"
                                    class="input_text wpcf7-form-control wpcf7-text valid"
                                    placeholder="Middle Name"
                                    aria-invalid="false"
                                />
                            </span>
                        </div>
                        <div class="col-md-3 col-sm-4">
                            <span class="wpcf7-form-control-wrap">
                                <input
                                    type="text"
                                    name="given_name"
                                    id="given_name"
                                    value=""
                                    size="40"
                                    class="input_text wpcf7-form-control wpcf7-text valid"
                                    placeholder="Given Name(s) *"
                                    aria-required="true"
                                    aria-invalid="false"
                                />
                            </span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 col-sm-4">
                            <span class="wpcf7-form-control-wrap">
                                <div class="intl-tel-input allow-dropdown">
                                    <div class="flag-container">
                                        <div
                                            class="selected-flag"
                                            role="combobox"
                                            aria-owns="country-listbox"
                                            tabindex="0"
                                            title="Australia: +61"
                                        >
                                            <div class="iti-flag au"></div>
                                            <div class="iti-arrow"></div>
                                        </div>
                                        <ul
                                            class="country-list hide"
                                            id="country-listbox"
                                            aria-expanded="false"
                                            role="listbox"
                                            aria-activedescendant="iti-item-au"
                                        >
                                            <li
                                                class="country standard active"
                                                tabindex="-1"
                                                id="iti-item-au"
                                                role="option"
                                                data-dial-code="61"
                                                data-country-code="au"
                                                aria-selected="true"
                                            >
                                                <div class="flag-box">
                                                    <div
                                                        class="iti-flag au"
                                                    ></div>
                                                </div>
                                                <span class="country-name"
                                                    >Australia</span
                                                ><span class="dial-code"
                                                    >+61</span
                                                >
                                            </li>
                                        </ul>
                                    </div>
                                    <input
                                        type="tel"
                                        name="phone"
                                        id="phone"
                                        value=""
                                        size="40"
                                        class="input_text wpcf7-form-control wpcf7-text phone-group valid"
                                        placeholder="Home Phone "
                                        autocomplete="off"
                                        data-intl-tel-input-id="4"
                                    /><input
                                        type="hidden"
                                        name="full_phone"
                                        value="+6121561651"
                                    />
                                </div>
                                <span class="suggestion"
                                    >eg: Select country flag and then enter your
                                    number like 4XXXXXXXX. Not required country
                                    code</span
                                >
                            </span>
                            <div class="col-md-12">
                                <div
                                    id="phone_custom_error"
                                    class="select_box_error_fix"
                                ></div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4">
                            <span class="wpcf7-form-control-wrap">
                                <div class="intl-tel-input allow-dropdown">
                                    <div class="flag-container">
                                        <div
                                            class="selected-flag"
                                            role="combobox"
                                            aria-owns="country-listbox"
                                            tabindex="0"
                                            title="Australia: +61"
                                        >
                                            <div class="iti-flag au"></div>
                                            <div class="iti-arrow"></div>
                                        </div>
                                        <ul
                                            class="country-list hide"
                                            id="country-listbox"
                                            aria-expanded="false"
                                            role="listbox"
                                            aria-activedescendant="iti-item-au"
                                        >
                                            <li
                                                class="country standard active"
                                                tabindex="-1"
                                                id="iti-item-au"
                                                role="option"
                                                data-dial-code="61"
                                                data-country-code="au"
                                                aria-selected="true"
                                            >
                                                <div class="flag-box">
                                                    <div
                                                        class="iti-flag au"
                                                    ></div>
                                                </div>
                                                <span class="country-name"
                                                    >Australia</span
                                                ><span class="dial-code"
                                                    >+61</span
                                                >
                                            </li>
                                        </ul>
                                    </div>
                                    <input
                                        type="tel"
                                        name="mob"
                                        id="mob"
                                        value=""
                                        size="40"
                                        class="input_text wpcf7-form-control wpcf7-text phone-group valid"
                                        placeholder="Mobile Number "
                                        autocomplete="off"
                                        data-intl-tel-input-id="0"
                                    /><input
                                        type="hidden"
                                        name="full_mob"
                                        value="+615618691"
                                    />
                                </div>
                            </span>
                            <div class="col-md-12">
                                <div
                                    id="mob_custom_error"
                                    class="select_box_error_fix"
                                ></div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <span class="wpcf7-form-control-wrap">
                                <input
                                    type="text"
                                    name="previous_name"
                                    id="previous_name"
                                    value=""
                                    size="40"
                                    class="input_text wpcf7-form-control wpcf7-text"
                                    placeholder="Previous Name (If applicable)"
                                />
                            </span>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <span class="wpcf7-form-control-wrap">
                                <input
                                    type="text"
                                    name="dob"
                                    id="dob"
                                    size="40"
                                    class="input_text date_width wpcf7-form-control wpcf7-text hasDatepicker valid"
                                    placeholder="Date Of Birth *"
                                    readonly=""
                                    aria-required="true"
                                />
                            </span>
                            <span class="suggestion"
                                >eg: Please select year first</span
                            >
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <span class="wpcf7-form-control-wrap">
                                <input
                                    type="email"
                                    name="email"
                                    id="email"
                                    pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"
                                    value=""
                                    size="40"
                                    class="input_text wpcf7-form-control wpcf7-text valid"
                                    placeholder="E-mail Address *"
                                    aria-required="true"
                                    aria-describedby="email-error"
                                    aria-invalid="false"
                                /><i
                                    id="email-error"
                                    class="error"
                                    style="display: none"
                                ></i>
                            </span>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <span class="wpcf7-form-control-wrap">
                                <input
                                    type="email"
                                    name="alter_email"
                                    id="alter_email"
                                    pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"
                                    value=""
                                    size="40"
                                    class="input_text wpcf7-form-control wpcf7-text valid"
                                    placeholder="Alternative E-mail Address (optional)"
                                />
                            </span>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <span class="wpcf7-form-control-wrap">
                                <div class="intl-tel-input allow-dropdown">
                                    <div class="flag-container">
                                        <div
                                            class="selected-flag"
                                            role="combobox"
                                            aria-owns="country-listbox"
                                            tabindex="0"
                                            title="Australia: +61"
                                        >
                                            <div class="iti-flag au"></div>
                                            <div class="iti-arrow"></div>
                                        </div>
                                        <ul
                                            class="country-list hide"
                                            id="country-listbox"
                                            aria-expanded="false"
                                            role="listbox"
                                            aria-activedescendant="iti-item-au"
                                        >
                                            <li
                                                class="country standard active"
                                                tabindex="-1"
                                                id="iti-item-au"
                                                role="option"
                                                data-dial-code="61"
                                                data-country-code="au"
                                                aria-selected="true"
                                            >
                                                <div class="flag-box">
                                                    <div
                                                        class="iti-flag au"
                                                    ></div>
                                                </div>
                                                <span class="country-name"
                                                    >Australia</span
                                                ><span class="dial-code"
                                                    >+61</span
                                                >
                                            </li>
                                        </ul>
                                    </div>
                                    <input
                                        type="tel"
                                        name="work_phone"
                                        id="work_phone"
                                        value=""
                                        size="40"
                                        class="input_text wpcf7-form-control wpcf7-text"
                                        placeholder="Work Phone (optional) "
                                        autocomplete="off"
                                        data-intl-tel-input-id="3"
                                    /><input
                                        type="hidden"
                                        name="full_work_phone"
                                    />
                                </div>
                                <span class="suggestion"></span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="residential_details">
                    <h5 class="form_header_title">Residential Address</h5>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <span class="wpcf7-form-control-wrap">
                                <input
                                    type="text"
                                    name="address1"
                                    id="address1"
                                    value=""
                                    size="40"
                                    class="input_text wpcf7-form-control wpcf7-text valid"
                                    placeholder="Address 1"
                                    aria-required="true"
                                    aria-describedby="address1-error"
                                    aria-invalid="false"
                                /><i
                                    id="address1-error"
                                    class="error"
                                    style="display: none"
                                ></i>
                            </span>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <span class="wpcf7-form-control-wrap">
                                <input
                                    type="text"
                                    name="address2"
                                    id="address2"
                                    value=""
                                    size="40"
                                    class="input_text wpcf7-form-control wpcf7-text"
                                    placeholder="Address 2"
                                />
                            </span>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <span class="wpcf7-form-control-wrap">
                                <input
                                    type="text"
                                    name="city"
                                    id="city"
                                    value=""
                                    size="40"
                                    class="input_text wpcf7-form-control wpcf7-text valid"
                                    placeholder="City / Suburb"
                                    aria-required="true"
                                    aria-describedby="city-error"
                                    aria-invalid="false"
                                /><i
                                    id="city-error"
                                    class="error"
                                    style="display: none"
                                ></i>
                            </span>
                        </div>

                        <div class="col-md-3 col-sm-12">
                            <span class="wpcf7-form-control-wrap">
                                <input
                                    type="text"
                                    name="postcode"
                                    id="postcode"
                                    value=""
                                    size="40"
                                    class="input_text wpcf7-form-control wpcf7-text valid"
                                    placeholder="postcode"
                                    aria-required="true"
                                    aria-describedby="postcode-error"
                                    aria-invalid="false"
                                /><i
                                    id="postcode-error"
                                    class="error"
                                    style="display: none"
                                ></i>
                            </span>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <span class="wpcf7-form-control-wrap">
                                <input
                                    type="text"
                                    name="residential_state"
                                    id="residential_state"
                                    value=""
                                    size="40"
                                    class="input_text wpcf7-form-control wpcf7-text"
                                    placeholder="state"
                                />
                            </span>
                        </div>
                    </div>
                </div>
                <div class="contact_details">
                    <div class="form_header_title">
                        Postal Address (
                        <input
                            type="checkbox"
                            class="input_checkbox"
                            name="is_postal"
                            id="is_postal"
                            value="1"
                        />
                        <span class="text_checkbox wpcf7-list-item-label"
                            >if different to residential address</span
                        >
                        )
                    </div>
                    <div class="row aus_address_section" style="display: none">
                        <div class="col-md-6 col-sm-12">
                            <span class="wpcf7-form-control-wrap">
                                <input
                                    type="text"
                                    name="postal_address1"
                                    id="postal_address1"
                                    value=""
                                    size="40"
                                    class="input_text wpcf7-form-control wpcf7-text"
                                    placeholder="Address 1"
                                    disabled="disabled"
                                />
                            </span>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <span class="wpcf7-form-control-wrap">
                                <input
                                    type="text"
                                    name="postal_address2"
                                    id="postal_address2"
                                    value=""
                                    size="40"
                                    class="input_text wpcf7-form-control wpcf7-text"
                                    placeholder="Address 2"
                                    disabled="disabled"
                                />
                            </span>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <span class="wpcf7-form-control-wrap">
                                <input
                                    type="text"
                                    name="postal_city"
                                    id="postal_city"
                                    value=""
                                    size="40"
                                    class="input_text wpcf7-form-control wpcf7-text"
                                    placeholder="City / Suburb"
                                    disabled="disabled"
                                />
                            </span>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <span class="wpcf7-form-control-wrap">
                                <input
                                    type="text"
                                    name="postal_postcode"
                                    id="postal_postcode"
                                    value=""
                                    size="40"
                                    class="input_text wpcf7-form-control wpcf7-text"
                                    placeholder="Post Code"
                                    disabled="disabled"
                                />
                            </span>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <span class="wpcf7-form-control-wrap">
                                <input
                                    type="text"
                                    name="postal_state"
                                    id="postal_state"
                                    value=""
                                    size="40"
                                    class="input_text wpcf7-form-control wpcf7-text"
                                    placeholder="state"
                                    disabled="disabled"
                                />
                            </span>
                        </div>
                    </div>
                </div>
                <div class="emergency_details">
                    <div class="form_header_title">
                        Emergency Details of Next of Kin
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <span class="wpcf7-form-control-wrap">
                                <input
                                    type="text"
                                    name="emergency_first_name"
                                    id="emergency_first_name"
                                    value=""
                                    size="40"
                                    class="input_text wpcf7-form-control wpcf7-text valid"
                                    placeholder="Contact Name"
                                    aria-required="true"
                                    aria-describedby="emergency_first_name-error"
                                    aria-invalid="false"
                                /><i
                                    id="emergency_first_name-error"
                                    class="error"
                                    style="display: none"
                                ></i>
                            </span>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <span class="wpcf7-form-control-wrap">
                                <div class="intl-tel-input allow-dropdown">
                                    <div class="flag-container">
                                        <div
                                            class="selected-flag"
                                            role="combobox"
                                            aria-owns="country-listbox"
                                            tabindex="0"
                                            title="Australia: +61"
                                        >
                                            <div class="iti-flag au"></div>
                                            <div class="iti-arrow"></div>
                                        </div>
                                        <ul
                                            class="country-list hide"
                                            id="country-listbox"
                                            aria-expanded="false"
                                            role="listbox"
                                            aria-activedescendant="iti-item-au"
                                        >
                                            <li
                                                class="country standard active"
                                                tabindex="-1"
                                                id="iti-item-au"
                                                role="option"
                                                data-dial-code="61"
                                                data-country-code="au"
                                                aria-selected="true"
                                            >
                                                <div class="flag-box">
                                                    <div
                                                        class="iti-flag au"
                                                    ></div>
                                                </div>
                                                <span class="country-name"
                                                    >Australia</span
                                                ><span class="dial-code"
                                                    >+61</span
                                                >
                                            </li>
                                        </ul>
                                    </div>
                                    <input
                                        type="tel"
                                        name="emergency_contact"
                                        id="emergency_contact"
                                        value=""
                                        size="40"
                                        class="input_text wpcf7-form-control wpcf7-text valid"
                                        placeholder="Contact Number "
                                        autocomplete="off"
                                        data-intl-tel-input-id="5"
                                        aria-required="true"
                                        aria-describedby="emergency_contact-error"
                                        aria-invalid="false"
                                    /><i
                                        id="emergency_contact-error"
                                        class="error"
                                        style="display: none"
                                    ></i
                                    ><input
                                        type="hidden"
                                        name="full_emergency_contact"
                                        value="+61215619"
                                    />
                                </div>
                                <span class="suggestion"
                                    >eg: Select country flag and then enter your
                                    number like 4XXXXXXXX. Not required country
                                    code</span
                                >
                            </span>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <span class="wpcf7-form-control-wrap">
                                <select
                                    name="emergency_relationship"
                                    id="emergency_relationship"
                                    class="input_select wpcf7-form-control wpcf7-text"
                                >
                                    <option value="">
                                        -- Choose Relationship --
                                    </option>
                                    <option value="32">Father</option>
                                    <option value="33">Mother</option>
                                    <option value="34">Brother</option>
                                    <option value="35">Sister</option>
                                    <option value="36">Grandparent</option>
                                    <option value="148">Spouse</option>
                                </select>
                                <input
                                    type="hidden"
                                    id="pdf_emergency_relationship"
                                    name="pdf_emergency_relationship"
                                    class="pdf_emergency_relationship"
                                    value=""
                                />
                            </span>
                        </div>
                    </div>
                </div>
                <div class="language_cultural_diversity">
                    <div class="form_header_title">
                        Language and Cultural Diversity
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <b>In which country were you born? :</b>
                        </div>
                        <div class="col-md-4">
                            <span class="wpcf7-form-control-wrap">
                                <span class="wpcf7-form-control-wrap pte_title">
                                    <span
                                        class="d-flex wpcf7-form-control wpcf7-radio"
                                    >
                                        <span class="wpcf7-list-item first">
                                            <input
                                                class="input_radio valid"
                                                type="radio"
                                                id="born_country_Australia"
                                                name="born_country"
                                                value="Australia"
                                                aria-required="true"
                                                aria-describedby="born_country-error"
                                            />
                                            <span
                                                class="wpcf7-list-item-label text_radio"
                                                >Australia</span
                                            >
                                        </span>
                                        <span class="wpcf7-list-item last">
                                            <input
                                                class="input_radio valid"
                                                type="radio"
                                                id="born_country_Other"
                                                name="born_country"
                                                value="Other"
                                                aria-invalid="false"
                                            />
                                            <span
                                                class="wpcf7-list-item-label text_radio"
                                                >Other, Please Specify</span
                                            >
                                        </span>
                                    </span>
                                </span>
                            </span>
                        </div>
                        <div class="col-md-4 toggle_born" style="">
                            <span class="wpcf7-form-control-wrap">
                                <select
                                    name="born_other"
                                    id="born_other"
                                    class="input_select wpcf7-form-control wpcf7-text fetch_country_name5 valid"
                                    aria-invalid="false"
                                >
                                    <option value="">
                                        -- Choose Country? --
                                    </option>
                                    <option value="7">
                                        Adélie Land (France)
                                    </option>
                                    <option value="15">Afghanistan</option>
                                    <option value="25">Albania</option>
                                    <option value="29">Algeria</option>
                                    <option value="45">Andorra</option>
                                    <option value="47">Angola</option>
                                    <option value="48">Anguilla</option>
                                    <option value="53">Antarctica</option>
                                    <option value="55">
                                        Antigua and Barbuda
                                    </option>
                                    <option value="61">Argentina</option>
                                    <option value="62">
                                        Argentinian Antarctic Territory
                                    </option>
                                    <option value="65">Armenia</option>
                                    <option value="68">Aruba</option>
                                    <option value="72">
                                        Saint Helena, Ascension and Tristan da
                                        Cunha
                                    </option>
                                    <option value="83">Australia</option>
                                    <option value="85">
                                        Australian Antarctic Territory
                                    </option>
                                    <option value="87">
                                        Australian External Territories, nec
                                    </option>
                                    <option value="88">Austria</option>
                                    <option value="92">Azerbaijan</option>
                                    <option value="97">Bahamas</option>
                                    <option value="98">Bahrain</option>
                                    <option value="114">Bangladesh</option>
                                    <option value="116">Barbados</option>
                                    <option value="129">Belarus</option>
                                    <option value="135">Belgium</option>
                                    <option value="137">Belize</option>
                                    <option value="140">Benin</option>
                                    <option value="142">Bermuda</option>
                                    <option value="145">Bhutan</option>
                                    <option value="162">Bolivia</option>
                                    <option value="167">Born at sea</option>
                                    <option value="171">
                                        Bosnia and Herzegovina
                                    </option>
                                    <option value="173">Botswana</option>
                                    <option value="177">Brazil</option>
                                    <option value="182">
                                        British Antarctic Territory
                                    </option>
                                    <option value="193">
                                        British Indian Ocean Territory
                                    </option>
                                    <option value="199">
                                        British Virgin Islands
                                    </option>
                                    <option value="204">
                                        Brunei Darussalam
                                    </option>
                                    <option value="209">Bulgaria</option>
                                    <option value="213">Burkina Faso</option>
                                    <option value="215">Myanmar (Burma)</option>
                                    <option value="218">Burundi</option>
                                    <option value="225">Cambodia</option>
                                    <option value="226">Cameroon</option>
                                    <option value="229">Canada</option>
                                    <option value="241">Cape Verde</option>
                                    <option value="251">Cayman Islands</option>
                                    <option value="254">
                                        Central African Republic
                                    </option>
                                    <option value="261">Chad</option>
                                    <option value="265">Channel Islands</option>
                                    <option value="268">Chile</option>
                                    <option value="269">
                                        Chilean Antarctic Territory
                                    </option>
                                    <option value="284">Colombia</option>
                                    <option value="287">Comoros</option>
                                    <option value="289">
                                        Congo, Democratic Republic of
                                    </option>
                                    <option value="290">
                                        Congo, People's Republic of
                                    </option>
                                    <option value="292">Cook Islands</option>
                                    <option value="298">Costa Rica</option>
                                    <option value="304">Croatia</option>
                                    <option value="305">Cuba</option>
                                    <option value="306">Curacao Island</option>
                                    <option value="310">Cyprus</option>
                                    <option value="312">Czech Republic</option>
                                    <option value="332">Denmark</option>
                                    <option value="339">Djibouti</option>
                                    <option value="342">Dominica</option>
                                    <option value="343">
                                        Dominican Republic
                                    </option>
                                    <option value="370">Ecuador</option>
                                    <option value="373">Egypt</option>
                                    <option value="375">El Salvador</option>
                                    <option value="385">England</option>
                                    <option value="389">
                                        Equatorial Guinea
                                    </option>
                                    <option value="391">Eritrea</option>
                                    <option value="397">Estonia</option>
                                    <option value="398">Ethiopia</option>
                                    <option value="405">
                                        Falkland Islands
                                    </option>
                                    <option value="407">Faroe Islands</option>
                                    <option value="413">
                                        Micronesia, Federated States of
                                    </option>
                                    <option value="416">Fiji</option>
                                    <option value="418">Finland</option>
                                    <option value="422">
                                        Macedonia, The Former Yugoslav Republic
                                        of
                                    </option>
                                    <option value="425">France</option>
                                    <option value="433">French Guiana</option>
                                    <option value="436">
                                        French Polynesia
                                    </option>
                                    <option value="448">Gabon</option>
                                    <option value="452">Gambia</option>
                                    <option value="457">Georgia</option>
                                    <option value="459">Germany</option>
                                    <option value="460">Ghana</option>
                                    <option value="462">Gibraltar</option>
                                    <option value="471">Greece</option>
                                    <option value="473">Greenland</option>
                                    <option value="474">Grenada</option>
                                    <option value="479">Guadeloupe</option>
                                    <option value="480">Guam</option>
                                    <option value="481">Guatemala</option>
                                    <option value="482">Guernsey</option>
                                    <option value="483">Guinea</option>
                                    <option value="485">Guinea-Bissau</option>
                                    <option value="489">Guyana</option>
                                    <option value="501">Haiti</option>
                                    <option value="528">Honduras</option>
                                    <option value="529">Hong Kong</option>
                                    <option value="533">Hungary</option>
                                    <option value="535">Iceland</option>
                                    <option value="540">India</option>
                                    <option value="542">Indonesia</option>
                                    <option value="547">Iran</option>
                                    <option value="548">Iraq</option>
                                    <option value="549">Ireland</option>
                                    <option value="554">Isle of Man</option>
                                    <option value="558">Israel</option>
                                    <option value="563">Italy</option>
                                    <option value="564">Ivory Coast</option>
                                    <option value="566">Jamaica</option>
                                    <option value="569">Japan</option>
                                    <option value="573">Jersey</option>
                                    <option value="579">Jordan</option>
                                    <option value="580">Jugoslavia</option>
                                    <option value="605">Kazakhstan</option>
                                    <option value="611">Kenya</option>
                                    <option value="630">Kiribati</option>
                                    <option value="637">
                                        Korea, Republic of (South)
                                    </option>
                                    <option value="643">Kuwait</option>
                                    <option value="649">Kyrgyzstan</option>
                                    <option value="661">Laos</option>
                                    <option value="664">Latvia</option>
                                    <option value="667">Lebanon</option>
                                    <option value="674">Lesotho</option>
                                    <option value="679">Liberia</option>
                                    <option value="681">Libya</option>
                                    <option value="682">Liechtenstein</option>
                                    <option value="690">Lithuania</option>
                                    <option value="706">Luxembourg</option>
                                    <option value="713">Macau</option>
                                    <option value="717">Madagascar</option>
                                    <option value="742">Malawi</option>
                                    <option value="744">Malaysia</option>
                                    <option value="745">Maldives</option>
                                    <option value="748">Mali</option>
                                    <option value="751">Malta</option>
                                    <option value="767">
                                        Marianas Islands
                                    </option>
                                    <option value="770">
                                        Marshall Islands
                                    </option>
                                    <option value="771">Martinique</option>
                                    <option value="774">Mauritania</option>
                                    <option value="776">Mauritius</option>
                                    <option value="778">Mayotte</option>
                                    <option value="791">Mexico</option>
                                    <option value="808">Monaco</option>
                                    <option value="811">Mongolia</option>
                                    <option value="813">Montenegro</option>
                                    <option value="814">Montserrat</option>
                                    <option value="817">Morocco</option>
                                    <option value="819">Mozambique</option>
                                    <option value="829">Namibia</option>
                                    <option value="831">Nauru</option>
                                    <option value="838">Nepal</option>
                                    <option value="839">Netherlands</option>
                                    <option value="851">New Caledonia</option>
                                    <option value="856">New Zealand</option>
                                    <option value="860">Nicaragua</option>
                                    <option value="863">Niger</option>
                                    <option value="864">Nigeria</option>
                                    <option value="867">Niue</option>
                                    <option value="869">Norfolk Island</option>
                                    <option value="873">
                                        North Africa, nec
                                    </option>
                                    <option value="883">
                                        Northern Ireland
                                    </option>
                                    <option value="889">Norway</option>
                                    <option value="891">Not Specified</option>
                                    <option value="903">Oman</option>
                                    <option value="913">Pacific Islands</option>
                                    <option value="916">Pakistan</option>
                                    <option value="917">Palau</option>
                                    <option value="918">Palestine</option>
                                    <option value="922">Panama</option>
                                    <option value="924">
                                        Papua New Guinea
                                    </option>
                                    <option value="926">Paraguay</option>
                                    <option value="941">Peru</option>
                                    <option value="942">Philippines</option>
                                    <option value="956">Poland</option>
                                    <option value="960">
                                        Polynesia (excludes Hawaii), nec
                                    </option>
                                    <option value="965">Portugal</option>
                                    <option value="980">Puerto Rico</option>
                                    <option value="984">Qatar</option>
                                    <option value="989">
                                        Queen Maud Land (Norway)
                                    </option>
                                    <option value="1005">
                                        Moldova, Republic of
                                    </option>
                                    <option value="1009">Réunion</option>
                                    <option value="1019">Romania</option>
                                    <option value="1021">
                                        Ross Dependency (New Zealand)
                                    </option>
                                    <option value="1033">
                                        Russian Federation
                                    </option>
                                    <option value="1035">Rwanda</option>
                                    <option value="1043">Samoa</option>
                                    <option value="1045">
                                        Samoa, American
                                    </option>
                                    <option value="1048">San Marino</option>
                                    <option value="1052">
                                        Sao Tomé and Principe
                                    </option>
                                    <option value="1060">Saudi Arabia</option>
                                    <option value="1077">Scotland</option>
                                    <option value="1079">Senegal</option>
                                    <option value="1080">Serbia</option>
                                    <option value="1082">Seychelles</option>
                                    <option value="1093">Sierra Leone</option>
                                    <option value="1098">Singapore</option>
                                    <option value="1109">Slovakia</option>
                                    <option value="1112">Slovenia</option>
                                    <option value="1117">
                                        Solomon Islands
                                    </option>
                                    <option value="1118">Somalia</option>
                                    <option value="1123">South Africa</option>
                                    <option value="1125">
                                        South America, nec
                                    </option>
                                    <option value="1148">Spain</option>
                                    <option value="1150">
                                        Spanish North Africa
                                    </option>
                                    <option value="1153">Sri Lanka</option>
                                    <option value="1159">
                                        St Kitts and Nevis
                                    </option>
                                    <option value="1161">St Lucia</option>
                                    <option value="1163">
                                        St Pierre and Miquelon
                                    </option>
                                    <option value="1166">
                                        St Vincent and the Grenadines
                                    </option>
                                    <option value="1171">Sudan</option>
                                    <option value="1180">Suriname</option>
                                    <option value="1183">Swaziland</option>
                                    <option value="1184">Sweden</option>
                                    <option value="1185">Switzerland</option>
                                    <option value="1186">Syria</option>
                                    <option value="1193">Taiwan</option>
                                    <option value="1195">Tajikistan</option>
                                    <option value="1200">Tanzania</option>
                                    <option value="1209">Thailand</option>
                                    <option value="1228">Togo</option>
                                    <option value="1231">Tokelau</option>
                                    <option value="1232">Tonga</option>
                                    <option value="1250">
                                        Trinidad and Tobago
                                    </option>
                                    <option value="1261">Tunisia</option>
                                    <option value="1264">Turkey</option>
                                    <option value="1267">Turkmenistan</option>
                                    <option value="1268">
                                        Turks and Caicos Islands
                                    </option>
                                    <option value="1270">Tuvalu</option>
                                    <option value="1275">Uganda</option>
                                    <option value="1278">Ukraine</option>
                                    <option value="1283">
                                        United Arab Emirates
                                    </option>
                                    <option value="1289">
                                        United States of America
                                    </option>
                                    <option value="1291">Unknown</option>
                                    <option value="1295">Uruguay</option>
                                    <option value="1299">
                                        US Virgin Islands
                                    </option>
                                    <option value="1304">Uzbekistan</option>
                                    <option value="1308">Vanuatu</option>
                                    <option value="1309">Vatican City</option>
                                    <option value="1314">Venezuela</option>
                                    <option value="1317">Vietnam</option>
                                    <option value="1326">Wales</option>
                                    <option value="1327">
                                        Wallis and Futuna
                                    </option>
                                    <option value="1341">Western Sahara</option>
                                    <option value="1355">Yemen</option>
                                    <option value="1367">Zambia</option>
                                    <option value="1371">Zimbabwe</option>
                                    <option value="1373">Kosovo</option>
                                    <option value="1374">
                                        Pitcairn Islands
                                    </option>
                                    <option value="1377">Aland Islands</option>
                                    <option value="1379">South Sudan</option>
                                    <option value="1381">Timor-Leste</option>
                                    <option value="1382">China</option>
                                    <option value="1384">
                                        Korea, Democratic People's Republic of
                                        (North)
                                    </option>
                                    <option value="1387">St Barthelemy</option>
                                    <option value="1388">
                                        St Martin (French part)
                                    </option>
                                    <option value="1389">
                                        Bonaire, Sint Eustatius and Saba
                                    </option>
                                    <option value="1390">Curacao</option>
                                    <option value="1391">
                                        Sint Maarten (Dutch part)
                                    </option>
                                    <option value="1392">United Kingdom</option>
                                </select>
                                <input
                                    type="hidden"
                                    id="pdf_born_other"
                                    name="pdf_born_other"
                                    class="pdf_born_other"
                                    value="Albania"
                                />
                            </span>
                            <div
                                id="born_other_custom_error"
                                class="select_box_error_fix"
                            ></div>
                        </div>
                        <div class="col-md-8">
                            <b>Citizenship Status :</b>
                        </div>
                        <div class="col-md-4" style="margin-bottom: 10px">
                            <span class="wpcf7-form-control-wrap">
                                <select
                                    name="citizenship_status"
                                    id="citizenship_status"
                                    class="input_select wpcf7-form-control wpcf7-text fetch_country_name5 valid"
                                    aria-invalid="false"
                                >
                                    <option value="">
                                        -- Citizenship Status --
                                    </option>
                                    <option value="Australian Citizen">
                                        Australian Citizen
                                    </option>
                                    <option value="Permanent Resident">
                                        Permanent Resident
                                    </option>
                                    <option value="Temporary Resident">
                                        Temporary Resident
                                    </option>
                                </select>
                                <input
                                    type="hidden"
                                    id="pdf_citizenship_status"
                                    name="pdf_citizenship_status"
                                    class="pdf_citizenship_status"
                                    value="Permanent Resident"
                                />
                            </span>
                            <div class="col-md-12">
                                <span id="visa_type_custom_error"></span>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <b
                                >Are you of Aboriginal or Torres Strait Islander
                                origin? :</b
                            >
                        </div>
                        <div class="col-md-4">
                            <span class="wpcf7-form-control-wrap">
                                <span class="wpcf7-form-control-wrap pte_title">
                                    <span
                                        class="d-flex wpcf7-form-control wpcf7-radio"
                                    >
                                        <span class="wpcf7-list-item first">
                                            <input
                                                type="checkbox"
                                                name="Islander_origin[]"
                                                class="input_checkbox citizen valid"
                                                id="Islander_yes"
                                                value="Yes"
                                                aria-required="true"
                                                aria-describedby="Islander_origin[]-error"
                                                aria-invalid="false"
                                            />
                                            <span
                                                class="text_checkbox wpcf7-list-item-label"
                                                >Yes, Aboriginal</span
                                            >
                                        </span>
                                        <span class="wpcf7-list-item last">
                                            <input
                                                type="checkbox"
                                                name="Islander_origin[]"
                                                class="input_checkbox citizen"
                                                id="Islander_yes_torres"
                                                value="Yes2"
                                            />
                                            <span
                                                class="text_checkbox wpcf7-list-item-label"
                                                >Yes, Torres Strait
                                                Islander</span
                                            >
                                        </span>
                                        <span class="wpcf7-list-item last">
                                            <input
                                                type="checkbox"
                                                name="Islander_origin[]"
                                                class="input_checkbox citizen"
                                                id="Islander_no"
                                                value="No"
                                            />
                                            <span
                                                class="text_checkbox wpcf7-list-item-label"
                                                >No</span
                                            >
                                        </span>
                                    </span>
                                </span>
                                <input
                                    type="hidden"
                                    name="pdf_aboriginal"
                                    class="pdf_aboriginal"
                                    value=""
                                />
                            </span>
                            <div
                                id="islander_origin_custom_error"
                                class="select_box_error_fix"
                            >
                                <i
                                    id="Islander_origin[]-error"
                                    class="error"
                                    style="display: none"
                                ></i>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <b
                                >Do you speak a language other than English at
                                home? :</b
                            >
                        </div>
                        <div class="col-md-4">
                            <span class="wpcf7-form-control-wrap pte_title">
                                <span
                                    class="d-flex wpcf7-form-control wpcf7-radio"
                                    id="speak_language"
                                >
                                    <span class="wpcf7-list-item last">
                                        <input
                                            class="input_radio valid"
                                            type="radio"
                                            name="speak_language"
                                            id="speak_No"
                                            value="No"
                                            aria-required="true"
                                            aria-describedby="speak_language-error"
                                            aria-invalid="false"
                                        />
                                        <span
                                            class="wpcf7-list-item-label text_radio"
                                            >No</span
                                        >
                                    </span>
                                    <span class="wpcf7-list-item first">
                                        <input
                                            class="input_radio valid"
                                            type="radio"
                                            name="speak_language"
                                            id="speak_Yes"
                                            value="Yes"
                                        />
                                        <span
                                            class="wpcf7-list-item-label text_radio"
                                            >Yes</span
                                        >
                                    </span>
                                </span>
                            </span>
                            <div
                                id="speak_language_custom_error"
                                class="select_box_error_fix"
                            >
                                <i
                                    id="speak_language-error"
                                    class="error"
                                    style="display: none"
                                ></i>
                            </div>
                        </div>
                        <div
                            class="col-md-4 toggle_language"
                            style="display: none"
                        >
                            <span class="wpcf7-form-control-wrap">
                                <select
                                    name="speak_language_selected"
                                    id="speak_language_selected"
                                    class="input_select wpcf7-form-control wpcf7-text fetch_country_name6"
                                    disabled="disabled"
                                >
                                    <option value="">
                                        -- Choose language? --
                                    </option>
                                    <option value="7">
                                        Aboriginal English, so described
                                    </option>
                                    <option value="17">Acehnese</option>
                                    <option value="21">Acholi</option>
                                    <option value="27">Adnymathanha</option>
                                    <option value="36">
                                        African Languages, nec
                                    </option>
                                    <option value="39">Afrikaans</option>
                                    <option value="44">Akan</option>
                                    <option value="48">Alawa</option>
                                    <option value="52">Albanian</option>
                                    <option value="59">Alyawarr</option>
                                    <option value="75">
                                        American Languages
                                    </option>
                                    <option value="78">Amharic</option>
                                    <option value="95">Anindilyakwa</option>
                                    <option value="106">Anmatyerr</option>
                                    <option value="109">Antikarinya</option>
                                    <option value="113">Arabana</option>
                                    <option value="114">Arabic</option>
                                    <option value="124">Arandic, nec</option>
                                    <option value="132">Armenian</option>
                                    <option value="133">
                                        Arnhem Land and Daly River Region
                                        Languages, nec
                                    </option>
                                    <option value="137">
                                        Aromunian (Macedo-Romanian)
                                    </option>
                                    <option value="159">Assamese</option>
                                    <option value="165">Auslan</option>
                                    <option value="195">Azeri</option>
                                    <option value="213">Balinese</option>
                                    <option value="216">Balochi</option>
                                    <option value="218">Baltic</option>
                                    <option value="222">Bandjalang</option>
                                    <option value="232">Banyjima</option>
                                    <option value="239">Bardi</option>
                                    <option value="242">Basque</option>
                                    <option value="244">Batjala</option>
                                    <option value="253">Belorussian</option>
                                    <option value="254">Bemba</option>
                                    <option value="256">Bengali</option>
                                    <option value="268">Bidjara</option>
                                    <option value="270">Bikol</option>
                                    <option value="272">Bilinarra</option>
                                    <option value="276">Bisaya</option>
                                    <option value="278">Bislama</option>
                                    <option value="288">Bosnian</option>
                                    <option value="303">Bulgarian</option>
                                    <option value="308">Bunuba</option>
                                    <option value="312">Burarra</option>
                                    <option value="315">Burmese</option>
                                    <option value="316">
                                        Burmese and Related Languages, nec
                                    </option>
                                    <option value="331">Cantonese</option>
                                    <option value="335">
                                        Cape York Peninsula Languages, nec
                                    </option>
                                    <option value="340">Catalan</option>
                                    <option value="344">Cebuano</option>
                                    <option value="346">Celtic</option>
                                    <option value="347">Celtic, nec</option>
                                    <option value="379">Chinese</option>
                                    <option value="384">Chinese, nec</option>
                                    <option value="416">Creole, nfd</option>
                                    <option value="423">Croatian</option>
                                    <option value="434">Czech</option>
                                    <option value="437">Daatiwuy</option>
                                    <option value="442">Dalabon</option>
                                    <option value="448">Danish</option>
                                    <option value="453">Dari</option>
                                    <option value="469">Dhalwangu</option>
                                    <option value="471">Dhanggatti</option>
                                    <option value="472">Dhangu</option>
                                    <option value="473">Dhangu, nec</option>
                                    <option value="477">Dhay'yi</option>
                                    <option value="478">Dhay'yi, nec</option>
                                    <option value="480">Dhivehi</option>
                                    <option value="481">Dhuwal</option>
                                    <option value="482">Dhuwal, nec</option>
                                    <option value="484">Dhuwala</option>
                                    <option value="485">Dhuwala, nec</option>
                                    <option value="487">Dhuwaya</option>
                                    <option value="490">Dinka</option>
                                    <option value="492">Diyari</option>
                                    <option value="495">Djabugay</option>
                                    <option value="507">Djambarrpuyngu</option>
                                    <option value="512">Djapu</option>
                                    <option value="513">Djarrwark</option>
                                    <option value="516">Djinang</option>
                                    <option value="517">Djinang, nec</option>
                                    <option value="519">Djinba</option>
                                    <option value="520">Djinba, nec</option>
                                    <option value="528">Dravidian</option>
                                    <option value="529">Dravidian, nec</option>
                                    <option value="536">Dutch</option>
                                    <option value="539">Dyirbal</option>
                                    <option value="545">East Slavic</option>
                                    <option value="564">English</option>
                                    <option value="578">Estonian</option>
                                    <option value="583">Ewe</option>
                                    <option value="591">Fijian</option>
                                    <option value="593">Filipino</option>
                                    <option value="600">Finnish</option>
                                    <option value="601">
                                        Finnish and Related Languages, nec
                                    </option>
                                    <option value="612">French</option>
                                    <option value="615">
                                        French Creole, nfd
                                    </option>
                                    <option value="618">Frisian</option>
                                    <option value="631">Ga</option>
                                    <option value="634">
                                        Gaelic (Scotland)
                                    </option>
                                    <option value="643">Galpu</option>
                                    <option value="645">Gamilaraay</option>
                                    <option value="646">Ganalbingu</option>
                                    <option value="651">Garrwa</option>
                                    <option value="652">Garuwali</option>
                                    <option value="654">Georgian</option>
                                    <option value="655">German</option>
                                    <option value="665">Gilbertese</option>
                                    <option value="668">Girramay</option>
                                    <option value="671">Githabul</option>
                                    <option value="673">Golumala</option>
                                    <option value="677">Gooniyandi</option>
                                    <option value="683">Greek</option>
                                    <option value="691">Gudanji</option>
                                    <option value="705">Gujarati</option>
                                    <option value="708">Gumatj</option>
                                    <option value="710">Gumbaynggir</option>
                                    <option value="716">Gundjeihmi</option>
                                    <option value="720">Gun-nartpa</option>
                                    <option value="727">Gupapuyngu</option>
                                    <option value="735">Gurindji</option>
                                    <option value="736">Gurindji Kriol</option>
                                    <option value="742">Gurr-goni</option>
                                    <option value="744">Guugu Yimidhirr</option>
                                    <option value="746">Guyamirrilili</option>
                                    <option value="758">Hakka</option>
                                    <option value="764">Harari</option>
                                    <option value="768">Hausa</option>
                                    <option value="770">
                                        Hawaiian English
                                    </option>
                                    <option value="771">Hebrew</option>
                                    <option value="775">Hindi</option>
                                    <option value="785">Hmong</option>
                                    <option value="787">Hmong-Mien, nec</option>
                                    <option value="803">Hungarian</option>
                                    <option value="805">Iban</option>
                                    <option value="806">Iberian Romance</option>
                                    <option value="807">
                                        Iberian Romance, nec
                                    </option>
                                    <option value="810">Icelandic</option>
                                    <option value="813">Igbo</option>
                                    <option value="839">Indo-Aryan, nec</option>
                                    <option value="843">Indonesian</option>
                                    <option value="861">
                                        Invented Languages
                                    </option>
                                    <option value="864">Iranic</option>
                                    <option value="865">Iranic, nec</option>
                                    <option value="868">Irish</option>
                                    <option value="873">Italian</option>
                                    <option value="877">Iwaidja</option>
                                    <option value="881">Jaminjung</option>
                                    <option value="886">Japanese</option>
                                    <option value="891">Jaru</option>
                                    <option value="895">Javanese</option>
                                    <option value="897">Jawoyn</option>
                                    <option value="907">Jingulu</option>
                                    <option value="941">
                                        Kalaw Kawaw Ya/Kalaw Lagaw Ya
                                    </option>
                                    <option value="952">Kanai</option>
                                    <option value="957">Kannada</option>
                                    <option value="961">Karajarri</option>
                                    <option value="965">Karen</option>
                                    <option value="969">Kariyarra</option>
                                    <option value="973">Kartujarra</option>
                                    <option value="975">Kashmiri</option>
                                    <option value="981">Kaurna</option>
                                    <option value="982">Kayardild</option>
                                    <option value="985">Kaytetye</option>
                                    <option value="995">Khmer</option>
                                    <option value="999">Kija</option>
                                    <option value="1002">Kikuyu</option>
                                    <option value="1004">
                                        Kimberley Area Languages, nec
                                    </option>
                                    <option value="1014">Kiwai</option>
                                    <option value="1027">Koko-Bera</option>
                                    <option value="1033">Konkani</option>
                                    <option value="1037">Korean</option>
                                    <option value="1043">Krio</option>
                                    <option value="1044">Kriol</option>
                                    <option value="1050">Kugu Muminh</option>
                                    <option value="1054">Kukatha</option>
                                    <option value="1055">Kukatja</option>
                                    <option value="1061">Kuku Yalanji</option>
                                    <option value="1071">Kunbarlang</option>
                                    <option value="1072">Kune</option>
                                    <option value="1074">Kuninjku</option>
                                    <option value="1079">Kunwinjku</option>
                                    <option value="1080">Kurdish</option>
                                    <option value="1086">Kuuk Thayorre</option>
                                    <option value="1088">Kuuku-Ya'u</option>
                                    <option value="1100">Lamalama</option>
                                    <option value="1103">Lao</option>
                                    <option value="1113">Lardil</option>
                                    <option value="1115">Larrakiya</option>
                                    <option value="1116">Latin</option>
                                    <option value="1118">Latvian</option>
                                    <option value="1125">Letzeburgish</option>
                                    <option value="1128">Light Warlpiri</option>
                                    <option value="1132">Lithuanian</option>
                                    <option value="1133">Liyagalawumirr</option>
                                    <option value="1137">Luganda</option>
                                    <option value="1143">Luo</option>
                                    <option value="1149">Luritja</option>
                                    <option value="1162">Macedonian</option>
                                    <option value="1166">Madarrpa</option>
                                    <option value="1167">Madi</option>
                                    <option value="1174">
                                        Key Word Sign Australia
                                    </option>
                                    <option value="1184">Malak Malak</option>
                                    <option value="1186">Malay</option>
                                    <option value="1187">Malayalam</option>
                                    <option value="1194">Malngin</option>
                                    <option value="1197">Maltese</option>
                                    <option value="1204">Mandarin</option>
                                    <option value="1212">Mangala</option>
                                    <option value="1216">Mangarrayi</option>
                                    <option value="1217">Manggalili</option>
                                    <option value="1226">Manyjilyjarra</option>
                                    <option value="1228">
                                        Maori (Cook Island)
                                    </option>
                                    <option value="1229">
                                        Maori (New Zealand)
                                    </option>
                                    <option value="1232">Marathi</option>
                                    <option value="1243">Maringarr</option>
                                    <option value="1249">Marra</option>
                                    <option value="1251">Marramaninyshi</option>
                                    <option value="1252">Marrangu</option>
                                    <option value="1255">Marrithiyel</option>
                                    <option value="1258">Martu Wangka</option>
                                    <option value="1265">Matngala</option>
                                    <option value="1267">Maung</option>
                                    <option value="1270">
                                        Mauritian Creole
                                    </option>
                                    <option value="1273">Mayali</option>
                                    <option value="1285">Meriam Mir</option>
                                    <option value="1294">
                                        Middle Eastern Semitic Languages, nec
                                    </option>
                                    <option value="1301">Miriwoong</option>
                                    <option value="1315">Mon</option>
                                    <option value="1318">Mongolian</option>
                                    <option value="1319">Mon-Khmer</option>
                                    <option value="1320">Mon-Khmer, nec</option>
                                    <option value="1331">Mudburra</option>
                                    <option value="1353">Murrinh Patha</option>
                                    <option value="1355">Muruwari</option>
                                    <option value="1363">Na-kara</option>
                                    <option value="1380">Narungga</option>
                                    <option value="1382">Nauruan</option>
                                    <option value="1383">Ndebele</option>
                                    <option value="1390">Nepali</option>
                                    <option value="1403">Ngaanyatjarra</option>
                                    <option value="1409">Ngalakgan</option>
                                    <option value="1411">Ngaliwurru</option>
                                    <option value="1416">Ngandi</option>
                                    <option value="1420">
                                        Ngan'gikurunggurr
                                    </option>
                                    <option value="1428">Ngardi</option>
                                    <option value="1432">Ngarinyin</option>
                                    <option value="1433">Ngarinyman</option>
                                    <option value="1435">Ngarluma</option>
                                    <option value="1438">Ngarrindjeri</option>
                                    <option value="1447">Nhangu</option>
                                    <option value="1455">Niue</option>
                                    <option value="1462">Non verbal</option>
                                    <option value="1477">
                                        Northern Desert Fringe Area Languages,
                                        nec
                                    </option>
                                    <option value="1481">Norwegian</option>
                                    <option value="1486">Not Stated</option>
                                    <option value="1491">Nuer</option>
                                    <option value="1498">Nungali</option>
                                    <option value="1499">Nunggubuyu</option>
                                    <option value="1502">Nyamal</option>
                                    <option value="1507">Nyangumarta</option>
                                    <option value="1509">
                                        Nyanja (Chichewa)
                                    </option>
                                    <option value="1513">Nyikina</option>
                                    <option value="1520">Nyungar</option>
                                    <option value="1526">
                                        Oceanian Pidgins and Creoles, nec
                                    </option>
                                    <option value="1531">Oriya</option>
                                    <option value="1534">Oromo</option>
                                    <option value="1538">
                                        Other Eastern Asian Languages, nec
                                    </option>
                                    <option value="1540">
                                        Other Eastern European Languages, nec
                                    </option>
                                    <option value="1543">
                                        Other Southeast Asian Languages
                                    </option>
                                    <option value="1544">
                                        Other Southern Asian Languages
                                    </option>
                                    <option value="1545">
                                        Other Southern European Languages, nec
                                    </option>
                                    <option value="1547">
                                        Other Southwest and Central Asian
                                        Languages, nec
                                    </option>
                                    <option value="1549">
                                        Other Yolngu Matha
                                    </option>
                                    <option value="1553">Paakantyi</option>
                                    <option value="1555">
                                        Pacific Austronesian Languages, nec
                                    </option>
                                    <option value="1562">
                                        Palyku/Nyiyaparli
                                    </option>
                                    <option value="1563">Pampangan</option>
                                    <option value="1578">Pashto</option>
                                    <option value="1584">
                                        Persian (excluding Dari)
                                    </option>
                                    <option value="1604">Pidgin, nfd</option>
                                    <option value="1620">Pintupi</option>
                                    <option value="1626">
                                        Norf'k-Pitcairn
                                    </option>
                                    <option value="1640">Pitjantjatjara</option>
                                    <option value="1657">Polish</option>
                                    <option value="1664">Portuguese</option>
                                    <option value="1666">
                                        Portuguese Creole, nfd
                                    </option>
                                    <option value="1668">Punjabi</option>
                                    <option value="1687">Rembarrnga</option>
                                    <option value="1690">Rirratjingu</option>
                                    <option value="1692">Ritharrngu</option>
                                    <option value="1695">Romanian</option>
                                    <option value="1699">Romany</option>
                                    <option value="1701">Rotuman</option>
                                    <option value="1709">Russian</option>
                                    <option value="1717">Samoan</option>
                                    <option value="1722">Scandinavian</option>
                                    <option value="1723">
                                        Scandinavian, nec
                                    </option>
                                    <option value="1738">Serbian</option>
                                    <option value="1746">
                                        Serbo-Croatian/Yugoslavian, so described
                                    </option>
                                    <option value="1752">
                                        Seychelles Creole
                                    </option>
                                    <option value="1757">Shilluk</option>
                                    <option value="1758">Shona</option>
                                    <option value="1768">
                                        Sign Languages, nec
                                    </option>
                                    <option value="1777">Sindhi</option>
                                    <option value="1791">Sinhalese</option>
                                    <option value="1804">Slovak</option>
                                    <option value="1807">Slovene</option>
                                    <option value="1817">
                                        Solomon Islands Pijin
                                    </option>
                                    <option value="1818">Somali</option>
                                    <option value="1828">South Slavic</option>
                                    <option value="1831">
                                        Southeast Asian Austronesian Languages,
                                        nec
                                    </option>
                                    <option value="1840">Spanish</option>
                                    <option value="1842">
                                        Spanish Creole, nfd
                                    </option>
                                    <option value="1857">Swahili</option>
                                    <option value="1860">Swedish</option>
                                    <option value="1864">
                                        Swiss, so described
                                    </option>
                                    <option value="1869">Tagalog</option>
                                    <option value="1875">Tai</option>
                                    <option value="1876">Tai, nec</option>
                                    <option value="1883">Tamil</option>
                                    <option value="1892">Tatar</option>
                                    <option value="1899">Telugu</option>
                                    <option value="1907">Tetum</option>
                                    <option value="1913">Thai</option>
                                    <option value="1921">Tibetan</option>
                                    <option value="1930">Tigrinya</option>
                                    <option value="1932">Timorese</option>
                                    <option value="1935">Tiwi</option>
                                    <option value="1946">Tokelauan</option>
                                    <option value="1949">Tongan</option>
                                    <option value="1969">Tswana</option>
                                    <option value="1970">Tulu</option>
                                    <option value="1976">Turkic, nec</option>
                                    <option value="1979">Turkish</option>
                                    <option value="1981">Turkmen</option>
                                    <option value="1982">Tuvaluan</option>
                                    <option value="1990">Ukrainian</option>
                                    <option value="1998">Urdu</option>
                                    <option value="2005">Uygur</option>
                                    <option value="2006">Uzbek</option>
                                    <option value="2009">Vietnamese</option>
                                    <option value="2015">Waanyi</option>
                                    <option value="2021">Wagiman</option>
                                    <option value="2025">Wajarri</option>
                                    <option value="2037">Walmajarri</option>
                                    <option value="2052">Wambaya</option>
                                    <option value="2055">Wangkajunga</option>
                                    <option value="2056">Wangkatha</option>
                                    <option value="2061">Wangurri</option>
                                    <option value="2067">Wanyjirra</option>
                                    <option value="2072">Wardaman</option>
                                    <option value="2074">Warlmanpa</option>
                                    <option value="2075">Warlpiri</option>
                                    <option value="2077">Warnman</option>
                                    <option value="2090">Warumungu</option>
                                    <option value="2092">Welsh</option>
                                    <option value="2095">West Slavic</option>
                                    <option value="2101">
                                        Western Desert Language, nec
                                    </option>
                                    <option value="2109">Wik Mungkan</option>
                                    <option value="2111">Wik Ngathan</option>
                                    <option value="2116">Wiradjuri</option>
                                    <option value="2130">Worla</option>
                                    <option value="2134">Worrorra</option>
                                    <option value="2135">Wu</option>
                                    <option value="2136">Wubulkarra</option>
                                    <option value="2140">Wunambal</option>
                                    <option value="2141">Wurlaki</option>
                                    <option value="2143">Xhosa</option>
                                    <option value="2145">Yakuy</option>
                                    <option value="2146">Yakuy, nec</option>
                                    <option value="2156">
                                        Yankunytjatjara
                                    </option>
                                    <option value="2161">Yanyuwa</option>
                                    <option value="2163">Yapese</option>
                                    <option value="2164">Yawuru</option>
                                    <option value="2168">Yiddish</option>
                                    <option value="2169">Yidiny</option>
                                    <option value="2172">Yindjibarndi</option>
                                    <option value="2174">Yinhawangka</option>
                                    <option value="2179">Yolngu Matha</option>
                                    <option value="2182">Yorta Yorta</option>
                                    <option value="2184">Yoruba</option>
                                    <option value="2194">Yulparija</option>
                                    <option value="2203">Zulu</option>
                                    <option value="2204">Unknown</option>
                                    <option value="2205">
                                        Cypriot, so described
                                    </option>
                                    <option value="2206">
                                        German and Related Languages
                                    </option>
                                    <option value="2207">
                                        Dutch and Related Languages
                                    </option>
                                    <option value="2208">
                                        Finnish and Related Languages
                                    </option>
                                    <option value="2209">
                                        Other Southern European Languages
                                    </option>
                                    <option value="2210">
                                        Czechoslovakian, so described
                                    </option>
                                    <option value="2211">
                                        Other Eastern European Languages
                                    </option>
                                    <option value="2212">Hazaraghi</option>
                                    <option value="2213">
                                        Middle Eastern Semitic Languages
                                    </option>
                                    <option value="2214">
                                        Assyrian Neo-Aramaic
                                    </option>
                                    <option value="2215">
                                        Chaldean Neo-Aramaic
                                    </option>
                                    <option value="2216">
                                        Mandaean (Mandaic)
                                    </option>
                                    <option value="2217">Turkic</option>
                                    <option value="2218">
                                        Other Southwest and Central Asian
                                        Languages
                                    </option>
                                    <option value="2219">Indo-Aryan</option>
                                    <option value="2220">
                                        Fijian Hindustani
                                    </option>
                                    <option value="2221">
                                        Burmese and Related Languages
                                    </option>
                                    <option value="2222">Chin Haka</option>
                                    <option value="2223">Rohingya</option>
                                    <option value="2224">Hmong-Mien</option>
                                    <option value="2225">
                                        Southeast Asian Austronesian Languages
                                    </option>
                                    <option value="2226">IIokano</option>
                                    <option value="2227">
                                        Ilonggo (Hiligaynon)
                                    </option>
                                    <option value="2228">Min Nan</option>
                                    <option value="2229">
                                        Other Eastern Asian Languages
                                    </option>
                                    <option value="2230">
                                        Arnhem Land and Daly River Region
                                        Languages
                                    </option>
                                    <option value="2232">Amurdak</option>
                                    <option value="2233">Kuwema</option>
                                    <option value="2234">
                                        Marridan (Maridan)
                                    </option>
                                    <option value="2235">Kunwinjkuan</option>
                                    <option value="2236">
                                        Kunwinjkuan, nec
                                    </option>
                                    <option value="2237">Burarran</option>
                                    <option value="2238">Burarran, nec</option>
                                    <option value="2239">Liyagawumirr</option>
                                    <option value="2240">Manyjalpingu</option>
                                    <option value="2241">Wagilak</option>
                                    <option value="2242">Yan-Nhangu</option>
                                    <option value="2243">Nhangu, nec</option>
                                    <option value="2244">Djangu</option>
                                    <option value="2245">Warramiri</option>
                                    <option value="2246">
                                        Other Yolngu Matha, nec
                                    </option>
                                    <option value="2247">
                                        Cape York Peninsula Languages
                                    </option>
                                    <option value="2248">Alngith</option>
                                    <option value="2249">Morrobalama</option>
                                    <option value="2250">Thaynakwith</option>
                                    <option value="2251">Yupangathi</option>
                                    <option value="2252">Tjungundji</option>
                                    <option value="2253">
                                        Torres Strait Island Languages
                                    </option>
                                    <option value="2254">
                                        Yumplatok (Torres Strait Creole)
                                    </option>
                                    <option value="2255">
                                        Northern Desert Fringe Area Languages
                                    </option>
                                    <option value="2256">Arandic</option>
                                    <option value="2257">Antekerrepenh</option>
                                    <option value="2258">
                                        Central Anmatyerr
                                    </option>
                                    <option value="2259">
                                        Eastern Anmatyerr
                                    </option>
                                    <option value="2260">Anmatyerr, nec</option>
                                    <option value="2261">
                                        Eastern Arrernte
                                    </option>
                                    <option value="2262">
                                        Western Arrarnta
                                    </option>
                                    <option value="2263">Arrernte, nec</option>
                                    <option value="2264">
                                        Western Desert Language
                                    </option>
                                    <option value="2265">Tjupany</option>
                                    <option value="2266">
                                        Kimberley Area Languages
                                    </option>
                                    <option value="2267">Gambera</option>
                                    <option value="2268">Jawi</option>
                                    <option value="2269">
                                        Other Australian Indigenous Languages
                                    </option>
                                    <option value="2270">Baanbay</option>
                                    <option value="2271">Badimaya</option>
                                    <option value="2272">Barababaraba</option>
                                    <option value="2273">Dadi Dadi</option>
                                    <option value="2274">Dharawal</option>
                                    <option value="2275">Djabwurrung</option>
                                    <option value="2276">Gudjal</option>
                                    <option value="2277">
                                        Keerray-Woorroong
                                    </option>
                                    <option value="2278">Ladji Ladji</option>
                                    <option value="2279">Mirning</option>
                                    <option value="2280">Ngatjumaya</option>
                                    <option value="2281">Waluwarra</option>
                                    <option value="2282">Wangkangurru</option>
                                    <option value="2283">Wargamay</option>
                                    <option value="2284">Wergaia</option>
                                    <option value="2285">
                                        Other Australian Indigenous Languages,
                                        nec
                                    </option>
                                    <option value="2286">
                                        African Languages
                                    </option>
                                    <option value="2288">Anuak</option>
                                    <option value="2289">Bari</option>
                                    <option value="2290">Bassa</option>
                                    <option value="2291">Dan (Gio-Dan)</option>
                                    <option value="2292">Fulfulde</option>
                                    <option value="2293">
                                        Kinyarwanda (Rwanda)
                                    </option>
                                    <option value="2294">
                                        Kirundi (Rundi)
                                    </option>
                                    <option value="2295">Kpelle</option>
                                    <option value="2296">Krahn</option>
                                    <option value="2297">
                                        Liberian (Liberian English)
                                    </option>
                                    <option value="2298">Loma (Lorma)</option>
                                    <option value="2299">
                                        Lumun (Kuku Lumun)
                                    </option>
                                    <option value="2300">Mandinka</option>
                                    <option value="2301">Mann</option>
                                    <option value="2302">
                                        Moro (Nuba Moro)
                                    </option>
                                    <option value="2303">Themne</option>
                                    <option value="2304">
                                        Pacific Austronesian Languages
                                    </option>
                                    <option value="2305">
                                        Oceanian Pidgins and Creoles
                                    </option>
                                    <option value="2306">
                                        Papua New Guinea Languages
                                    </option>
                                    <option value="2307">
                                        Motu (HiriMotu)
                                    </option>
                                    <option value="2308">
                                        Tok Pisin (Neomelanesian)
                                    </option>
                                    <option value="2309">
                                        Papua New Guinea Languages, nec
                                    </option>
                                    <option value="2310">Sign Languages</option>
                                    <option value="2311">Zomi</option>
                                    <option value="2312">Arrernte</option>
                                    <option value="2313">Yugambeh</option>
                                    <option value="2314">Tigre</option>
                                    <option value="2315">Lingala</option>
                                </select>
                                <input
                                    type="hidden"
                                    id="pdf_speak_language_selected"
                                    name="pdf_speak_language_selected"
                                    class="pdf_speak_language_selected"
                                    value=""
                                    disabled="disabled"
                                />
                            </span>
                            <div
                                id="speak_language_selected_custom_error"
                                class="select_box_error_fix"
                            ></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <b>How well do you speak English? :</b>
                        </div>
                        <div class="col-md-8">
                            <span class="wpcf7-form-control-wrap pte_title">
                                <span
                                    class="d-flex wpcf7-form-control wpcf7-radio"
                                >
                                    <span class="wpcf7-list-item first">
                                        <input
                                            class="input_radio valid"
                                            type="radio"
                                            name="how_speak_english"
                                            id="how_speak_english_1"
                                            value="1"
                                            aria-required="true"
                                            aria-describedby="how_speak_english-error"
                                            aria-invalid="false"
                                        />
                                        <span
                                            class="wpcf7-list-item-label text_radio"
                                            >Very well</span
                                        >
                                    </span>
                                    <span class="wpcf7-list-item last">
                                        <input
                                            class="input_radio valid"
                                            type="radio"
                                            name="how_speak_english"
                                            id="how_speak_english_2"
                                            value="2"
                                        />
                                        <span
                                            class="wpcf7-list-item-label text_radio"
                                            >Well</span
                                        >
                                    </span>
                                    <span class="wpcf7-list-item last">
                                        <input
                                            class="input_radio valid"
                                            type="radio"
                                            name="how_speak_english"
                                            id="how_speak_english_3"
                                            value="3"
                                        />
                                        <span
                                            class="wpcf7-list-item-label text_radio"
                                            >Not Well</span
                                        >
                                    </span>
                                    <span class="wpcf7-list-item last">
                                        <input
                                            class="input_radio valid"
                                            type="radio"
                                            name="how_speak_english"
                                            id="how_speak_english_4"
                                            value="4"
                                        />
                                        <span
                                            class="wpcf7-list-item-label text_radio"
                                            >Not at all</span
                                        >
                                    </span>
                                </span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="academic_record">
                    <div class="form_header_title">Schooling</div>
                    <div class="col-md-12 row">
                        What is your highest COMPLETED secondary school level?
                        (Tick one box only)
                    </div>
                    <div class="col-md-12 row">
                        If you are currently enrolled in secondary education,
                        the Highest school level completed refers to the highest
                        school level you have actually completed and not the
                        level you are currently undertaking. For example, if you
                        are currently in year 10 the Highest school level
                        completed is Year 9.
                    </div>
                    <div>
                        <div class="d-flex row wpcf7-form-control wpcf7-radio">
                            <div class="col-md-6">
                                <div class="wpcf7-list-item">
                                    <input
                                        class="input_radio valid"
                                        type="radio"
                                        id="academic_secondary_school_level_7"
                                        name="academic_secondary_school_level"
                                        value="Completed-year-12"
                                        aria-required="true"
                                        aria-describedby="academic_secondary_school_level-error"
                                        aria-invalid="false"
                                    />
                                    <span
                                        class="wpcf7-list-item-label text_radio"
                                        >Completed year 12</span
                                    >
                                </div>
                                <div class="wpcf7-list-item">
                                    <input
                                        class="input_radio valid"
                                        type="radio"
                                        id="academic_secondary_school_level_6"
                                        name="academic_secondary_school_level"
                                        value="Completed-year-11"
                                    />
                                    <span
                                        class="wpcf7-list-item-label text_radio"
                                        >Completed year 11</span
                                    >
                                </div>
                                <div class="wpcf7-list-item">
                                    <input
                                        class="input_radio valid"
                                        type="radio"
                                        id="academic_secondary_school_level_5"
                                        name="academic_secondary_school_level"
                                        value="Completed-year-10"
                                        aria-invalid="false"
                                    />
                                    <span
                                        class="wpcf7-list-item-label text_radio"
                                        >Completed year 10</span
                                    >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="wpcf7-list-item">
                                    <input
                                        class="input_radio valid"
                                        type="radio"
                                        id="academic_secondary_school_level_4"
                                        name="academic_secondary_school_level"
                                        value="Completed-year-9"
                                    />
                                    <span
                                        class="wpcf7-list-item-label text_radio"
                                        >Completed year 9 or equivalent</span
                                    >
                                </div>
                                <div class="wpcf7-list-item">
                                    <input
                                        class="input_radio valid"
                                        type="radio"
                                        id="academic_secondary_school_level_3"
                                        name="academic_secondary_school_level"
                                        value="Completed-year-8"
                                    />
                                    <span
                                        class="wpcf7-list-item-label text_radio"
                                        >Completed year 8 or below</span
                                    >
                                </div>
                                <div class="wpcf7-list-item">
                                    <input
                                        class="input_radio valid"
                                        type="radio"
                                        id="academic_secondary_school_level_2"
                                        name="academic_secondary_school_level"
                                        value="Never-attended-school"
                                    />
                                    <span
                                        class="wpcf7-list-item-label text_radio"
                                        >Never attended school</span
                                    >
                                </div>
                            </div>
                        </div>
                        <div
                            id="academic_secondary_school_level_custom_error"
                            class="select_box_error_fix"
                        >
                            <i
                                id="academic_secondary_school_level-error"
                                class="error"
                                style="display: none"
                            ></i>
                        </div>
                    </div>
                    <div id="secondary_school_year">
                        <div class="row col-md-6 m_t_40">
                            Which year did you complete that secondary school
                            level?
                        </div>
                        <div class="row col-md-6">
                            <span class="wpcf7-form-control-wrap">
                                <input
                                    type="text"
                                    name="academic_secondary_school_year"
                                    id="academic_secondary_school_year"
                                    value=""
                                    size="40"
                                    class="input_text wpcf7-form-control wpcf7-text valid"
                                    placeholder="Enter year"
                                />
                            </span>
                        </div>
                    </div>
                    <div id="academic_attending_secondary_school" class="row">
                        <span class="col-md-12">
                            Are you still attending secondary school?
                            <span class="wpcf7-form-control-wrap">
                                <span
                                    class="d-flex wpcf7-form-control wpcf7-radio"
                                >
                                    <span class="wpcf7-list-item first">
                                        <input
                                            class="input_radio"
                                            type="radio"
                                            id="academic_attending_secondary_school_Y"
                                            name="academic_attending_secondary_school"
                                            value="Yes"
                                        />
                                        <span
                                            class="wpcf7-list-item-label text_radio"
                                            >Yes</span
                                        >
                                    </span>
                                    <span class="wpcf7-list-item last">
                                        <input
                                            class="input_radio"
                                            type="radio"
                                            id="academic_attending_secondary_school_N"
                                            name="academic_attending_secondary_school"
                                            value="No"
                                        />
                                        <span
                                            class="wpcf7-list-item-label text_radio"
                                            >No</span
                                        >
                                    </span>
                                </span>
                            </span>
                            <div
                                id="academic_attending_secondary_school_custom_error"
                                class="select_box_error_fix"
                            ></div>
                        </span>
                    </div>
                </div>
                <div class="academic_record">
                    <div class="form_header_title">
                        Previous Qualification Achieved
                    </div>
                    <div class="row m_t_10">
                        <div class="col-md-12">
                            <b
                                >1. Have you SUCCESSFULLY completed any of the
                                following qualifications?</b
                            >
                        </div>
                        <div class="col-md-12 wpcf7-list-item">
                            <input
                                class="input_radio"
                                type="radio"
                                name="academic_finish"
                                id="academic_finish_1"
                                value="1"
                            />
                            <span class="wpcf7-list-item-label text_radio"
                                >Not Stated (Question asked of the client but no
                                answer provided)</span
                            >
                        </div>
                        <div class="col-md-12 wpcf7-list-item">
                            <input
                                class="input_radio"
                                type="radio"
                                name="academic_finish"
                                id="academic_finish_2"
                                value="2"
                            />
                            <span class="wpcf7-list-item-label text_radio"
                                >Yes - a prior educational achievement has been
                                successfully completed</span
                            >
                        </div>
                        <div class="col-md-12 wpcf7-list-item">
                            <input
                                class="input_radio"
                                type="radio"
                                name="academic_finish"
                                id="academic_finish_3"
                                value="3"
                            />
                            <span class="wpcf7-list-item-label text_radio"
                                >No - a prior educational achievement has not
                                been successfully completed</span
                            >
                        </div>
                    </div>
                    <div
                        id="academic_finish_custom_error"
                        class="select_box_error_fix"
                    ></div>
                    <div
                        class="row academic_finish_toggle m_t_20"
                        style="display: none"
                    >
                        <div class="col-md-12">
                            <b
                                >2. If yes, please select which qualifications
                                from the list below:</b
                            >
                        </div>
                        <div class="row col-sm-12">
                            <div class="col-md-9">
                                <b
                                    >List details of your previous education: (A
                                    - Australian, E - Australian Equivalent, I -
                                    International)</b
                                >
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="col-md-4">A</div>
                                    <div class="col-md-4">E</div>
                                    <div class="col-md-4">I</div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="academic_finish_toggle m_t_20 row col-sm-12"
                            style="display: none"
                        >
                            <p class="col-md-9">
                                Bachelor Degree or Higher Degree level (defined
                                for AVETMISS use only)
                                <input
                                    type="hidden"
                                    name="prior_educations[]"
                                    value="1"
                                />
                            </p>
                            <div class="col-md-3">
                                <div class="wpcf7-form-control-wrap">
                                    <div
                                        class="d-flex row wpcf7-form-control wpcf7-radio"
                                    >
                                        <div class="col-md-4">
                                            <input
                                                class="input_radio"
                                                type="radio"
                                                id="prior_educations_id_1_1"
                                                name="prior_educations_id_1"
                                                value="1"
                                            />
                                        </div>
                                        <div class="col-md-4">
                                            <input
                                                class="input_radio"
                                                type="radio"
                                                id="prior_educations_id_2_1"
                                                name="prior_educations_id_1"
                                                value="2"
                                            />
                                        </div>
                                        <div class="col-md-4">
                                            <input
                                                class="input_radio"
                                                type="radio"
                                                id="prior_educations_id_3_1"
                                                name="prior_educations_id_1"
                                                value="3"
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="separator" style="width: 100%"></div>
                            <p class="col-md-9">
                                Advanced Diploma or Associate Degree Level
                                <input
                                    type="hidden"
                                    name="prior_educations[]"
                                    value="2"
                                />
                            </p>
                            <div class="col-md-3">
                                <div class="wpcf7-form-control-wrap">
                                    <div
                                        class="d-flex row wpcf7-form-control wpcf7-radio"
                                    >
                                        <div class="col-md-4">
                                            <input
                                                class="input_radio"
                                                type="radio"
                                                id="prior_educations_id_1_2"
                                                name="prior_educations_id_2"
                                                value="1"
                                            />
                                        </div>
                                        <div class="col-md-4">
                                            <input
                                                class="input_radio"
                                                type="radio"
                                                id="prior_educations_id_2_2"
                                                name="prior_educations_id_2"
                                                value="2"
                                            />
                                        </div>
                                        <div class="col-md-4">
                                            <input
                                                class="input_radio"
                                                type="radio"
                                                id="prior_educations_id_3_2"
                                                name="prior_educations_id_2"
                                                value="3"
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="separator" style="width: 100%"></div>
                            <p class="col-md-9">
                                Diploma Level
                                <input
                                    type="hidden"
                                    name="prior_educations[]"
                                    value="3"
                                />
                            </p>
                            <div class="col-md-3">
                                <div class="wpcf7-form-control-wrap">
                                    <div
                                        class="d-flex row wpcf7-form-control wpcf7-radio"
                                    >
                                        <div class="col-md-4">
                                            <input
                                                class="input_radio"
                                                type="radio"
                                                id="prior_educations_id_1_3"
                                                name="prior_educations_id_3"
                                                value="1"
                                            />
                                        </div>
                                        <div class="col-md-4">
                                            <input
                                                class="input_radio"
                                                type="radio"
                                                id="prior_educations_id_2_3"
                                                name="prior_educations_id_3"
                                                value="2"
                                            />
                                        </div>
                                        <div class="col-md-4">
                                            <input
                                                class="input_radio"
                                                type="radio"
                                                id="prior_educations_id_3_3"
                                                name="prior_educations_id_3"
                                                value="3"
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="separator" style="width: 100%"></div>
                            <p class="col-md-9">
                                Certificate IV
                                <input
                                    type="hidden"
                                    name="prior_educations[]"
                                    value="4"
                                />
                            </p>
                            <div class="col-md-3">
                                <div class="wpcf7-form-control-wrap">
                                    <div
                                        class="d-flex row wpcf7-form-control wpcf7-radio"
                                    >
                                        <div class="col-md-4">
                                            <input
                                                class="input_radio"
                                                type="radio"
                                                id="prior_educations_id_1_4"
                                                name="prior_educations_id_4"
                                                value="1"
                                            />
                                        </div>
                                        <div class="col-md-4">
                                            <input
                                                class="input_radio"
                                                type="radio"
                                                id="prior_educations_id_2_4"
                                                name="prior_educations_id_4"
                                                value="2"
                                            />
                                        </div>
                                        <div class="col-md-4">
                                            <input
                                                class="input_radio"
                                                type="radio"
                                                id="prior_educations_id_3_4"
                                                name="prior_educations_id_4"
                                                value="3"
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="separator" style="width: 100%"></div>
                            <p class="col-md-9">
                                Certificate III
                                <input
                                    type="hidden"
                                    name="prior_educations[]"
                                    value="5"
                                />
                            </p>
                            <div class="col-md-3">
                                <div class="wpcf7-form-control-wrap">
                                    <div
                                        class="d-flex row wpcf7-form-control wpcf7-radio"
                                    >
                                        <div class="col-md-4">
                                            <input
                                                class="input_radio"
                                                type="radio"
                                                id="prior_educations_id_1_5"
                                                name="prior_educations_id_5"
                                                value="1"
                                            />
                                        </div>
                                        <div class="col-md-4">
                                            <input
                                                class="input_radio"
                                                type="radio"
                                                id="prior_educations_id_2_5"
                                                name="prior_educations_id_5"
                                                value="2"
                                            />
                                        </div>
                                        <div class="col-md-4">
                                            <input
                                                class="input_radio"
                                                type="radio"
                                                id="prior_educations_id_3_5"
                                                name="prior_educations_id_5"
                                                value="3"
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="separator" style="width: 100%"></div>
                            <p class="col-md-9">
                                Certificate II
                                <input
                                    type="hidden"
                                    name="prior_educations[]"
                                    value="6"
                                />
                            </p>
                            <div class="col-md-3">
                                <div class="wpcf7-form-control-wrap">
                                    <div
                                        class="d-flex row wpcf7-form-control wpcf7-radio"
                                    >
                                        <div class="col-md-4">
                                            <input
                                                class="input_radio"
                                                type="radio"
                                                id="prior_educations_id_1_6"
                                                name="prior_educations_id_6"
                                                value="1"
                                            />
                                        </div>
                                        <div class="col-md-4">
                                            <input
                                                class="input_radio"
                                                type="radio"
                                                id="prior_educations_id_2_6"
                                                name="prior_educations_id_6"
                                                value="2"
                                            />
                                        </div>
                                        <div class="col-md-4">
                                            <input
                                                class="input_radio"
                                                type="radio"
                                                id="prior_educations_id_3_6"
                                                name="prior_educations_id_6"
                                                value="3"
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="separator" style="width: 100%"></div>
                            <p class="col-md-9">
                                Certificate I
                                <input
                                    type="hidden"
                                    name="prior_educations[]"
                                    value="7"
                                />
                            </p>
                            <div class="col-md-3">
                                <div class="wpcf7-form-control-wrap">
                                    <div
                                        class="d-flex row wpcf7-form-control wpcf7-radio"
                                    >
                                        <div class="col-md-4">
                                            <input
                                                class="input_radio"
                                                type="radio"
                                                id="prior_educations_id_1_7"
                                                name="prior_educations_id_7"
                                                value="1"
                                            />
                                        </div>
                                        <div class="col-md-4">
                                            <input
                                                class="input_radio"
                                                type="radio"
                                                id="prior_educations_id_2_7"
                                                name="prior_educations_id_7"
                                                value="2"
                                            />
                                        </div>
                                        <div class="col-md-4">
                                            <input
                                                class="input_radio"
                                                type="radio"
                                                id="prior_educations_id_3_7"
                                                name="prior_educations_id_7"
                                                value="3"
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="separator" style="width: 100%"></div>
                            <p class="col-md-9">
                                Miscellaneous Education
                                <input
                                    type="hidden"
                                    name="prior_educations[]"
                                    value="8"
                                />
                            </p>
                            <div class="col-md-3">
                                <div class="wpcf7-form-control-wrap">
                                    <div
                                        class="d-flex row wpcf7-form-control wpcf7-radio"
                                    >
                                        <div class="col-md-4">
                                            <input
                                                class="input_radio"
                                                type="radio"
                                                id="prior_educations_id_1_8"
                                                name="prior_educations_id_8"
                                                value="1"
                                            />
                                        </div>
                                        <div class="col-md-4">
                                            <input
                                                class="input_radio"
                                                type="radio"
                                                id="prior_educations_id_2_8"
                                                name="prior_educations_id_8"
                                                value="2"
                                            />
                                        </div>
                                        <div class="col-md-4">
                                            <input
                                                class="input_radio"
                                                type="radio"
                                                id="prior_educations_id_3_8"
                                                name="prior_educations_id_8"
                                                value="3"
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="separator" style="width: 100%"></div>
                            <p class="col-md-9">
                                Certificate V
                                <input
                                    type="hidden"
                                    name="prior_educations[]"
                                    value="9"
                                />
                            </p>
                            <div class="col-md-3">
                                <div class="wpcf7-form-control-wrap">
                                    <div
                                        class="d-flex row wpcf7-form-control wpcf7-radio"
                                    >
                                        <div class="col-md-4">
                                            <input
                                                class="input_radio"
                                                type="radio"
                                                id="prior_educations_id_1_9"
                                                name="prior_educations_id_9"
                                                value="1"
                                            />
                                        </div>
                                        <div class="col-md-4">
                                            <input
                                                class="input_radio"
                                                type="radio"
                                                id="prior_educations_id_2_9"
                                                name="prior_educations_id_9"
                                                value="2"
                                            />
                                        </div>
                                        <div class="col-md-4">
                                            <input
                                                class="input_radio"
                                                type="radio"
                                                id="prior_educations_id_3_9"
                                                name="prior_educations_id_9"
                                                value="3"
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="separator" style="width: 100%"></div>
                            <p class="col-md-9">
                                Certificate VI
                                <input
                                    type="hidden"
                                    name="prior_educations[]"
                                    value="10"
                                />
                            </p>
                            <div class="col-md-3">
                                <div class="wpcf7-form-control-wrap">
                                    <div
                                        class="d-flex row wpcf7-form-control wpcf7-radio"
                                    >
                                        <div class="col-md-4">
                                            <input
                                                class="input_radio"
                                                type="radio"
                                                id="prior_educations_id_1_10"
                                                name="prior_educations_id_10"
                                                value="1"
                                            />
                                        </div>
                                        <div class="col-md-4">
                                            <input
                                                class="input_radio"
                                                type="radio"
                                                id="prior_educations_id_2_10"
                                                name="prior_educations_id_10"
                                                value="2"
                                            />
                                        </div>
                                        <div class="col-md-4">
                                            <input
                                                class="input_radio"
                                                type="radio"
                                                id="prior_educations_id_3_10"
                                                name="prior_educations_id_10"
                                                value="3"
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="separator" style="width: 100%"></div>
                            <p class="col-md-9">
                                Certificate VII
                                <input
                                    type="hidden"
                                    name="prior_educations[]"
                                    value="11"
                                />
                            </p>
                            <div class="col-md-3">
                                <div class="wpcf7-form-control-wrap">
                                    <div
                                        class="d-flex row wpcf7-form-control wpcf7-radio"
                                    >
                                        <div class="col-md-4">
                                            <input
                                                class="input_radio"
                                                type="radio"
                                                id="prior_educations_id_1_11"
                                                name="prior_educations_id_11"
                                                value="1"
                                            />
                                        </div>
                                        <div class="col-md-4">
                                            <input
                                                class="input_radio"
                                                type="radio"
                                                id="prior_educations_id_2_11"
                                                name="prior_educations_id_11"
                                                value="2"
                                            />
                                        </div>
                                        <div class="col-md-4">
                                            <input
                                                class="input_radio"
                                                type="radio"
                                                id="prior_educations_id_3_11"
                                                name="prior_educations_id_11"
                                                value="3"
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="separator" style="width: 100%"></div>
                            <p class="col-md-9">
                                Doctoral Degree
                                <input
                                    type="hidden"
                                    name="prior_educations[]"
                                    value="12"
                                />
                            </p>
                            <div class="col-md-3">
                                <div class="wpcf7-form-control-wrap">
                                    <div
                                        class="d-flex row wpcf7-form-control wpcf7-radio"
                                    >
                                        <div class="col-md-4">
                                            <input
                                                class="input_radio"
                                                type="radio"
                                                id="prior_educations_id_1_12"
                                                name="prior_educations_id_12"
                                                value="1"
                                            />
                                        </div>
                                        <div class="col-md-4">
                                            <input
                                                class="input_radio"
                                                type="radio"
                                                id="prior_educations_id_2_12"
                                                name="prior_educations_id_12"
                                                value="2"
                                            />
                                        </div>
                                        <div class="col-md-4">
                                            <input
                                                class="input_radio"
                                                type="radio"
                                                id="prior_educations_id_3_12"
                                                name="prior_educations_id_12"
                                                value="3"
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="separator" style="width: 100%"></div>
                            <p class="col-md-9">
                                Master Degree
                                <input
                                    type="hidden"
                                    name="prior_educations[]"
                                    value="13"
                                />
                            </p>
                            <div class="col-md-3">
                                <div class="wpcf7-form-control-wrap">
                                    <div
                                        class="d-flex row wpcf7-form-control wpcf7-radio"
                                    >
                                        <div class="col-md-4">
                                            <input
                                                class="input_radio"
                                                type="radio"
                                                id="prior_educations_id_1_13"
                                                name="prior_educations_id_13"
                                                value="1"
                                            />
                                        </div>
                                        <div class="col-md-4">
                                            <input
                                                class="input_radio"
                                                type="radio"
                                                id="prior_educations_id_2_13"
                                                name="prior_educations_id_13"
                                                value="2"
                                            />
                                        </div>
                                        <div class="col-md-4">
                                            <input
                                                class="input_radio"
                                                type="radio"
                                                id="prior_educations_id_3_13"
                                                name="prior_educations_id_13"
                                                value="3"
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="separator" style="width: 100%"></div>
                            <p class="col-md-9">
                                Graduate Diploma or Graduate Certificate
                                <input
                                    type="hidden"
                                    name="prior_educations[]"
                                    value="14"
                                />
                            </p>
                            <div class="col-md-3">
                                <div class="wpcf7-form-control-wrap">
                                    <div
                                        class="d-flex row wpcf7-form-control wpcf7-radio"
                                    >
                                        <div class="col-md-4">
                                            <input
                                                class="input_radio"
                                                type="radio"
                                                id="prior_educations_id_1_14"
                                                name="prior_educations_id_14"
                                                value="1"
                                            />
                                        </div>
                                        <div class="col-md-4">
                                            <input
                                                class="input_radio"
                                                type="radio"
                                                id="prior_educations_id_2_14"
                                                name="prior_educations_id_14"
                                                value="2"
                                            />
                                        </div>
                                        <div class="col-md-4">
                                            <input
                                                class="input_radio"
                                                type="radio"
                                                id="prior_educations_id_3_14"
                                                name="prior_educations_id_14"
                                                value="3"
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="separator" style="width: 100%"></div>
                            <p class="col-md-9">
                                Bachelor Degree
                                <input
                                    type="hidden"
                                    name="prior_educations[]"
                                    value="15"
                                />
                            </p>
                            <div class="col-md-3">
                                <div class="wpcf7-form-control-wrap">
                                    <div
                                        class="d-flex row wpcf7-form-control wpcf7-radio"
                                    >
                                        <div class="col-md-4">
                                            <input
                                                class="input_radio"
                                                type="radio"
                                                id="prior_educations_id_1_15"
                                                name="prior_educations_id_15"
                                                value="1"
                                            />
                                        </div>
                                        <div class="col-md-4">
                                            <input
                                                class="input_radio"
                                                type="radio"
                                                id="prior_educations_id_2_15"
                                                name="prior_educations_id_15"
                                                value="2"
                                            />
                                        </div>
                                        <div class="col-md-4">
                                            <input
                                                class="input_radio"
                                                type="radio"
                                                id="prior_educations_id_3_15"
                                                name="prior_educations_id_15"
                                                value="3"
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="separator" style="width: 100%"></div>
                        </div>
                        <div class="col-sm-12 row">
                            <div class="col-md-4">
                                Australian - Achieved in Australia
                            </div>
                            <div class="col-md-4">
                                Equivalent - Achieved overseas, but verified and
                                recognised in Australia by relevant authority
                            </div>
                            <div class="col-md-4">
                                Overseas - Achieved overseas (qualification has
                                not undergone verification and recognition
                                process)
                            </div>
                        </div>
                        <div class="col-md-12">
                            If you are not certain what is the status of your
                            qualification, please contact us at info@ibm.edu.au
                            or at 13000 69 642
                        </div>
                    </div>
                </div>
                <p></p>
                <div class="row">
                    <div class="col-md-12 m_t_10">
                        <button
                            type="button"
                            value="Next"
                            class="file_btn btn-xs-inline back2 wpcf7-form-control wpcf7-submit pull-left back_button"
                        >
                            <span class="fa fa-arrow-left"></span> Back
                        </button>
                        <button
                            type="button"
                            value="Next"
                            class="file_btn btn-xs-inline open2 wpcf7-form-control wpcf7-submit pull-right next_button"
                        >
                            Save &amp; Next<span
                                class="fa fa-arrow-right"
                            ></span>
                        </button>
                    </div>
                </div>
            </div> -->
            <!-- Section 2 -->

            <!-- Section 3 -->
            <!-- <div id="sf3" class="frm" style="display: none">
                <div class="employment_background">
                    <div class="form_header_title">Employment</div>
                    <div class="row">
                        <div class="col-md-12">
                            <strong
                                >Of the following categories, which BEST
                                describes your current employment status? (Tick
                                one box only)</strong
                            ><br />
                            For casual, seasonal, contract and shift work, use
                            the current number of hours worked per week to
                            determine whether full time (35 hours or more per
                            week) or part-time employed (less than 35 hours per
                            week).
                        </div>
                        <div class="col-md-4">
                            <span id="employment_custom_error"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <span class="wpcf7-form-control-wrap pte_title">
                                <span
                                    class="d-flex row wpcf7-form-control wpcf7-radio"
                                >
                                    <div class="col-md-6">
                                        <div>
                                            <input
                                                class="input_radio valid"
                                                type="radio"
                                                name="employment"
                                                id="employment_2"
                                                value="2"
                                                aria-required="true"
                                            />
                                            <span
                                                class="text_radio wpcf7-list-item-label"
                                                >Full time employee</span
                                            >
                                        </div>
                                        <div>
                                            <input
                                                class="input_radio valid"
                                                type="radio"
                                                name="employment"
                                                id="employment_3"
                                                value="3"
                                            />
                                            <span
                                                class="text_radio wpcf7-list-item-label"
                                                >Part time employee</span
                                            >
                                        </div>
                                        <div>
                                            <input
                                                class="input_radio valid"
                                                type="radio"
                                                name="employment"
                                                id="employment_4"
                                                value="4"
                                            />
                                            <span
                                                class="text_radio wpcf7-list-item-label"
                                                >Self employed - not employing
                                                others</span
                                            >
                                        </div>
                                        <div>
                                            <input
                                                class="input_radio valid"
                                                type="radio"
                                                name="employment"
                                                id="employment_5"
                                                value="5"
                                            />
                                            <span
                                                class="text_radio wpcf7-list-item-label"
                                                >Employer</span
                                            >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div>
                                            <input
                                                class="input_radio valid"
                                                type="radio"
                                                name="employment"
                                                id="employment_6"
                                                value="6"
                                            />
                                            <span
                                                class="text_radio wpcf7-list-item-label"
                                                >Employed - unpaid worker in a
                                                family business</span
                                            >
                                        </div>
                                        <div>
                                            <input
                                                class="input_radio valid"
                                                type="radio"
                                                name="employment"
                                                id="employment_7"
                                                value="7"
                                            />
                                            <span
                                                class="text_radio wpcf7-list-item-label"
                                                >Unemployed - seeking full-time
                                                work</span
                                            >
                                        </div>
                                        <div>
                                            <input
                                                class="input_radio valid"
                                                type="radio"
                                                name="employment"
                                                id="employment_8"
                                                value="8"
                                            />
                                            <span
                                                class="text_radio wpcf7-list-item-label"
                                                >Unemployed - seeking part-time
                                                work</span
                                            >
                                        </div>
                                        <div>
                                            <input
                                                class="input_radio valid"
                                                type="radio"
                                                name="employment"
                                                id="employment_9"
                                                value="9"
                                            />
                                            <span
                                                class="text_radio wpcf7-list-item-label"
                                                >Not employed - not seeking
                                                employment</span
                                            >
                                        </div>
                                    </div>
                                </span>
                            </span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <p>
                                <strong
                                    >Which of the following categories BEST
                                    describes your current occupation? (Tick one
                                    box only). If unemployed, please continue to
                                    the next question.</strong
                                >
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <span class="d-flex single_radio_button">
                                <input
                                    type="radio"
                                    class="input_radio valid"
                                    name="recent_occupation"
                                    id="recent_occupation_1"
                                    value="1"
                                    aria-required="true"
                                />
                                <span class="text_radio">Managers</span>
                            </span>
                            <span class="d-flex single_radio_button">
                                <input
                                    type="radio"
                                    class="input_radio valid"
                                    name="recent_occupation"
                                    id="recent_occupation_2"
                                    value="2"
                                />
                                <span class="text_radio">Professionals</span>
                            </span>
                            <span class="d-flex single_radio_button">
                                <input
                                    type="radio"
                                    class="input_radio valid"
                                    name="recent_occupation"
                                    id="recent_occupation_3"
                                    value="3"
                                />
                                <span class="text_radio"
                                    >Technicians &amp; trade workers</span
                                >
                            </span>
                            <span class="d-flex single_radio_button">
                                <input
                                    type="radio"
                                    class="input_radio valid"
                                    name="recent_occupation"
                                    id="recent_occupation_4"
                                    value="4"
                                />
                                <span class="text_radio"
                                    >Community &amp; personal service
                                    workers</span
                                >
                            </span>
                            <span class="d-flex single_radio_button">
                                <input
                                    type="radio"
                                    class="input_radio valid"
                                    name="recent_occupation"
                                    id="recent_occupation_5"
                                    value="5"
                                />
                                <span class="text_radio"
                                    >Community &amp; administrative
                                    workers</span
                                >
                            </span>
                        </div>
                        <div class="col-md-6">
                            <span class="d-flex single_radio_button">
                                <input
                                    type="radio"
                                    class="input_radio valid"
                                    name="recent_occupation"
                                    id="recent_occupation_6"
                                    value="6"
                                />
                                <span class="text_radio">Sales workers</span>
                            </span>
                            <span class="d-flex single_radio_button">
                                <input
                                    type="radio"
                                    class="input_radio valid"
                                    name="recent_occupation"
                                    id="recent_occupation_7"
                                    value="7"
                                />
                                <span class="text_radio"
                                    >Machinery operators &amp; drivers</span
                                >
                            </span>
                            <span class="d-flex single_radio_button">
                                <input
                                    type="radio"
                                    class="input_radio valid"
                                    name="recent_occupation"
                                    id="recent_occupation_8"
                                    value="8"
                                />
                                <span class="text_radio">Laborers</span>
                            </span>
                            <span class="d-flex single_radio_button">
                                <input
                                    type="radio"
                                    class="input_radio valid"
                                    name="recent_occupation"
                                    id="recent_occupation_9"
                                    value="9"
                                />
                                <span class="text_radio">Other</span>
                            </span>
                        </div>
                        <div
                            id="recent_occupation_custom_error"
                            class="col-md-12 help-block form-error"
                        ></div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <p>
                                <strong
                                    >Which of the following categories BEST
                                    describes your current employment industry?
                                    (Tick one box only). If unemployed, please
                                    continue to the next question.</strong
                                >
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <span class="d-flex single_radio_button">
                                <input
                                    type="radio"
                                    class="input_radio valid"
                                    name="employment_industry"
                                    value="1"
                                    aria-required="true"
                                />
                                <span class="text_radio"
                                    >Agriculture, Forestry, Fishing</span
                                >
                            </span>
                            <span class="d-flex single_radio_button">
                                <input
                                    type="radio"
                                    class="input_radio valid"
                                    name="employment_industry"
                                    value="2"
                                />
                                <span class="text_radio">Mining</span>
                            </span>
                            <span class="d-flex single_radio_button">
                                <input
                                    type="radio"
                                    class="input_radio valid"
                                    name="employment_industry"
                                    value="3"
                                />
                                <span class="text_radio">Manufacturing</span>
                            </span>
                            <span class="d-flex single_radio_button">
                                <input
                                    type="radio"
                                    class="input_radio valid"
                                    name="employment_industry"
                                    value="4"
                                />
                                <span class="text_radio"
                                    >Electricity, Gas, Water, Waste
                                    Services</span
                                >
                            </span>
                            <span class="d-flex single_radio_button">
                                <input
                                    type="radio"
                                    class="input_radio valid"
                                    name="employment_industry"
                                    value="9"
                                />
                                <span class="text_radio"
                                    >Transport, Postal &amp; Warehousing</span
                                >
                            </span>
                            <span class="d-flex single_radio_button">
                                <input
                                    type="radio"
                                    class="input_radio valid"
                                    name="employment_industry"
                                    value="10"
                                />
                                <span class="text_radio"
                                    >Information Media &amp;
                                    Telecommunications</span
                                >
                            </span>
                            <span class="d-flex single_radio_button">
                                <input
                                    type="radio"
                                    class="input_radio valid"
                                    name="employment_industry"
                                    value="11"
                                />
                                <span class="text_radio"
                                    >Financial &amp; Insurance Services</span
                                >
                            </span>
                            <span class="d-flex single_radio_button">
                                <input
                                    type="radio"
                                    class="input_radio valid"
                                    name="employment_industry"
                                    value="12"
                                />
                                <span class="text_radio"
                                    >Rental, Hiring &amp; Real Estate
                                    Services</span
                                >
                            </span>
                            <span class="d-flex single_radio_button">
                                <input
                                    type="radio"
                                    class="input_radio valid"
                                    name="employment_industry"
                                    value="18"
                                />
                                <span class="text_radio"
                                    >Arts &amp; recreation Services</span
                                >
                            </span>
                            <span class="d-flex single_radio_button">
                                <input
                                    type="radio"
                                    class="input_radio valid"
                                    name="employment_industry"
                                    value="15"
                                />
                                <span class="text_radio"
                                    >Public administration &amp; safety</span
                                >
                            </span>
                        </div>
                        <div class="col-md-6">
                            <span class="d-flex single_radio_button">
                                <input
                                    type="radio"
                                    class="input_radio valid"
                                    name="employment_industry"
                                    value="5"
                                />
                                <span class="text_radio">Construction</span>
                            </span>
                            <span class="d-flex single_radio_button">
                                <input
                                    type="radio"
                                    class="input_radio valid"
                                    name="employment_industry"
                                    value="6"
                                />
                                <span class="text_radio">Wholesale trade</span>
                            </span>
                            <span class="d-flex single_radio_button">
                                <input
                                    type="radio"
                                    class="input_radio valid"
                                    name="employment_industry"
                                    value="7"
                                />
                                <span class="text_radio">Retail trade</span>
                            </span>
                            <span class="d-flex single_radio_button">
                                <input
                                    type="radio"
                                    class="input_radio valid"
                                    name="employment_industry"
                                    value="8"
                                />
                                <span class="text_radio"
                                    >Accommodation &amp; Food Services</span
                                >
                            </span>
                            <span class="d-flex single_radio_button">
                                <input
                                    type="radio"
                                    class="input_radio valid"
                                    name="employment_industry"
                                    value="13"
                                />
                                <span class="text_radio"
                                    >Professional, Scientific, Technical
                                    Services</span
                                >
                            </span>
                            <span class="d-flex single_radio_button">
                                <input
                                    type="radio"
                                    class="input_radio valid"
                                    name="employment_industry"
                                    value="14"
                                />
                                <span class="text_radio"
                                    >Administrative &amp; Support Services</span
                                >
                            </span>
                            <span class="d-flex single_radio_button">
                                <input
                                    type="radio"
                                    class="input_radio valid"
                                    name="employment_industry"
                                    value="16"
                                />
                                <span class="text_radio"
                                    >Education &amp; Training</span
                                >
                            </span>
                            <span class="d-flex single_radio_button">
                                <input
                                    type="radio"
                                    class="input_radio valid"
                                    name="employment_industry"
                                    value="17"
                                />
                                <span class="text_radio"
                                    >Health Care &amp; Social Assistance</span
                                >
                            </span>
                            <span class="d-flex single_radio_button">
                                <input
                                    type="radio"
                                    class="input_radio valid"
                                    name="employment_industry"
                                    value="19"
                                />
                                <span class="text_radio">Other Services</span>
                            </span>
                        </div>
                        <div
                            id="employment_industry_custom_error"
                            class="col-md-12 help-block form-error"
                        ></div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <span class="wpcf7-form-control-wrap pte_title">
                                <span
                                    class="d-flex row wpcf7-form-control wpcf7-radio"
                                >
                                    <div class="col-md-6">
                                        <div>
                                            <label
                                                ><b>Workplace details</b></label
                                            >
                                            <span
                                                class="wpcf7-form-control-wrap"
                                            >
                                                <input
                                                    type="text"
                                                    name="work_job_title"
                                                    id="work_job_title"
                                                    value=""
                                                    size="40"
                                                    class="input_text wpcf7-form-control wpcf7-text valid"
                                                    placeholder="Job title"
                                                    aria-required="true"
                                                    aria-describedby="work_job_title-error"
                                                    aria-invalid="false"
                                                /><i
                                                    id="work_job_title-error"
                                                    class="error"
                                                    style="display: none"
                                                ></i>
                                            </span>
                                        </div>
                                        <div>
                                            <span
                                                class="wpcf7-form-control-wrap"
                                            >
                                                <input
                                                    type="text"
                                                    name="work_referee_institute"
                                                    id="work_referee_institute"
                                                    value=""
                                                    size="40"
                                                    class="input_text wpcf7-form-control wpcf7-text valid"
                                                    placeholder="Refreree Institute"
                                                    aria-required="true"
                                                    aria-describedby="work_referee_institute-error"
                                                    aria-invalid="false"
                                                /><i
                                                    id="work_referee_institute-error"
                                                    class="error"
                                                    style="display: none"
                                                ></i>
                                            </span>
                                        </div>
                                        <div>
                                            <span
                                                class="wpcf7-form-control-wrap"
                                            >
                                                <input
                                                    type="text"
                                                    name="work_company_name"
                                                    id="work_company_name"
                                                    value=""
                                                    size="40"
                                                    class="input_text wpcf7-form-control wpcf7-text valid"
                                                    placeholder="Company name"
                                                    aria-required="true"
                                                    aria-describedby="work_company_name-error"
                                                    aria-invalid="false"
                                                /><i
                                                    id="work_company_name-error"
                                                    class="error"
                                                    style="display: none"
                                                ></i>
                                            </span>
                                        </div>
                                        <div>
                                            <span
                                                class="wpcf7-form-control-wrap"
                                            >
                                                <input
                                                    type="text"
                                                    name="work_company_address"
                                                    id="work_company_address"
                                                    value=""
                                                    size="40"
                                                    class="input_text wpcf7-form-control wpcf7-text valid"
                                                    placeholder="Company address (including suburb, state and post code)"
                                                    aria-required="true"
                                                    aria-describedby="work_company_address-error"
                                                    aria-invalid="false"
                                                /><i
                                                    id="work_company_address-error"
                                                    class="error"
                                                    style="display: none"
                                                ></i>
                                            </span>
                                        </div>
                                        <div>
                                            <span
                                                class="wpcf7-form-control-wrap"
                                            >
                                                <div
                                                    class="intl-tel-input allow-dropdown"
                                                >
                                                    <div class="flag-container">
                                                        <div
                                                            class="selected-flag"
                                                            role="combobox"
                                                            aria-owns="country-listbox"
                                                            tabindex="0"
                                                            title="Australia: +61"
                                                        >
                                                            <div
                                                                class="iti-flag au"
                                                            ></div>
                                                            <div
                                                                class="iti-arrow"
                                                            ></div>
                                                        </div>
                                                        <ul
                                                            class="country-list hide"
                                                            id="country-listbox"
                                                            aria-expanded="false"
                                                            role="listbox"
                                                            aria-activedescendant="iti-item-au"
                                                        >
                                                            <li
                                                                class="country standard active"
                                                                tabindex="-1"
                                                                id="iti-item-au"
                                                                role="option"
                                                                data-dial-code="61"
                                                                data-country-code="au"
                                                                aria-selected="true"
                                                            >
                                                                <div
                                                                    class="flag-box"
                                                                >
                                                                    <div
                                                                        class="iti-flag au"
                                                                    ></div>
                                                                </div>
                                                                <span
                                                                    class="country-name"
                                                                    >Australia</span
                                                                ><span
                                                                    class="dial-code"
                                                                    >+61</span
                                                                >
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <input
                                                        type="text"
                                                        name="work_main_phone"
                                                        id="work_main_phone"
                                                        value=""
                                                        size="40"
                                                        class="input_text wpcf7-form-control wpcf7-text valid"
                                                        placeholder="Company main phone"
                                                        autocomplete="off"
                                                        data-intl-tel-input-id="2"
                                                        aria-required="true"
                                                        aria-describedby="work_main_phone-error"
                                                        aria-invalid="false"
                                                    /><i
                                                        id="work_main_phone-error"
                                                        class="error"
                                                        style="display: none"
                                                    ></i
                                                    ><input
                                                        type="hidden"
                                                        name="full_work_main_phone"
                                                        value="+61635489191"
                                                    />
                                                </div>
                                            </span>
                                        </div>
                                        <div>
                                            <span
                                                class="wpcf7-form-control-wrap"
                                            >
                                                <input
                                                    type="email"
                                                    name="work_main_emailid"
                                                    id="work_main_emailid"
                                                    pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"
                                                    value=""
                                                    size="40"
                                                    class="input_text wpcf7-form-control wpcf7-text valid"
                                                    placeholder="Company main email address"
                                                    aria-required="true"
                                                    aria-describedby="work_main_emailid-error"
                                                    aria-invalid="false"
                                                /><i
                                                    id="work_main_emailid-error"
                                                    class="error"
                                                    style="display: none"
                                                ></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div>
                                            <label
                                                ><b
                                                    >Supervisor details</b
                                                ></label
                                            >
                                            <span
                                                class="wpcf7-form-control-wrap"
                                            >
                                                <input
                                                    type="text"
                                                    name="sup_full_name"
                                                    id="sup_full_name"
                                                    value=""
                                                    size="40"
                                                    class="input_text wpcf7-form-control wpcf7-text valid"
                                                    placeholder="Full name"
                                                    aria-required="true"
                                                    aria-invalid="false"
                                                />
                                            </span>
                                        </div>
                                        <div>
                                            <span
                                                class="wpcf7-form-control-wrap"
                                            >
                                                <input
                                                    type="email"
                                                    name="sup_email_address"
                                                    id="sup_email_address"
                                                    pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"
                                                    value=""
                                                    size="40"
                                                    class="input_text wpcf7-form-control wpcf7-text valid"
                                                    placeholder="Email address"
                                                    aria-required="true"
                                                    aria-invalid="false"
                                                />
                                            </span>
                                        </div>
                                        <div>
                                            <span
                                                class="wpcf7-form-control-wrap"
                                            >
                                                <div
                                                    class="intl-tel-input allow-dropdown"
                                                >
                                                    <div class="flag-container">
                                                        <div
                                                            class="selected-flag"
                                                            role="combobox"
                                                            aria-owns="country-listbox"
                                                            tabindex="0"
                                                            title="Australia: +61"
                                                        >
                                                            <div
                                                                class="iti-flag au"
                                                            ></div>
                                                            <div
                                                                class="iti-arrow"
                                                            ></div>
                                                        </div>
                                                        <ul
                                                            class="country-list hide"
                                                            id="country-listbox"
                                                            aria-expanded="false"
                                                            role="listbox"
                                                            aria-activedescendant="iti-item-au"
                                                        >
                                                            <li
                                                                class="country standard active"
                                                                tabindex="-1"
                                                                id="iti-item-au"
                                                                role="option"
                                                                data-dial-code="61"
                                                                data-country-code="au"
                                                                aria-selected="true"
                                                            >
                                                                <div
                                                                    class="flag-box"
                                                                >
                                                                    <div
                                                                        class="iti-flag au"
                                                                    ></div>
                                                                </div>
                                                                <span
                                                                    class="country-name"
                                                                    >Australia</span
                                                                ><span
                                                                    class="dial-code"
                                                                    >+61</span
                                                                >
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <input
                                                        type="text"
                                                        name="sup_phone_number"
                                                        id="sup_phone_number"
                                                        value=""
                                                        size="40"
                                                        class="input_text wpcf7-form-control wpcf7-text valid"
                                                        placeholder="Phone number "
                                                        autocomplete="off"
                                                        data-intl-tel-input-id="1"
                                                        aria-required="true"
                                                        aria-describedby="sup_phone_number-error"
                                                        aria-invalid="false"
                                                    /><i
                                                        id="sup_phone_number-error"
                                                        class="error"
                                                        style="display: none"
                                                    ></i
                                                    ><input
                                                        type="hidden"
                                                        name="full_sup_phone_number"
                                                        value="+61651651"
                                                    />
                                                </div>
                                            </span>
                                        </div>
                                        <div>
                                            <span
                                                class="wpcf7-form-control-wrap"
                                            >
                                                <input
                                                    type="text"
                                                    name="sup_role_position"
                                                    id="sup_role_position"
                                                    value=""
                                                    size="40"
                                                    class="input_text wpcf7-form-control wpcf7-text valid"
                                                    placeholder="Role/Position"
                                                    aria-required="true"
                                                    aria-describedby="sup_role_position-error"
                                                    aria-invalid="false"
                                                /><i
                                                    id="sup_role_position-error"
                                                    class="error"
                                                    style="display: none"
                                                ></i>
                                            </span>
                                        </div>
                                        <div>
                                            <span
                                                class="wpcf7-form-control-wrap"
                                            >
                                                <input
                                                    type="text"
                                                    name="qualifications_held"
                                                    id="qualifications_held"
                                                    value=""
                                                    size="40"
                                                    class="input_text wpcf7-form-control wpcf7-text valid"
                                                    placeholder="Qualifications held"
                                                    aria-required="true"
                                                    aria-describedby="qualifications_held-error"
                                                    aria-invalid="false"
                                                /><i
                                                    id="qualifications_held-error"
                                                    class="error"
                                                    style="display: none"
                                                ></i>
                                            </span>
                                        </div>
                                    </div>
                                </span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="Learning_preferences">
                    <h5 class="form_header_title">
                        Recognition of Prior Learning and Credit Transfer
                    </h5>
                    <div class="row">
                        <div class="col-md-12">
                            <strong
                                >IBM College is committed to ensuring compliance
                                with the VET Quality Framework by recognising
                                qualifications and statements of attainments
                                issued by other Registered Training
                                Organisations (RTOs). Under the recognition
                                principle OIC accepts the credentials issued by
                                another Registered Training Organisation based
                                in any State/Territory of Australia. All current
                                and potential learners who hold qualifications
                                or statements of attainment from other RTOs will
                                have these qualifications verified.<br />
                                If your qualifications are verified and
                                recognised, you will receive the appropriate
                                credit transfers or recognition
                                opportunities.</strong
                            >
                        </div>
                        <div class="col-md-12">
                            Do you wish to apply for credit transfer?
                            <span class="wpcf7-form-control-wrap">
                                <span
                                    class="d-flex wpcf7-form-control wpcf7-radio"
                                >
                                    <span class="wpcf7-list-item first">
                                        <input
                                            class="input_radio"
                                            type="radio"
                                            id="credit_transfer"
                                            name="credit_transfer"
                                            value="Yes"
                                        />
                                        <span
                                            class="wpcf7-list-item-label text_radio"
                                            >Yes</span
                                        >
                                    </span>
                                    <span class="wpcf7-list-item last">
                                        <input
                                            class="input_radio"
                                            type="radio"
                                            id="credit_transfer"
                                            name="credit_transfer"
                                            value="No"
                                        />
                                        <span
                                            class="wpcf7-list-item-label text_radio"
                                            >No</span
                                        >
                                    </span>
                                </span>
                            </span>
                        </div>
                        <div class="col-md-12">
                            <strong
                                >Recognition of Prior Learning (RPL) is an
                                assessment process that allows you to gain
                                recognition for skills and knowledge that you
                                may already have. Instead of studying units that
                                you already know, you can gain recognition for
                                these. This may reduce the number of units that
                                you have to complete learner guides for and
                                reduce the time it takes for you to complete
                                your training. If you think you have skills and
                                knowledge from your previous or current work,
                                study, work experience, life experience then you
                                may apply for RPL.</strong
                            >
                        </div>
                        <div class="col-md-12">
                            Do you wish to apply for recognition of prior
                            learning (RPL)?
                            <span class="wpcf7-form-control-wrap">
                                <span
                                    class="d-flex wpcf7-form-control wpcf7-radio"
                                >
                                    <span class="wpcf7-list-item first">
                                        <input
                                            class="input_radio"
                                            type="radio"
                                            id="apply_rpl_yes"
                                            name="apply_rpl"
                                            value="Yes"
                                        />
                                        <span
                                            class="wpcf7-list-item-label text_radio"
                                            >Yes</span
                                        >
                                    </span>
                                    <span class="wpcf7-list-item last">
                                        <input
                                            class="input_radio"
                                            type="radio"
                                            id="apply_rpl_no"
                                            name="apply_rpl"
                                            value="No"
                                        />
                                        <span
                                            class="wpcf7-list-item-label text_radio"
                                            >No</span
                                        >
                                    </span>
                                </span>
                            </span>
                        </div>
                        <div class="col-md-4">
                            <span id="Learning_preferences_custom_error"></span>
                        </div>
                    </div>
                </div>
                <div class="disability_mental_health">
                    <div class="form_header_title">
                        Disability and Mental Health
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <strong
                                >In order to provide appropriate support
                                services, we invite you to give us information
                                about any disability or mental health issue you
                                may have.</strong
                            >
                            <br /><br />Do you consider yourself to have a
                            disability, impairment or long term condition?
                            <span class="wpcf7-form-control-wrap pte_title">
                                <span
                                    class="d-flex wpcf7-form-control wpcf7-radio"
                                >
                                    <span class="wpcf7-list-item first">
                                        <input
                                            class="input_radio valid"
                                            type="radio"
                                            name="disability_consider"
                                            id="disability_consider_Yes"
                                            value="Yes"
                                            aria-required="true"
                                            aria-describedby="disability_consider-error"
                                        />
                                        <span
                                            class="wpcf7-list-item-label text_radio"
                                            >Yes</span
                                        >
                                    </span>
                                    <span class="wpcf7-list-item last">
                                        <input
                                            class="input_radio valid"
                                            type="radio"
                                            name="disability_consider"
                                            id="disability_consider_No"
                                            value="No"
                                            aria-invalid="false"
                                        />
                                        <span
                                            class="wpcf7-list-item-label text_radio"
                                            >No</span
                                        >
                                    </span>
                                </span>
                            </span>
                        </div>
                        <div class="col-md-12">
                            <span id="disability_consider_custom_error"
                                ><i
                                    id="disability_consider-error"
                                    class="error"
                                    style="display: none"
                                ></i
                            ></span>
                        </div>
                    </div>
                    <div
                        class="row disability_consider_toggle"
                        style="display: none"
                    >
                        <div class="col-md-12">
                            If yes, then please indicate the area of disability,
                            impairment or long term condition: (you may indicate
                            more than one area)
                            <span
                                class="wpcf7-form-control-wrap"
                                id="disability_indicate_area"
                            >
                                <span
                                    class="d-flex row wpcf7-form-control wpcf7-radio"
                                >
                                    <div class="col-md-6">
                                        <div>
                                            <input
                                                type="checkbox"
                                                class="input_checkbox"
                                                name="disability_indicate_area[]"
                                                value="Hearing / deaf"
                                                disabled="disabled"
                                            />
                                            <span
                                                class="text_checkbox wpcf7-list-item-label"
                                                >Hearing / deaf</span
                                            >
                                        </div>
                                        <div>
                                            <input
                                                type="checkbox"
                                                class="input_checkbox"
                                                name="disability_indicate_area[]"
                                                value="Learning"
                                                disabled="disabled"
                                            />
                                            <span
                                                class="text_checkbox wpcf7-list-item-label"
                                                >Learning</span
                                            >
                                        </div>
                                        <div>
                                            <input
                                                type="checkbox"
                                                class="input_checkbox"
                                                name="disability_indicate_area[]"
                                                value="Vision"
                                                disabled="disabled"
                                            />
                                            <span
                                                class="text_checkbox wpcf7-list-item-label"
                                                >Vision</span
                                            >
                                        </div>
                                        <div>
                                            <input
                                                type="checkbox"
                                                class="input_checkbox"
                                                name="disability_indicate_area[]"
                                                value="Physical"
                                                disabled="disabled"
                                            />
                                            <span
                                                class="text_checkbox wpcf7-list-item-label"
                                                >Physical</span
                                            >
                                        </div>
                                        <div>
                                            <input
                                                type="checkbox"
                                                class="input_checkbox"
                                                name="disability_indicate_area[]"
                                                value="Mental Illness"
                                                disabled="disabled"
                                            />
                                            <span
                                                class="text_checkbox wpcf7-list-item-label"
                                                >Mental Illness</span
                                            >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div>
                                            <input
                                                type="checkbox"
                                                class="input_checkbox"
                                                name="disability_indicate_area[]"
                                                value="Medical condition"
                                                disabled="disabled"
                                            />
                                            <span
                                                class="text_checkbox wpcf7-list-item-label"
                                                >Medical condition</span
                                            >
                                        </div>
                                        <div>
                                            <input
                                                type="checkbox"
                                                class="input_checkbox"
                                                name="disability_indicate_area[]"
                                                value="Intellectual"
                                                disabled="disabled"
                                            />
                                            <span
                                                class="text_checkbox wpcf7-list-item-label"
                                                >Intellectual</span
                                            >
                                        </div>
                                        <div>
                                            <input
                                                type="checkbox"
                                                class="input_checkbox"
                                                name="disability_indicate_area[]"
                                                value="Acquired brain injury"
                                                disabled="disabled"
                                            />
                                            <span
                                                class="text_checkbox wpcf7-list-item-label"
                                                >Acquired brain injury</span
                                            >
                                        </div>
                                        <div>
                                            <input
                                                type="checkbox"
                                                class="input_checkbox"
                                                name="disability_indicate_area[]"
                                                id="disability_indicate_area_other"
                                                value="Other"
                                                disabled="disabled"
                                            />
                                            <span
                                                class="text_checkbox wpcf7-list-item-label"
                                                >Other</span
                                            >
                                            <input
                                                type="text"
                                                name="disability_other_indicate_area"
                                                size="40"
                                                placeholder="please specify if other"
                                                class="input_text disability_other_indicate_area"
                                                style="display: none"
                                                disabled="disabled"
                                            />
                                        </div>
                                    </div>
                                </span>
                            </span>
                            <div
                                id="disability_indicate_area_custom_error"
                                class="select_box_error_fix"
                            ></div>
                        </div>
                    </div>
                </div>
                <div class="lln">
                    <h5 class="form_header_title">
                        LLN (Language, Literacy and Numeracy)
                    </h5>
                    <div class="row">
                        <div class="col-md-12">
                            <strong
                                >IBM College is committed to providing language,
                                literacy and numeracy to support its learners.
                            </strong>
                            <br /><br />Do you consider that you may require
                            language, literacy or numeracy support?
                            <span class="wpcf7-form-control-wrap pte_title">
                                <span
                                    class="d-flex wpcf7-form-control wpcf7-radio"
                                >
                                    <span class="wpcf7-list-item first">
                                        <input
                                            class="input_radio"
                                            type="radio"
                                            name="require_lln"
                                            id="require_lln_yes"
                                            value="Yes"
                                        />
                                        <span
                                            class="wpcf7-list-item-label text_radio"
                                            >Yes</span
                                        >
                                    </span>
                                    <span class="wpcf7-list-item last">
                                        <input
                                            class="input_radio"
                                            type="radio"
                                            name="require_lln"
                                            id="require_lln_no"
                                            value="No"
                                        />
                                        <span
                                            class="wpcf7-list-item-label text_radio"
                                            >No</span
                                        >
                                    </span>
                                </span>
                            </span>
                        </div>
                    </div>
                    <div class="row lln_toggle" style="display: none">
                        <div class="col-md-12">
                            If yes, please provide details
                            <span
                                class="wpcf7-form-control-wrap"
                                id="disability_indicate_area"
                            >
                                <span
                                    class="d-flex row wpcf7-form-control wpcf7-radio"
                                >
                                    <div class="col-md-12">
                                        <span class="wpcf7-form-control-wrap">
                                            <textarea
                                                name="lln_details"
                                                id="lln_details"
                                                value=""
                                                class="input_textarea wpcf7-form-control wpcf7-text"
                                            ></textarea>
                                        </span>
                                    </div>
                                </span>
                            </span>
                            <span
                                >* Please note that your response and any
                                additional assistance provided will remain
                                confidential.</span
                            >
                            <div
                                id="disability_indicate_area_custom_error"
                                class="select_box_error_fix"
                            ></div>
                        </div>
                    </div>
                </div>
                <div class="Learning_preferences">
                    <h5 class="form_header_title">Learning Preferences</h5>
                    <div class="row">
                        <div class="col-md-8">
                            <strong
                                >How do you prefer to learn? (Please tick one or
                                more of the following)</strong
                            >
                        </div>
                        <div class="col-md-4">
                            <span id="Learning_preferences_custom_error"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <span class="wpcf7-form-control-wrap pte_title">
                                <span
                                    class="d-flex row wpcf7-form-control wpcf7-radio"
                                >
                                    <div class="col-md-6">
                                        <div>
                                            <input
                                                class="input_checkbox"
                                                type="checkbox"
                                                name="preferences_learning[]"
                                                id="preferences_learning_1"
                                                value="Participating in classes face-to-face with a teacher and other students"
                                            />
                                            <span
                                                class="wpcf7-list-item-label text_checkbox"
                                                >Participating in classes
                                                face-to-face with a teacher and
                                                other students</span
                                            >
                                        </div>
                                        <div>
                                            <input
                                                class="input_checkbox"
                                                type="checkbox"
                                                name="preferences_learning[]"
                                                id="preferences_learning_2"
                                                value="Through group work with other students/discussion with other students"
                                            />
                                            <span
                                                class="wpcf7-list-item-label text_checkbox"
                                                >Through group work with other
                                                students/discussion with other
                                                students</span
                                            >
                                        </div>
                                        <div>
                                            <input
                                                class="input_checkbox"
                                                type="checkbox"
                                                name="preferences_learning[]"
                                                id="preferences_learning_3"
                                                value="Online completion of some units"
                                            />
                                            <span
                                                class="wpcf7-list-item-label text_checkbox"
                                                >Online completion of some
                                                units</span
                                            >
                                        </div>
                                        <div>
                                            <input
                                                class="input_checkbox"
                                                type="checkbox"
                                                name="preferences_learning[]"
                                                id="preferences_learning_4"
                                                value="Self-paced, flexible learning through books and other such resources"
                                            />
                                            <span
                                                class="wpcf7-list-item-label text_checkbox"
                                                >Self-paced, flexible learning
                                                through books and other such
                                                resources</span
                                            >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div>
                                            <input
                                                class="input_checkbox"
                                                type="checkbox"
                                                name="preferences_learning[]"
                                                id="preferences_learning_5"
                                                value="Continous and regular communication with my teacher"
                                            />
                                            <span
                                                class="wpcf7-list-item-label text_checkbox"
                                                >Continous and regular
                                                communication with my
                                                teacher</span
                                            >
                                        </div>
                                        <div>
                                            <input
                                                class="input_checkbox"
                                                type="checkbox"
                                                name="preferences_learning[]"
                                                id="preferences_learning_6"
                                                value="Self-directed tasks and activities"
                                            />
                                            <span
                                                class="wpcf7-list-item-label text_checkbox"
                                                >Self-directed tasks and
                                                activities</span
                                            >
                                        </div>
                                        <div>
                                            <input
                                                class="input_checkbox"
                                                type="checkbox"
                                                name="preferences_learning[]"
                                                id="preferences_learning_7"
                                                value="Hands-on tasks, role-plays and activities"
                                            />
                                            <span
                                                class="wpcf7-list-item-label text_checkbox"
                                                >Hands-on tasks, role-plays and
                                                activities</span
                                            >
                                        </div>
                                        <div>
                                            <input
                                                class="input_checkbox"
                                                type="checkbox"
                                                name="preferences_learning[]"
                                                id="preferences_learning_8"
                                                value="On-the-job training, or workplace learning and assessment"
                                            />
                                            <span
                                                class="wpcf7-list-item-label text_checkbox"
                                                >On-the-job training, or
                                                workplace learning and
                                                assessment</span
                                            >
                                        </div>
                                    </div>
                                </span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="Reason_study">
                    <div class="form_header_title">Reason for study</div>
                    <div class="row">
                        <div class="col-md-8">
                            <strong
                                >Of the following categories, which BEST
                                describes your main reason for undertaking this
                                Course (Tick one box only)</strong
                            >
                        </div>
                        <div class="col-md-4">
                            <span id="study_reason_custom_error"
                                ><i
                                    id="study_reason[]-error"
                                    class="error"
                                    style="display: none"
                                ></i
                            ></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <span class="wpcf7-form-control-wrap pte_title">
                                <span
                                    class="d-flex row wpcf7-form-control wpcf7-radio"
                                >
                                    <div class="col-md-6">
                                        <div>
                                            <input
                                                class="input_checkbox valid"
                                                type="checkbox"
                                                name="study_reason[]"
                                                id="study_reason_1"
                                                value="To get a job"
                                                aria-required="true"
                                                aria-describedby="study_reason[]-error"
                                            />
                                            <span
                                                class="wpcf7-list-item-label text_checkbox"
                                                >To get a job</span
                                            >
                                        </div>
                                        <div>
                                            <input
                                                class="input_checkbox"
                                                type="checkbox"
                                                name="study_reason[]"
                                                id="study_reason_2"
                                                value="To develop my existing business"
                                            />
                                            <span
                                                class="wpcf7-list-item-label text_checkbox"
                                                >To develop my existing
                                                business</span
                                            >
                                        </div>
                                        <div>
                                            <input
                                                class="input_checkbox"
                                                type="checkbox"
                                                name="study_reason[]"
                                                id="study_reason_3"
                                                value="To start my own business"
                                            />
                                            <span
                                                class="wpcf7-list-item-label text_checkbox"
                                                >To start my own business</span
                                            >
                                        </div>
                                        <div>
                                            <input
                                                class="input_checkbox"
                                                type="checkbox"
                                                name="study_reason[]"
                                                id="study_reason_4"
                                                value="To try for a different career"
                                            />
                                            <span
                                                class="wpcf7-list-item-label text_checkbox"
                                                >To try for a different
                                                career</span
                                            >
                                        </div>
                                        <div>
                                            <input
                                                class="input_checkbox"
                                                type="checkbox"
                                                name="study_reason[]"
                                                id="study_reason_5"
                                                value="For Personal Interest / self-development"
                                            />
                                            <span
                                                class="wpcf7-list-item-label text_checkbox"
                                                >For Personal Interest /
                                                self-development</span
                                            >
                                        </div>
                                        <div>
                                            <input
                                                class="input_checkbox"
                                                type="checkbox"
                                                name="study_reason[]"
                                                id="study_reason_6"
                                                value="To get skills for community/voluntary work"
                                            />
                                            <span
                                                class="wpcf7-list-item-label text_checkbox"
                                                >To get skills for
                                                community/voluntary work</span
                                            >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div>
                                            <input
                                                class="input_checkbox"
                                                type="checkbox"
                                                name="study_reason[]"
                                                id="study_reason_7"
                                                value="To get a better job/promotion"
                                            />
                                            <span
                                                class="wpcf7-list-item-label text_checkbox"
                                                >To get a better
                                                job/promotion</span
                                            >
                                        </div>
                                        <div>
                                            <input
                                                class="input_checkbox"
                                                type="checkbox"
                                                name="study_reason[]"
                                                id="study_reason_8"
                                                value="It was a requirement of my job"
                                                aria-invalid="false"
                                            />
                                            <span
                                                class="wpcf7-list-item-label text_checkbox"
                                                >It was a requirement of my
                                                job</span
                                            >
                                        </div>
                                        <div>
                                            <input
                                                class="input_checkbox"
                                                type="checkbox"
                                                name="study_reason[]"
                                                id="study_reason_9"
                                                value="I wanted extra skills for my job"
                                            />
                                            <span
                                                class="wpcf7-list-item-label text_checkbox"
                                                >I wanted extra skills for my
                                                job</span
                                            >
                                        </div>
                                        <div>
                                            <input
                                                class="input_checkbox"
                                                type="checkbox"
                                                name="study_reason[]"
                                                id="study_reason_10"
                                                value="To get into another course of study"
                                            />
                                            <span
                                                class="wpcf7-list-item-label text_checkbox"
                                                >To get into another course of
                                                study</span
                                            >
                                        </div>
                                        <div>
                                            <input
                                                class="input_checkbox"
                                                type="checkbox"
                                                name="study_reason[]"
                                                id="study_reason_11"
                                                value="Other (please specify)"
                                            />
                                            <span
                                                class="wpcf7-list-item-label text_checkbox"
                                                >Other (please specify)</span
                                            >
                                            <input
                                                type="text"
                                                name="study_other_reason"
                                                class="input_text study_other_reason"
                                                size="40"
                                                placeholder="please specify if other"
                                            />
                                        </div>
                                    </div>
                                </span>
                            </span>
                        </div>
                        <br />
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <strong
                                >What are your reasons for enrolling in the
                                course, including your expectations and
                                objectives within the industry which you are
                                applying to study? Include your interests and
                                outline your strengths and weaknesses towards
                                studying. Answer below: </strong
                            ><br /><br />
                            <input
                                type="text"
                                name="enrolling_reason"
                                id="enrolling_reason"
                                class="input_text enrolling_reason wpcf7-form-control wpcf7-text valid"
                                size="40"
                                placeholder="Answer Here"
                                aria-required="true"
                                aria-describedby="enrolling_reason-error"
                                aria-invalid="false"
                            /><i
                                id="enrolling_reason-error"
                                class="error"
                                style="display: none"
                            ></i>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <strong
                                >What do you hope to achieve from gaining this
                                qualification?</strong
                            ><br />
                            <br />
                            <input
                                type="text"
                                name="this_qualification"
                                id="this_qualification"
                                class="input_text this_qualification wpcf7-form-control wpcf7-text valid"
                                size="40"
                                placeholder="Qualification"
                                aria-required="true"
                                aria-describedby="this_qualification-error"
                                aria-invalid="false"
                            /><i
                                id="this_qualification-error"
                                class="error"
                                style="display: none"
                            ></i>
                        </div>
                    </div>
                </div>
                <div class="Reason_study">
                    <h5 class="form_header_title">Digital Literacy</h5>
                    <div class="row">
                        <div class="col-md-8">
                            <strong
                                >Do you regularly have access to any of these
                                digital technologies?</strong
                            >
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label class="wpcf7-list-item-label"
                                >Desktop or notebook computer</label
                            >
                        </div>
                        <div class="col-md-6">
                            <span class="wpcf7-form-control-wrap pte_title">
                                <span
                                    class="d-flex wpcf7-form-control wpcf7-radio"
                                >
                                    <span class="wpcf7-list-item first">
                                        <input
                                            class="input_radio valid"
                                            type="radio"
                                            name="desktop_computer_digital"
                                            id="desktop_computer_digital_yes"
                                            value="Yes"
                                            aria-required="true"
                                            aria-describedby="desktop_computer_digital-error"
                                            aria-invalid="false"
                                        />
                                        <span
                                            class="wpcf7-list-item-label text_radio"
                                            >Yes</span
                                        >
                                    </span>
                                    <span class="wpcf7-list-item last">
                                        <input
                                            class="input_radio valid"
                                            type="radio"
                                            name="desktop_computer_digital"
                                            id="desktop_computer_digital_no"
                                            value="No"
                                        />
                                        <span
                                            class="wpcf7-list-item-label text_radio"
                                            >No</span
                                        >
                                    </span>
                                </span>
                            </span>
                            <div class="col-md-12">
                                <span id="desktop_computer_digital_custom_error"
                                    ><i
                                        id="desktop_computer_digital-error"
                                        class="error"
                                        style="display: none"
                                    ></i
                                ></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label class="wpcf7-list-item-label"
                                >Tablet or smart phone</label
                            >
                        </div>
                        <div class="col-md-6">
                            <span class="wpcf7-form-control-wrap pte_title">
                                <span
                                    class="d-flex wpcf7-form-control wpcf7-radio"
                                >
                                    <span class="wpcf7-list-item first">
                                        <input
                                            class="input_radio valid"
                                            type="radio"
                                            name="tablet_digital"
                                            id="tablet_digital_yes"
                                            value="Yes"
                                            aria-required="true"
                                            aria-describedby="tablet_digital-error"
                                            aria-invalid="false"
                                        />
                                        <span
                                            class="wpcf7-list-item-label text_radio"
                                            >Yes</span
                                        >
                                    </span>
                                    <span class="wpcf7-list-item last">
                                        <input
                                            class="input_radio valid"
                                            type="radio"
                                            name="tablet_digital"
                                            id="tablet_digital_no"
                                            value="No"
                                        />
                                        <span
                                            class="wpcf7-list-item-label text_radio"
                                            >No</span
                                        >
                                    </span>
                                </span>
                            </span>
                            <div class="col-md-12">
                                <span id="tablet_digital_custom_error"
                                    ><i
                                        id="tablet_digital-error"
                                        class="error"
                                        style="display: none"
                                    ></i
                                ></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label class="wpcf7-list-item-label"
                                >Internet</label
                            >
                        </div>
                        <div class="col-md-6">
                            <span class="wpcf7-form-control-wrap pte_title">
                                <span
                                    class="d-flex wpcf7-form-control wpcf7-radio"
                                >
                                    <span class="wpcf7-list-item first">
                                        <input
                                            class="input_radio valid"
                                            type="radio"
                                            name="internet_digital"
                                            id="internet_digital_yes"
                                            value="Yes"
                                            aria-required="true"
                                            aria-describedby="internet_digital-error"
                                            aria-invalid="false"
                                        />
                                        <span
                                            class="wpcf7-list-item-label text_radio"
                                            >Yes</span
                                        >
                                    </span>
                                    <span class="wpcf7-list-item last">
                                        <input
                                            class="input_radio valid"
                                            type="radio"
                                            name="internet_digital"
                                            id="internet_digital_no"
                                            value="No"
                                        />
                                        <span
                                            class="wpcf7-list-item-label text_radio"
                                            >No</span
                                        >
                                    </span>
                                </span>
                            </span>
                            <div class="col-md-12">
                                <span id="internet_digital_custom_error"
                                    ><i
                                        id="internet_digital-error"
                                        class="error"
                                        style="display: none"
                                    ></i
                                ></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label class="wpcf7-list-item-label"
                                >Microsoft Word</label
                            >
                        </div>
                        <div class="col-md-6">
                            <span class="wpcf7-form-control-wrap pte_title">
                                <span
                                    class="d-flex wpcf7-form-control wpcf7-radio"
                                >
                                    <span class="wpcf7-list-item first">
                                        <input
                                            class="input_radio valid"
                                            type="radio"
                                            name="word_digital"
                                            id="word_digital_yes"
                                            value="Yes"
                                            aria-required="true"
                                            aria-describedby="word_digital-error"
                                            aria-invalid="false"
                                        />
                                        <span
                                            class="wpcf7-list-item-label text_radio"
                                            >Yes</span
                                        >
                                    </span>
                                    <span class="wpcf7-list-item last">
                                        <input
                                            class="input_radio valid"
                                            type="radio"
                                            name="word_digital"
                                            id="word_digital_no"
                                            value="No"
                                        />
                                        <span
                                            class="wpcf7-list-item-label text_radio"
                                            >No</span
                                        >
                                    </span>
                                </span>
                            </span>
                            <div class="col-md-12">
                                <span id="word_digital_custom_error"
                                    ><i
                                        id="word_digital-error"
                                        class="error"
                                        style="display: none"
                                    ></i
                                ></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label class="wpcf7-list-item-label"
                                >Microsoft Excel</label
                            >
                        </div>
                        <div class="col-md-6">
                            <span class="wpcf7-form-control-wrap pte_title">
                                <span
                                    class="d-flex wpcf7-form-control wpcf7-radio"
                                >
                                    <span class="wpcf7-list-item first">
                                        <input
                                            class="input_radio valid"
                                            type="radio"
                                            name="excel_digital"
                                            id="excel_digital_yes"
                                            value="Yes"
                                            aria-required="true"
                                            aria-describedby="excel_digital-error"
                                            aria-invalid="false"
                                        />
                                        <span
                                            class="wpcf7-list-item-label text_radio"
                                            >Yes</span
                                        >
                                    </span>
                                    <span class="wpcf7-list-item last">
                                        <input
                                            class="input_radio valid"
                                            type="radio"
                                            name="excel_digital"
                                            id="excel_digital_no"
                                            value="No"
                                        />
                                        <span
                                            class="wpcf7-list-item-label text_radio"
                                            >No</span
                                        >
                                    </span>
                                </span>
                            </span>
                            <div class="col-md-12">
                                <span id="excel_digital_custom_error"
                                    ><i
                                        id="excel_digital-error"
                                        class="error"
                                        style="display: none"
                                    ></i
                                ></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label class="wpcf7-list-item-label"
                                >Microsoft Power Point</label
                            >
                        </div>
                        <div class="col-md-6">
                            <span class="wpcf7-form-control-wrap pte_title">
                                <span
                                    class="d-flex wpcf7-form-control wpcf7-radio"
                                >
                                    <span class="wpcf7-list-item first">
                                        <input
                                            class="input_radio valid"
                                            type="radio"
                                            name="powerpoint_digital"
                                            id="powerpoint_digital_yes"
                                            value="Yes"
                                            aria-required="true"
                                            aria-describedby="powerpoint_digital-error"
                                            aria-invalid="false"
                                        />
                                        <span
                                            class="wpcf7-list-item-label text_radio"
                                            >Yes</span
                                        >
                                    </span>
                                    <span class="wpcf7-list-item last">
                                        <input
                                            class="input_radio valid"
                                            type="radio"
                                            name="powerpoint_digital"
                                            id="powerpoint_digital_no"
                                            value="No"
                                        />
                                        <span
                                            class="wpcf7-list-item-label text_radio"
                                            >No</span
                                        >
                                    </span>
                                </span>
                            </span>
                            <div class="col-md-12">
                                <span id="powerpoint_digital_custom_error"
                                    ><i
                                        id="powerpoint_digital-error"
                                        class="error"
                                        style="display: none"
                                    ></i
                                ></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label class="wpcf7-list-item-label">Email</label>
                        </div>
                        <div class="col-md-6">
                            <span class="wpcf7-form-control-wrap pte_title">
                                <span
                                    class="d-flex wpcf7-form-control wpcf7-radio"
                                >
                                    <span class="wpcf7-list-item first">
                                        <input
                                            class="input_radio valid"
                                            type="radio"
                                            name="email_digital"
                                            id="email_digital_yes"
                                            value="Yes"
                                            aria-required="true"
                                            aria-describedby="email_digital-error"
                                            aria-invalid="false"
                                        />
                                        <span
                                            class="wpcf7-list-item-label text_radio"
                                            >Yes</span
                                        >
                                    </span>
                                    <span class="wpcf7-list-item last">
                                        <input
                                            class="input_radio valid"
                                            type="radio"
                                            name="email_digital"
                                            id="email_digital_no"
                                            value="No"
                                        />
                                        <span
                                            class="wpcf7-list-item-label text_radio"
                                            >No</span
                                        >
                                    </span>
                                </span>
                            </span>
                            <div class="col-md-12">
                                <span id="email_digital_custom_error"
                                    ><i
                                        id="email_digital-error"
                                        class="error"
                                        style="display: none"
                                    ></i
                                ></span>
                            </div>
                        </div>
                    </div>
                    <br />
                    <div class="row">
                        <div class="col-md-4">
                            <b
                                >Select your level of capability for each
                                digital technology</b
                            >
                        </div>
                        <div class="col-md-8 row">
                            <div class="col-md-3">No capacity</div>
                            <div class="col-md-3">Limited capacity</div>
                            <div class="col-md-3">Capable</div>
                            <div class="col-md-3">Advanced</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label class="wpcf7-list-item-label"
                                >Desktop or notebook computer</label
                            >
                        </div>
                        <div class="col-md-8">
                            <span class="d-flex wpcf7-form-control wpcf7-radio">
                                <div class="col-md-3">
                                    <span class="wpcf7-list-item first">
                                        <input
                                            class="input_radio"
                                            type="radio"
                                            name="desktop_computer_level"
                                            id="desktop_computer_level_1"
                                            value="No capacity"
                                        />
                                    </span>
                                </div>
                                <div class="col-md-3">
                                    <span class="wpcf7-list-item last">
                                        <input
                                            class="input_radio"
                                            type="radio"
                                            name="desktop_computer_level"
                                            id="desktop_computer_level_2"
                                            value="Limited capacity"
                                        />
                                    </span>
                                </div>
                                <div class="col-md-3">
                                    <span class="wpcf7-list-item last">
                                        <input
                                            class="input_radio"
                                            type="radio"
                                            name="desktop_computer_level"
                                            id="desktop_computer_level_3"
                                            value="Capable"
                                        />
                                    </span>
                                </div>
                                <div class="col-md-3">
                                    <span class="wpcf7-list-item last">
                                        <input
                                            class="input_radio"
                                            type="radio"
                                            name="desktop_computer_level"
                                            id="desktop_computer_level_4"
                                            value="Advanced"
                                        />
                                    </span>
                                </div>
                            </span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label class="wpcf7-list-item-label"
                                >Tablet or smart phone</label
                            >
                        </div>
                        <div class="col-md-8">
                            <span class="d-flex wpcf7-form-control wpcf7-radio">
                                <div class="col-md-3">
                                    <span class="wpcf7-list-item first">
                                        <input
                                            class="input_radio"
                                            type="radio"
                                            name="tablet_level"
                                            id="tablet_level_1"
                                            value="No capacity"
                                        />
                                    </span>
                                </div>
                                <div class="col-md-3">
                                    <span class="wpcf7-list-item last">
                                        <input
                                            class="input_radio"
                                            type="radio"
                                            name="tablet_level"
                                            id="tablet_level_2"
                                            value="Limited capacity"
                                        />
                                    </span>
                                </div>
                                <div class="col-md-3">
                                    <span class="wpcf7-list-item last">
                                        <input
                                            class="input_radio"
                                            type="radio"
                                            name="tablet_level"
                                            id="tablet_level_3"
                                            value="Capable"
                                        />
                                    </span>
                                </div>
                                <div class="col-md-3">
                                    <span class="wpcf7-list-item last">
                                        <input
                                            class="input_radio"
                                            type="radio"
                                            name="tablet_level"
                                            id="tablet_level_4"
                                            value="Advanced"
                                        />
                                    </span>
                                </div>
                            </span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label class="wpcf7-list-item-label"
                                >Internet</label
                            >
                        </div>
                        <div class="col-md-8">
                            <span class="d-flex wpcf7-form-control wpcf7-radio">
                                <div class="col-md-3">
                                    <span class="wpcf7-list-item first">
                                        <input
                                            class="input_radio"
                                            type="radio"
                                            name="internet_level"
                                            id="internet_level_1"
                                            value="No capacity"
                                        />
                                    </span>
                                </div>
                                <div class="col-md-3">
                                    <span class="wpcf7-list-item last">
                                        <input
                                            class="input_radio"
                                            type="radio"
                                            name="internet_level"
                                            id="internet_level_2"
                                            value="Limited capacity"
                                        />
                                    </span>
                                </div>
                                <div class="col-md-3">
                                    <span class="wpcf7-list-item last">
                                        <input
                                            class="input_radio"
                                            type="radio"
                                            name="internet_level"
                                            id="internet_level_3"
                                            value="Capable"
                                        />
                                    </span>
                                </div>
                                <div class="col-md-3">
                                    <span class="wpcf7-list-item last">
                                        <input
                                            class="input_radio"
                                            type="radio"
                                            name="internet_level"
                                            id="internet_level_4"
                                            value="Advanced"
                                        />
                                    </span>
                                </div>
                            </span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label class="wpcf7-list-item-label"
                                >Microsoft Word</label
                            >
                        </div>
                        <div class="col-md-8">
                            <span class="d-flex wpcf7-form-control wpcf7-radio">
                                <div class="col-md-3">
                                    <span class="wpcf7-list-item first">
                                        <input
                                            class="input_radio"
                                            type="radio"
                                            name="word_level"
                                            id="word_level_1"
                                            value="No capacity"
                                        />
                                    </span>
                                </div>
                                <div class="col-md-3">
                                    <span class="wpcf7-list-item last">
                                        <input
                                            class="input_radio"
                                            type="radio"
                                            name="word_level"
                                            id="word_level_2"
                                            value="Limited capacity"
                                        />
                                    </span>
                                </div>
                                <div class="col-md-3">
                                    <span class="wpcf7-list-item last">
                                        <input
                                            class="input_radio"
                                            type="radio"
                                            name="word_level"
                                            id="word_level_3"
                                            value="Capable"
                                        />
                                    </span>
                                </div>
                                <div class="col-md-3">
                                    <span class="wpcf7-list-item last">
                                        <input
                                            class="input_radio"
                                            type="radio"
                                            name="word_level"
                                            id="word_level_4"
                                            value="Advanced"
                                        />
                                    </span>
                                </div>
                            </span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label class="wpcf7-list-item-label"
                                >Microsoft Excel</label
                            >
                        </div>
                        <div class="col-md-8">
                            <span class="d-flex wpcf7-form-control wpcf7-radio">
                                <div class="col-md-3">
                                    <span class="wpcf7-list-item first">
                                        <input
                                            class="input_radio"
                                            type="radio"
                                            name="excel_level"
                                            id="excel_level_1"
                                            value="No capacity"
                                        />
                                    </span>
                                </div>
                                <div class="col-md-3">
                                    <span class="wpcf7-list-item last">
                                        <input
                                            class="input_radio"
                                            type="radio"
                                            name="excel_level"
                                            id="excel_level_2"
                                            value="Limited capacity"
                                        />
                                    </span>
                                </div>
                                <div class="col-md-3">
                                    <span class="wpcf7-list-item last">
                                        <input
                                            class="input_radio"
                                            type="radio"
                                            name="excel_level"
                                            id="excel_level_3"
                                            value="Capable"
                                        />
                                    </span>
                                </div>
                                <div class="col-md-3">
                                    <span class="wpcf7-list-item last">
                                        <input
                                            class="input_radio"
                                            type="radio"
                                            name="excel_level"
                                            id="excel_level_4"
                                            value="Advanced"
                                        />
                                    </span>
                                </div>
                            </span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label class="wpcf7-list-item-label"
                                >Microsoft Power Point</label
                            >
                        </div>
                        <div class="col-md-8">
                            <span class="d-flex wpcf7-form-control wpcf7-radio">
                                <div class="col-md-3">
                                    <span class="wpcf7-list-item first">
                                        <input
                                            class="input_radio"
                                            type="radio"
                                            name="power_point_level"
                                            id="power_point_level_1"
                                            value="No capacity"
                                        />
                                    </span>
                                </div>
                                <div class="col-md-3">
                                    <span class="wpcf7-list-item last">
                                        <input
                                            class="input_radio"
                                            type="radio"
                                            name="power_point_level"
                                            id="power_point_level_2"
                                            value="Limited capacity"
                                        />
                                    </span>
                                </div>
                                <div class="col-md-3">
                                    <span class="wpcf7-list-item last">
                                        <input
                                            class="input_radio"
                                            type="radio"
                                            name="power_point_level"
                                            id="power_point_level_3"
                                            value="Capable"
                                        />
                                    </span>
                                </div>
                                <div class="col-md-3">
                                    <span class="wpcf7-list-item last">
                                        <input
                                            class="input_radio"
                                            type="radio"
                                            name="power_point_level"
                                            id="power_point_level_4"
                                            value="Advanced"
                                        />
                                    </span>
                                </div>
                            </span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label class="wpcf7-list-item-label">Email</label>
                        </div>
                        <div class="col-md-8">
                            <span class="d-flex wpcf7-form-control wpcf7-radio">
                                <div class="col-md-3">
                                    <span class="wpcf7-list-item first">
                                        <input
                                            class="input_radio"
                                            type="radio"
                                            name="email_level"
                                            id="email_level_1"
                                            value="No capacity"
                                        />
                                    </span>
                                </div>
                                <div class="col-md-3">
                                    <span class="wpcf7-list-item last">
                                        <input
                                            class="input_radio"
                                            type="radio"
                                            name="email_level"
                                            id="email_level_2"
                                            value="Limited capacity"
                                        />
                                    </span>
                                </div>
                                <div class="col-md-3">
                                    <span class="wpcf7-list-item last">
                                        <input
                                            class="input_radio"
                                            type="radio"
                                            name="email_level"
                                            id="email_level_3"
                                            value="Capable"
                                        />
                                    </span>
                                </div>
                                <div class="col-md-3">
                                    <span class="wpcf7-list-item last">
                                        <input
                                            class="input_radio"
                                            type="radio"
                                            name="email_level"
                                            id="email_level_4"
                                            value="Advanced"
                                        />
                                    </span>
                                </div>
                            </span>
                        </div>
                    </div>
                    <br />
                    <div class="row">
                        <div class="col-md-8">
                            <label class="wpcf7-list-item-label"
                                >Do you feel you face any challenges or barriers
                                to physical access of digital technology that
                                will affect your learning?</label
                            >
                        </div>
                        <div class="col-md-4">
                            <span class="d-flex wpcf7-form-control wpcf7-radio">
                                <div class="col-md-6">
                                    <span class="wpcf7-list-item first">
                                        <input
                                            class="input_radio"
                                            type="radio"
                                            name="digital_access_challenge"
                                            id="digital_access_challenge_yes"
                                            value="Yes"
                                        /><span
                                            class="wpcf7-list-item-label text_radio"
                                            >Yes</span
                                        >
                                    </span>
                                </div>
                                <div class="col-md-6">
                                    <span class="wpcf7-list-item last">
                                        <input
                                            class="input_radio"
                                            type="radio"
                                            name="digital_access_challenge"
                                            id="digital_access_challenge_no"
                                            value="No"
                                        /><span
                                            class="wpcf7-list-item-label text_radio"
                                            >No</span
                                        >
                                    </span>
                                </div>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 m_t_10">
                        <button
                            type="button"
                            value="Next"
                            class="file_btn btn-xs-inline back3 wpcf7-form-control wpcf7-submit pull-left back_button"
                        >
                            <span class="fa fa-arrow-left"></span> Back
                        </button>
                        <button
                            type="button"
                            value="Next"
                            class="file_btn btn-xs-inline open3 wpcf7-form-control wpcf7-submit pull-right next_button"
                        >
                            Save &amp; Next
                            <span class="fa fa-arrow-right"></span>
                        </button>
                        <button
                            type="button"
                            class="file_btn btn-xs-inline wpcf7-form-control wpcf7-submit pull-right save_data next_button"
                            onclick="save_form();"
                            style="margin-right: 10px"
                        >
                            <span class="fa fa-floppy-o"></span> Save
                        </button>
                    </div>
                </div>
            </div> -->
            <!-- Section 3 -->

            <!-- Section 4 -->
            <!-- <div id="sf4" class="frm" style="display: none">
                <div class="unique_student_identifier">
                    <h5 class="form_header_title">
                        Victorian Student Number (VSN) *to be completed by all
                        students 24 years old or younger
                    </h5>
                    <div class="row">
                        <div class="col-md-6">
                            <b>Enter your Victorian Student Number</b>
                        </div>
                        <div class="col-md-6">
                            <span class="wpcf7-form-control-wrap">
                                <input
                                    type="text"
                                    name="vsn_student_number"
                                    id="vsn_student_number"
                                    value=""
                                    size="40"
                                    class="input_text wpcf7-form-control wpcf7-text valid"
                                    placeholder="Write your VSN here"
                                />
                            </span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            Have you attended any Victorian school since 2009 or
                            had any training with a Vocational Education and
                            Training (VET) registered training organization
                            provider or an Adult and Community Education
                            provider in Victoria since 2011?
                        </div>
                    </div>
                    <div class="row" id="vsn">
                        <div class="col-md-12 d-flex">
                            <span class="wpcf7-list-item first">
                                <input
                                    class="input_radio"
                                    type="radio"
                                    name="vsn"
                                    id="vsn_Yes"
                                    value="Yes"
                                />
                                <span class="wpcf7-list-item-label text_radio"
                                    >Yes - I have attended a Victorian school
                                    since 2009</span
                                >
                            </span>
                        </div>
                        <div class="col-md-12 d-flex">
                            <span class="wpcf7-list-item first">
                                <input
                                    class="input_radio"
                                    type="radio"
                                    name="vsn"
                                    id="vsn_No"
                                    value="No"
                                />
                                <span class="wpcf7-list-item-label text_radio"
                                    >No - I have not attended a Victorian school
                                    since 2009 or a TAFE or VET training
                                    provider since the beginning of 2011 – Go to
                                    the next section (USI)</span
                                >
                            </span>
                        </div>
                        <div class="col-md-12 m_t_20">
                            <div class="row vsn_toggle" style="display: none">
                                <div class="col-md-6">
                                    <b
                                        >If yes, please list most recent
                                        Victorian school attended</b
                                    >
                                </div>
                                <div class="col-md-6">
                                    <span class="wpcf7-form-control-wrap">
                                        <input
                                            name="vsn_if_yes"
                                            id="vsn_if_yes"
                                            value=""
                                            size="40"
                                            class="input_text wpcf7-form-control wpcf7-text"
                                            placeholder="Recent victorian school attended "
                                            type="text"
                                        />
                                    </span>
                                </div>
                                <div class="col-md-12">
                                    <span class="wpcf7-list-item first">
                                        <input
                                            class="input_checkbox"
                                            type="checkbox"
                                            name="vsn_training"
                                            id="vsn_training"
                                            value="Yes"
                                        />
                                        <span
                                            class="text_checkbox wpcf7-list-item-label"
                                            >Yes - I have participated in
                                            training at a TAFE or other training
                                            organization since the beginning of
                                            2011</span
                                        >
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="unique_student_identifier">
                    <h5 class="form_header_title">
                        Unique Student Identifier (USI)
                    </h5>
                    <div class="row">
                        <div class="col-md-12">
                            <p>
                                You may already have a USI if you have done any
                                nationally recognised training, which could
                                include training at work, completing a first aid
                                course or RSA (Responsible Service of Alcohol)
                                course, getting a white card, or studying at a
                                TAFE or training organisation. It is important
                                that you try to find out whether you already
                                have a USI before attempting to create a new
                                one. You should not have more than one USI. To
                                check if you already have a USI, use the
                                ‘Forgotten USI’ link on the USI website at
                                https://www.usi.gov.au/faqs/i-have-forgotten-my-usi/.
                                <br />
                                From 1 January 2015, OIC can be prevented from
                                issuing you with a nationally recognised VET
                                qualification or statement of attainment when
                                you complete your course if you do not have a
                                Unique Student Identifier (USI). In addition, we
                                are required to include your USI in the data we
                                submit to NCVER. If you have not yet obtained a
                                USI you can apply for it directly at
                                https://www.usi.gov.au/students/create-your-usi
                                on computer or mobile device.
                            </p>
                        </div>
                    </div>
                    <div class="row" id="usi">
                        <div class="d-flex col-md-12">
                            <span class="wpcf7-list-item first">
                                <input
                                    class="input_radio valid"
                                    type="radio"
                                    name="usi"
                                    id="usi_Yes"
                                    value="Yes"
                                    aria-required="true"
                                    aria-describedby="usi-error"
                                    aria-invalid="false"
                                /><i
                                    id="usi-error"
                                    class="error"
                                    style="display: none"
                                ></i>
                                <span class="wpcf7-list-item-label text_radio"
                                    >Yes - I already have a USI</span
                                >
                            </span>
                        </div>
                        <div class="d-flex col-md-12">
                            <span class="wpcf7-list-item first">
                                <input
                                    class="input_radio valid"
                                    type="radio"
                                    name="usi"
                                    id="uso_No"
                                    value="No"
                                    aria-invalid="false"
                                />
                                <span class="wpcf7-list-item-label text_radio"
                                    >*No - I do not have a USI (Please fill USI
                                    Authorisation Form)</span
                                >
                            </span>
                        </div>
                        <div class="col-md-12 m_t_20">
                            <div class="row usi_toggle" style="display: none">
                                <div class="col-md-6">
                                    <b>If yes, enter your USI:</b>
                                </div>
                                <div class="col-md-6">
                                    <span class="wpcf7-form-control-wrap">
                                        <input
                                            name="usi_if_yes"
                                            id="usi_if_yes"
                                            value=""
                                            size="40"
                                            class="input_text wpcf7-form-control wpcf7-text error"
                                            placeholder="Enter USI"
                                            type="text"
                                            aria-required="true"
                                            aria-describedby="usi_if_yes-error"
                                            disabled="disabled"
                                        /><i
                                            id="usi_if_yes-error"
                                            class="error"
                                            style="display: none"
                                        ></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div
                            class="col-md-12 usi_no_toggle"
                            style="display: block"
                        >
                            <span class="d-flex wpcf7-list-item first">
                                <input
                                    class="input_checkbox valid"
                                    type="checkbox"
                                    name="usi_agreement"
                                    value="1"
                                    aria-required="true"
                                    aria-describedby="usi_agreement-error"
                                    aria-invalid="false"
                                />
                                <span
                                    class="text_checkbox wpcf7-list-item-label"
                                    >I would like IBM College to apply on my
                                    behalf.</span
                                >
                            </span>
                            <div
                                id="usi_agreement_custom_error"
                                class="select_box_error_fix col-md-12"
                            >
                                <i
                                    id="usi_agreement-error"
                                    class="error"
                                    style="display: none"
                                ></i>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            If you would like IBM College to apply for a USI on
                            your behalf you must authorise us to do so. In such
                            case, please complete the Unique Student Identifier
                            (USI) Supplement and attach it to this form.
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 m_t_10">
                        <button
                            type="button"
                            value="Next"
                            class="file_btn btn-xs-inline back4 wpcf7-form-control wpcf7-submit pull-left back_button"
                        >
                            <span class="fa fa-arrow-left"></span> Back
                        </button>
                        <button
                            type="button"
                            value="Next"
                            class="file_btn btn-xs-inline open4 next_button wpcf7-form-control wpcf7-submit pull-right"
                        >
                            Save &amp; Next<span
                                class="fa fa-arrow-right"
                            ></span>
                        </button>
                        <button
                            type="button"
                            class="file_btn btn-xs-inline next_button wpcf7-form-control wpcf7-submit pull-right save_data"
                            onclick="save_form();"
                            style="margin-right: 10px"
                        >
                            <span class="fa fa-floppy-o"></span> Save
                        </button>
                    </div>
                </div>
            </div> -->
            <!-- Section 4 -->

            <!-- Section 5 -->
            
        </form>
        <p class="ab_app_note">
            Note: If you are facing any issues in filling up the Domestic
            Student Application Form, then open it via Google Chrome or Mozilla
            Firefox Browser
        </p>
    </div>
</template>

<script>
export default {
    data() {
        return {
            this_file_1: null,
            this_file_2: null,
            this_file_3: null,
            this_file_4: null,
            this_file_5: null,
            this_file_6: null,
            this_file_7: null,
            this_file_8: null,
            this_file_8: null,
            this_file_9: "null",
            passport_data:""
            // file_name:""
            // fileData:[]
            // passport_ref:"",
            // driver_license:"",
            // license:"",
            // firearm_license:"",
            // photo_certificate_of_competency:"",
            // emp_id_card:"",
            // govt_issued_id_card:"",
            // photo_id_card_tertiary:"",
            // victoria_proof_age_card:""
        };
    },

    methods: {
       
        // previewFiles(event) {
        //     // let fileData = new Formdata()
        //     this.file = event.target.files;
        //     localStorage.setItem('selected_files',this.file)
        //     // this.$emit('selected_files',this.file)
        //     // console.log(this.file)
        //     // this.driver_license = this.$refs.driver_license.files[0];
        //     // this.license = this.$refs.license.files[0];
        //     // this.firearm_license = this.$refs.firearm_license.files[0];
        //     // this.photo_certificate_of_competency = this.$refs.photo_certificate_of_competency.files[0];
        //     // this.emp_id_card = this.$refs.emp_id_card.files[0];
        //     // this.govt_issued_id_card = this.$refs.govt_issued_id_card.files[0];
        //     // this.photo_id_card_tertiary = this.$refs.photo_id_card_tertiary.files[0];
        //     // this.victoria_proof_age_card = this.$refs.victoria_proof_age_card.files[0];
        //     // console.log(this.passport)
        //     // const fileData = new FormData();
        //     // console.log(event.target.files[0]);
        //     // exit()

        //     // for (const key of fileData.keys()) {
        //     //     if (key !== event.target.name) {
        //     //         fileData.append(event.target.name, event.target.files[0]);
        //     //     } else {
        //     //         fileData.delete(event.target.name);
        //     //         fileData.append(event.target.name, event.target.files);
        //     //     }

                
        //     // }
        //     // this.$set(this.$data.this_file_1, event.target.name);

        //     // fileData.append(`${event.target.name}`, event.target.files);

        //     // for (const key of fileData) {
        //     //     // if (key !== event.target.name) {
        //     //     //     fileData.append(event.target.name, event.target.files);
        //     //     // } else {
        //     //     //     fileData.delete(event.target.name);
        //     //     //     fileData.append(event.target.name, event.target.files);
        //     //     // }

        //     //     console.log(key);
        //     // }
        // },
    },
};
</script>
