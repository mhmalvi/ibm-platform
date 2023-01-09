<template>
    <div>
        <div class="form-group">
            <h5 class="input-title">Overseas health Cover</h5>
        </div>

        <div>
            <label for="oshc" class="form-label">
                Do you have Overseas Health Cover (OSHC)?
            </label>

            <div>
                <label>
                    <input
                        type="radio"
                        name="oshc"
                        class="input-form-check-input"
                        value="Yes"
                        v-model="oshc"
                    />
                    Yes
                </label>
                <label class="ms-4">
                    <input
                        type="radio"
                        name="oshc"
                        class="input-form-check-input"
                        value="No"
                        v-model="oshc"
                    />
                    No
                </label>
            </div>
        </div>

        <div class="form-group">
            <label for="family_name" class="form-label"
                >If Yes, OSHC Provider:
            </label>
            <input
                id="family_name"
                type="text"
                class="form-control"
                placeholder="OSHC Provider"
                v-model="oshc_provider"
                required
            />
        </div>

        <div class="form-group">
            <label for="details_single_cover" class="form-label"
                >If No, I require</label
            >
            <div>
                <label>
                    <input
                        type="radio"
                        name="details_single_cover"
                        class="input-form-check-input"
                        v-model="cover_type"
                        value="Single Cover"
                    />
                    Single Cover
                </label>
                <label class="ms-4">
                    <input
                        type="radio"
                        name="details_single_cover"
                        class="input-form-check-input"
                        v-model="cover_type"
                        value="Family Cover"
                    />
                    Family Cover
                </label>
            </div>
        </div>

        <div class="form-group">
            <label for="family_name" class="form-label"
                >Name(s) of the family member(s)
            </label>
            <input
                id="family_name"
                type="text"
                class="form-control"
                placeholder="Family members name"
                v-model="family_member"
                required
            />
        </div>

        <div class="row form-group">
            <div class="col-sm-6">
                <label for="gender" class="form-label">Gender</label>
                <div>
                    <label>
                        <input
                            type="radio"
                            name="gender"
                            class="input-form-check-input"
                            v-model="gender"
                            value="Male"
                        />
                        Male
                    </label>
                    <label class="ms-4">
                        <input
                            type="radio"
                            name="gender"
                            class="input-form-check-input"
                            v-model="gender"
                            value="Female"
                        />
                        Female
                    </label>
                </div>
            </div>

            <div class="col-sm-6">
                <label for="date_of_birth" class="form-label"
                    >Date of Birth: (DD/MM/YYYY)
                </label>
                <input
                    type="date"
                    class="form-control"
                    name="date_of_birth"
                    placeholder="Date of birth"
                    v-model="date_of_birth"
                />
            </div>
        </div>

        <div class="col-sm-6">
            <label for="studying_in_australia" class="form-label">
                Are you currently studying in Australia?</label
            >
            <div>
                <label>
                    <input
                        type="radio"
                        name="studying_in_australia"
                        class="input-form-check-input"
                        v-model="studying_in_australia"
                        value="Yes"
                    />
                    Yes
                </label>
                <label class="ms-4">
                    <input
                        type="radio"
                        name="studying_in_australia"
                        class="input-form-check-input"
                        v-model="studying_in_australia"
                        value="No"
                    />
                    No
                </label>
            </div>
        </div>

        <div class="form-group">
            <label for="family_name" class="form-label"
                >If Yes, Name of institute
            </label>
            <input
                id="family_name"
                type="text"
                class="form-control"
                placeholder="Name of institute"
                v-model="name_of_institute"
                required
            />
        </div>

        <div class="col-sm-6">
            <label for="education_provider" class="form-label">
                Are you Transferring from another education provider in
                Australia?
            </label>
            <div>
                <label>
                    <input
                        type="radio"
                        name="education_provider"
                        class="input-form-check-input"
                        v-model="education_provider"
                        value="Yes"
                    />
                    Yes
                </label>
                <label class="ms-4">
                    <input
                        type="radio"
                        name="education_provider"
                        class="input-form-check-input"
                        v-model="education_provider"
                        value="No"
                    />
                    No
                </label>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            oshc: "",
            oshc_provider: "",
            cover_type: "",
            family_member: "",
            gender: "",
            date_of_birth: "",
            studying_in_australia: "",
            name_of_institute: "",
            education_provider: "",
        };
    },
};
</script>
