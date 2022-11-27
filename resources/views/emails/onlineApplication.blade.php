<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Application Response</title>

    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <table width="100%">
        <tbody>
            <tr>
                <td>
                    01. Select your preferred courses
                </td>
                <td>
                    @if (isset($course_id) && isset($courses))

                        <ul>
                            @foreach ($course_id as $item)


                                <li>{{ $courses[$item]['title'] }}</li>




                            @endforeach
                        </ul>
                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    02. Do you need Airport pickup?
                </td>
                <td>
                    @if (isset($airport_pickup))



                        {{ $airport_pickup }}



                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    03. Title
                </td>
                <td>
                    @if (isset($title))


                        {{ $title }}


                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    04. Family name
                </td>
                <td>
                    @if (isset($family_name))


                        {{ $family_name }}


                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    05. Given name
                </td>
                <td>
                    @if (isset($given_name))


                        {{ $given_name }}


                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    06. Gender
                </td>
                <td>
                    @if (isset($gender))


                        {{ $gender }}


                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    07. Date of Birth
                </td>
                <td>
                    @if (isset($date_of_birth))


                        {{ $date_of_birth }}


                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    08. Nationality
                </td>
                <td>
                    @if (isset($nationality))


                        {{ $nationality }}


                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    09. Passport No.
                </td>
                <td>
                    @if (isset($passport_no))


                        {{ $passport_no }}


                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    10. Expiry Date(Passport)
                </td>
                <td>
                    @if (isset($expiry_date))


                        {!! $expiry_date !!}


                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    11. Visa type
                </td>
                <td>
                    @if (isset($visa_type))

                        {{ $visa_type }}

                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    12. Visa subclass
                </td>
                <td>
                    @if (isset($visa_subclass))

                        {{ $visa_subclass }}

                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    13. Visa number
                </td>
                <td>
                    @if (isset($visa_number))

                        {{ $visa_number }}

                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    14. Expiry Date(visa)
                </td>
                <td>
                    @if (isset($visa_expiry_date))

                        {{ $visa_expiry_date }}

                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    15. Do you have a Unique Student Identifier (USI)?
                </td>
                <td>
                    @if (isset($usi_choice))

                        {{ $usi_choice }}

                    @endif
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <strong>USI verified by Institute of Business and Management (Victoria)</strong>
                </td>
            </tr>
            <tr>
                <td>
                    16. Staff name
                </td>
                <td>
                    @if (isset($usi_staff_name))

                        {{ $usi_staff_name }}

                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    17. Signature
                </td>
                <td>
                    @if (isset($usi_choice_name))

                        {{ $usi_choice_name }}

                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    18. Date(visa)
                </td>
                <td>
                    @if (isset($data['usi_date']))

                        {{ $usi_date }}

                    @endif
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <strong>Residential Address (Home Country)</strong>
                </td>
            </tr>
            <tr>
                <td>
                    19. Address
                </td>
                <td>
                    @if (isset($contact_address))

                        {{ $contact_address }}

                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    20. Country
                </td>
                <td>
                    @if (isset($contact_country))

                        {{ $contact_country }}

                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    21. Phone
                </td>
                <td>
                    @if (isset($contact_phone))

                        {{ $contact_phone }}

                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    22. Email
                </td>
                <td>
                    @if (isset($contact_email))

                        {{ $contact_email }}

                    @endif
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <strong>Residential Address(Australia)</strong>
                </td>
            </tr>
            <tr>
                <td>
                    23. Building/Property Name
                </td>
                <td>
                    @if (isset($residential_building_name))

                        {{ $residential_building_name }}

                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    24. Flat/Unit Details
                </td>
                <td>
                    @if (isset($residential_flat_unit))

                        {{ $residential_flat_unit }}

                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    25. Street No
                </td>
                <td>
                    @if (isset($residential_street_no))

                        {{ $residential_street_no }}

                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    26. Street Name
                </td>
                <td>
                    @if (isset($residential_street_name))

                        {{ $residential_street_name }}

                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    27. Suburb
                </td>
                <td>
                    @if (isset($residential_street_suburb))

                        {{ $residential_street_suburb }}

                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    28. State/Territory
                </td>
                <td>
                    @if (isset($residential_state))

                        {{ $residential_state }}

                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    29. Postcode
                </td>
                <td>
                    @if (isset($residential_post_code))

                        {{ $residential_post_code }}

                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    30. PO Box or roadside delivery box
                </td>
                <td>
                    @if (isset($contact_post_po_box))

                        {{ $contact_post_po_box }}

                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    31. Preferred Contact Method
                </td>
                <td>
                    @if (isset($contact_preferred_contact_method))

                        {{ $contact_preferred_contact_method }}

                    @endif
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <strong>Post Address (if different from residential Address) </strong>
                </td>
            </tr>
            <tr>
                <td>32. Building/Property Name</td>
                <td>
                    @if (isset($residential_building_name))

                        {{ $residential_building_name }}

                    @endif
                </td>
            </tr>
            <tr>
                <td>33. Flat/Unit Details</td>
                <td>
                    @if (isset($residential_flat_unit))

                        {{ $residential_flat_unit }}

                    @endif
                </td>
            </tr>
            <tr>
                <td>34. Street No</td>
                <td>
                    @if (isset($residential_street_no))

                        {{ $residential_street_no }}

                    @endif
                </td>
            </tr>
            <tr>
                <td>35. Street Name</td>
                <td>
                    @if (isset($residential_street_name))

                        {{ $residential_street_name }}

                    @endif
                </td>
            </tr>
            <tr>
                <td>36. Suburb</td>
                <td>
                    @if (isset($residential_street_suburb))

                        {{ $residential_street_suburb }}

                    @endif
                </td>
            </tr>
            <tr>
                <td>37. State/Territory</td>
                <td>
                    @if (isset($residential_state))

                        {{ $residential_state }}

                    @endif
                </td>
            </tr>
            <tr>
                <td>38. Postcode</td>
                <td>
                    @if (isset($residential_post_code))

                        {{ $residential_post_code }}

                    @endif
                </td>
            </tr>
            <tr>
                <td>39. PO Box or roadside delivery box</td>
                <td>
                    @if (isset($contact_post_po_box))

                        {{ $contact_post_po_box }}

                    @endif
                </td>
            </tr>
            <tr>
                <td>40. Preferred Contact Method</td>
                <td>
                    @if (isset($contact_preferred_contact_method))

                        {{ $contact_preferred_contact_method }}

                    @endif
                </td>
            </tr>
            <tr>
                <td colspan="2"><strong>Emergency Contact in Australia or Home Country </strong></td>
            </tr>
            <tr>
                <td>41. Name</td>
                <td>
                    @if (isset($contact_emergency_contact_name))

                        {{ $contact_emergency_contact_name }}

                    @endif
                </td>
            </tr>
            <tr>
                <td>42. Phone</td>

                <td>
                    @if (isset($contact_emergency_contact_phone))

                        {{ $contact_emergency_contact_phone }}

                    @endif
                </td>
            </tr>
            <tr>
                <td>43. Relationship</td>
                <td>
                    @if (isset($contact_emergency_contact_relationship))

                        {{ $contact_emergency_contact_relationship }}

                    @endif
                </td>
            </tr>
                        <tr>
                <td colspan="2"><strong>English Language Proficiency</strong></td>
            </tr>
            <tr>
                <td>44. Assessment Type</td>
                <td>
                    @if (isset($english_language_proficiency_assessment_type))

                        {{ $english_language_proficiency_assessment_type }}

                    @endif
                </td>
            </tr>
            <tr>
                <td> 45. Score achieved</td>
                <td>
                    @if (isset($english_language_proficiency_score_achieved))

                        {{ $english_language_proficiency_score_achieved }}

                    @endif
                </td>
            </tr>
            <tr>
                <td>46. Date</td>
                <td>
                    @if (isset($english_language_proficiency_score_date))

                        {{ $english_language_proficiency_score_date }}

                    @endif
                </td>
            </tr>
            <tr>
                <td>47. Not Required. I am from Level I country. (You will be required to undertake Placement Assessment if you are not fromthe list of exempted countries. Refer Entry requirement policy) </td>
                <td>
                    @if ($english_language_proficiency_level_1_country)

                        yes
                    @endif
                </td>
            </tr>
            <tr>
                <td>48. Have you successfully completed any of the following qualifications in Australia or hold any recognized overseas qualification?</td>
                <td>
                    @if ($previous_completed_qualification)

                        {{ $previous_completed_qualification }}

                    @endif
                </td>
            </tr>
            <tr>
                <td>49. In case of overseas qualification, has the qualification been skill assessed in
