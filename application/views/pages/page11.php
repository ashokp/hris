<div class="formcontainer">

    <div class="text-center">
        <h3><i><strong>Cambridge Technology Enterprises Ltd.</strong></i></h3>

        <h4>Employment Information Sheet (India)</h4>
        <h5>Please Provide Complete and Accurate Information</h5>

    </div>
    <br/>
    <br/>
    <?php 
     $this->session->set_userdata('sesspage1', 10);
     $this->session->set_userdata('sesspage2', 20);
     $this->session->set_userdata('sesspage3', 30);
     $this->session->set_userdata('sesspage4', 40);
     $this->session->set_userdata('sesspage5', 50);
     $this->session->set_userdata('sesspage10', 60);
    
    ?>
    <form class="form-horizontal" method="post" action="" role="form">

        <div class="panel panel-green">

            <div class="panel-heading text-center noradius"><big><strong>Summary</strong></big></div>
            <div class="panel-body">
                <div class="panel panel-default">
                    <div class="panel-heading" style="color:#000"><strong>EMPLOYEE PERSONAL DETAILS SHEET</strong></div>
                      <div class="panel-body">

                        <div class="row">


                                <div class="col-sm-3 colons">
                                    <p>Position Applying for :<?php if($this->session->userdata('appliedFor')) echo $this->session->userdata('appliedFor'); ?> </p>
                                </div>

                                <div class="col-sm-3">
                                    <p>Employee ID :<?php if($this->session->userdata('empId')) echo $this->session->userdata('empId'); ?> </p>
                                </div>

                            <!-- right side -->
                                        
                                            <div class="col-sm-3 colons">
                                                <p>Full name (as in Passport) :<?php if($this->session->userdata('fullName')) echo $this->session->userdata('fullName'); ?> </p>
                                            </div>

                                            <div class="col-sm-3">
                                                <p>First Name : <?php if($this->session->userdata('fName')) echo $this->session->userdata('fName'); ?></p>
                                            </div>

                                            <div class="col-sm-3 colons">
                                             <p>Last Name : <?php if($this->session->userdata('lName')) echo $this->session->userdata('lName'); ?></p>
                                            </div>

                                            <div class="col-sm-3">
                                                <p>Designation :<?php if($this->session->userdata('designation')) echo $this->session->userdata('designation'); ?> </p>
                                            </div>

                            <!-- right side -->
                                        
                                        <div class="col-sm-3 colons">
                                            <p>Joining 
                                                
                                                (dd-mm-yyyy) : <?php if($this->session->userdata('joiningDate')) echo $this->session->userdata('joiningDate'); ?></p>
                                        </div>
                                        
                                        <div class="col-sm-3">
                                            <p>Marital Status : <?php if($this->session->userdata('maritalStatus')) echo $this->session->userdata('maritalStatus'); ?></p>
                                        </div>
                                           <div class="col-sm-3 colons">
                                                <p>Gender : <?php if($this->session->userdata('gender')!='' && $this->session->userdata('gender')== 1) {echo 'Male'; } else { echo 'Female';} ?></p>
                                           </div>
                                        
                                    </div>
                                    

                                    <button type="button" class="btn btn-md btn-custom pull-right"><a style="color:#fff;" href="<?php echo base_url();?>" >Edit</a></button>

                                </div>
                            </div>
                

                            <div class="clear"></div>
                            <br/>
                            <br/>
                            <div class="panel panel-default">
                    <div class="panel-heading" style="color:#000"><strong>DOB information</strong></div>
                      <div class="panel-body">

                        <div class="row">


                                <div class="col-sm-3 colons">
                                    <p>Actual Date of Birth:  <?php if($this->session->userdata('actualDob')) echo $this->session->userdata('actualDob'); ?></p>
                                </div>

                                <div class="col-sm-3">
                                    <p>Date Of Birth as per records : <?php if($this->session->userdata('dobAsPerRecords')) echo $this->session->userdata('dobAsPerRecords'); ?></p>
                                </div>

                            <!-- right side -->
                                        
                                            <div class="col-sm-3 colons">
                                                <p>Place of Birth: <?php if($this->session->userdata('placeOfBirth')) echo $this->session->userdata('placeOfBirth'); ?></p>
                                            </div>

                                            
                            <!-- right side -->
                                        
                                        
                                        
                                    </div>
                                    

                                   <button type="button" class="btn btn-md btn-custom pull-right"><a style="color:#fff;" href="<?php echo base_url();?>" >Edit</a></button>

                                </div>
                            </div>
                

                            <div class="clear"></div>
                            <br/>
                            <br/>
                            
                             <div class="panel panel-default">
                    <div class="panel-heading" style="color:#000"><strong>Contact Information</strong></div>
                      <div class="panel-body">

                        <div class="row">


                                <div class="col-sm-3 colons">
                                    <p>Landline number : <?php if($this->session->userdata('landNumber')) echo $this->session->userdata('landNumber'); ?> </p>
                                </div>

                                <div class="col-sm-3">
                                    <p>Mobile Number : <?php if($this->session->userdata('mobileNumber')) echo $this->session->userdata('mobileNumber'); ?> </p>
                                </div>

                               

                                <div class="col-sm-6">
                                    <p>Contact Number in case of emergency :<?php if($this->session->userdata('emerNumber')) echo $this->session->userdata('emerNumber'); ?> </p>
                                </div>
                               <div class="col-sm-3 colons">
                                    <p>Name : <?php if($this->session->userdata('emerName')) echo $this->session->userdata('emerName'); ?></p>
                                </div>

                                <div class="col-sm-3">
                                    <p>Relationship:  <?php if($this->session->userdata('emerRelation')) echo $this->session->userdata('emerRelation'); ?></p>
                                </div>
                                  <div class="col-sm-3 colons">
                                    <p>Email ID : <?php if($this->session->userdata('emailId')) echo $this->session->userdata('emailId'); ?> </p>
                                </div>     
                                        
                                        
                                    </div>
                                    

                                   <button type="button" class="btn btn-md btn-custom pull-right"><a style="color:#fff;" href="<?php echo base_url();?>page2" >Edit</a></button>

                                </div>
                            </div>
                

                            <div class="clear"></div>
                            <br/>
                            <br/>
                            
                            <div class="panel panel-default">
                    <div class="panel-heading" style="color:#000"><strong>Address Details</strong></div>
                      <div class="panel-body">

                        <div class="row">


                                <div class="col-sm-6 colons">
                                    <p>Current Address  :  <?php if($this->session->userdata('currentAdd')) echo $this->session->userdata('currentAdd'); ?></p>
                                </div>

                                <div class="col-sm-6">
                                    <p>Permanent Address:  <?php if($this->session->userdata('permanentAdd')) echo $this->session->userdata('permanentAdd'); ?></p>
                                </div>

                               

                                
                                        
                                        
                                </div>
                                    

                                   <button type="button" class="btn btn-md btn-custom pull-right"><a style="color:#fff;" href="<?php echo base_url();?>page2" >Edit</a></button>

                                </div>
                            </div>
                

                            <div class="clear"></div>
                            <br/>
                            <br/>
                            <div class="panel panel-default">
                    <div class="panel-heading" style="color:#000"><strong>Family - dependent Details</strong></div>
                      <div class="panel-body">

                          <div class="row">


                                <div class="col-sm-3 colons">
                                    <p>Father's Name : <?php if($this->session->userdata('fathersName')) echo $this->session->userdata('fathersName'); ?></p>
                                </div>

                                <div class="col-sm-3">
                                    <p>DOB : <?php if($this->session->userdata('fathersDob')) echo $this->session->userdata('fathersDob'); ?></p>
                                </div>
                                <div class="col-sm-3 colons">
                                    <p>Mother's Name : <?php if($this->session->userdata('mothersName')) echo $this->session->userdata('mothersName'); ?></p>
                                </div>

                                <div class="col-sm-3">
                                    <p>DOB : <?php if($this->session->userdata('mothersDob')) echo $this->session->userdata('mothersDob'); ?></p>
                                </div>
                               <div class="col-sm-3 colons">
                                    <p>Spouse Name : <?php if($this->session->userdata('spouseName')) echo $this->session->userdata('spouseName'); ?></p>
                                </div>

                                <div class="col-sm-3">
                                    <p>DOB : <?php if($this->session->userdata('spouseDob')) echo $this->session->userdata('spouseDob'); ?></p>
                                </div>
                                <div class="col-sm-3 colons">
                                    <p>Child 1 Name : <?php if($this->session->userdata('child1Name')) echo $this->session->userdata('child1Name'); ?></p>
                                </div>

                                <div class="col-sm-3">
                                    <p>DOB : <?php if($this->session->userdata('child1Dob')) echo $this->session->userdata('child1Dob'); ?></p>
                                </div>
                               <div class="col-sm-3 colons">
                                    <p>Gender : <?php if($this->session->userdata('child1Gender')) echo $this->session->userdata('child1Gender'); ?></p>
                                </div>
                                <div class="col-sm-3 colons">
                                    <p>Child 2 Name : <?php if($this->session->userdata('child2Name')) echo $this->session->userdata('child2Name'); ?></p>
                                </div>

                                <div class="col-sm-3">
                                    <p>DOB : <?php if($this->session->userdata('child2Dob')) echo $this->session->userdata('child2Dob'); ?></p>
                                </div>
                              <div class="col-sm-3 colons">
                                    <p>Gender : <?php if($this->session->userdata('child2Gender')) echo $this->session->userdata('child2Gender'); ?></p>
                                </div>

                                
                                   

                                
                                        
                                </div>
                                    

                                    <button type="button" class="btn btn-md btn-custom pull-right"><a style="color:#fff;" href="<?php echo base_url();?>page3" >Edit</a></button>

                                </div>
                            </div>
                

                            <div class="clear"></div>
                            <br/>
                            <br/>
                                <div class="panel panel-default">
                    <div class="panel-heading" style="color:#000"><strong>Passport and Visa Information</strong></div>
                      <div class="panel-body">

                          <div class="row">


                                <div class="col-sm-3 colons">
                                    <p>Passport Number : <?php if($this->session->userdata('passNumber')) echo $this->session->userdata('passNumber'); ?></p>
                                </div>

                                <div class="col-sm-3">
                                    <p>Place of Issue : <?php if($this->session->userdata('passPlace')) echo $this->session->userdata('passPlace'); ?></p>
                                </div>
                                <div class="col-sm-3 colons">
                                    <p>Validity From(dd/mm/yy) : <?php if($this->session->userdata('passFrom')) echo $this->session->userdata('passFrom'); ?></p>
                                </div>

                                <div class="col-sm-3">
                                    <p>Validity To(dd/mm/yy) : <?php if($this->session->userdata('passTo')) echo $this->session->userdata('passTo'); ?> </p>
                                </div>
                               <div class="col-sm-3 colons">
                                    <p>Visa Type : <?php if($this->session->userdata('visaType')) echo $this->session->userdata('visaType'); ?></p>
                                </div>

                                <div class="col-sm-3">
                                    <p>Consulate Issued : <?php if($this->session->userdata('visaIssued')) echo $this->session->userdata('visaIssued'); ?></p>
                                </div>
                                <div class="col-sm-3 colons">
                                    <p>Validity From(dd/mm/yy) : <?php if($this->session->userdata('visaFrom')) echo $this->session->userdata('visaFrom'); ?></p>
                                </div>

                                <div class="col-sm-3">
                                    <p>Validity To(dd/mm/yy) : <?php if($this->session->userdata('visaTo')) echo $this->session->userdata('visaTo'); ?></p>
                                </div>
                                <div class="col-sm-3 colons">
                                    <p>I797 - (for L1/H1 only) : <?php if($this->session->userdata('visaTypeFor')) echo $this->session->userdata('visaTypeFor'); ?></p>
                                </div>

                                <div class="col-sm-3">
                                    <p>Consulate Issued : <?php if($this->session->userdata('visaIssuedFor')) echo $this->session->userdata('visaIssuedFor'); ?></p>
                                </div>
                             <div class="col-sm-3 colons">
                                    <p>Validity From(dd/mm/yy) : <?php if($this->session->userdata('visaFromFor')) echo $this->session->userdata('visaFromFor'); ?></p>
                                </div>

                                <div class="col-sm-3">
                                    <p>Validity To(dd/mm/yy) : <?php if($this->session->userdata('visaToFor')) echo $this->session->userdata('visaToFor'); ?></p>
                                </div>

                                
                                        
                                </div>
                                    

                                    <button type="button" class="btn btn-md btn-custom pull-right"><a style="color:#fff;" href="<?php echo base_url();?>page3" >Edit</a></button>

                                </div>
                            </div>
                

                            <div class="clear"></div>
                            <br/>
                            <br/>
                            
                            <div class="panel panel-default">
                    <div class="panel-heading" style="color:#000"><strong>Miscellaneous</strong></div>
                      <div class="panel-body">

                          <div class="row">


                                <div class="col-sm-3 colons">
                                    <p>Blood group : <?php if($this->session->userdata('bloodGp')) echo $this->session->userdata('bloodGp'); ?></p>
                                </div>

                                <div class="col-sm-3">
                                    <p>PAN card number : <?php if($this->session->userdata('panCdNo')) echo $this->session->userdata('panCdNo'); ?></p>
                                </div>
                                
                                </div>
                                    

                                    <button type="button" class="btn btn-md btn-custom pull-right"><a style="color:#fff;" href="<?php echo base_url();?>page3" >Edit</a></button>

                                </div>
                            </div>
                

                            <div class="clear"></div>
                            <br/>
                            <br/>
                             <div class="panel panel-default">
                    <div class="panel-heading" style="color:#000"><strong>Educational Qualification</strong></div>
                      <div class="panel-body">

                          <div class="row">


                                <div class="col-sm-6 colons">
                                    <p>College/University, Place of Class 10:<?php if($this->session->userdata('class10Ini')) echo $this->session->userdata('class10Ini'); ?> </p>
                                </div>

                                <div class="col-sm-3">
                                    <p>Duration : <?php if($this->session->userdata('class10From')) echo $this->session->userdata('class10From'); ?> - <?php if($this->session->userdata('class10To')) echo $this->session->userdata('class10To'); ?></p>
                                </div>
                               <div class="col-sm-3">
                                    <p>Percentage of Marks : <?php if($this->session->userdata('class10Aggr')) echo $this->session->userdata('class10Aggr'); ?></p>
                                </div>
                                <div class="col-sm-6 colons">
                                    <p>College/University, Place of Class 12: <?php if($this->session->userdata('class12Ini')) echo $this->session->userdata('class12Ini'); ?></p>
                                </div>

                                <div class="col-sm-3">
                                    <p>Duration :<?php if($this->session->userdata('class12From')) echo $this->session->userdata('class12From'); ?> - <?php if($this->session->userdata('class12To')) echo $this->session->userdata('class12To'); ?> </p>
                                </div>
                               <div class="col-sm-3">
                                    <p>Percentage of Marks : <?php if($this->session->userdata('class12Aggr')) echo $this->session->userdata('class12Aggr'); ?> </p>
                                </div>
                              <div class="col-sm-6 colons">
                                    <p>College/University, Place of  Graduation: <?php if($this->session->userdata('classGradIni')) echo $this->session->userdata('classGradIni'); ?> </p>
                                </div>

                                <div class="col-sm-3">
                                    <p>Duration : <?php if($this->session->userdata('classGradFrom')) echo $this->session->userdata('classGradFrom'); ?> - <?php if($this->session->userdata('classGradTo')) echo $this->session->userdata('classGradTo'); ?> </p>
                                </div>
                               <div class="col-sm-3">
                                    <p>Percentage of Marks : <?php if($this->session->userdata('classGradAggr')) echo $this->session->userdata('classGradAggr'); ?> </p>
                                </div>
                              <?php if($this->session->userdata('classPgIni')!='') { ?>
                               <div class="col-sm-6 colons">
                                    <p>College/University, Place of Post Graduation : <?php if($this->session->userdata('classPgIni')) echo $this->session->userdata('classPgIni'); ?> </p>
                                </div>

                                <div class="col-sm-3">
                                    <p>Duration : <?php if($this->session->userdata('classPgFrom')) echo $this->session->userdata('classPgFrom'); ?> - <?php if($this->session->userdata('classPgTo')) echo $this->session->userdata('classPgTo'); ?></p>
                                </div>
                               <div class="col-sm-3">
                                    <p>Percentage of Marks : <?php if($this->session->userdata('classPgAggr')) echo $this->session->userdata('classPgAggr'); ?></p>
                                </div>
                              <?php } ?>
                              <?php if($this->session->userdata('othercertificate')!='' && $this->session->userdata('othercertificate'))
                                             {
                                                $othercertificate=$this->session->userdata('othercertificate');
                                                $othercertificateyearfrm=$this->session->userdata('othercertificateyearfrm');
                                                $othercertificateyearto=$this->session->userdata('othercertificateyearto');
                                                $classotherAggr=$this->session->userdata('classotherAggr');
                                                //$certicatebrowse=$this->session->userdata('certicatebrowse');
                                                for($i=0;$i<=count($othercertificate);$i++){
                                                
                                            
                                  ?>
                                <div class="col-sm-6 colons">
                                    <p>College/University, Place of Certifications if any : <?php  echo $othercertificate[$i]; ?> </p>
                                </div>

                                <div class="col-sm-3">
                                    <p>Duration : <?php  echo $othercertificateyearfrm[$i]; ?>  - <?php  echo $othercertificateyearto[$i]; ?> </p>
                                </div>
                               <div class="col-sm-3">
                                    <p>Percentage of Marks : <?php  echo $classotherAggr[$i]; ?>  - <?php  echo $classotherAggr[$i]; ?> </p>
                                </div>
                              
                                </div>
                                             <?php } } ?>  

                                     <button type="button" class="btn btn-md btn-custom pull-right"><a style="color:#fff;" href="<?php echo base_url();?>page3" >Edit</a></button>

                                </div>
                            </div>
                

                            <div class="clear"></div>
                            <br/>
                            <br/>
                             <div class="panel panel-default">
                    <div class="panel-heading" style="color:#000"><strong>Professional Details</strong></div>
                      <div class="panel-body">

                          <div class="row">


                                <div class="col-sm-3 colons">
                                    <p>Total yrs of exp : <?php if($this->session->userdata('totalExpInYears')) echo $this->session->userdata('totalExpInYears'); ?></p>
                                </div>

                                <div class="col-sm-3">
                                    <p>Relevant IT exp : <?php if($this->session->userdata('relevantExpInYears')) echo $this->session->userdata('relevantExpInYears'); ?></p>
                                </div>
                               <div class="col-sm-3 colons">
                                    <p>Exp in current role : <?php if($this->session->userdata('cureentExpInYears')) echo $this->session->userdata('cureentExpInYears'); ?></p>
                                </div>

                                <div class="col-sm-3">
                                    <p>Primary Skills : <?php if($this->session->userdata('primarySkills')) echo $this->session->userdata('primarySkills'); ?></p>
                                </div>
                               <div class="col-sm-3">
                                    <p>Secondary Skills : <?php if($this->session->userdata('secondarySkills')) echo $this->session->userdata('secondarySkills'); ?></p>
                                </div>
                               <div class="col-sm-3">
                                    <p>Tertiary skills : <?php if($this->session->userdata('tertiarySkills')) echo $this->session->userdata('tertiarySkills'); ?></p>
                                </div>
                                
                                </div>
                                    

                                    <button type="button" class="btn btn-md btn-custom pull-right"><a style="color:#fff;" href="<?php echo base_url();?>page3" >Edit</a></button>

                                </div>
                            </div>
                

                            <div class="clear"></div>
                            <br/>
                            <br/>
                             <div class="panel panel-default">
                    <div class="panel-heading" style="color:#000"><strong>Details of Current or Last Employer</strong></div>
                      <div class="panel-body">

                          <div class="row">

                                
                                <?php if($this->session->userdata('emptypecondiate')!='' && $this->session->userdata('emptypecondiate')=='fre'){ ?>
                                 <div class="col-sm-12 colons">
                                    <p>Employee type : <?php echo 'Fresher'; ?></p>
                                </div>
                                <?php } if($this->session->userdata('emptypecondiate')!='' && $this->session->userdata('emptypecondiate')=='exp'){ ?>
                                <div class="col-sm-3 colons">
                                    <p>Company Name (Full Name): <?php if($this->session->userdata('campanyfullname')) echo $this->session->userdata('campanyfullname'); ?></p>
                                </div>

                                <div class="col-sm-3">
                                    <p>Position Held & Department: <?php if($this->session->userdata('positionheld')) echo $this->session->userdata('positionheld'); ?> </p>
                                </div>
                               <div class="col-sm-6 colons">
                                    <p>Address(Main office & branch where worked): <?php if($this->session->userdata('caddress')) echo $this->session->userdata('caddress'); ?></p>
                                </div>

                                <div class="col-sm-3">
                                    <p>Telephone : <?php if($this->session->userdata('ctelephone')) echo $this->session->userdata('ctelephone'); ?></p>
                                </div>
                               <div class="col-sm-3">
                                    <p>Employment Period: <?php if($this->session->userdata('empfromyear')) echo $this->session->userdata('empfromyear'); ?> -  <?php if($this->session->userdata('emptoyear')) echo $this->session->userdata('emptoyear'); ?></p>
                                </div>
                               <div class="col-sm-3">
                                    <p>Employee Code : <?php if($this->session->userdata('cempcode')) echo $this->session->userdata('cempcode'); ?></p>
                                </div>
                                <div class="col-sm-3">
                                    <p>Reported to Name : <?php if($this->session->userdata('creportname')) echo $this->session->userdata('creportname'); ?></p>
                                </div>
                                 <div class="col-sm-3">
                                    <p>Position:  : <?php if($this->session->userdata('Reportpostion')) echo $this->session->userdata('Reportpostion'); ?></p>
                                </div>
                                <div class="col-sm-3">
                                    <p>Contact : <?php if($this->session->userdata('reportcontact')) echo $this->session->userdata('reportcontact'); ?></p>
                                </div>
                               <div class="col-sm-12">
                                    <p>Whether employment is of Permanent or temporary nature (Please tick): <?php if($this->session->userdata('emptype')) echo $this->session->userdata('emptype'); ?> </p>
                                </div>
                                <div class="col-sm-12">
                                    <p>Agency Details (If Temporary or Contractual): <?php if($this->session->userdata('agency')) echo $this->session->userdata('agency'); ?></p>
                                </div>
                               <div class="col-sm-12">
                                    <p>Responsibilities : <?php if($this->session->userdata('responsibilities')) echo $this->session->userdata('responsibilities'); ?></p>
                                </div>
                               <div class="col-sm-6">
                                    <p>Remuneration: <?php if($this->session->userdata('remuneration')) echo $this->session->userdata('remuneration'); ?></p>
                                </div>
                              <div class="col-sm-6">
                                    <p>Reason(s) for Leaving : <?php if($this->session->userdata('reasonleaving')) echo $this->session->userdata('reasonleaving'); ?></p>
                                </div>
                              <div class="col-sm-6">
                                    <p>PF Number of this Organization (if Any): <?php if($this->session->userdata('pfnumber')) echo $this->session->userdata('pfnumber'); ?></p>
                                </div>
                              <div class="col-sm-6">
                                    <p>Can a reference be taken now? : <?php if($this->session->userdata('refer')) echo $this->session->userdata('refer'); ?></p>
                                </div>
                               <div class="col-sm-6">
                                    <p>If no, when can it be taken? : <?php if($this->session->userdata('referncetaken')) echo $this->session->userdata('referncetaken'); ?></p>
                                </div>
                                <?php } ?>
                                </div>
                                    

                                     <button type="button" class="btn btn-md btn-custom pull-right"><a style="color:#fff;" href="<?php echo base_url();?>page4" >Edit</a></button>

                                </div>
                            </div>
                

                            <div class="clear"></div>
                            <br/>
                            <br/>
                            <div class="panel panel-default">
                    <div class="panel-heading" style="color:#000"><strong>Details to be furnished by the Candidate Reference (1)</strong></div>
                      <div class="panel-body">

                          <div class="row">


                                <div class="col-sm-3 colons">
                                    <p>Reference : <?php if($this->session->userdata('reference1')) echo $this->session->userdata('reference1'); ?></p>
                                </div>

                                <div class="col-sm-3">
                                    <p>Occupation : <?php if($this->session->userdata('occupation1')) echo $this->session->userdata('occupation1'); ?></p>
                                </div>
                               <div class="col-sm-6 colons">
                                    <p>Address :<?php if($this->session->userdata('refaddress1')) echo $this->session->userdata('refaddress1'); ?>  </p>
                                </div>

                                <div class="col-sm-3">
                                    <p>Contact Number : <?php if($this->session->userdata('refcontact1')) echo $this->session->userdata('refcontact1'); ?></p>
                                </div>
                              
                               <div class="col-sm-3">
                                    <p>E-mail Id : <?php if($this->session->userdata('refmailid1')) echo $this->session->userdata('refmailid1'); ?></p>
                                </div>
                                
                                </div>
                                    

                                   <button type="button" class="btn btn-md btn-custom pull-right"><a style="color:#fff;" href="<?php echo base_url();?>page5" >Edit</a></button>

                                </div>
                            </div>
                

                            <div class="clear"></div>
                            <br/>
                            <br/>
                            <div class="panel panel-default">
                    <div class="panel-heading" style="color:#000"><strong>Details to be furnished by the Candidate Reference (2)</strong></div>
                      <div class="panel-body">

                          <div class="row">


                                 <div class="col-sm-3 colons">
                                    <p>Reference : <?php if($this->session->userdata('reference2')) echo $this->session->userdata('reference2'); ?></p>
                                </div>

                                <div class="col-sm-3">
                                    <p>Occupation : <?php if($this->session->userdata('occupation2')) echo $this->session->userdata('occupation2'); ?></p>
                                </div>
                               <div class="col-sm-6 colons">
                                    <p>Address :<?php if($this->session->userdata('refaddress2')) echo $this->session->userdata('refaddress2'); ?>  </p>
                                </div>

                                <div class="col-sm-3">
                                    <p>Contact Number : <?php if($this->session->userdata('refcontact2')) echo $this->session->userdata('refcontact2'); ?></p>
                                </div>
                              
                               <div class="col-sm-3">
                                    <p>E-mail Id : <?php if($this->session->userdata('refmailid2')) echo $this->session->userdata('refmailid2'); ?></p>
                                </div>
                                
                                </div>
                                    

                                   <button type="button" class="btn btn-md btn-custom pull-right"><a style="color:#fff;" href="<?php echo base_url();?>page5" >Edit</a></button>

                                </div>
                            </div>
                

                            <div class="clear"></div>
                            <br/>
                            <br/>
                            <div class="panel panel-default">
                    <div class="panel-heading" style="color:#000"><strong>Details to be furnished by the Candidate Reference (3)</strong></div>
                      <div class="panel-body">

                          <div class="row">


                                <div class="col-sm-3 colons">
                                    <p>Reference : <?php if($this->session->userdata('reference3')) echo $this->session->userdata('reference3'); ?></p>
                                </div>

                                <div class="col-sm-3">
                                    <p>Occupation : <?php if($this->session->userdata('occupation3')) echo $this->session->userdata('occupation3'); ?></p>
                                </div>
                               <div class="col-sm-6 colons">
                                    <p>Address :<?php if($this->session->userdata('refaddress3')) echo $this->session->userdata('refaddress3'); ?>  </p>
                                </div>

                                <div class="col-sm-3">
                                    <p>Contact Number : <?php if($this->session->userdata('refcontact3')) echo $this->session->userdata('refcontact3'); ?></p>
                                </div>
                              
                               <div class="col-sm-3">
                                    <p>E-mail Id : <?php if($this->session->userdata('refmailid3')) echo $this->session->userdata('refmailid3'); ?></p>
                                </div>
                                
                                </div>
                                    

                                   <button type="button" class="btn btn-md btn-custom pull-right"><a style="color:#fff;" href="<?php echo base_url();?>page5" >Edit</a></button>
                                </div>
                            </div>
                

                            <div class="clear"></div>
                            <br/>
                            <br/>
                            <div class="panel panel-default">
                    <div class="panel-heading" style="color:#000"><strong>Nomination Information</strong></div>
                      <div class="panel-body">

                          <div class="row">


                                <div class="col-sm-6 colons">
                                    <p>Name of the Nominee : <?php if($this->session->userdata('nomineename')) echo $this->session->userdata('nomineename'); ?></p>
                                </div>

                                <div class="col-sm-6">
                                    <p>Relationship with the employee : <?php if($this->session->userdata('relationnominee')) echo $this->session->userdata('relationnominee'); ?></p>
                                </div>
                               <div class="col-sm-6 colons">
                                    <p>Date of Birth of the nominee : <?php if($this->session->userdata('nomieedob')) echo $this->session->userdata('nomieedob'); ?></p>
                                </div>

                                <div class="col-sm-6">
                                    <p>Full address of the nominee : <?php if($this->session->userdata('nomineeaddress')) echo $this->session->userdata('nomineeaddress'); ?></p>
                                </div>
                               <div class="col-sm-6">
                                    <p>Contact No : <?php if($this->session->userdata('nomineecontact')) echo $this->session->userdata('nomineecontact'); ?></p>
                                </div>
                              <?php if($this->session->userdata('nomineeisminor')!='' && $this->session->userdata('nomineeisminor')=='yes') { ?>
                               <div class="col-sm-6">
                                    <p>In case nominee is a minor : <?php if($this->session->userdata('nomineeisminor')) echo $this->session->userdata('nomineeisminor'); ?></p>
                                </div>
                              <div class="col-sm-6">
                                    <p>Guardian for the minor nominee : <?php if($this->session->userdata('guardiannomiee')) echo $this->session->userdata('guardiannomiee'); ?></p>
                                </div>
                              <div class="col-sm-6">
                                    <p>Name of the Guardian for the minor nominee : <?php if($this->session->userdata('nameguardian')) echo $this->session->userdata('nameguardian'); ?></p>
                                </div>
                              <div class="col-sm-6">
                                    <p>Relationship with the minor : <?php if($this->session->userdata('relationshipminor')) echo $this->session->userdata('tertiarySkills'); ?></p>
                                </div>
                              <div class="col-sm-6">
                                    <p>Address of the Guardian : <?php if($this->session->userdata('guardianaddress')) echo $this->session->userdata('guardianaddress'); ?></p>
                                </div>
                              <?php }  ?>
                                </div>
                                    

                                    <button type="button" class="btn btn-md btn-custom pull-right"><a style="color:#fff;" href="<?php echo base_url();?>page10" >Edit</a></button>

                                </div>
                            </div>
                

                            <div class="clear"></div>
                            <br/>
                            <br/>
                        </div>
                    </div>
                   

                    <div class="button_section">
                       
                        
                            <button type="Submit" name="page11_submit" value="page11_submit" class="btn btn-green pull-right">Submit</button>

                      
                            <a href="javascript:history.back()">
                    <button type="button" class="btn btn-default pull-right" style="margin-right: 5px">Back</button>
                </a>




                    </div>



                    </form>



                </div>


            </div>



        </div>