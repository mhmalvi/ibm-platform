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

        <form
            id="domestic_student"
            class="pte_form international_student sigPad dropzone"
            method="post"
            action=""
            enctype="multipart/form-data"
            novalidate="novalidate"
        >
            <div id="sf5" class="frm" style="padding-top: 1.5rem">
                <div
                    class="application_checklist port_melbourne_checklist"
                    id="port_melbourne_checklist"
                    style="display: block"
                >
                    <div class="form_header_title">
                        Identification documents
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <p>
                                The documents listed below are examples of
                                documents that can be used as proof of identity.
                                Other documents may be used as long as the
                                document as a minimum provides proof of the
                                participant’s full name as well as a photo:
                            </p>
                            <br />
                            <br />
                            <h5>ID Form:</h5>
                        </div>
                        <div class="col-md-12 my-2 row">
                            <div class="col-md-6">
                                <span class="wpcf7-list-item first">
                                    <span class="wpcf7-list-item-label">
                                        <span
                                            style="
                                                font-size: 14px;
                                                font-weight: 500;
                                            "
                                        >
                                            Passport
                                        </span>
                                        <br />
                                        <p class="photoid">
                                            (Australian Passport current or
                                            expired within the last two years,
                                            but not cancelled, International
                                            Passport must be current)
                                        </p></span
                                    >
                                </span>
                            </div>
                            <div class="col-md-4">
                                <input
                                    type="file"
                                    name="upload[0]"
                                    ref="this_file_1"
                                    class="file_btn visa"
                                    id="upload0"
                                    accept="image/gif, image/jpg, image/png, application/pdf, application/doc, application/docx"
                                    @change="previewFiles"
                                />
                                <!-- <input type="text" v-model="passport_data" /> -->
                                <input
                                    type="hidden"
                                    name="upload_file_name[0]"
                                    class="upload0_file"
                                    value=""
                                />
                                <input
                                    type="hidden"
                                    id="this_file_0"
                                    name="upload_file_checklist[0]"
                                    class="upload0_file_name"
                                    value="Passport (Australian Passport current or expired within the last two years, but not cancelled, International Passport must be current)"
                                />
                                <p class="error">
                                    Maximum size: 2 MB and File Type: PDF, JPG,
                                    JPEG, PNG &amp; TIFF.
                                </p>
                            </div>
                            <div class="col-md-2" style="text-align: right">
                                <div
                                    id="upload0_custom_error"
                                    class="select_box_error_fix pull-right m_t_10"
                                ></div>
                            </div>
                        </div>
                        <div class="col-md-12 my-2 row">
                            <div class="col-md-6">
                                <span class="wpcf7-list-item first">
                                    <span class="wpcf7-list-item-label">
                                        <span
                                            style="
                                                font-size: 14px;
                                                font-weight: 500;
                                            "
                                        >
                                            Driver’s Licence
                                        </span>
                                        <br />
                                        <p class="photoid">
                                            Australian with photo, must be
                                            current. Driver’s Learners Permit –
                                            Australian with photo, must be
                                            current.
                                        </p></span
                                    >
                                </span>
                            </div>
                            <!-- {{driver_licence_data}} -->
                            <div class="col-md-4">
                                <input
                                    type="file"
                                    accept="image/gif, image/jpg, image/png, application/pdf, application/doc, application/docx"
                                    class="file_btn visa"
                                    id="upload1"
                                    @change="driver_licence"
                                />

                                <!-- <input
                                    type="text"
                                    v-model="driver_licence_data"
                                /> -->
                                <input
                                    type="hidden"
                                    name="upload_file_name[1]"
                                    class="upload1_file"
                                    value=""
                                />
                                <input
                                    type="hidden"
                                    id="this_file_1"
                                    name="upload_file_checklist[1]"
                                    class="upload1_file_name"
                                    value="Driver’s Licence – Australian with photo, must be current. Driver’s Learners Permit – Australian with photo, must be current."
                                />
                                <p class="error">
                                    Maximum size: 2 MB and File Type: PDF, JPG,
                                    JPEG, PNG &amp; TIFF.
                                </p>
                            </div>
                            <div class="col-md-2" style="text-align: right">
                                <div
                                    id="upload1_custom_error"
                                    class="select_box_error_fix pull-right m_t_10"
                                ></div>
                            </div>
                        </div>
                        <div class="col-md-12 my-2 row">
                            <div class="col-md-6">
                                <span class="wpcf7-list-item first">
                                    <span class="wpcf7-list-item-label">
                                        <span
                                            style="
                                                font-size: 14px;
                                                font-weight: 500;
                                            "
                                        >
                                            Boat Operator’s Licence
                                        </span>
                                        <br />
                                        <p class="photoid">
                                            Australian with photo, must be
                                            current.
                                        </p></span
                                    >
                                </span>
                            </div>
                            <div class="col-md-4">
                                <input
                                    type="file"
                                    accept="image/gif, image/jpg, image/png, application/pdf, application/doc, application/docx"
                                    name="upload_file_name2"
                                    ref="this_file_3()"
                                    class="file_btn visa"
                                    id="upload2"
                                    @change="boat_licence"
                                />
                                <!-- <input
                                    type="text"
                                    v-model="boat_licence_data"
                                /> -->
                                <input
                                    type="hidden"
                                    name="upload_file_name[2]"
                                    class="upload2_file"
                                    value=""
                                />
                                <input
                                    type="hidden"
                                    id="this_file_2"
                                    name="upload_file_checklist[2]"
                                    class="upload2_file_name"
                                    value="Boat Operator’s Licence – Australian with photo, must be current."
                                />
                                <p class="error">
                                    Maximum size: 2 MB and File Type: PDF, JPG,
                                    JPEG, PNG &amp; TIFF.
                                </p>
                            </div>
                            <div class="col-md-2" style="text-align: right">
                                <div
                                    id="upload2_custom_error"
                                    class="select_box_error_fix pull-right m_t_10"
                                ></div>
                            </div>
                        </div>
                        <div class="col-md-12 my-2 row">
                            <div class="col-md-6">
                                <span class="wpcf7-list-item first">
                                    <span class="wpcf7-list-item-label">
                                        <span
                                            style="
                                                font-size: 14px;
                                                font-weight: 500;
                                            "
                                        >
                                            Firearm Licence
                                        </span>
                                        <br />
                                        <p class="photoid">
                                            Victorian with photo, must be
                                            current. (Can accept interstate
                                            Firearms Licence as long as it
                                            contains a photo and is current)
                                        </p></span
                                    >
                                </span>
                            </div>
                            <div class="col-md-4">
                                <input
                                    type="file"
                                    accept="image/gif, image/jpg, image/png, application/pdf, application/doc, application/docx"
                                    name="upload_file_name3"
                                    ref="this_file_4()"
                                    class="file_btn visa"
                                    id="upload3"
                                    @change="firearm_licence"
                                />
                                <!-- <input
                                    type="text"
                                    v-model="firearm_licence_data"
                                /> -->
                                <input
                                    type="hidden"
                                    name="upload_file_name[3]"
                                    class="upload3_file"
                                    value=""
                                />
                                <input
                                    type="hidden"
                                    id="this_file_3"
                                    name="upload_file_checklist[3]"
                                    class="upload3_file_name"
                                    value="Firearm Licence – Victorian with photo, must be current. (Can accept interstate Firearms Licence as long as it contains a photo and is current)"
                                />
                                <p class="error">
                                    Maximum size: 2 MB and File Type: PDF, JPG,
                                    JPEG, PNG &amp; TIFF.
                                </p>
                            </div>
                            <div class="col-md-2" style="text-align: right">
                                <div
                                    id="upload3_custom_error"
                                    class="select_box_error_fix pull-right m_t_10"
                                ></div>
                            </div>
                        </div>
                        <div class="col-md-12 my-2 row">
                            <div class="col-md-6">
                                <span class="wpcf7-list-item first d-flex">
                                    <span class="wpcf7-list-item-label">
                                        <span
                                            style="
                                                font-size: 14px;
                                                font-weight: 500;
                                            "
                                        >
                                            Licence to Perform High Risk Work or
                                            equivalent photo certificate of
                                            competency
                                        </span>
                                        <br />
                                        <p style="margin-left: 15px">
                                            It should be current, not expired.
                                        </p></span
                                    >
                                </span>
                            </div>
                            <div class="col-md-4">
                                <input
                                    type="file"
                                    accept="image/gif, image/jpg, image/png, application/pdf, application/doc, application/docx"
                                    name="upload_file_name4"
                                    ref="this_file_5()"
                                    class="file_btn visa"
                                    id="upload4"
                                    @change="certificate_of_competency"
                                />
                                <!-- <input
                                    type="text"
                                    v-model="certificate_of_competency_data"
                                /> -->
                                <input
                                    type="hidden"
                                    name="upload_file_name[4]"
                                    class="upload4_file"
                                    value=""
                                />
                                <input
                                    type="hidden"
                                    id="this_file_4"
                                    name="upload_file_checklist[4]"
                                    class="upload4_file_name"
                                    value="Licence to Perform High Risk Work or equivalent photo certificate of competency that is current, not expired."
                                />
                                <p class="error">
                                    Maximum size: 2 MB and File Type: PDF, JPG,
                                    JPEG, PNG &amp; TIFF.
                                </p>
                            </div>
                            <div class="col-md-2" style="text-align: right">
                                <div
                                    id="upload4_custom_error"
                                    class="select_box_error_fix pull-right m_t_10"
                                ></div>
                            </div>
                        </div>
                        <div class="col-md-12 my-2 row">
                            <div class="col-md-6">
                                <span
                                    class="wpcf7-list-item first d-flex align-items-center"
                                >
                                    <span class="wpcf7-list-item-label">
                                        <label
                                            for="id_card"
                                            style="margin-top: 0"
                                        >
                                            <span
                                                style="
                                                    font-size: 14px;
                                                    font-weight: 500;
                                                "
                                            >
                                                State, Territory or Federal
                                                Government Employee ID card with
                                                photo
                                            </span>
                                        </label>
                                        <br
                                    /></span>
                                </span>
                            </div>
                            <div class="col-md-4">
                                <input
                                    type="file"
                                    accept="image/gif, image/jpg, image/png, application/pdf, application/doc, application/docx"
                                    name="upload_file_name5"
                                    ref="this_file_6()"
                                    class="file_btn visa"
                                    id="upload5"
                                    @change="territory"
                                />
                                <!-- <input type="text" v-model="territory_data" /> -->
                                <input
                                    type="hidden"
                                    name="upload_file_name[5]"
                                    class="upload5_file"
                                    value=""
                                />
                                <input
                                    type="hidden"
                                    id="this_file_5"
                                    name="upload_file_checklist[5]"
                                    class="upload5_file_name"
                                    value="State, Territory or Federal Government Employee ID card with photo"
                                />
                                <p class="error">
                                    Maximum size: 2 MB and File Type: PDF, JPG,
                                    JPEG, PNG &amp; TIFF.
                                </p>
                            </div>
                            <div class="col-md-2" style="text-align: right">
                                <div
                                    id="upload5_custom_error"
                                    class="select_box_error_fix pull-right m_t_10"
                                ></div>
                            </div>
                        </div>
                        <div class="col-md-12 my-2 row">
                            <div class="col-md-6">
                                <span
                                    class="wpcf7-list-item first d-flex align-items-center align-items-center"
                                >
                                    <span class="wpcf7-list-item-label">
                                        <label
                                            for="australian_government_issued_id_card"
                                            style="margin-top: -10px"
                                        >
                                            <span
                                                style="
                                                    font-size: 14px;
                                                    font-weight: 500;
                                                "
                                            >
                                                Other Australian Government
                                                issued ID card with photo
                                            </span>
                                        </label>
                                        <br
                                    /></span>
                                </span>
                            </div>
                            <div class="col-md-4">
                                <input
                                    type="file"
                                    accept="image/gif, image/jpg, image/png, application/pdf, application/doc, application/docx"
                                    name="upload_file_name6"
                                    ref="this_file_7()"
                                    class="file_btn visa"
                                    id="upload6"
                                    @change="govt_issued_id_card"
                                />
                                <!-- <input
                                    type="text"
                                    v-model="govt_issued_id_card_data"
                                /> -->
                                <input
                                    type="hidden"
                                    name="upload_file_name[6]"
                                    class="upload6_file"
                                    value=""
                                />
                                <input
                                    type="hidden"
                                    id="this_file_6"
                                    name="upload_file_checklist[6]"
                                    class="upload6_file_name"
                                    value="Other Australian Government issued ID card with photo"
                                />
                                <p class="error">
                                    Maximum size: 2 MB and File Type: PDF, JPG,
                                    JPEG, PNG &amp; TIFF.
                                </p>
                            </div>
                            <div class="col-md-2" style="text-align: right">
                                <div
                                    id="upload6_custom_error"
                                    class="select_box_error_fix pull-right m_t_10"
                                ></div>
                            </div>
                        </div>
                        <div class="col-md-12 my-2 row">
                            <div class="col-md-6">
                                <span class="wpcf7-list-item first d-flex">
                                    <span
                                        class="wpcf7-list-item-label"
                                    >
                                        <label
                                            for="tertiary_education_institution"
                                            style="margin-top: 0"
                                        >
                                            <span
                                                style="
                                                    font-size: 14px;
                                                    font-weight: 500;
                                                "
                                            >
                                                Photo identity card issued by a
                                                Tertiary Education Institution
                                                must be current
                                            </span>
                                        </label>
                                        <br />
                                        <p style="margin-left: 15px">
                                            Keypass ID Card with photo, must be
                                            current
                                        </p></span
                                    >
                                </span>
                            </div>
                            <div class="col-md-4">
                                <input
                                    type="file"
                                    accept="image/gif, image/jpg, image/png, application/pdf, application/doc, application/docx"
                                    name="upload_file_name7"
                                    ref="this_file_8"
                                    class="file_btn visa"
                                    id="upload7"
                                    @change="photo_id_card"
                                />

                                <!-- <input
                                    type="text"
                                    v-model="photo_id_card_data"
                                /> -->
                                <input
                                    type="hidden"
                                    name="upload_file_name[7]"
                                    class="upload7_file"
                                    value=""
                                />
                                <input
                                    type="hidden"
                                    id="this_file_7"
                                    name="upload_file_checklist[7]"
                                    class="upload7_file_name"
                                    value="Photo identity card issued by a Tertiary Education Institution must be current Keypass ID Card with photo, must be current"
                                />
                                <p class="error">
                                    Maximum size: 2 MB and File Type: PDF, JPG,
                                    JPEG, PNG &amp; TIFF.
                                </p>
                            </div>
                            <div class="col-md-2" style="text-align: right">
                                <div
                                    id="upload7_custom_error"
                                    class="select_box_error_fix pull-right m_t_10"
                                ></div>
                            </div>
                        </div>
                        <div class="col-md-12 my-2 row">
                            <div class="col-md-6">
                                <span
                                    class="wpcf7-list-item first d-flex align-items-center"
                                >
                                    <span
                                        class="wpcf7-list-item-label"
                                    >
                                        <label
                                            for="affairs_victoria_proof"
                                            style="margin-top: 0"
                                        >
                                            <span
                                                style="
                                                    font-size: 14px;
                                                    font-weight: 500;
                                                "
                                            >
                                                Consumer Affairs Victoria Proof
                                                of Age Card with photo
                                            </span>
                                        </label>
                                        <br />
                                    </span>
                                </span>
                            </div>
                            <div class="col-md-4">
                                <input
                                    type="file"
                                    accept="image/gif, image/jpg, image/png, application/pdf, application/doc, application/docx"
                                    name="upload_file_name8"
                                    class="file_btn visa"
                                    ref="this_file_9()"
                                    id="upload8"
                                    @change="age_card_with_photo"
                                />

                                <input
                                    type="hidden"
                                    name="upload_file_name[8]"
                                    class="upload8_file"
                                    value=""
                                />
                                <input
                                    type="hidden"
                                    id="this_file_8"
                                    name="upload_file_checklist[8]"
                                    class="upload8_file_name"
                                    value="Consumer Affairs Victoria Proof of Age Card with photo"
                                />
                                <p class="error">
                                    Maximum size: 2 MB and File Type: PDF, JPG,
                                    JPEG, PNG &amp; TIFF.
                                </p>
                            </div>
                            <div class="col-md-2" style="text-align: right">
                                <div
                                    id="upload8_custom_error"
                                    class="select_box_error_fix pull-right m_t_10"
                                ></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="m_t_10">
                        <div class="col-md-12">
                            <p class="error">
                                <small
                                    >Maximum upload file size: 2 MB for each
                                    documents<br />Only PDF, JPG, JPEG, PNG
                                    &amp; TIFF file is supported for
                                    attachment.</small
                                >
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <div class="d-flex justify-content-end">
            <router-link
                to="#"
                class="btn btn-md theme-bg m-2 text-white"
                @click.native="goToBack"
                ><i class="fa fa-arrow-left"></i> Previous</router-link
            >
            <button class="btn btn-md theme-bg m-2 text-white" @click="save">
                Submit
            </button>
        </div>
    </div>
