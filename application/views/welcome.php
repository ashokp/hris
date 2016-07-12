<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $pagetitle;?></title>
    <script src="<?php echo base_url();?>assets/utils/jquery-1.12.3.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/utils/css/bootstrap.min.css" />
    <script src="<?php echo base_url();?>assets/utils/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/common.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/index.css" />
    <script src="<?php echo base_url();?>assets/js/common.js"></script>
</head>

<body>
<?php $this->view($layout); ?>
 <script src="<?php echo base_url();?>assets/utils/jqueryui/jquery-ui.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/utils/jqueryui/jquery.ui.theme.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/utils/jqueryui/jquery-ui.min.css"/>
<script src="<?php echo base_url();?>assets/utils/js/validator.js"></script>
<script src="<?php echo base_url();?>assets/utils/js/H5F.js"></script>
<script src="<?php echo base_url();?>assets/utils/html5shiv.js"></script>
<script src="<?php echo base_url();?>assets/utils/respond.min.js"></script>
<script src="<?php echo base_url();?>assets/utils/form-field-dependency.js"></script>
<script src="<?php echo base_url();?>assets/utils/bootstrap.file-input.js"></script>
    <script>
        $('input[type=file]').bootstrapFileInput();
        $('[data-depends]').formFieldDependency();
    </script>
  
</body>
</html>