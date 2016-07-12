<div class="formcontainer">

                <div class="text-center">
                    <h3><i><strong>Cambridge Technology Enterprises Ltd.</strong></i></h3>

                    <h4>Employment Information Sheet (India)</h4>
                    <h5>Please Provide Complete and Accurate Information</h5>

                </div>
                <br/>
                <br/>
                <form class="form-horizontal" method="post" action="" role="form">

                     <div class="form-group required">

                                        <label class="control-label col-sm-3 text-left" for="email">Employee type: </label>

                                        <div class="col-sm-8">
                                          
                                            <div class="radio radio-inline">
                                                <label>
                                                    <input type="radio" name="emptypecondiate" <?php if($this->session->userdata('emptypecondiate')!='' && $this->session->userdata('emptypecondiate')=='fre') echo "checked='checked'"; ?> class="radio-employeetype" value="fre" required> Fresher </label>

                                            </div>
                                            <div class="radio radio-inline">
                                                <label>
                                                    <input type="radio" name="emptypecondiate" <?php if($this->session->userdata('emptypecondiate')!='' && $this->session->userdata('emptypecondiate')=='exp') echo "checked='checked'"; ?> class="radio-employeetype" value="exp" required> Experienced</label>
                                            </div>
                                          
                                        </div>
                                    </div>
                    <br/>