</template>

<script>
// import EssentialDocuments from "./EssentialDocuments.vue";
// import axios from './axios';

export default {
    components: {
        // EssentialDocuments,
    },

    data() {
        return {
            password: "",
            passport_file: "",
            passport_data: "",
            driver_licence_file: "",
            driver_licence_data: "",
            boat_licence_file: "",
            boat_licence_data: "",
            firearm_licence_file: "",
            firearm_licence_data: "",
            certificate_of_competency_file: "",
            certificate_of_competency_data: "",
            territory_file: "",
            territory_data: "",
            govt_issued_id_card_file: "",
            govt_issued_id_card_data: "",
            photo_id_card_file: "",
            photo_id_card_data: "",
            age_card_with_photo_file: "",
            age_card_with_photo_data: "",
        };
    },

    methods: {
        previewFiles() {
            this.passport_file = this.$refs.this_file_1.files[0];
            console.log(this.passport_file.name);
            //this.passport_data = this.passport_file.name;
            var formData = new FormData();
            // formData.append("name", this.file_name)
            formData.append("fileName", this.passport_file);
            // localStorage.setItem('selected_files',this.file)
            // this.save(this.file)
            // console.log(this.base_url)
            axios
                .post("/applied-documents", formData, {
                    headers: {
                        // "Content-Type": "Application/json",
                    },
                })
                .then((res) => {
                    this.passport_data = res.data.document_url;
                    console.log("uploaded", res);
                })
                .catch(function () {
                    console.log("failure");
                });
        },
        driver_licence: function (event) {
            this.driver_licence_file = event.target.files[0];
            // console.log(this.driver_licence_file)

            // console.log(this.driver_licence_data);
            var formData = new FormData();
            // formData.append("name", this.file_name)
            formData.append("fileName", this.driver_licence_file);
            // localStorage.setItem('selected_files',this.file)
            // this.save(this.file)
            // console.log(this.base_url)
            axios
                .post("/applied-documents", formData, {
                    headers: {
                        // "Content-Type": "Application/json",
                    },
                })
                .then((res) => {
                    this.driver_licence_data = res.data.document_url;
                    console.log("uploaded");
                })
                .catch(function () {
                    console.log("failure");
                });
        },

        boat_licence(event) {
            this.boat_licence_file = event.target.files[0];
            // this.boat_licence_data = this.boat_licence_file.name;
            var formData = new FormData();
            // formData.append("name", this.file_name)
            formData.append("fileName", this.boat_licence_file);
            // localStorage.setItem('selected_files',this.file)
            // this.save(this.file)
            // console.log(this.base_url)
            axios
                .post("/applied-documents", formData, {
                    headers: {
                        // "Content-Type": "Application/json",
                    },
                })
                .then((res) => {
                    this.boat_licence_data = res.data.document_url;
                    console.log("uploaded");
                })
                .catch(function () {
                    console.log("failure");
                });
        },
        firearm_licence(event) {
            this.firearm_licence_file = event.target.files[0];

            var formData = new FormData();
            // formData.append("name", this.file_name)
            formData.append("fileName", this.firearm_licence_file);
            // localStorage.setItem('selected_files',this.file)
            // this.save(this.file)
            // console.log(this.base_url)
            axios
                .post("/applied-documents", formData, {
                    headers: {
                        // "Content-Type": "Application/json",
                    },
                })
                .then((res) => {
                    this.firearm_licence_data = res.data.document_url;
                    console.log("uploaded");
                })
                .catch(function () {
                    console.log("failure");
                });
        },

        certificate_of_competency(event) {
            this.certificate_of_competency_file = event.target.files[0];
            // this.certificate_of_competency_data =
            //     this.certificate_of_competency_file.name;
            var formData = new FormData();
            // formData.append("name", this.file_name)
            formData.append("fileName", this.certificate_of_competency_file);
            // localStorage.setItem('selected_files',this.file)
            // this.save(this.file)
            // console.log(this.base_url)
            axios
                .post("/applied-documents", formData, {
                    headers: {
                        // "Content-Type": "Application/json",
                    },
                })
                .then((res) => {
                    this.certificate_of_competency_data = res.data.document_url;
                    console.log("uploaded");
                })
                .catch(function () {
                    console.log("failure");
                });
        },

        territory(event) {
            this.territory_file = event.target.files[0];

            var formData = new FormData();
            // formData.append("name", this.file_name)
            formData.append("fileName", this.territory_file);
            // localStorage.setItem('selected_files',this.file)
            // this.save(this.file)
            // console.log(this.base_url)
            axios
                .post("/applied-documents", formData, {
                    headers: {
                        // "Content-Type": "Application/json",
                    },
                })
                .then((res) => {
                    this.territory_data = res.data.document_url;
                    console.log("uploaded");
                })
                .catch(function () {
                    console.log("failure");
                });
        },

        govt_issued_id_card(event) {
            this.govt_issued_id_card_file = event.target.files[0];

            var formData = new FormData();
            // formData.append("name", this.file_name)
            formData.append("fileName", this.govt_issued_id_card_file);
            // localStorage.setItem('selected_files',this.file)
            // this.save(this.file)
            // console.log(this.base_url)
            axios
                .post("/applied-documents", formData, {
                    headers: {
                        // "Content-Type": "Application/json",
                    },
                })
                .then((res) => {
                    this.govt_issued_id_card_data = res.data.document_url;
                    console.log("uploaded");
                })
                .catch(function () {
                    console.log("failure");
                });
        },

        photo_id_card(event) {
            console.log("here");
            console.log("photo_id_card");
            this.photo_id_card_file = event.target.files[0];

            var formData = new FormData();
            // formData.append("name", this.file_name)
            formData.append("fileName", this.photo_id_card_file);
            // localStorage.setItem('selected_files',this.file)
            // this.save(this.file)
            // console.log(this.base_url)
            axios
                .post("/applied-documents", formData, {
                    headers: {
                        // "Content-Type": "Application/json",
                    },
                })
                .then((res) => {
                    this.photo_id_card_data = res.data.document_url;
                    console.log("uploaded");
                })
                .catch(function () {
                    console.log("failure");
                });
        },

        age_card_with_photo(event) {
            this.age_card_with_photo_file = event.target.files[0];

            var formData = new FormData();
            // formData.append("name", this.file_name)
            formData.append("fileName", this.age_card_with_photo_file);
            // localStorage.setItem('selected_files',this.file)
            // this.save(this.file)
            // console.log(this.base_url)
            axios
                .post("/applied-documents", formData, {
                    headers: {
                        // "Content-Type": "Application/json",
                    },
                })
                .then((res) => {
                    this.age_card_with_photo_data = res.data.document_url;
                    console.log("respose ", res);
                })
                .catch(function () {
                    console.log("failure");
                });
        },

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
                passport: this.passport_data,
                driver_licence: this.driver_licence_data,
                boat_licence: this.boat_licence_data,
                firearm_licence: this.firearm_licence_data,
                certificate_of_competency: this.certificate_of_competency_data,
                territory: this.territory_data,
                govt_issued_id_card: this.govt_issued_id_card_data,
                photo_id_card: this.photo_id_card_data,
                age_card_with_photo: this.age_card_with_photo_data,
            });
            // let data = this.file_name;
            // let data = {
            //     ...this.$refs.essential_documents,
            // };
            console.log("data", data);
        },
        goToBack() {
            this.$emit("goToBack", 1);
        },

        goToBack() {
            this.$emit("goToBack", 1);
        },
    },
};
</script>
