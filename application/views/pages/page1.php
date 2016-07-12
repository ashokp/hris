
       <div class="formcontainer">

            <div class="text-center">
                <h3><i><strong>Cambridge Technology Enterprises Ltd.</strong></i></h3>

                <h4>Employment Information Sheet (India)</h4>
                <h5>Please Provide Complete and Accurate Information</h5>

            </div>
            <br/>
            <br/>
            <form class="form-horizontal" method="post" action="" role="form" data-toggle="validator">



                <div class="form-group required">
                    <label class="control-label col-sm-3 text-left" for="email">Position Applying for: </label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control onlybottom" name="appliedFor" value="<?php if($this->session->userdata('appliedFor')) echo $this->session->userdata('appliedFor'); ?>" required>
                    </div>
                </div>


                <div class="panel panel-primary">


                    <div class="panel-heading text-center"><big><strong>EMPLOYEE PERSONAL DETAILS SHEET</strong></big></div>
                    <div class="panel-body">

                        <div class="form-group">
                            <label class="control-label col-sm-3 text-left" for="email">Employee ID: </label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control onlybottom" value="<?php if($this->session->userdata('empId')) echo $this->session->userdata('empId'); ?>" name="empId">
                            </div>
                        </div>
                        <div class="form-group required">
                            <label class="control-label col-sm-3 text-left" for="email">Full name (as in Passport): </label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control onlybottom" name="fullName" value="<?php if($this->session->userdata('fullName')) echo $this->session->userdata('fullName'); ?>" required>
                            </div>
                        </div>
                        <div class="form-group required">
                            <label class="control-label col-sm-3 text-left" for="email">First Name: </label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control onlybottom"   name="fName"  value="<?php if($this->session->userdata('fName')) echo $this->session->userdata('fName'); ?>" required>
                            </div>
                        </div>
                        <div class="form-group required">
                            <label class="control-label col-sm-3 text-left" for="email">Last Name: </label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control onlybottom" name="lName" value="<?php if($this->session->userdata('lName')) echo $this->session->userdata('lName'); ?>" required>
                            </div>
                        </div>
                        <div class="form-group required">
                            <label class="control-label col-sm-3 text-left" for="email" required>Designation: </label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control onlybottom"   name="designation" value="<?php if($this->session->userdata('designation')) echo $this->session->userdata('designation'); ?>"  required>
                            </div>
                        </div>
                        <div class="form-group required">
                            <label class="control-label col-sm-3 text-left" for="email">Joining Date(dd-mm-yyyy): </label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control onlybottom showdatepicker" name="joiningDate" value="<?php if($this->session->userdata('joiningDate')) echo $this->session->userdata('joiningDate'); ?>" required>
                            </div>
                        </div>
                        <div class="form-group required">
                            <label class="control-label col-sm-3 text-left" for="email">Marital Status: </label>
                            <div class="col-sm-3">
                                <select class="form-control onlybottom" name="maritalStatus" required>
                                    <option>Select</option>
                                    <option <?php if($this->session->userdata('maritalStatus')!=0 && $this->session->userdata('maritalStatus')=='married') echo "selected='selected'" ; ?> value="married">Married</option>
                                    <option <?php if($this->session->userdata('maritalStatus')!=0 && $this->session->userdata('maritalStatus')=='single') echo "selected='selected'" ; ?> value="single">Single</option>
                                    <option <?php if($this->session->userdata('maritalStatus')!=0 && $this->session->userdata('maritalStatus')=='divorced') echo "selected='selected'" ; ?> value="divorced">Divorced</option>
                                 </select>
                                
                            </div>
                        </div>
                        <div class="form-group required">
                            <label class="control-label col-sm-3 text-left" for="email">Gender: </label>
                            <div class="col-sm-3">

                                <div class="radio radio-inline">
                                    <label>
                                        <input type="radio" value="1" <?php if($this->session->userdata('gender')!='' && $this->session->userdata('gender')==1) echo "checked='checked'" ; ?> name="gender" required> Male</label>

                                </div>
                                <div class="radio radio-inline">
                                    <label>
                                        <input type="radio" value="2" <?php if($this->session->userdata('gender')!='' && $this->session->userdata('gender')==2) echo "checked='checked'" ; ?> name="gender" required> Female</label>
                                </div>

                            </div>
                        </div>







                    </div>


                    <div class="panel-heading text-center noradius"><big><strong>DOB information</strong></big></div>
                    <div class="panel-body">
                        <div class="form-group required">
                            <label class="control-label col-sm-3 text-left" for="email">Actual Date of Birth: </label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control onlybottom showdatepicker" name="actualDob"  value="<?php if($this->session->userdata('actualDob')) echo $this->session->userdata('actualDob'); ?>" required>
                            </div>
                        </div>
                        <div class="form-group required">
                            <label class="control-label col-sm-3 text-left" for="email">Date Of Birth as per records: </label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control onlybottom showdatepicker" name="dobAsPerRecords" value="<?php if($this->session->userdata('dobAsPerRecords')) echo $this->session->userdata('dobAsPerRecords'); ?>" required>
                            </div>
                        </div>
                        <div class="form-group required">
                            <label class="control-label col-sm-3 text-left" for="email">Place of Birth: </label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control onlybottom" name="placeOfBirth" value="<?php if($this->session->userdata('placeOfBirth')) echo $this->session->userdata('placeOfBirth'); ?>" required>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="button_section">

                    <!--  <a href="page2.html">-->
                    <button type="submit" name="page1_submit" value="page1_submit" class="btn btn-custom pull-right">Save & Continue</button>
                    <?php if($this->session->userdata('sesspage1')==10) {  ?>
                    <a href="<?php echo base_url();?>page11">
                            <button type="button" class="btn btn-default pull-right" style="margin-right: 5px">View Summary</button>
                    </a>
                    <?php } ?>
                    <!--</a>
                    -->
                </div>



            </form>



        </div>


    </div>



</div>
