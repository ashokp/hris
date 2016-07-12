<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    function general() {
        $data['layout'] = "layout/layout";
        $data['header'] = "layout/header";
        return $data;
    }

    public function index()
   {
        $data = $this->general();
        if ($this->input->post('page1_submit')) {
            //ssesion data
            $this->session->set_userdata('appliedFor', $this->input->post('appliedFor'));
            $this->session->set_userdata('empId', $this->input->post('empId'));
            $this->session->set_userdata('fullName', $this->input->post('fullName'));
            $this->session->set_userdata('fName', $this->input->post('fName'));
            $this->session->set_userdata('lName', $this->input->post('lName'));
            $this->session->set_userdata('designation', $this->input->post('designation'));
            $this->session->set_userdata('joiningDate', $this->input->post('joiningDate'));
            $this->session->set_userdata('maritalStatus', $this->input->post('maritalStatus'));
            $this->session->set_userdata('gender', $this->input->post('gender'));
            $this->session->set_userdata('actualDob', $this->input->post('actualDob'));
            $this->session->set_userdata('dobAsPerRecords', $this->input->post('dobAsPerRecords'));
            $this->session->set_userdata('placeOfBirth', $this->input->post('placeOfBirth'));
            redirect(base_url() . 'page2/');
        }
        $data['pagename'] = "HRIS Page";
        $data['pagetitle'] = "New Employee Joining Formalities";
        $data['content'] = 'pages/page1';
        $this->load->view('welcome', $data);
   }

    public function page2() {


        $data = $this->general();
        // echo $this->session->userdata('gender');
        if ($this->input->post('page2_submit')) 
        {
            //ssesion data
            $this->session->set_userdata('landNumber', $this->input->post('landNumber'));
            $this->session->set_userdata('mobileNumber', $this->input->post('mobileNumber'));
            $this->session->set_userdata('emailId', $this->input->post('emailId'));
            $this->session->set_userdata('emerNumber', $this->input->post('emerNumber'));
            $this->session->set_userdata('emerName', $this->input->post('emerName'));
            $this->session->set_userdata('emerRelation', $this->input->post('emerRelation'));
            $this->session->set_userdata('currentAdd', $this->input->post('currentAdd'));
            $this->session->set_userdata('currentAddDoc', $this->input->post('currentAddDoc'));
            $this->session->set_userdata('permanentAdd', $this->input->post('permanentAdd'));
            $this->session->set_userdata('permanentAddDoc', $this->input->post('permanentAddDoc'));
            redirect(base_url() . 'page3/');
        }
        $data['pagename'] = "HRIS Page";
        $data['pagetitle'] = "New Employee Joining Formalities";
        $data['content'] = 'pages/page2';
        $this->load->view('welcome', $data);
    }

    public function page3()
    {

        $data = $this->general();
        if ($this->input->post('page3_submit')) {
            //ssesion data
            $this->session->set_userdata('fathersName', $this->input->post('fathersName'));
            $this->session->set_userdata('fathersDob', $this->input->post('fathersDob'));
            $this->session->set_userdata('mothersName', $this->input->post('mothersName'));
            $this->session->set_userdata('mothersDob', $this->input->post('mothersDob'));
            $this->session->set_userdata('spouseName', $this->input->post('spouseName'));
            $this->session->set_userdata('spouseDob', $this->input->post('spouseDob'));
            $this->session->set_userdata('child1Name', $this->input->post('child1Name'));
            $this->session->set_userdata('child1Dob', $this->input->post('child1Dob'));
            $this->session->set_userdata('child1Gender', $this->input->post('child1Gender'));
            $this->session->set_userdata('child2Name', $this->input->post('child2Name'));
            $this->session->set_userdata('child2Dob', $this->input->post('child2Dob'));
            $this->session->set_userdata('child2Gender', $this->input->post('child2Gender'));
            $this->session->set_userdata('passNumber', $this->input->post('passNumber'));
            $this->session->set_userdata('passPlace', $this->input->post('passPlace'));
            $this->session->set_userdata('passFrom', $this->input->post('passFrom'));
            $this->session->set_userdata('passTo', $this->input->post('passTo'));
            $this->session->set_userdata('visaType', $this->input->post('visaType'));
            $this->session->set_userdata('visaIssued', $this->input->post('visaIssued'));
            $this->session->set_userdata('visaFrom', $this->input->post('visaFrom'));
            $this->session->set_userdata('visaTo', $this->input->post('visaTo'));
            $this->session->set_userdata('visaTypeFor', $this->input->post('visaTypeFor'));
            $this->session->set_userdata('visaIssuedFor', $this->input->post('visaIssuedFor'));
            $this->session->set_userdata('visaFromFor', $this->input->post('visaFromFor'));
            $this->session->set_userdata('visaToFor', $this->input->post('visaToFor'));
            $this->session->set_userdata('bloodGp', $this->input->post('bloodGp'));
            $this->session->set_userdata('panCdNo', $this->input->post('panCdNo'));
            $this->session->set_userdata('class10Ini', $this->input->post('class10Ini'));
            $this->session->set_userdata('class10From', $this->input->post('class10From'));
            $this->session->set_userdata('class10To', $this->input->post('class10To'));
            $this->session->set_userdata('class10Aggr', $this->input->post('class10Aggr'));
            $this->session->set_userdata('class10Doc', $this->input->post('class10Doc'));
            $this->session->set_userdata('class12Ini', $this->input->post('class12Ini'));
            $this->session->set_userdata('class12From', $this->input->post('class12From'));
            $this->session->set_userdata('class12To', $this->input->post('class12To'));
            $this->session->set_userdata('class12Aggr', $this->input->post('class12Aggr'));
            $this->session->set_userdata('class12Doc', $this->input->post('class12Doc'));
            $this->session->set_userdata('classGradIni', $this->input->post('classGradIni'));
            $this->session->set_userdata('classGradFrom', $this->input->post('classGradFrom'));
            $this->session->set_userdata('classGradTo', $this->input->post('classGradTo'));
            $this->session->set_userdata('classGradAggr', $this->input->post('classGradAggr'));
            $this->session->set_userdata('classGradDoc', $this->input->post('classGradDoc'));
            $this->session->set_userdata('classPgIni', $this->input->post('classPgIni'));
            $this->session->set_userdata('classPgFrom', $this->input->post('classPgFrom'));
            $this->session->set_userdata('classPgTo', $this->input->post('classPgTo'));
            $this->session->set_userdata('classPgAggr', $this->input->post('classPgAggr'));
            $this->session->set_userdata('classPgDoc', $this->input->post('classPgDoc'));
            $this->session->set_userdata('othercertificate', $this->input->post('othercertificate'));
            $this->session->set_userdata('othercertificateyearfrm', $this->input->post('othercertificateyearfrm'));
            $this->session->set_userdata('othercertificateyearto', $this->input->post('othercertificateyearto'));
            $this->session->set_userdata('classotherAggr', $this->input->post('classotherAggr'));
            $this->session->set_userdata('certicatebrowse', $this->input->post('certicatebrowse'));
            $this->session->set_userdata('totalExpInYears', $this->input->post('totalExpInYears'));
            $this->session->set_userdata('totalExpInMonths', $this->input->post('totalExpInMonths'));
            $this->session->set_userdata('relevantExpInYears', $this->input->post('relevantExpInYears'));
            $this->session->set_userdata('relevantExpInMonths', $this->input->post('relevantExpInMonths'));
            $this->session->set_userdata('cureentExpInYears', $this->input->post('cureentExpInYears'));
            $this->session->set_userdata('cureentExpInMonths', $this->input->post('cureentExpInMonths'));
            $this->session->set_userdata('primarySkills', $this->input->post('primarySkills'));
            $this->session->set_userdata('secondarySkills', $this->input->post('secondarySkills'));
            $this->session->set_userdata('tertiarySkills', $this->input->post('tertiarySkills'));
            redirect(base_url() . 'page4/');
        }
        $data['pagename'] = "HRIS Page";
        $data['pagetitle'] = "New Employee Joining Formalities";
        $data['content'] = 'pages/page3';
        $this->load->view('welcome', $data);
    }

    public function page4() 
    {

        $data = $this->general();
        if ($this->input->post('page4_submit')) {


            if ($this->input->post('emptypecondiate') == 'exp') 
            {
                $this->session->set_userdata('campanyfullname', $this->input->post('campanyfullname'));
                $this->session->set_userdata('positionheld', $this->input->post('positionheld'));
                $this->session->set_userdata('caddress', $this->input->post('caddress'));
                $this->session->set_userdata('ctelephone', $this->input->post('ctelephone'));
                $this->session->set_userdata('empfromyear', $this->input->post('empfromyear'));
                $this->session->set_userdata('emptoyear', $this->input->post('emptoyear'));
                $this->session->set_userdata('cempcode', $this->input->post('cempcode'));
                $this->session->set_userdata('creportname', $this->input->post('creportname'));
                $this->session->set_userdata('Reportpostion', $this->input->post('Reportpostion'));
                $this->session->set_userdata('reportcontact', $this->input->post('reportcontact'));
                $this->session->set_userdata('emptype', $this->input->post('emptype'));
                $this->session->set_userdata('agency', $this->input->post('agency'));
                $this->session->set_userdata('responsibilities', $this->input->post('responsibilities'));
                $this->session->set_userdata('remuneration', $this->input->post('remuneration'));
                $this->session->set_userdata('reasonleaving', $this->input->post('reasonleaving'));
                $this->session->set_userdata('pfnumber', $this->input->post('pfnumber'));
                $this->session->set_userdata('refer', $this->input->post('refer'));
                $this->session->set_userdata('referncetaken', $this->input->post('referncetaken'));
            } 
            else 
            {
                $this->session->set_userdata('emptypecondiate', $this->input->post('emptypecondiate'));
            }
            redirect(base_url() . 'page5/');
        }
        $data['pagename'] = "HRIS Page";
        $data['pagetitle'] = "New Employee Joining Formalities";
        $data['content'] = 'pages/page4';
        $this->load->view('welcome', $data);
    }

    public function page5() 
    {


        $data = $this->general();
        if ($this->input->post('page5_submit'))
        {

            $this->session->set_userdata('reference1', $this->input->post('reference1'));
            $this->session->set_userdata('occupation1', $this->input->post('occupation1'));
            $this->session->set_userdata('refaddress1', $this->input->post('refaddress1'));
            $this->session->set_userdata('refcontact1', $this->input->post('refcontact1'));
            $this->session->set_userdata('refmailid1', $this->input->post('refmailid1'));
            $this->session->set_userdata('reference2', $this->input->post('reference2'));
            $this->session->set_userdata('occupation2', $this->input->post('occupation2'));
            $this->session->set_userdata('refaddress2', $this->input->post('refaddress2'));
            $this->session->set_userdata('refcontact2', $this->input->post('refcontact2'));
            $this->session->set_userdata('refmailid2', $this->input->post('refmailid2'));
            $this->session->set_userdata('reference3', $this->input->post('reference3'));
            $this->session->set_userdata('occupation3', $this->input->post('occupation3'));
            $this->session->set_userdata('refaddress3', $this->input->post('refaddress3'));
            $this->session->set_userdata('refcontact3', $this->input->post('refcontact3'));
            $this->session->set_userdata('refmailid3', $this->input->post('refmailid3'));
            redirect(base_url() . 'page6/');
        }
        $data['pagename'] = "HRIS Page";
        $data['pagetitle'] = "New Employee Joining Formalities";
        $data['content'] = 'pages/page5';
        $this->load->view('welcome', $data);
    }

    public function page6() 
    {


        $data = $this->general();
        if ($this->input->post('page6_submit')) 
        {

            redirect(base_url() . 'page7/');
        }
        $data['pagename'] = "HRIS Page";
        $data['pagetitle'] = "New Employee Joining Formalities";
        $data['content'] = 'pages/page6';
        $this->load->view('welcome', $data);
    }

    public function page7()
   {


        $data = $this->general();
        if ($this->input->post('page7_submit')) {

            redirect(base_url() . 'page9/');
        }
        $data['pagename'] = "HRIS Page";
        $data['pagetitle'] = "New Employee Joining Formalities";
        $data['content'] = 'pages/page7';
        $this->load->view('welcome', $data);
    }

    public function page8() 
    {


        $data = $this->general();
        if ($this->input->post('page8_submit')) 
        {
            redirect(base_url() . 'page9/');
        }
        $data['pagename'] = "HRIS Page";
        $data['pagetitle'] = "New Employee Joining Formalities";
        $data['content'] = 'pages/page8';
        $this->load->view('welcome', $data);
    }

    public function page9() 
    {
        $data = $this->general();
        if ($this->input->post('page9_submit')) 
        {
            redirect(base_url() . 'page10/');
        }
        $data['pagename'] = "HRIS Page";
        $data['pagetitle'] = "New Employee Joining Formalities";
        $data['content'] = 'pages/page9';
        $this->load->view('welcome', $data);
    }

    public function page10() 
    {


        $data = $this->general();
        if ($this->input->post('page10_submit')) 
        {
            $this->session->set_userdata('nomineename', $this->input->post('nomineename'));
            $this->session->set_userdata('relationnominee', $this->input->post('relationnominee'));
            $this->session->set_userdata('nomieedob', $this->input->post('nomieedob'));
            $this->session->set_userdata('nomineeaddress', $this->input->post('nomineeaddress'));
            $this->session->set_userdata('nomineecontact', $this->input->post('nomineecontact'));
            $this->session->set_userdata('nomineeisminor', $this->input->post('nomineeisminor'));
            $this->session->set_userdata('guardiannomiee', $this->input->post('guardiannomiee'));
            $this->session->set_userdata('nameguardian', $this->input->post('nameguardian'));
            $this->session->set_userdata('relationshipminor', $this->input->post('relationshipminor'));
            $this->session->set_userdata('guardianaddress', $this->input->post('guardianaddress'));
            redirect(base_url() . 'page11/');
        }
        $data['pagename'] = "HRIS Page";
        $data['pagetitle'] = "New Employee Joining Formalities";
        $data['content'] = 'pages/page10';
        $this->load->view('welcome', $data);
    }

    public function page11()
    {

        $data = $this->general();
        $data['pagename'] = "HRIS Page";
        $data['pagetitle'] = "New Employee Joining Formalities";
      if ($this->input->post('page11_submit')) 
        {
                $this->session->unset_userdata('appliedFor');
                $this->session->unset_userdata('empId');
                $this->session->unset_userdata('fullName');
                $this->session->unset_userdata('fName');
                $this->session->unset_userdata('lName');
                $this->session->unset_userdata('designation');
                $this->session->unset_userdata('joiningDate');
                $this->session->unset_userdata('maritalStatus');
                $this->session->unset_userdata('gender');
                $this->session->unset_userdata('actualDob');
                $this->session->unset_userdata('dobAsPerRecords');
                $this->session->unset_userdata('placeOfBirth');
                $this->session->unset_userdata('landNumber');
                $this->session->unset_userdata('mobileNumber');
                $this->session->unset_userdata('emailId');
                $this->session->unset_userdata('emerNumber');
                $this->session->unset_userdata('emerName');
                $this->session->unset_userdata('emerRelation');
                $this->session->unset_userdata('currentAdd');
                $this->session->unset_userdata('currentAddDoc');
                $this->session->unset_userdata('permanentAdd');
                $this->session->unset_userdata('permanentAddDoc');
                $this->session->unset_userdata('fathersName');
                $this->session->unset_userdata('fathersDob');
                $this->session->unset_userdata('mothersName');
                $this->session->unset_userdata('mothersDob');
                $this->session->unset_userdata('spouseName');
                $this->session->unset_userdata('spouseDob');
                $this->session->unset_userdata('child1Name');
                $this->session->unset_userdata('child1Dob');
                $this->session->unset_userdata('child1Gender');
                $this->session->unset_userdata('child2Name');
                $this->session->unset_userdata('child2Dob');
                $this->session->unset_userdata('child2Gender');
                $this->session->unset_userdata('passNumber');
                $this->session->unset_userdata('passPlace');
                $this->session->unset_userdata('passFrom');
                $this->session->unset_userdata('passTo');
                $this->session->unset_userdata('visaType');
                $this->session->unset_userdata('visaIssued');
                $this->session->unset_userdata('visaFrom');
                $this->session->unset_userdata('visaTo');
                $this->session->unset_userdata('visaTypeFor');
                $this->session->unset_userdata('visaIssuedFor');
                $this->session->unset_userdata('visaFromFor');
                $this->session->unset_userdata('visaToFor');
                $this->session->unset_userdata('bloodGp');
                $this->session->unset_userdata('panCdNo');
                $this->session->unset_userdata('class10Ini');
                $this->session->unset_userdata('class10From');
                $this->session->unset_userdata('class10To');
                $this->session->unset_userdata('class10Aggr');
                $this->session->unset_userdata('class10Doc');
                $this->session->unset_userdata('class12Ini');
                $this->session->unset_userdata('class12From');
                $this->session->unset_userdata('class12To');
                $this->session->unset_userdata('class12Aggr');
                $this->session->unset_userdata('class12Doc');
                $this->session->unset_userdata('classGradIni');
                $this->session->unset_userdata('classGradFrom');
                $this->session->unset_userdata('classGradTo');
                $this->session->unset_userdata('classGradAggr');
                $this->session->unset_userdata('classGradDoc');
                $this->session->unset_userdata('classPgIni');
                $this->session->unset_userdata('classPgFrom');
                $this->session->unset_userdata('classPgTo');
                $this->session->unset_userdata('classPgAggr');
                $this->session->unset_userdata('classPgDoc');
                $this->session->unset_userdata('othercertificate');
                $this->session->unset_userdata('othercertificateyearfrm');
                $this->session->unset_userdata('othercertificateyearto');
                $this->session->unset_userdata('classotherAggr');
                $this->session->unset_userdata('certicatebrowse');
                $this->session->unset_userdata('totalExpInYears');
                $this->session->unset_userdata('totalExpInMonths');
                $this->session->unset_userdata('relevantExpInYears');
                $this->session->unset_userdata('relevantExpInMonths');
                $this->session->unset_userdata('cureentExpInYears');
                $this->session->unset_userdata('cureentExpInMonths');
                $this->session->unset_userdata('primarySkills');
                $this->session->unset_userdata('secondarySkills');
                $this->session->unset_userdata('tertiarySkills');
                $this->session->unset_userdata('campanyfullname');
                $this->session->unset_userdata('positionheld');
                $this->session->unset_userdata('caddress');
                $this->session->unset_userdata('ctelephone');
                $this->session->unset_userdata('empfromyear');
                $this->session->unset_userdata('emptoyear');
                $this->session->unset_userdata('cempcode');
                $this->session->unset_userdata('creportname');
                $this->session->unset_userdata('Reportpostion');
                $this->session->unset_userdata('reportcontact');
                $this->session->unset_userdata('emptype');
                $this->session->unset_userdata('agency');
                $this->session->unset_userdata('responsibilities');
                $this->session->unset_userdata('remuneration');
                $this->session->unset_userdata('reasonleaving');
                $this->session->unset_userdata('pfnumber');
                $this->session->unset_userdata('refer');
                $this->session->unset_userdata('referncetaken');
                $this->session->unset_userdata('reference1');
                $this->session->unset_userdata('occupation1');
                $this->session->unset_userdata('refaddress1');
                $this->session->unset_userdata('refcontact1');
                $this->session->unset_userdata('refmailid1');
                $this->session->unset_userdata('reference2');
                $this->session->unset_userdata('occupation2');
                $this->session->unset_userdata('refaddress2');
                $this->session->unset_userdata('refcontact2');
                $this->session->unset_userdata('refmailid2');
                $this->session->unset_userdata('reference3');
                $this->session->unset_userdata('occupation3');
                $this->session->unset_userdata('refaddress3');
                $this->session->unset_userdata('refcontact3');
                $this->session->unset_userdata('refmailid3');
                $this->session->unset_userdata('nomineename');
                $this->session->unset_userdata('relationnominee');
                $this->session->unset_userdata('nomieedob');
                $this->session->unset_userdata('nomineeaddress');
                $this->session->unset_userdata('nomineecontact');
                $this->session->unset_userdata('nomineeisminor');
                $this->session->unset_userdata('guardiannomiee');
                $this->session->unset_userdata('nameguardian');
                $this->session->unset_userdata('relationshipminor');
                $this->session->unset_userdata('guardianaddress');
                $this->session->unset_userdata('sesspage1');
                $this->session->unset_userdata('sesspage2');
                $this->session->unset_userdata('sesspage3');
                $this->session->unset_userdata('sesspage4');
                $this->session->unset_userdata('sesspage5');
                $this->session->unset_userdata('sesspage10');
                $this->session->sess_destroy();
               echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Data Saved Succesfully')
        window.location.href='http://10.11.12.23/hris/'
        </SCRIPT>");
                //redirect(base_url());
        }
        $data['content'] = 'pages/page11';
        $this->load->view('welcome', $data);
    }

}