Australia?</td>
                <td>
                    @if ($previous_completed_qualification_assessed)

                        {{ $previous_completed_qualification_assessed }}

                    @endif
                </td>
            </tr>
            <tr>
                <td colspan="2"><strong>Most recent or current Qualifications</strong></td>
            </tr>
                        <tr>
                <td>50. Name of qualification</td>
                <td>
                    @if (isset($previous_completed_qualification_name))

                        {{ $previous_completed_qualification_name }}

                    @endif
                </td>
            </tr>
            <tr>
                <td>51. School / Institution</td>
                <td>
                    @if (isset($most_recent_qualification_school_institution))

                        {{ $most_recent_qualification_school_institution }}

                    @endif
                </td>
            </tr>
                        <tr>
                <td>52. Country</td>
                <td>
                    @if (isset($most_recent_qualification_country))

                        {{ $most_recent_qualification_country }}

                    @endif
                </td>
            </tr>
                        <tr>
                <td> 53. Year was/to be completed</td>
                <td>
                    @if (isset($most_recent_qualification_completed_year))

                        {{ $most_recent_qualification_completed_year }}

                    @endif
                </td>
            </tr>
            <tr>
                <td>54. Do you want to apply for RPL/Credit Transfer? </td>
                <td>
                    @if (isset($rpl_apply))

                        {{ $rpl_apply }}

                    @endif
                </td>
            </tr>
                        <tr>
                <td>55. Reason for Study Which of the following best describes your reason for undertaking this course? </td>
                <td>
                    @if (isset($reason_for_study))

                        {{ $reason_for_study}}

                    @endif
                </td>
            </tr>
                        <tr>
                <td>56. Do you need any special support such as Language, Literacy and Numeracy? </td>
                <td>
                    @if (isset($need_support))

                        {{ $need_support}}

                    @endif
                </td>
            </tr>
                        <tr>
                <td>57. Do you suffer from any physical / mental disability that may affect your participation in the course?  </td>
                <td>
                    @if (isset($disability))

                        {{ $disability}}

                    @endif
                </td>
            </tr>
            </tr>
            <tr>
                <td>58. Any Other Special Need? </td>
                <td>
                    @if (isset($other_special_need))

                        {{ $other_special_need}}

                    @endif
                </td>
            </tr>
                        <tr>
                <td>59. Which of the following best describes your current employment status? </td>
                <td>
                    @if (isset($employment_status))

                        {{ $employment_status}}

                    @endif
                </td>
            </tr>
              <tr>
                  <td colspan="2"><strong>60. Student Declaration and consent</strong></td>

              </tr>

            <tr>
                <td>I declare that the information I have provided to the best of my knowledge is true and correct.</td>

                <td>
                      @if ($consent_1)

                      yes
                      @endif

                </td>
            </tr>
            <tr>
                <td>I consent to the collection, use and disclosure of my personal information in accordance with the Privacy Notice above.</td>


                <td>
                    @if ($consent_2)

                    yes
                    @endif

                </td>
            </tr>
            <tr>
                <td>I have read and understood Institute of Business and Management (Victoria)’s relevant policies and procedures and the terms and conditions of enrolment, fee payment, fee refunds, deferment, suspension or cancellation. I also understand that all pre-enrolment information can be requested by emailing info@ibm.vic.edu.au or calling 03 9478 3163.</td>


                <td>
                    @if ($consent_3)

                    yes
                    @endif

                </td>
            </tr>
            <tr>
                <td>I confirm that I am fully aware of the fees, cancellation and refund conditions and I agree to be a student at IBM (Victoria). I acknowledge that the provision of incorrect information or documentation or the withholding of information or documentation relating to my application may result in the cancellation of my enrolment.</td>

                <td>
                    @if ($consent_4)

                    yes
                    @endif

                </td>
            </tr>

            <tr>
                <td>61. Use of personal information</td>
                <td>
                    @if ($consent_5)


                        yes
                    @endif
                </td>
            </tr>
                        <tr>
                <td>62. Student name</td>
                <td>
                    @if (isset($consent_student_name))

                        {{ $consent_student_name}}

                    @endif
                </td>
            </tr>
                        <tr>
                <td>63. Student date</td>
                <td>
                    @if (isset($consent_student_date))

                        {{ $consent_student_date}}

                    @endif
                </td>
            </tr>
            <tr>
                <td colspan="2"><strong>64. Application Checklist</strong></td>

            </tr>

             <tr>
                <td>Completed all sections of this application</td>
                <td>
                    @if ($application_checklist_completed_all_sections)

                    yes
                    @endif
                </td>
               
            </tr>
            <tr>
                <td> Attached certified true copies of your VISA</td>
                <td>
                    @if ($application_checklist_attached_certified_visa)

                    yes
                    @endif
                </td>
              
            </tr>
            <tr>
                <td> Attached certified true copies of your Passport</td>

                <td>
                    @if ($application_checklist_attached_certified_passport)

                    yes
                    @endif
                </td>
            </tr>
            <tr>
                <td> Attached certified true copies of your qualifications</td>

                <td>
                    @if ($application_checklist_attached_certified_qualifications)

                    yes
                    @endif
                </td>
            </tr>
            <tr>
                <td> Copy of your current OHSC</td>


                <td>
                    @if ($application_checklist_copy_of_current_OHSC)

                    yes
                    @endif
                </td>
            </tr>
            <tr>
                <td> Attached relevant employment documentation</td>

                <td>
                    @if ($application_checklist_attached_relevant_employment)

                    yes
                    @endif
                </td>
            </tr>
            <tr>
                <td> Read and signed the declaration</td>


                <td>
                    @if ($application_checklist_read_and_signed_declaration)

                    yes
                    @endif
                </td>
            </tr>
            <tr>
                <td> Attached certified true copies of your English Proficiency</td>

                <td>
                    @if ($application_checklist_attached_certified_english_proficiency)

                    yes
                    @endif
                </td>
            </tr>




            <tr>
                <td colspan="2"><strong>Education Agent Details (If applicable) </strong></td>
            </tr>
                        <tr>
                <td>65. Agency name</td>
                <td>
                    @if (isset($agency_name))

                        {{ $agency_name}}

                    @endif
                </td>
            </tr>
            </tr>
                        <tr>
                <td>66. Agent name</td>
                <td>
                    @if (isset($agent_name))

                        {{ $agent_name}}

                    @endif
                </td>
            </tr>
            </tr>
             <tr>
                <td>67. Email</td>
                <td>
                    @if (isset($agent_email))

                        {{ $agent_email}}

                    @endif
                </td>
            </tr>
       
             <tr>
                 <td colspan="2"><strong>68. Agent declaration (Please click all the circles to indicate your agreement)</strong></td>

             </tr>
             <tr>
                 <td>That I comply with the standards of the ESOS framework (including the
                     Education Services for Overseas Students (ESOS) Act 2000 and the
                     National Code of Practice for Providers of Education and Training to
                     Overseas Students 2018)</td>

                 <td>
                     @if ($declaration_1)

                     yes
                     @endif
                 </td>
                
             </tr>
             <tr>
                 <td>That the information contained within this application form is accurate,
                     and that the supporting documentation including, but not limited to the
                     "certified copy" of the applicant\'s academic record is correct and has
                     not been altered in any way.</td>


                 <td>
                     @if ($declaration_2)


                     yes
                     @endif
                 </td>

             </tr>
             <tr>
                 <td>That I understand Institute of Business and Management (Victoria)
                     expects Education Agents to act ethically in dealings with the Overseas
                     Students and their families.</td>

                 <td>
                     @if ($declaration_3)

                     yes
                     @endif
                 </td>

             </tr>
             <tr>
                 <td>That any Enrolment Fees paid to me by the student to support this
                     application will be immediately transferred to Institute of Business and
                     Management (Victoria) so that Institute can uphold its commitment to
                     ESOS legislation with regards to enhancing the refund policy where
                     appropriate.</td>


                 <td>
                     @if ($declaration_4)

                     yes
                     @endif
                 </td>

             </tr>
             <tr>
                 <td> That I understand Institute of Business and Management (Victoria)
                     expects Education Agents to ensure that each student applying for entry
                     to Institute of Business and Management (Victoria) is familiar with the
                     information contained in: The Application Form, Overseas Student
                     Pre-Enrolment Information and the student Handbook.</td>



                 <td>
                     @if ($declaration_5)

                     yes
                     @endif
                 </td>

             </tr>
             <tr>
                 <td> I confirm the student has signed this application form.</td>

                 <td>
                     @if ($declaration_6)

                     yes
                     @endif
                 </td>

             </tr>
             <tr>
                 <td> I have provided the student’s personal email address and residential
                     address, as disclosed to me by the student</td>


                 <td>
                     @if ($declaration_7)


                     yes
                     @endif
                 </td>

             </tr>

        </tbody>
    </table>
</body>

</html>
