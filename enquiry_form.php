<?php include("inc/header-facilities.php"); ?>

    <!-- About Round Square Section -->
    <div class="container-fluid about_container">
        <div class="row">
            <div class="container-fluid">
                  <div class="container  multipurpose_hall admission_container">
                    <div class="col-xs-12 col-sm-11 col-md-3">
                       <h2 class="h3_trigger ggs_about_team" id="6">ADMISSIONS</h2>
                        <h3><span class="h3_trigger ggs_about_team" id="6">Online Enquiry Form</span></h3>
                    </div>
                    <div class="col-xs-12 col-sm-11 col-md-9">
                       <ul>
                         <li>
                            <div class="mh">
                              <a href="admission.php" class=""><img src="images/annual_fee_structure1.png" alt=""> Annual Fee Structure </a>
                            </div>
                            <div class="mh_hover">
                              <a href="admission.php" class=""><img src="images/annual_fee_structure.png" alt=""> Annual Fee Structure </a>
                            </div>
                        </li>
                        <li>
                            <div class="mh">
                              <a href="enquiry_form.php" class=""><img src="images/online_enquiry_icon1.png" alt=""> Online Enquiry Form </a>
                            </div>
                            <div class="mh_hover mh_active">
                              <a href="enquiry_form.php" class=""><img src="images/online_enquiry_icon.png" alt=""> Online Enquiry Form </a>
                            </div>
                        </li>
                        <li>
                            <div class="mh">
                              <a href="#" class=""><img src="images/admission_form_icon1.png" alt=""> Admission Form  </a>
                            </div>
                            <div class="mh_hover">
                              <a href="#" class=""><img src="images/admission_form_icon.png" alt=""> Admission Form </a>
                            </div>
                         </li>
                        <li>
                            <div class="mh">
                              <a href="#" class=""><img src="images/others_form_icon1.png" alt=""> OTHERS Form </a>
                            </div>
                            <div class="mh_hover">
                              <a href="#" class=""><img src="images/others_form_icon.png" alt=""> OTHERS Form </a>
                            </div>
                         </li>
                       </ul>
                    </div>
                  </div>
                  <div class="container about_slider_bg academics_the_curriculum residential_school_content admission_content enquiry_content">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                      <form action="">
                        <div class="col-sm-6 col-md-6">
                          <b>Student's Information</b>
                          <div class="form-group">
                            <label for="name" class="col-sm-4 control-label">First Name <span>*</span></label>
                            <div class="col-sm-8">
                              <input type="text" name="first-name" class="form-control" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="name" class="col-sm-4 control-label">Middle Name</label>
                            <div class="col-sm-8">
                              <input type="text" name="middle-name" class="form-control">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="name" class="col-sm-4 control-label">Last Name<span>*</span></label>
                            <div class="col-sm-8">
                              <input type="text" name="last-name" class="form-control" required>
                            </div>
                          </div>
                          <div class="form-group enquiry_age">
                            <label for="name" class="col-sm-4 control-label">Age (as on 31st March)<span>*</span></label>
                            <div class="col-sm-4">
                              <input type="text" name="year" class="form-control" placeholder="Year" required>
                            </div>
                            <div class="col-sm-4">
                              <input type="text" name="month" class="form-control" placeholder="Month" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="name" class="col-sm-4 control-label">Admission for Class<span>*</span></label>
                            <div class="col-sm-8">
                              <input type="text" name="admission-for-class" class="form-control" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="name" class="col-sm-4 control-label">Academic Session<span>*</span></label>
                            <div class="col-sm-8">
                              <input type="text" name="academic-session" class="form-control" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="name" class="col-sm-4 control-label">What facility are you availing?<span>*</span></label>
                            <div class="col-sm-8">
                              <select class="form-control">
                                <option value="">-- Select --</option>
                                <option value="day-school">Day School</option>
                                <option value="extended-day-school">Extended Day School</option>
                                <option value="5-day-hostel">5 Day Hostel</option>
                                <option value="7-day-hostel">7 day Hostel</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="name" class="col-sm-4 control-label">Transport Facility Required<span>*</span></label>
                            <div class="col-sm-8">
                              <select class="form-control">
                                <option value="">-- Select --</option>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="name" class="col-sm-4 control-label">Present Class</label>
                            <div class="col-sm-8">
                              <input type="text" name="present-class" class="form-control">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="name" class="col-sm-4 control-label enquiry_textarea">Name and address of present school</label>
                            <div class="col-sm-8">
                              <textarea name="name-address-present-school" cols="30" rows="4" class="form-control"></textarea>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="name" class="col-sm-4 control-label">Sex<span>*</span></label>
                            <div class="col-sm-8">
                              <select class="form-control">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="name" class="col-sm-4 control-label">Mother Tongue</label>
                            <div class="col-sm-8">
                              <input type="text" name="mother-tongue" class="form-control">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="name" class="col-sm-4 control-label">Nationality<span>*</span></label>
                            <div class="col-sm-8">
                              <input type="text" name="nationality" class="form-control" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="name" class="col-sm-4 control-label">Blood Group</label>
                            <div class="col-sm-8">
                              <input type="text" name="blood-group" class="form-control">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="name" class="col-sm-4 control-label">Passport<span>*</span></label>
                            <div class="col-sm-8">
                              <select class="form-control">
                                <option value="">-- Select --</option>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="name" class="col-sm-4 control-label">Any Major Allergies</label>
                            <div class="col-sm-8">
                              <input type="text" name="any-major-allergies" class="form-control">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="name" class="col-sm-4 control-label">Please indicate if your child</label>
                            <div class="col-sm-8">
                              <input type="text" name="indicate-your-child" class="form-control">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="name" class="col-sm-4 control-label">Attach Photo<span>*</span></label>
                            <div class="col-sm-8">
                              <input type="file" name="attach-photo" class="form-control" required>
                            </div>
                          </div>

                          <b>Sibling's Information</b>

                          <div class="form-group">
                            <label for="name" class="col-sm-4 control-label">Name</label>
                            <div class="col-sm-8">
                              <input type="text" name="si-name" class="form-control">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="name" class="col-sm-4 control-label">Age</label>
                            <div class="col-sm-8">
                              <input type="text" name="si-age" class="form-control">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="name" class="col-sm-4 control-label">Class</label>
                            <div class="col-sm-8">
                              <input type="text" name="si-class" class="form-control">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="name" class="col-sm-4 control-label">School Name</label>
                            <div class="col-sm-8">
                              <input type="text" name="si-school-name" class="form-control">
                            </div>
                          </div>

                          <b>Father's Information</b>

                          <div class="form-group">
                            <label for="name" class="col-sm-4 control-label">Name<span>*</span></label>
                            <div class="col-sm-8">
                              <input type="name" name="fi-name" class="form-control" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="name" class="col-sm-4 control-label">Date Of Birth</label>
                            <div class="col-sm-8">
                              <input type="text" name="fi-db" class="form-control">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="name" class="col-sm-4 control-label">Educational Qualifications<span>*</span></label>
                            <div class="col-sm-8">
                              <input type="text" name="fi-eq" class="form-control" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="name" class="col-sm-4 control-label">Profession / Occupation<span>*</span></label>
                            <div class="col-sm-8">
                              <input type="text" name="fi-po" class="form-control" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="name" class="col-sm-4 control-label">Name of the Organization</label>
                            <div class="col-sm-8">
                              <input type="text" name="fi-organization" class="form-control">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="name" class="col-sm-4 control-label enquiry_textarea2">Office Address</label>
                            <div class="col-sm-8">
                               <textarea name="fi-o-a" cols="30" rows="3" class="form-control"></textarea>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="name" class="col-sm-4 control-label">Nature of Business</label>
                            <div class="col-sm-8">
                              <input type="text" name="fi-nb" class="form-control">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="name" class="col-sm-4 control-label">Tel. (Office)</label>
                            <div class="col-sm-8">
                              <input type="text" name="fi-tel-o" class="form-control">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="name" class="col-sm-4 control-label">Tel. (Residence)</label>
                            <div class="col-sm-8">
                              <input type="text" name="fi-tel-r" class="form-control">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="name" class="col-sm-4 control-label">Mobile<span>*</span></label>
                            <div class="col-sm-8">
                              <input type="text" name="fi-m" class="form-control" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="name" class="col-sm-4 control-label">Fax</label>
                            <div class="col-sm-8">
                              <input type="text" name="fi-f" class="form-control">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="name" class="col-sm-4 control-label">Email<span>*</span></label>
                            <div class="col-sm-8">
                              <input type="email" name="fi-email" class="form-control" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="name" class="col-sm-4 control-label">Emergency Phone No</label>
                            <div class="col-sm-8">
                              <input type="text" name="fi-e-p-n" class="form-control">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="name" class="col-sm-4 control-label">Attach Photo<span>*</span></label>
                            <div class="col-sm-8">
                              <input type="file" name="fi-a-p" class="form-control" required>
                            </div>
                          </div>

                        </div>


                        <div class="col-sm-6 col-md-6">
                          <b>Mother's Information</b>

                          <div class="form-group">
                            <label for="name" class="col-sm-4 control-label">Name<span>*</span></label>
                            <div class="col-sm-8">
                              <input type="text" name="mi-name" class="form-control" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="name" class="col-sm-4 control-label">Date Of Birth</label>
                            <div class="col-sm-8">
                              <input type="text" name="mi-db" class="form-control">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="name" class="col-sm-4 control-label">Educational Qualifications</label>
                            <div class="col-sm-8">
                              <input type="text" name="mi-eq" class="form-control">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="name" class="col-sm-4 control-label">Profession / Occupation</label>
                            <div class="col-sm-8">
                              <input type="text" name="mi-po" class="form-control">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="name" class="col-sm-4 control-label">Name of the Organization</label>
                            <div class="col-sm-8">
                              <input type="text" name="mi-organization" class="form-control">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="name" class="col-sm-4 control-label enquiry_textarea">Office Address</label>
                            <div class="col-sm-8">
                               <textarea name="mi-oa" cols="30" rows="3" class="form-control"></textarea>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="name" class="col-sm-4 control-label">Nature of Business</label>
                            <div class="col-sm-8">
                              <input type="text" name="mi-nb" class="form-control">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="name" class="col-sm-4 control-label">Tel. (Office)</label>
                            <div class="col-sm-8">
                              <input type="text" name="mi-tel-o" class="form-control">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="name" class="col-sm-4 control-label">Tel. (Residence)</label>
                            <div class="col-sm-8">
                              <input type="text" name="mi-tel-r" class="form-control">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="name" class="col-sm-4 control-label">Mobile</label>
                            <div class="col-sm-8">
                              <input type="text" name="mi-m" class="form-control">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="name" class="col-sm-4 control-label">Fax</label>
                            <div class="col-sm-8">
                              <input type="text" name="mi-fax" class="form-control">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="name" class="col-sm-4 control-label">Email</label>
                            <div class="col-sm-8">
                              <input type="email" name="mi-email" class="form-control">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="name" class="col-sm-4 control-label">Emergency Phone No</label>
                            <div class="col-sm-8">
                              <input type="text" name="mi-e-p-n" class="form-control">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="name" class="col-sm-4 control-label">Attach Photo<span>*</span></label>
                            <div class="col-sm-8">
                              <input type="file" name="mi-ap" class="form-control" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="name" class="col-sm-4 control-label enquiry_textarea2">Permanent Address<span>*</span></label>
                            <div class="col-sm-8">
                              <textarea name="mi-pa" cols="30" rows="4" class="form-control" required></textarea>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="name" class="col-sm-4 control-label enquiry_textarea2">Present Address<span>*</span></label>
                            <div class="col-sm-8">
                              <textarea name="mi-present-a" cols="30" rows="4" class="form-control" required></textarea>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="name" class="col-sm-4 control-label enquiry_textarea">As a parent how can you help the school?</label>
                            <div class="col-sm-8">
                              <textarea name="help" cols="30" rows="4" class="form-control"></textarea>
                            </div>
                          </div>
                          <div class="form-group ">
                            <div class="col-md-12">
                                  <div class="enquiry_form_content">
                                    <input type="checkbox" class="enquiry_checkbox"> 
                                    <p>
                                    I undertake to abide by all the rules and regulations for
                                    admission as in force from time to time. I also note that my ward will be permitted to take the
                                    Entrance Test for admission in the class desired by me, provided the child is studying in qualifying class and his/her age is specified. The
                                    acceptance of the registration form/fee will not involve the institution in any obligation to admit my ward. I accept that the admission can be
                                    accepted or rejected by the School Authorities at their sole discretion and is not open to any dispute.
                                  </p>
                                  <hr>
                                  <p>
                                    Note:- Kindly carry last 3 years Progress Reports and Birth
                                    Certificate of your ward, when visiting the school.
                                  </p>
                                  <button type="submit" class="btn btn-default enquiry_submit">Submit</button>
                                  </div>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div> 
                  </div>
              </div>
          </div>
      </div>
    
    <!-- END About Round Square -->

<?php include("inc/footer-about.php"); ?>
