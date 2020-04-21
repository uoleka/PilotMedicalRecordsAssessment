@extends ('layouts.app')

  
@section('content')

<div class="container" style="margin-top: 5px">
   @if (count($errors) > 0)
      <div class="alert alert-danger" align= "center">
      {{"Fill the field(s) marked in red"}}
      </div>
    @endif
    @if (isset($message))
      <div class="alert alert-info">
      {{$message}}
      </div>
    @endif

   <div class="row justify-content-center" >
    
        <div class="col-md-6" >
            <div class="card  polaroided">
                <div class="card-header">
                  <section>
                  <img src="/template/bagasoo_logo.png" height="40"/>
                  <div align="center"><strong>APPLICATION FORM FOR MEDICAL CERTIFICATE</strong></div>
                  </section>
                </div>
              <div class="card-body">
 
<div align = "left">
    <a href="{{URL::previous()}}" class="btn btn-info">Back</a>
</div>

Instructions for Completing Model Form MD-L01
Notes:<br>
(1) Applicant must fill in completely numbers 1 through 21 of the Application.
<br>
(2) Intentional falsification may result in federal criminal prosecution. Intentional falsification may also result in suspension or
revocation of all airman, ground instructor, medical certificates, and ratings held by the applicant, as well as denial of this
application for medical certification.
<br>

<a name="one">
  <strong> 
    1. Class of medical certificate applied for.
  </strong>
  <br> 
  Check the
  appropriate box for the class of medical certificate for
  which you are making application for.
  <br>
</a>

<a name="two">
  <strong>
    2. Name.
  </strong>
  <br> 
  Enter your full name. If your name has changed
  for any reason, enter your current name and list any
  former name(s) in Item 18c, Explanations. All applicants
  without a middle name or initial should enter “NMN” or
  “NONE.” Nicknames and abbreviated names must not be
  used.
  <br>
</a>  

<a name="three">
  <strong>
    3. Identification number.
  </strong>
  <br> 
  Entry of the identification
  number is optional; however, its use as a unique identifier
  helps eliminate mistakes.
  <br>
</a>

<a name="four">
  <strong>
    4. Citizenship.
  </strong>
  <br> 
  Enter the name of the country of which
  you are a citizen.
  <br>
</a>
<a name="five">
  <strong>
    5a-c. Address.
  </strong>
  <br> 
  Enter your permanent mailing address,
  country, and complete postal code.
  <br>
</a>

<a name="fived">
<strong>
  5d. Telephone number.
</strong>
<br> 
Enter your complete telephone
number.
<br>
</a>

<a name="six">
  <strong>
    6. Date of birth. 
  </strong>
  <br>
    Enter your date of birth in dd/mm/yyyy
  format (e.g., 31/01/1986).
  <br>
</a>
<a name="seven">
<strong>
  7. Hair.
</strong>
<br> 
Enter the colour of your hair as brown, black,
blonde, grey, or red. If bald, enter “bald.” Do not
abbreviate.
<br>
</a>
<a name="eight">
<strong>
  8. Eyes.
</strong>
<br> 
Enter the colour of your eyes as brown, blue,
hazel, grey, or green. Do not abbreviate.
<br>
</a>
<a name="nine">
  <strong>
    9. Gender.
  </strong>
  <br> 
  Select Male or Female.
  <br>
</a>
<a name="ten">
  <strong>
    10. Types of licences you currently hold.
  </strong>
  <br> 
  Check the
  applicable box(es). If you check “Other,” provide the name
  of the licence.
  <br>
</a>

<a name="eleven">
  <strong>
    11. Occupation.
  </strong>
  <br> 
  Indicate major employment. Enter “Pilot”
  only if you gain your livelihood by flying.
  <br>
</a>

<a name="twelve">
  <strong>
    12. Employer.
  </strong>
  <br> 
  Provide your employer’s full name and
  telephone number. If self-employed, enter “selfemployed.”
  <br>
</a>

<a name="thirteen">
<strong>
  13. Has your CAA airman medical certificate ever been
denied, suspended, or revoked?
</strong>
<br> 
Check yes or no. If
yes, provide the date in dd/mm/yyyy format (e.g.,
31/01/2013).
<br>
</a>

<a name="fourteen">
  <strong>
    14. Total pilot time.
  </strong>
  <br> 
  Enter the total number of civilian
  flight hours to date and in the 6-month period immediately
  preceding the date of this application. Indicate whether the
  hours are logged or estimated (abbreviate as Log. or Est.).
  <br>
</a>

<a name="fifteen">
  <strong>
    15. Date of last CAA medical application.
  </strong>
  <br> 
  Enter the date
  of your last medical application in dd/mm/yyyy format
  (e.g., 31/01/2013). If none, enter “none.”
  <br>
