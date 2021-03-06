<html>
<head>
<title>Insert Data Into Database Using CodeIgniter Form</title>
<link href='http://fonts.googleapis.com/css?family=Marcellus' rel='stylesheet' type='text/css'/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css" />
</head>

<style type="text/css">
	
	#container {
width:960px;
height:610px;
margin:50px auto
}
.error {
color:red;
font-size:13px;
margin-bottom:-15px
}
form {
width:345px;
padding:0 50px 20px;
background:linear-gradient(#fff,#FF94BB);
border:1px solid #ccc;
box-shadow:0 0 5px;
font-family:'Marcellus',serif;
float:left;
margin-top:10px
}
h1 {
text-align:center;
font-size:28px
}
hr {
border:0;
border-bottom:1.5px solid #ccc;
margin-top:-10px;
margin-bottom:30px
}
label {
font-size:17px
}
input {
width:100%;
padding:10px;
margin:6px 0 20px;
border:none;
box-shadow:0 0 5px
}
input#submit {
margin-top:20px;
font-size:18px;
background:linear-gradient(#22abe9 5%,#36caf0 100%);
border:1px solid #0F799E;
color:#fff;
font-weight:700;
cursor:pointer;
text-shadow:0 1px 0 #13506D
}
input#submit:hover {
background:linear-gradient(#36caf0 5%,#22abe9 100%)
}
</style>
<body>

<div id="container">
<?php echo form_open('officials_controller'); ?>
<h1>Insert Data Into Database Using CodeIgniter</h1><hr/>
<?php if (isset($message)) { ?>
<CENTER><h3 style="color:green;">Data inserted successfully</h3></CENTER><br>
<?php } ?>

<?php echo form_label('ID CARD NUMBER :') ?> <?php echo form_error('idno'); ?><br />  
<?php echo form_input(array('id' => 'idno', 'name' => 'idno', 'placeholder' => 'NATIONAL IDENTITY CARD NUMBER', 'value' => set_value('idno'))); ?>
<br />

<?php echo form_label('FIRST NAME :'); ?> <?php echo form_error('fname'); ?><br />
<?php echo form_input(array('id' => 'fname', 'name' => 'fname', 'placeholder' => 'FIRST NAME', 'value' => set_value('fname'))); ?><br />

<?php echo form_label('OTHER NAMES:'); ?> <?php echo form_error('oname'); ?><br />
<?php echo form_input(array('id' => 'oname', 'name' => 'oname', 'placeholder' => 'OTHER NAMES', 'value' => set_value('oname'))); ?><br />

<?php echo form_label('GENDER :'); ?> <?php echo form_error('gender'); ?><br />
<select name="gender">
	<option value="none" selected="selected">------------Select Gender------------</option>
	<option value="male">Male</option>
	<option value="female">Female</option>
</select>  <br />
<!--<?php echo form_input(array('id' => 'gender', 'name' => 'gender', 'placeholder' => 'GENDER', 'value' => set_value('gender'))); ?><br />-->

<?php echo form_label('ROLE :'); ?> <?php echo form_error('occupation'); ?><br />
<select name="role">
	<option value="" selected="selected">------------Select Role------------</option>
	<option value="clerk">clerk</option>
	<option value="treasurer">treasurer</option>
	<option value="pastor">pastor</option>
	<option value="personal">personal</option>
	<option value="training">training</option>
	<option value="social">social</option>
</select><br />
<!--<?php echo form_input(array('id' => 'occupation', 'name' => 'occupation', 'placeholder' => 'OCCUPATION/PROFESION', 'value' => set_value('occupation'))); ?>-->

<?php echo form_label('MOBILE PHONE NUMBER :'); ?> <?php echo form_error('mobile'); ?><br />
<?php echo form_input(array('id' => 'mobile', 'name' => 'mobile', 'placeholder' => '10 Digit Mobile No.', 'value' => set_value('mobile'))); ?><br />

<?php echo form_label('EMAIL ADDRESS :'); ?> <?php echo form_error('email'); ?><br />
<?php echo form_input(array('id' => 'email', 'name' => 'email', 'placeholder' => 'EMAIL ADDRESS', 'value' => set_value('email'))); ?><br />

<?php echo form_label('PASSWORD :'); ?> <?php echo form_error('password'); ?><br />
<?php echo form_input(array('id' => 'password', 'type'=>'password', 'name' => 'password', 'placeholder' => '***********', 'value' => set_value('password'))); ?><br />

<?php echo form_submit(array('id' => 'submit', 'value' => 'Submit')); ?>
<?php echo form_close(); ?><br/>
<div id="fugo">

</div>
</div>
</body>
</html>
