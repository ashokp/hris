<div class="formcontainer">

                <div class="text-center">
                    <h3><i><strong>Cambridge Technology Enterprises Ltd.</strong></i></h3>

                    <h4>Employment Information Sheet (India)</h4>
                    <h5>Please Provide Complete and Accurate Information</h5>

                </div>
                <br/>
                <br/>
                <form class="form-horizontal" method="post" action="" role="form">

                    <div class="panel panel-green">

                        <div class="panel-heading text-center noradius"><big><strong>Nomination Form<br/>(For the purpose of Gratuity and Accident Insurance)</strong></big></div>
                        <div class="panel-body">

                            <div class="col-lg-10 center-block text-center col-centered">
                            I hereby nominate the person mentioned below who shall, in the event of my death, be entitled to receive the gratuity amount and Accident Insurance amount entitled to me.
                            </div>
                            
                            
                            <br/>
                       
                            
                            <div class="form-group required">

                                <label class="control-label col-sm-4 text-left" for="email">Name of the Nominee (in block letters): </label>

                                <div class="col-sm-3">
                                    <input type="text" name="nomineename" value="<?php if($this->session->userdata('nomineename')) echo $this->session->userdata('nomineename'); ?>" class="form-control onlybottom" required>
                                </div>
                            </div>
                            
                            <div class="form-group required">

                                <label class="control-label col-sm-4 text-left" for="email">Relationship with the employee: </label>

                                <div class="col-sm-3">
                                    <input type="text" name="relationnominee" value="<?php if($this->session->userdata('relationnominee')) echo $this->session->userdata('relationnominee'); ?>" class="form-control onlybottom" required>
                                </div>
                            </div>
                            
                            <div class="form-group required">

                                <label class="control-label col-sm-4 text-left" for="email">Date of Birth of the nominee: </label>

                                <div class="col-sm-3">
                                    <input type="text" name="nomieedob" value="<?php if($this->session->userdata('nomieedob')) echo $this->session->userdata('nomieedob'); ?>" class="form-control onlybottom showdatepicker" required>
                                </div>
                            </div>
                            
                            
                            <div class="form-group required">

                                <label class="control-label col-sm-4 text-left" for="email">Full address of the nominee: </label>

                                <div class="col-sm-3">
                                    <textarea name="nomineeaddress" value="<?php if($this->session->userdata('nomineeaddress')) echo $this->session->userdata('nomineeaddress'); ?>" class="form-control onlybottom" required></textarea>
                                </div>
                            </div>
                            
                            <div class="form-group required">

                                <label class="control-label col-sm-4 text-left" for="email">Contact No: </label>

                                <div class="col-sm-3">
                                    <input type="text" name="nomineecontact" value="<?php if($this->session->userdata('nomineecontact')) echo $this->session->userdata('nomineecontact'); ?>" class="form-control onlybottom" required/>
                                </div>
                            </div>
                            
                            <div class="form-group">

                                <label class="control-label col-sm-4 text-left" for="email">In case nominee is a minor </label>

                                <div class="col-sm-3 checkbox checkbox-inline">
                                  &nbsp;&nbsp;&nbsp;&nbsp;  <input type="checkbox" <?php if($this->session->userdata('nomineeisminor')!='' && $this->session->userdata('nomineeisminor')=='yes') echo "checked='checked'"; ?> name="nomineeisminor" class="checkbox-minor" value="yes">
                                </div>
                            </div>
                     
                            <div data-depends="[{'input.checkbox-minor':{'type':'equal', 'value':['yes']}}]">
                            
                            <div class="form-group">

                                <label class="control-label col-sm-4 text-left" for="email">Guardian for the minor nominee: </label>

                                <div class="col-sm-3">
                                    <input type="text" name="guardiannomiee" value="<?php if($this->session->userdata('guardiannomiee')) echo $this->session->userdata('guardiannomiee'); ?>" class="form-control onlybottom">
                                </div>
                            </div>
                            
                            <div class="form-group">

                                <label class="control-label col-sm-4 text-left" for="email">Name of the Guardian for the minor nominee: </label>

                                <div class="col-sm-3">
                                    <input type="text" name="nameguardian" value="<?php if($this->session->userdata('nameguardian')) echo $this->session->userdata('nameguardian'); ?>" class="form-control onlybottom">
                                </div>
                            </div>
                            
                            <div class="form-group">

                                <label class="control-label col-sm-4 text-left" for="email">Relationship with the minor: </label>

                                <div class="col-sm-3">
                                    <input type="text" name="relationshipminor" value="<?php if($this->session->userdata('relationshipminor')) echo $this->session->userdata('relationshipminor'); ?>" class="form-control onlybottom">
                                </div>
                            </div>
                            <div class="form-group">

                                <label class="control-label col-sm-4 text-left" for="email">Address of the Guardian: </label>

                                <div class="col-sm-3">
                                    <textarea name="guardianaddress" value="<?php if($this->session->userdata('relationshipminor')) echo $this->session->userdata('relationshipminor'); ?>" class="form-control onlybottom"></textarea>
                                </div>
                            </div>
                            
                           
                            
                    
                    <div class="clear"></div>
                    <br/>
                    <br/>

                            </div>
                        </div>
                    </div>


                    <div class="button_section">

                  
                            <button type="submit" name="page10_submit" value="page10_submit" class="btn btn-green pull-right">Save & View Summary</button>

                      
                        <a href="javascript:history.back()">
                            <button type="button" class="btn btn-default pull-right" style="margin-right: 5px">Back</button>
                        </a>
                        
                         <?php if($this->session->userdata('sesspage10')==60) { ?>
                    <a href="<?php echo base_url();?>page11">
                            <button type="button" class="btn btn-default pull-right" style="margin-right: 5px">View Summary</button>
                    </a>
                    <?php } ?>


                    </div>



                </form>



            </div>


        </div>



    </div>
