
<!-- The Modal -->
  <div class="modal fade animated zoomIn" id="user_profile" data-backdrop="static">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title"><?php echo $content_title; ?></h4>
          <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
        </div>
        
        <!-- Modal body -->
        <div class="modal-body" id="imageh">
          <div class="col-lg-12">
            <div class="element-wrapper">
              <div class="element-box">
                <form name="form_init" id="form_init" method="POST">
                  
                  <div class="form-desc">
                    Looks like this is the first time you're accessing your Lexington Digital Library account.
                    Hence, you need to configure your account and make your appropriate selection before 
                    continue accessing the library content
                  </div>
                  
                  <fieldset class="form-group">
                    <legend><span>Personal Details</span></legend>
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="">Fullname</label>
                          <input name="fullname" id="fullname" class="form-control" placeholder="Your Fullname" type="text" required>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="">Registration Number</label>
                          <input name="registration_no" id="registration_no" class="form-control" placeholder="School Registration No" type="text" required>
                        </div>
                      </div>
                    </div>
                    
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="">Gender</label>
                          <select name="gender" id="gender" class="form-control" placeholder="G" type="text">
                            <option>Male</option>
                            <option>Female</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="">Date of Birth</label>
                          <input name="dob" id="dob" class="single-daterange form-control" placeholder="Date of birth" type="text">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="">Your Username</label>
                          <div class="input-group">
                            <input disabled class="form-control" value="<?php echo $user_name;?>" type="text">
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="">e-Mail Address</label>
                          <input name="email" id="email" class="form-control" value="<?php echo $user_email;?>" type="text" disabled>
                        </div>
                      </div>  
                    </div>  
                  </fieldset>

                  <fieldset class="form-group">
                    <legend><span>Academic Details</span></legend>
                   
                      <div class="form-group">
                        <label for="">Select your Faculty</label>
                        <select name="faculty" id="faculty" class="form-control" placeholder="First Name" type="text" required>
                          <option>-- Select Faculty --</option>
                          <?php
                            while($row_faculties = $query_faculties->fetch_array())
                            {
                              ?>
                                <option value="<?php echo $row_faculties['faculty_name']; ?>"><?php echo $row_faculties['faculty_name'];?></option>
                              <?php
                            }
                          ?>
                        </select>
                      </div>
                      
                      <div class="form-group">
                        <label for="">Select your Department</label>
                        <select name="department" id="department" class="form-control" placeholder="First Name" type="text" required>

                        </select>
                      </div>

                      <div class="form-group">
                        <label for="">Select your Programme</label>
                        <select name="programme" id="programme" class="form-control" placeholder="First Name" type="text" required>

                        </select>
                      </div>


                  </fieldset>

                  <div class="form-group" style="margin-bottom: 0;">
                    <label for=""></label>
                    <strong style="color:red;text-transform: uppercase;" id="response_message"></strong>
                  </div>

                  <div class="form-buttons-w">
                    <button id="init_submit_btn" class="btn btn-primary" type="submit"> Submit</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
        </div>
        
      </div>
    </div>
  </div>