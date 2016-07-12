 <div class="formcontainer">

                <div class="text-center">
                    <h3><i><strong>Cambridge Technology Enterprises Ltd.</strong></i></h3>

                    <h4>Employment Information Sheet (India)</h4>
                    <h5>Please Provide Complete and Accurate Information</h5>

                </div>
                <br/>
                <br/>

                <form class="form-horizontal" method="post" action="" enctype="multipart/form-data" role="form">
                    <div class="panel panel-primary">



                        <div class="panel-heading text-center noradius"><big><strong>Contact Information</strong></big></div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label class="control-label col-sm-3 text-left" for="email">Landline number: </label>
                                <div class="col-sm-3">
                                    <input type="tel" class="form-control onlybottom" pattern="[0-9]{10}" value="<?php if($this->session->userdata('landNumber')) echo $this->session->userdata('landNumber'); ?>" name="landNumber">

                                </div>
                            </div>
                            <div class="form-group required">
                                <label class="control-label col-sm-3 text-left" for="email">Mobile Number: </label>
                                <div class="col-sm-3">
                                    <input type="tel" class="form-control onlybottom" name="mobileNumber" value="<?php if($this->session->userdata('mobileNumber')) echo $this->session->userdata('mobileNumber'); ?>"  pattern="[0-9]{10}" required>

                                </div>
                            </div>

                            <div class="form-group required">
                                <label class="control-label col-sm-3 text-left" for="email">Email ID: </label>
                                <div class="col-sm-3">
                                    <input type="email" class="form-control onlybottom" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" value="<?php if($this->session->userdata('emailId')) echo $this->session->userdata('emailId'); ?>" name="emailId" required>
                                </div>
                            </div>



                            <div class="form-group required">
                                <label class="control-label col-sm-3 text-left" for="email"> Contact Number in case of emergency: </label>
                                <div class="col-sm-3">
                                    <input type="number" class="form-control onlybottom" name="emerNumber"  value="<?php if($this->session->userdata('emerNumber')) echo $this->session->userdata('emerNumber'); ?>" required>
                                </div>
                                <div class="form-group col-sm-3">
                                    <label class="control-label col-sm-4 text-left" for="email"> Name: </label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control onlybottom" name="emerName" value="<?php if($this->session->userdata('emerName')) echo $this->session->userdata('emerName'); ?>" required>
                                    </div>
                                </div>
                                <div class="form-group col-sm-3">
                                    <label class="control-label col-sm-6 text-left" for="email"> Relationship: </label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control onlybottom" name="emerRelation" value="<?php if($this->session->userdata('emerRelation')) echo $this->session->userdata('emerRelation'); ?>" required>
                                    </div>
                                </div>
                            </div>







                        </div>


                        <div class="panel-heading text-center noradius"><big><strong>Address Details</strong></big></div>
                        <div class="panel-body">
                            <div class="form-inline col-sm-12">
                                <div class="form-group col-sm-6 required">
                                    <label class="control-label col-sm-6 text-left" for="email">Current Address: </label>
                                    <div class="col-sm-3">
                                        <textarea type="text" class="form-control onlybottom" name="currentAdd"  required><?php if($this->session->userdata('currentAdd')) echo $this->session->userdata('currentAdd'); ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group col-sm-3 required">

                                    <input type="file" title="Browse" data-error="Please Select Document to upload" name="currentAddDoc" />
                                    <div class="help-block with-errors"></div>

                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="clear"></div>
                            <br/>
                            <div class="form-inline col-lg-12 center-block col-centered">
                                <div class="form-group col-sm-6 required">
                                    <label class="control-label col-sm-6 text-left" for="email">Permanent Address: </label>
                                    <div class="col-sm-3">
                                        <textarea type="text" class="form-control onlybottom" name="permanentAdd" required><?php if($this->session->userdata('permanentAdd')) echo $this->session->userdata('permanentAdd'); ?></textarea>
                                    </div>
                                </div>

                                <div class="form-group col-sm-3 required">

                                    <input type="file" title="Browse" data-error="Please Select Document to upload" name="permanentAddDoc" />
                                    <div class="help-block with-errors"></div>

                                </div>
                                <div class="clear"></div>
                            </div>

                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="button_section">



                        <!-- <a href="page3.html"> -->
                        <button type="submit" name="page2_submit" value="page2_submit" class="btn btn-custom pull-right">Save & Continue</button>
                        <!--</a>
                        -->
                        <a href="javascript:history.back()">
                            <button type="button" class="btn btn-default pull-right" style="margin-right: 5px">Back</button>
                        </a>
                         <?php if($this->session->userdata('sesspage2')==20) { ?>
                    <a href="<?php echo base_url();?>page11">
                            <button type="button" class="btn btn-default pull-right" style="margin-right: 5px">View Summary</button>
                    </a>
                    <?php } ?>


                    </div>



                </form>



            </div>


        </div>



    </div>
