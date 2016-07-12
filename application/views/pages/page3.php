<div class="formcontainer">

                <div class="text-center">
                    <h3><i><strong>Cambridge Technology Enterprises Ltd.</strong></i></h3>

                    <h4>Employment Information Sheet (India)</h4>
                    <h5>Please Provide Complete and Accurate Information</h5>

                </div>
                <br/>
                <br/>
                <form class="form-horizontal" action="" method="post" role="form">

                    <div class="panel panel-primary">

                        <div class="panel-heading text-center noradius"><big><strong>Family - dependent Details</strong></big></div>
                        <div class="panel-body">

                            <div class="form-group">

                                <label class="control-label col-sm-3 text-left" for="email">Father's Name: </label>

                                <div class="col-sm-3">
                                    <input type="text" class="form-control onlybottom" value="<?php if($this->session->userdata('fathersName')) echo $this->session->userdata('fathersName'); ?>" name="fathersName">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3 text-left" for="email">DOB: </label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control onlybottom showdatepicker" value="<?php if($this->session->userdata('fathersDob')) echo $this->session->userdata('fathersDob'); ?>" name="fathersDob">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3 text-left" for="email">Mother's Name: </label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control onlybottom" value="<?php if($this->session->userdata('mothersName')) echo $this->session->userdata('mothersName'); ?>" name="mothersName">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3 text-left" for="email">DOB: </label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control onlybottom showdatepicker" value="<?php if($this->session->userdata('mothersDob')) echo $this->session->userdata('mothersDob'); ?>" name="mothersDob">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3 text-left" for="email">Spouse Name: </label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control onlybottom" value="<?php if($this->session->userdata('spouseName')) echo $this->session->userdata('spouseName'); ?>" name="spouseName">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3 text-left" for="email">DOB: </label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control onlybottom showdatepicker" value="<?php if($this->session->userdata('spouseDob')) echo $this->session->userdata('spouseDob'); ?>" name="spouseDob">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3 text-left" for="email">Child 1 Name: </label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control onlybottom" value="<?php if($this->session->userdata('child1Name')) echo $this->session->userdata('child1Name'); ?>" name="child1Name">
                                </div>

                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3 text-left" for="email">DOB: </label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control onlybottom showdatepicker" value="<?php if($this->session->userdata('child1Dob')) echo $this->session->userdata('child1Dob'); ?>" name="child1Dob">
                                </div>

                                <label class="control-label col-sm-1 text-left" for="email">Gender: </label>
                                <div class="col-sm-3">

                                    <div class="radio radio-inline">
                                        <label>
                                            <input type="radio" value="0" <?php if($this->session->userdata('child1Gender')!='' && $this->session->userdata('child1Gender')==0 ) echo "checked='checked'"; ?> name="child1Gender"> Male</label>

                                    </div>
                                    <div class="radio radio-inline">
                                        <label>
                                            <input type="radio" value="1" <?php if($this->session->userdata('child1Gender')!='' && $this->session->userdata('child1Gender')==1 ) echo "checked='checked'"; ?> name="child1Gender"> Female</label>
                                    </div>

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3 text-left" for="email">Child 2 Name: </label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control onlybottom" value="<?php if($this->session->userdata('child2Name')) echo $this->session->userdata('child2Name'); ?>" name="child2Name">
                                </div>

                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-3 text-left" for="email">DOB: </label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control onlybottom showdatepicker" value="<?php if($this->session->userdata('child2Dob')) echo $this->session->userdata('child2Dob'); ?>" name="child2Dob">
                                </div>

                                <label class="control-label col-sm-1 text-left" for="email">Gender: </label>
                                <div class="col-sm-3">

                                    <div class="radio radio-inline">
                                        <label>
                                            <input type="radio" value="0" <?php if($this->session->userdata('child2Gender')!='' && $this->session->userdata('child2Gender')==0 ) echo "checked='checked'"; ?> name="child2Gender"> Male</label>

                                    </div>
                                    <div class="radio radio-inline">
                                        <label>
                                            <input type="radio" value="1" <?php if($this->session->userdata('child2Gender')!='' && $this->session->userdata('child2Gender')==1 ) echo "checked='checked'"; ?> name="child2Gender"> Female</label>
                                    </div>

                                </div>
                            </div>


                            <div class="form-group col-sm-11 pull-right table-responsive">


                                <table class="table table-bordered">
                                    <tbody>
                                        <thead>
                                            <th></th>
                                            <th>
                                                <label class="control-label col-sm-12 text-center-imp" for="email">Passport Number - Place of Issue</label>
                                            </th>
                                            <th>
                                                <label class="control-label col-sm-12 text-left text-center-imp" for="email">Validity From(dd/mm/yy)</label>
                                            </th>
                                            <th>
                                                <label class="control-label col-sm-12 text-left text-center-imp" for="email">Validity To(dd/mm/yy)</label>
                                            </th>

                                        </thead>
                                        <tr>
                                            <th>
                                                <label class="control-label col-sm-14 text-left" for="email">Passport Information</label>
                                            </th>
                                            <td><span>
                                                <div class="display-inline">
                                                <input type="text" class="form-control onlybottom" value="<?php if($this->session->userdata('passNumber')) echo $this->session->userdata('passNumber'); ?>" name="passNumber"> - 
                                                <input type="text" class="form-control onlybottom" value="<?php if($this->session->userdata('passPlace')) echo $this->session->userdata('passPlace'); ?>" name="passPlace">
                                                    </div>
                                                    </span></td>
                                            <td><span><input type="text" class="form-control onlybottom showdatepicker" value="<?php if($this->session->userdata('passFrom')) echo $this->session->userdata('passFrom'); ?>" name="passFrom" ></span></td>
                                            <td><span><input type="text" class="form-control onlybottom showdatepicker" value="<?php if($this->session->userdata('passTo')) echo $this->session->userdata('passTo'); ?>" name="passTo"></span></td>

                                        </tr>
                                        <tr>
                                            <th></th>
                                            <th>
                                                <label class="control-label col-sm-12 text-left text-center-imp" for="email">Visa Type - Consulate Issued</label>
                                            </th>
                                            <th>
                                                <label class="control-label col-sm-12 text-left text-center-imp" for="email">Validity From(dd/mm/yy)
                                                </label>
                                            </th>
                                            <th>
                                                <label class="control-label col-sm-12 text-left text-center-imp" for="email">Validity To(dd/mm/yy)
                                                </label>
                                            </th>

                                        </tr>
                                        <tr>
                                            <th>
                                                <label class="control-label col-sm-14 text-left" for="email">Visa Information</label>
                                            </th>
                                            <td><span><div class="display-inline">
                                                <input type="text" class="form-control onlybottom" name="visaType" value="<?php if($this->session->userdata('visaType')) echo $this->session->userdata('visaType'); ?>"> -
                                                <input type="text" class="form-control onlybottom" name="visaIssued" value="<?php if($this->session->userdata('visaIssued')) echo $this->session->userdata('visaIssued'); ?>">
                                                    </div></span></td>
                                            <td><span><input type="text" class="form-control onlybottom showdatepicker" name="visaFrom" value="<?php if($this->session->userdata('visaFrom')) echo $this->session->userdata('visaFrom'); ?>"></span></td>
                                            <td><span><input type="text" class="form-control onlybottom showdatepicker" name="visaTo"  value="<?php if($this->session->userdata('visaTo')) echo $this->session->userdata('visaTo'); ?>"></span></td>

                                        </tr>

                                        <tr>
                                            <th>
                                                <label class="control-label col-sm-14 text-left" for="email">I797 - (for L1/H1 only)</label>
                                            </th>
                                            <td><span><div class="display-inline">
                                                <input type="text" class="form-control onlybottom" name="visaTypeFor" value="<?php if($this->session->userdata('visaTypeFor')) echo $this->session->userdata('visaTypeFor'); ?>"> - 
                                                <input type="text" class="form-control onlybottom" name="visaIssuedFor" value="<?php if($this->session->userdata('visaIssuedFor')) echo $this->session->userdata('visaIssuedFor'); ?>" >
                                                    </div></span></td>
                                            <td><span><input type="text" class="form-control onlybottom showdatepicker" name="visaFromFor" value="<?php if($this->session->userdata('visaFromFor')) echo $this->session->userdata('visaFromFor'); ?>" ></span></td>
                                            <td><span><input type="text" class="form-control onlybottom showdatepicker" name="visaToFor" value="<?php if($this->session->userdata('visaToFor')) echo $this->session->userdata('visaToFor'); ?>" ></span></td>

                                        </tr>

                                    </tbody>
                                </table>


                            </div>
                            <div class="clear"></div>
                            <div class="form-group">
                                <br/>




                                <div class="form-group col-sm-11 pull-right table-responsive" style="border:none">


                                    <table class="table table-bordered ">

                                        <table style="background-color:#22A1C5;width:98%;color:#fff;height:43px;margin-left:10px;">
                                            <tr>
                                                <td style="width:100%">&nbsp;&nbsp;&nbsp;&nbsp;<strong>Miscellaneous:</strong></td>
                                            </tr>
                                        </table>

                                    </table>
                                </div>


                            </div>

                            <br/>
                            <div class="form-group required">
                                <label class="control-label col-sm-3 text-left" for="email">Blood group: </label>
                                <div class="col-sm-3">
                                    <select  name='bloodGp' class="form-control onlybottom" required>
                                        <option value="" selected=""  >Select</option>
                                        <OPTION <?php if($this->session->userdata('bloodGp')!='' && $this->session->userdata('bloodGp')=='A +ve' ) echo "selected='selected'"; ?> VALUE="A +ve">A +ve </OPTION>
                                        <OPTION <?php if($this->session->userdata('bloodGp')!='' && $this->session->userdata('bloodGp')=='A -ve') echo "selected='selected'"; ?> VALUE="A -ve">A -ve </OPTION>
                                        <OPTION <?php if($this->session->userdata('bloodGp')!='' && $this->session->userdata('bloodGp')=='B +ve') echo "selected='selected'"; ?> VALUE="B +ve">B +ve </OPTION>
                                        <OPTION <?php if($this->session->userdata('bloodGp')!='' && $this->session->userdata('bloodGp')=='B -ve') echo "selected='selected'"; ?> VALUE="B -ve">B -ve </OPTION>
                                        <OPTION <?php if($this->session->userdata('bloodGp')!='' && $this->session->userdata('bloodGp')=='O +ve') echo "selected='selected'"; ?> VALUE="O +ve">O +ve </OPTION>
                                        <OPTION <?php if($this->session->userdata('bloodGp')!='' && $this->session->userdata('bloodGp')=='O -ve') echo "selected='selected'"; ?> VALUE="O -ve">O -ve </OPTION>
                                        <OPTION <?php if($this->session->userdata('bloodGp')!='' && $this->session->userdata('bloodGp')=='AB +ve') echo "selected='selected'"; ?> VALUE="AB +ve">AB +ve </OPTION>
                                        <OPTION <?php if($this->session->userdata('bloodGp')!='' && $this->session->userdata('bloodGp')=='AB -ve') echo "selected='selected'"; ?> VALUE="AB -ve">AB -ve </OPTION>
      </select>                     </select>
                                    
                                </div>

                            </div>

                            <div class="form-group required">
                                <label class="control-label col-sm-3 text-left" for="email">PAN card number: </label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control onlybottom" value="<?php if($this->session->userdata('panCdNo')) echo $this->session->userdata('panCdNo'); ?>" name="panCdNo" required>
                                </div>

                            </div>




                            <div class="form-group col-sm-11 pull-right table-responsive">


                                <table class="table table-bordered">

                                    <thead class="thead-inverse">
                                        <tr>
                                            <th>Educational Qualification </th>
                                            <th>College/University, Place</th>
                                            <th class="text-center">From(yr) - (yr)</th>
                                            <th class="text-center">%</th>
                                            <th class="text-center">Upload</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th class="form-group required" scope="row">
                                                <label class="control-label">Class 10</label>
                                            </th>
                                            <td class="form-group">
                                                <input type="text" class="form-control onlybottom" value="<?php if($this->session->userdata('class10Ini')) echo $this->session->userdata('class10Ini'); ?>" name="class10Ini" required>
                                            </td>
                                            <td>
                                                <div class="display-inline">
                                                    <select class="form-control " name="class10From">
                                                               <?php
                                                            for($i = date('Y') ; $i > 1950; $i--){
                                                             ?>   
                                                                <option value="<?php echo $i; ?>" <?php if($this->session->userdata('class10From')!='' && $this->session->userdata('class10From')==$i) echo "selected='selected'"; ?> ><?php echo $i; ?></option>;
                                                             <?php }
     
                                                        ?>
                                                    </select> -
                                                    <select class="form-control " name="class10To">
                                                         <?php
                                                            for($i = date('Y') ; $i > 1950; $i--){
                                                             ?>   
                                                                <option value="<?php echo $i; ?>" <?php if($this->session->userdata('class10To')!='' && $this->session->userdata('class10To')==$i) echo "selected='selected'"; ?> ><?php echo $i; ?></option>;
                                                             <?php }
     
                                                        ?>
                                                        
                                                    </select>
                                                </div>

                                            </td>
                                            <td class="form-group">
                                                <input type="number" class="form-control onlybottom" value="<?php if($this->session->userdata('class10Aggr')) echo $this->session->userdata('class10Aggr'); ?>" name="class10Aggr" required>
                                            </td>
                                            <td class="form-group">
                                                <input type="file" multiple title="Browse" data-error="Please Select Document to upload" name="class10Doc" />

                                                <div class="help-block with-errors"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="form-group required" scope="row">
                                                <label class="control-label">Class 12</label>
                                            </th>
                                            <td class="form-group">
                                                <input type="text" class="form-control onlybottom" value="<?php if($this->session->userdata('class12Ini')) echo $this->session->userdata('class12Ini'); ?>" name="class12Ini" required>
                                            </td>
                                            <td>
                                                <div class="display-inline">
                                                    <select class="form-control "  name="class12From" >
                                                         <?php
                                                            for($i = date('Y') ; $i > 1950; $i--){
                                                             ?>   
                                                                <option value="<?php echo $i; ?>" <?php if($this->session->userdata('class12From')!='' && $this->session->userdata('class12From')==$i) echo "selected='selected'"; ?> ><?php echo $i; ?></option>;
                                                             <?php }
     
                                                        ?>
                                                    </select> -
                                                    <select class="form-control "  name="class12To" >
                                                     <?php
                                                            for($i = date('Y') ; $i > 1950; $i--){
                                                             ?>   
                                                                <option value="<?php echo $i; ?>" <?php if($this->session->userdata('class12To')!='' && $this->session->userdata('class12To')==$i) echo "selected='selected'"; ?> ><?php echo $i; ?></option>;
                                                             <?php }
     
                                                        ?>
                                                    </select>
                                                </div>
                                            </td>
                                            <td class="form-group">
                                                <input type="number" class="form-control onlybottom" value="<?php if($this->session->userdata('class12Aggr')) echo $this->session->userdata('class12Aggr'); ?>" name="class12Aggr" required>
                                            </td>
                                            <td class="form-group">
                                                <input type="file" multiple title="Browse" data-error="Please Select Document to upload"  value="<?php if($this->session->userdata('class12Doc')) echo $this->session->userdata('class12Doc'); ?>" name="class12Doc" />

                                                <div class="help-block with-errors"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Graduation</th>
                                            <td>
                                                <input type="text" class="form-control onlybottom"  value="<?php if($this->session->userdata('classGradIni')) echo $this->session->userdata('classGradIni'); ?>" name="classGradIni">
                                            </td>
                                            <td>
                                                <div class="display-inline">
                                                    <select class="form-control "  name="classGradFrom">
                                                         <?php
                                                            for($i = date('Y') ; $i > 1950; $i--){
                                                             ?>   
                                                                <option value="<?php echo $i; ?>" <?php if($this->session->userdata('classGradFrom')!='' && $this->session->userdata('classGradFrom')==$i) echo "selected='selected'"; ?> ><?php echo $i; ?></option>;
                                                             <?php }
     
                                                        ?>
                                                    </select> -
                                                    <select class="form-control"  name="classGradTo">
                                                         <?php
                                                            for($i = date('Y') ; $i > 1950; $i--){
                                                             ?>   
                                                                <option value="<?php echo $i; ?>" <?php if($this->session->userdata('classGradTo')!='' && $this->session->userdata('classGradTo')==$i) echo "selected='selected'"; ?> ><?php echo $i; ?></option>;
                                                             <?php }
     
                                                        ?>
                                                    </select>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="number" class="form-control onlybottom" value="<?php if($this->session->userdata('classGradAggr')) echo $this->session->userdata('classGradAggr'); ?>" name="classGradAggr">
                                            </td>
                                            <td>
                                                <input type="file" multiple title="Browse" value="<?php if($this->session->userdata('classGradDoc')) echo $this->session->userdata('classGradDoc'); ?>" name="classGradDoc"/>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Post Graduation</th>
                                            <td>
                                                <input type="text" class="form-control onlybottom" value="<?php if($this->session->userdata('classPgIni')) echo $this->session->userdata('classGradDoc'); ?>" name="classPgIni">
                                            </td>
                                            <td>
                                                <div class="display-inline">
                                                    <select class="form-control "  name="classPgFrom">
                                                         <?php
                                                            for($i = date('Y') ; $i > 1950; $i--){
                                                             ?>   
                                                                <option value="<?php echo $i; ?>" <?php if($this->session->userdata('classPgFrom')!='' && $this->session->userdata('classPgFrom')==$i) echo "selected='selected'"; ?> ><?php echo $i; ?></option>;
                                                             <?php }
     
                                                        ?>
                                                    </select> -
                                                    <select class="form-control "  name="classPgTo">
                                                         <?php
                                                            for($i = date('Y') ; $i > 1950; $i--){
                                                             ?>   
                                                                <option value="<?php echo $i; ?>" <?php if($this->session->userdata('classPgTo')!='' && $this->session->userdata('classPgTo')==$i) echo "selected='selected'"; ?> ><?php echo $i; ?></option>;
                                                             <?php }
     
                                                        ?>
                                                    </select>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="number" class="form-control onlybottom"  name="classPgAggr">
                                            </td>
                                            <td>
                                                <input type="file" multiple title="Browse"  name="classPgDoc"/>
                                            </td>
                                        </tr>
                                        <tr class="cert">


                                            <th scope="row">Certifications if any</th>
                                            <?php 
                                            if($this->session->userdata('othercertificate')!='' && $this->session->userdata('othercertificate'))
                                             {
                                                $othercertificate=$this->session->userdata('othercertificate');
                                                $othercertificateyearfrm=$this->session->userdata('othercertificateyearfrm');
                                                $othercertificateyearto=$this->session->userdata('othercertificateyearto');
                                                $classotherAggr=$this->session->userdata('classotherAggr');
                                                $certicatebrowse=$this->session->userdata('certicatebrowse');
                                                for($i=0;$i<=count($othercertificate);$i++){
                                                
                                            
                                             ?>
                                            <td>
                                                <input type="text" name="othercertificate[]" class="form-control onlybottom">
                                            </td>
                                            <td>
                                                <div class="display-inline">
                                                    <select class="form-control" name="othercertificateyearfrm[]" value="<?php if($othercertificate[$i]!='') echo $othercertificate[$i];?>">
                                                         <?php
                                                            for($i = date('Y') ; $i > 1950; $i--){
                                                             ?>   
                                                                <option value="<?php echo $i; ?>" <?php if($othercertificateyearfrm[$i]!='' && $othercertificateyearfrm[$i]==$i) echo "selected='selected'"; ?> ><?php echo $i; ?></option>;
                                                             <?php }
     
                                                        ?>
                                                    </select> -
                                                    <select class="form-control" name="othercertificateyearto[]">
                                                         <?php
                                                            for($i = date('Y') ; $i > 1950; $i--){
                                                             ?>   
                                                                <option value="<?php echo $i; ?>" <?php if($othercertificateyearto[$i]!='' && $othercertificateyearto[$i]==$i) echo "selected='selected'"; ?> ><?php echo $i; ?></option>;
                                                             <?php }
     
                                                        ?>
                                                    </select>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="number" name="classotherAggr[]"  value="<?php if($classotherAggr[$i]!='') echo $classotherAggr[$i];?>" class="form-control onlybottom">
                                            </td>
                                            <td>
                                                <input type="file" name="certicatebrowse[]" value="<?php if($certicatebrowse[$i]!='') echo $certicatebrowse[$i];?>" multiple title="Browse" />
                                                <br/>
                                                <br/>

                                                <button type="button" class="btn btn-primary" id="addcert"><span class="
glyphicon glyphicon-plus"></span> Add</button>
                                            </td>
                                            <?php
                                            } }
                                             else  {
                                                
                                            ?>
                                            <td>
                                                <input type="text" name="othercertificate[]" class="form-control onlybottom">
                                            </td>
                                            <td>
                                                <div class="display-inline">
                                                    <select class="form-control" name="othercertificateyearfrm[]" >
                                                         <?php
                                                            for($i = date('Y') ; $i > 1950; $i--){
                                                             ?>   
                                                                <option value="<?php echo $i; ?>" <?php if($this->session->userdata('othercertificateyearfrm')!='' && $this->session->userdata('othercertificateyearfrm')==$i) echo "selected='selected'"; ?> ><?php echo $i; ?></option>;
                                                             <?php }
     
                                                        ?>
                                                    </select> -
                                                    <select class="form-control" name="othercertificateyearto[]">
                                                         <?php
                                                            for($i = date('Y') ; $i > 1950; $i--){
                                                             ?>   
                                                                <option value="<?php echo $i; ?>" <?php if($this->session->userdata('othercertificateyearto')!='' && $this->session->userdata('othercertificateyearto')==$i) echo "selected='selected'"; ?> ><?php echo $i; ?></option>;
                                                             <?php }
     
                                                        ?>
                                                    </select>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="number" name="classotherAggr[]" class="form-control onlybottom">
                                            </td>
                                            <td>
                                                <input type="file" name="certicatebrowse[]" multiple title="Browse" />
                                                <br/>
                                                <br/>

                                                <button type="button" class="btn btn-primary" id="addcert"><span class="
glyphicon glyphicon-plus"></span> Add</button>
                                            </td>


                                            <?php } ?>
                                        </tr>
                                    </tbody>
                                </table>



                            </div>





                        </div>
                    </div>




                    <div class="panel panel-primary">

                        <div class="panel-heading text-center noradius"><big><strong>Professional Details</strong></big></div>
                        <div class="panel-body">

                            <div class="form-group">

                                <label class="control-label col-sm-3 text-left" for="email">Total yrs of exp: </label>

                                <div class="col-sm-1">
                                    <select class="form-control onlybottom" name="totalExpInYears">
                                        <?php for($i=0;$i<=20;$i++){ ?>
                                        <option value="<?php echo $i; ?>" <?php if($this->session->userdata('totalExpInYears')!='' && $this->session->userdata('totalExpInYears')==$i) echo "selected='selected'"; ?>><?php echo $i; ?></option>
                                        <?php } ?>
                                        
                                    </select>
                                </div>
                                <div class="col-sm-2">
                                    <select class="form-control onlybottom" name="totalExpInMonths">>
                                        <?php for($i=0;$i<=11;$i++){ ?>
                                        <option value="<?php echo $i; ?>" <?php if($this->session->userdata('totalExpInMonths')!='' && $this->session->userdata('totalExpInMonths')==$i) echo "selected='selected'"; ?>><?php echo $i; ?></option>
                                        <?php } ?>

                                    </select>
                                </div>

                            </div>


                            <div class="form-group">

                                <label class="control-label col-sm-3 text-left" for="email">Relevant IT exp: </label>



                                <div class="col-sm-1">
                                    <select class="form-control onlybottom" name="relevantExpInYears">>
                                        <?php for($i=0;$i<=20;$i++){ ?>
                                        <option value="<?php echo $i; ?>" <?php if($this->session->userdata('relevantExpInYears')!='' && $this->session->userdata('relevantExpInYears')==$i) echo "selected='selected'"; ?> ><?php echo $i; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="col-sm-2">
                                    <select class="form-control onlybottom" name="relevantExpInMonths">
                                        <?php for($i=0;$i<=11;$i++){ ?>
                                        <option value="<?php echo $i; ?>" <?php if($this->session->userdata('relevantExpInMonths')!='' && $this->session->userdata('relevantExpInMonths')==$i) echo "selected='selected'"; ?> ><?php echo $i; ?></option>
                                        <?php } ?>

                                    </select>
                                </div>


                            </div>

                            <div class="form-group">

                                <label class="control-label col-sm-3 text-left" for="email">Exp in current role: </label>



                                <div class="col-sm-1">
                                    <select class="form-control onlybottom" name="cureentExpInYears">
                                        <?php for($i=0;$i<=20;$i++){ ?>
                                        <option value="<?php echo $i; ?>" <?php if($this->session->userdata('cureentExpInYears')!='' && $this->session->userdata('cureentExpInYears')==$i) echo "selected='selected'"; ?> ><?php echo $i; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="col-sm-2">
                                    <select class="form-control onlybottom" name="cureentExpInMonths">
                                       <?php for($i=0;$i<=11;$i++){ ?>
                                        <option value="<?php echo $i; ?>" <?php if($this->session->userdata('cureentExpInMonths')!='' && $this->session->userdata('cureentExpInMonths')==$i) echo "selected='selected'"; ?> ><?php echo $i; ?></option>
                                        <?php } ?>

                                    </select>
                                </div>


                            </div>

                            <div class="form-group required">

                                <label class="control-label col-sm-3 text-left" for="email">Primary Skills: </label>

                                <div class="col-sm-3">
                                    <textarea class="form-control onlybottom"  name="primarySkills" required><?php if($this->session->userdata('primarySkills')!='') echo $this->session->userdata('primarySkills'); ?></textarea>
                                </div>
                            </div>

                            <div class="form-group">

                                <label class="control-label col-sm-3 text-left" for="email">Secondary Skills: </label>

                                <div class="col-sm-3">
                                    <textarea class="form-control onlybottom"  name="secondarySkills"><?php if($this->session->userdata('secondarySkills')!='') echo $this->session->userdata('secondarySkills'); ?></textarea>
                                </div>
                            </div>

                            <div class="form-group">

                                <label class="control-label col-sm-3 text-left" for="email">Tertiary skills: </label>

                                <div class="col-sm-3">
                                    <textarea class="form-control onlybottom"  name="tertiarySkills"><?php if($this->session->userdata('tertiarySkills')!='') echo $this->session->userdata('tertiarySkills'); ?></textarea>
                                </div>
                            </div>



                        </div>

                    </div>

                    <div class="button_section">

                        <!--<a href="page4.html">-->

                        <button type="submit" name="page3_submit" value="page3_submit" class="btn btn-custom pull-right">Save & Continue</button>
                        <!--  </a>-->

                        <a href="javascript:history.back()">
                            <button type="button" class="btn btn-default pull-right" style="margin-right: 5px">Back</button>
                        </a>
                             <?php if($this->session->userdata('sesspage3')==30) { ?>
                    <a href="<?php echo base_url();?>page11">
                            <button type="button" class="btn btn-default pull-right" style="margin-right: 5px">View Summary</button>
                    </a>
                    <?php } ?>

                    </div>



                </form>



            </div>


        </div>



    </div>