<div data-depends="[{'input.radio-employeetype':{'type':'equal', 'value':['exp']}}]">
    
                    <div class="employment">
                        <div class="cont">
                            <h4>Employment History <strong>(<span>1</span>)</strong><i class="emp_close">Remove &nbsp;<i class="glyphicon glyphicon-remove"></i></i></h4>

                            <div class="panel panel-primary">

                                <div class="panel-heading text-left noradius"><big><strong><i>Details of Current or Last Employer</i></strong></big></div>
                                <div class="panel-body">
                                  <?php if($this->session->userdata('campanyfullname')!='' && $this->session->userdata('campanyfullname')!=0) 
                                  { 
                                              $campanyfullname=$this->session->userdata('campanyfullname');
                                              $positionheld=$this->session->userdata('positionheld');
                                              $caddress=$this->session->userdata('campanyfullname');
                                              $ctelephone=$this->session->userdata('campanyfullname');
                                              $empfromyear=$this->session->userdata('campanyfullname');
                                              $emptoyear=$this->session->userdata('campanyfullname');
                                              $cempcode=$this->session->userdata('campanyfullname');
                                              $creportname=$this->session->userdata('campanyfullname');
                                              $Reportpostion=$this->session->userdata('campanyfullname');
                                              $reportcontact=$this->session->userdata('campanyfullname');
                                              
                                              $campanyfullname=$this->session->userdata('emptype');
                                              $campanyfullname=$this->session->userdata('campanyfullname');
                                              $campanyfullname=$this->session->userdata('campanyfullname');
                                              $campanyfullname=$this->session->userdata('campanyfullname');
                                      
                                      
                                      
                                  
                                ?>
                                    <div class="form-group required">

                                        <label class="control-label col-sm-3 text-left" for="email">Company Name (Full Name): </label>

                                        <div class="col-sm-3">
                                            <input type="text" name="campanyfullname[]" class="form-control onlybottom" required>
                                        </div>
                                    </div>
                                    <div class="form-group required">

                                        <label class="control-label col-sm-3 text-left" for="email">Position Held & Department: </label>

                                        <div class="col-sm-3">
                                            <input type="text" name="positionheld[]" class="form-control onlybottom" required>
                                        </div>
                                    </div>

                                    <div class="form-group required">

                                        <label class="control-label col-sm-3 text-left" for="email">Address(Main office & branch where worked): </label>

                                        <div class="col-sm-3">
                                            <textarea type="text" name="caddress[]" class="form-control onlybottom" required></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group required">

                                        <label class="control-label col-sm-3 text-left" for="email">Telephone: </label>

                                        <div class="col-sm-3">
                                            <input type="text" name="ctelephone[]" class="form-control onlybottom" required>
                                        </div>
                                    </div>

                                    <div class="form-group required">

                                        <label class="control-label col-sm-3 text-left" for="email">Employment Period: </label>


                                        <label class="control-label col-sm-1 text-left" for="email">From: </label>
                                        <div class="col-sm-2">
                                            <input type="text"   name="empfromyear[]" class=" empfromyear form-control onlybottom showdatepicker" required>
                                        </div>
                                     <div class="form-group col-sm-3">
                                        <label class="control-label col-sm-4 text-left" for="email">To: </label>
                                        <div class="col-sm-8">
                                            <input type="text"  name="emptoyear[]" class=" emptoyear form-control onlybottom showdatepicker" required>
                                        </div>
                                   </div>
                                    </div>

                                    <div class="form-group required">

                                        <label class="control-label col-sm-3 text-left" for="email">Employee Code: </label>

                                        <div class="col-sm-3">
                                            <input type="text" name="cempcode[]" class="form-control onlybottom" required>
                                        </div>

                                    </div>
                                    <div class="form-group required">

                                        <label class="control-label col-sm-3 text-left" for="email">Reported to Name: </label>

                                        <div class="col-sm-2">
                                            <input type="text" name="creportname[]" class="form-control onlybottom" required>
                                        </div>
                                        
                                        <div class="form-group col-sm-3">
                                        <label class="control-label col-sm-5 text-left" for="email">Position: </label>

                                        <div class="col-sm-7">
                                            <input type="text" name="Reportpostion[]" class="form-control onlybottom" required>
                                        </div>
                                            
                                        </div>
                                        
                                           <div class="form-group col-sm-3">
                                        
                                        <label class="control-label col-sm-5 text-left" for="email">Contact: </label>

                                        <div class="col-sm-7">
                                            <input type="text" name="reportcontact[]" class="form-control onlybottom" required>
                                        </div>
                                               
                                        </div>

                                    </div>

                                    <div class="form-group required">

                                        <label class="control-label col-sm-3 text-left" for="email">Whether employment is of Permanent or temporary nature (Please tick): </label>

                                        <div class="col-sm-8">

                                            <div class="radio radio-inline">
                                                <label>
                                                    <input type="radio" value="P" name="emptype[]" required> Permanent </label>

                                            </div>
                                            <div class="radio radio-inline">
                                                <label>
                                                    <input type="radio" value="T" name="emptype[]" required> Temporary</label>
                                            </div>
                                            <div class="radio radio-inline">
                                                <label>
                                                    <input type="radio" value="C" name="emptype[]" required> Contractual</label>
                                            </div>

                                        </div>


                                    </div>


                                    <div class="form-group">

                                        <label class="control-label col-sm-3 text-left" for="email">Agency Details (If Temporary or Contractual): </label>

                                        <div class="col-sm-3">
                                            <textarea name="agency[]" class="form-control onlybottom"></textarea>

                                        </div>


                                    </div>

                                    <div class="form-group">

                                        <label class="control-label col-sm-3 text-left" for="email">Responsibilities: </label>

                                        <div class="col-sm-3">
                                            <textarea name="responsibilities[]" class="form-control onlybottom"></textarea>
                                        </div>


                                    </div>

                                    <div class="form-group">

                                        <label class="control-label col-sm-3 text-left" for="email">Remuneration: </label>

                                        <div class="col-sm-3">
                                            <input  name="remuneration[]" class="form-control onlybottom" />

                                        </div>


                                    </div>

                                    <div class="form-group">

                                        <label class="control-label col-sm-3 text-left" for="email">Reason(s) for Leaving: </label>

                                        <div class="col-sm-3">
                                            <textarea name="reasonleaving[]" class="form-control onlybottom"></textarea>

                                        </div>


                                    </div>

                                    <div class="form-group">

                                        <label class="control-label col-sm-3 text-left" for="email">PF Number of this Organization (if Any): </label>

                                        <div class="col-sm-3">
                                            <input  name="pfnumber[]" class="form-control onlybottom" />

                                        </div>


                                    </div>

                                    <div class="form-group">

                                        <label class="control-label col-sm-3 text-left" for="email">Can a reference be taken now? : </label>

                                        <div class="col-sm-8">

                                            <div class="radio radio-inline">
                                                <label>
                                                    <input type="radio" value="Y" name="refer[]"> Yes </label>

                                            </div>
                                            <div class="radio radio-inline">
                                                <label>
                                                    <input type="radio" value="N" name="refer[]"> No</label>
                                            </div>


                                        </div>


                                    </div>
                                    <div class="form-group">

                                        <label class="control-label col-sm-3 text-left" for="email">If no, when can it be taken?: </label>

                                        <div class="col-sm-3">

                                            <input name="referncetaken[]" class="form-control onlybottom" />

                                        </div>


                                    </div>
                                  <?php } else { ?>
                                    <div class="form-group required">

                                        <label class="control-label col-sm-3 text-left" for="email">Company Name (Full Name): </label>

                                        <div class="col-sm-3">
                                            <input type="text" name="campanyfullname[]" class="form-control onlybottom" required>
                                        </div>
                                    </div>
                                    <div class="form-group required">

                                        <label class="control-label col-sm-3 text-left" for="email">Position Held & Department: </label>

                                        <div class="col-sm-3">
                                            <input type="text" name="positionheld[]" class="form-control onlybottom" required>
                                        </div>
                                    </div>

                                    <div class="form-group required">

                                        <label class="control-label col-sm-3 text-left" for="email">Address(Main office & branch where worked): </label>

                                        <div class="col-sm-3">
                                            <textarea type="text" name="caddress[]" class="form-control onlybottom" required></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group required">

                                        <label class="control-label col-sm-3 text-left" for="email">Telephone: </label>

                                        <div class="col-sm-3">
                                            <input type="text" name="ctelephone[]" class="form-control onlybottom" required>
                                        </div>
                                    </div>

                                    <div class="form-group required">

                                        <label class="control-label col-sm-3 text-left" for="email">Employment Period: </label>


                                        <label class="control-label col-sm-1 text-left" for="email">From: </label>
                                        <div class="col-sm-2">
                                            <input type="text"   name="empfromyear[]" class=" empfromyear form-control onlybottom showdatepicker" required>
                                        </div>
                                     <div class="form-group col-sm-3">
                                        <label class="control-label col-sm-4 text-left" for="email">To: </label>
                                        <div class="col-sm-8">
                                            <input type="text"  name="emptoyear[]" class=" emptoyear form-control onlybottom showdatepicker" required>
                                        </div>
                                   </div>
                                    </div>

                                    <div class="form-group required">

                                        <label class="control-label col-sm-3 text-left" for="email">Employee Code: </label>

                                        <div class="col-sm-3">
                                            <input type="text" name="cempcode[]" class="form-control onlybottom" required>
                                        </div>

                                    </div>
                                    <div class="form-group required">

                                        <label class="control-label col-sm-3 text-left" for="email">Reported to Name: </label>

                                        <div class="col-sm-2">
                                            <input type="text" name="creportname[]" class="form-control onlybottom" required>
                                        </div>
                                        
                                        <div class="form-group col-sm-3">
                                        <label class="control-label col-sm-5 text-left" for="email">Position: </label>

                                        <div class="col-sm-7">
                                            <input type="text" name="Reportpostion[]" class="form-control onlybottom" required>
                                        </div>
                                            
                                        </div>
                                        
                                           <div class="form-group col-sm-3">
                                        
                                        <label class="control-label col-sm-5 text-left" for="email">Contact: </label>

                                        <div class="col-sm-7">
                                            <input type="text" name="reportcontact[]" class="form-control onlybottom" required>
                                        </div>
                                               
                                        </div>

                                    </div>

                                    <div class="form-group required">

                                        <label class="control-label col-sm-3 text-left" for="email">Whether employment is of Permanent or temporary nature (Please tick): </label>

                                        <div class="col-sm-8">

                                            <div class="radio radio-inline">
                                                <label>
                                                    <input type="radio" value="P" name="emptype[]" required> Permanent </label>

                                            </div>
                                            <div class="radio radio-inline">
                                                <label>
                                                    <input type="radio" value="T" name="emptype[]" required> Temporary</label>
                                            </div>
                                            <div class="radio radio-inline">
                                                <label>
                                                    <input type="radio" value="C" name="emptype[]" required> Contractual</label>
                                            </div>

                                        </div>


                                    </div>


                                    <div class="form-group">

                                        <label class="control-label col-sm-3 text-left" for="email">Agency Details (If Temporary or Contractual): </label>

                                        <div class="col-sm-3">
                                            <textarea name="agency[]" class="form-control onlybottom"></textarea>

                                        </div>


                                    </div>

                                    <div class="form-group">

                                        <label class="control-label col-sm-3 text-left" for="email">Responsibilities: </label>

                                        <div class="col-sm-3">
                                            <textarea name="responsibilities[]" class="form-control onlybottom"></textarea>
                                        </div>


                                    </div>

                                    <div class="form-group">

                                        <label class="control-label col-sm-3 text-left" for="email">Remuneration: </label>

                                        <div class="col-sm-3">
                                            <input  name="remuneration[]" class="form-control onlybottom" />

                                        </div>


                                    </div>

                                    <div class="form-group">

                                        <label class="control-label col-sm-3 text-left" for="email">Reason(s) for Leaving: </label>

                                        <div class="col-sm-3">
                                            <textarea name="reasonleaving[]" class="form-control onlybottom"></textarea>

                                        </div>


                                    </div>

                                    <div class="form-group">

                                        <label class="control-label col-sm-3 text-left" for="email">PF Number of this Organization (if Any): </label>

                                        <div class="col-sm-3">
                                            <input  name="pfnumber[]" class="form-control onlybottom" />

                                        </div>


                                    </div>

                                    <div class="form-group">

                                        <label class="control-label col-sm-3 text-left" for="email">Can a reference be taken now? : </label>

                                        <div class="col-sm-8">

                                            <div class="radio radio-inline">
                                                <label>
                                                    <input type="radio" value="Y" name="refer[]"> Yes </label>

                                            </div>
                                            <div class="radio radio-inline">
                                                <label>
                                                    <input type="radio" value="N" name="refer[]"> No</label>
                                            </div>


                                        </div>


                                    </div>
                                    <div class="form-group">

                                        <label class="control-label col-sm-3 text-left" for="email">If no, when can it be taken?: </label>

                                        <div class="col-sm-3">

                                            <input name="referncetaken[]" class="form-control onlybottom" />

                                        </div>


                                    </div>
                                    
                                    <?php } ?>

                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="newemployment"></div>

                    <button class="btn btn-primary pull-right" type="button" id="addemployment"><span class="glyphicon glyphicon-plus"></span> Add Employment</button>
                    <div class="clear"></div>
                    <br/>
                    <br/>
</div>
                    <div class="button_section">

                       <!-- <a href="page5.html">-->

                            <button type="submit" name="page4_submit" value="page4_submit" class="btn btn-custom pull-right">Save & Continue</button>
                       <!-- </a>-->

                        <a href="javascript:history.back()">
                            <button type="button" class="btn btn-default pull-right" style="margin-right: 5px">Back</button>
                        </a>
                             <?php if($this->session->userdata('sesspage4')==40) { ?>
                    <a href="<?php echo base_url();?>page11">
                            <button type="button" class="btn btn-default pull-right" style="margin-right: 5px">View Summary</button>
                    </a>
                    <?php } ?>

                    </div>



                </form>



            </div>


        </div>



    </div>