</a>
<a name="sixteen">
  <strong>16. Do you currently use any medication (prescription
  or nonprescription)?
  </strong>
  <br> 
  Check Yes or No. If yes, give the
  name of all medications and indicate if they were listed in
  a previous CAA medical examination. If more space is
  required, use a plain sheet of paper to record the
  information and then sign and date the paper.
  <br>
</a>

<a name="seventeen">
  <strong>
    17. Do you ever use near-vision contact lenses when
  flying?
  </strong>
  <br> 
  Check Yes or No.
  <br>
</a>

<a name="eighteen">
<strong>
  18a. Medical history, and 18b, Family medical history.
</strong>
<br>
You must check either Yes or No for each item under this
heading. Check Yes for every condition you or an
immediate family member has ever had or presently has
and describe the condition and approximate date in Item
18c.
<br>
</a>

<a name="eighteenc">
<strong>
  18c. Explanations.
</strong>
<br> 
If information has been reported on a
previous application for an airman medical certificate and
there has been no change in your condition, you may note
“PREVIOUSLY REPORTED, NO CHANGE” in the
Explanations block, but you must still check Yes for the
condition. Do not report occasional common illnesses
such as colds or sore throats.
“Substance dependence” is defined by any of the
following: Increased tolerance; withdrawal symptoms;
impaired control of use; or continued use despite damage
to health or impairment of social, personal, or occupational
functioning. “Substance abuse” includes the following: Use
of an illegal substance, use of a substance or substances
in situations in which such use is physically hazardous or
misuse of a substance when such misuse has impaired
health or social or occupational functioning. “Substances”
include alcohol, PCP, marijuana, cocaine, amphetamines,
barbiturates, opiates, and other psychoactive chemicals.
<br>
</a>

<a name="nineteen">
  <strong>
    19. Conviction and/or administrative action history.
  </strong>
  <br>
  Item 19a of this section asks if you have ever been:
  1. Convicted (which may include paying a fine or
  forfeiting bond or collateral) of an offense involving
  driving while intoxicated by, while impaired by, or
  while under the influence of alcohol or a drug; or
  2. Convicted of or subject to an administrative action for
  an offense for which your licence was denied,
  PEL 21000109, Version 4.1, for Training Purposes Only
  6 of 6 Application Form for Medical Certificate – MD-L01 (revised 07/2015)
  suspended, cancelled, or revoked or which resulted in
  attendance at an educational or rehabilitation
  program. You are not required to report individual
  traffic convictions if they did not involve alcohol or a
  drug; suspension, revocation, cancellation, or denial
  of driving privileges; or attendance at an educational
  or rehabilitation program.
  If you check Yes, you must give a description of the
  conviction(s) and/or administrative action(s) in Item
  19c, Explanations. The description must include the:
  1. Alcohol or drug offense for which you were
  convicted or the type of administrative action
  involved (e.g., attendance at an alcohol treatment
  program in lieu of conviction; licence denial,
  suspension, cancellation, or revocation for
  refusal to be tested; educational safe driving
  program for multiple speeding convictions; etc.);
  2. Name of the State or other jurisdiction involved;
  and
  3. Date of the conviction and/or administrative
  action.
  The CAA may check State motor vehicle driving
  licensing records to verify your responses.
  Item 19b of this section asks if you have ever had any
  other (non-traffic) convictions (e.g., assault, battery, public
  intoxication, robbery, etc.). If you check yes, enter the
  charge for which you were convicted and the date of the
  conviction in Item 19c.
  <br>
</a>
<a name="nineteenc">
  <strong>
    19c. Explanations.
  </strong>
  <br> 
  If more space is required, use a plain
  sheet of paper to record the information and then sign and
  date the paper.
  <br>
</a>

<a name="twenty">
  <strong>
    20. Visit to health professional within the last 3 years?
  </strong>
  <br>
  Check Yes or No. If yes, list all visits in the last 3 years to
  a physician, physician’s assistant, nurse practitioner,
  psychologist, clinical social worker, or substance abuse
  specialist for treatment, examination, or medical/mental
  evaluation. List visits for counselling only if related to a
  personal substance abuse or psychiatric condition. Give
  the date, name, address, and type of health professional
  consulted and briefly state the reason for consultation.
  Multiple visits to one health professional for the same
  condition may be aggregated on one line. Routine dental,
  eye, and CAA periodic medical examinations and
  consultations with your employer-sponsored Employee
  Assistance Program (EAP) may be excluded unless the
  consultations were for your substance abuse or unless
  they resulted in referral for psychiatric evaluation or
  treatment. If more space is required, use a plain sheet of
  paper to record the information and then sign and date the
  paper.
  This applicant’s declaration certifies the completeness and
  truthfulness of your responses on the medical application.
  You must sign and date the application after you have
  read the declaration.
</a>
</div>
</div>
      </div>
  </div>
</div>
</div>
@endsection
