<html>
<head>
<title>example</title>
<style>
.header {
    background-color:white;
    color:black;
    text-align:center;
    padding:1px;
}
body{
	background-color:#eeeeee;
	
}
.nav {
    background-color:#eeeeee;
    height:644px;
    width:227px;
   float:left;
    margin-right:15px;
border-right:1px solid rgba(158, 158, 158, 0.55);	
}
a
{
   color:black;	
   text-decoration:none;
   
}
li
{
	list-style-type:none;
}
.section {
    width:350px;
    float:left;
    padding:40px;
align:center;
margin-left:20px;	
}

<!--.footer {
    background-color:black;
    color:white;
    clear:both;
    text-align:center;
   padding:5px;      
}-->
</style>
<script src="http://code.jquery.com/jquery-3.1.0.min.js"></script>
<script>
$(function () {
    
        $("#section-cst,#section-mpt,#section-ep").hide();
		$(".ct,.cst,.mpt,.ep").bind("click",function(){
        $("#section-ct,#section-cst,#section-mpt,#section-ep").hide();
		if($(this).attr("class")=="cst")
		{
			$("#section-cst").show();
			
		}
		else if($(this).attr("class")=="mpt")
		{
			$("#section-mpt").show();
		}
		else
		{
			$("#section-ep").show();
		}
    });
});
</script>
<script type= "text/javascript" src = "countries.js"></script>

</head>
<body>
<div class="header">
     <h2>User Info</h2>
</div>
<div class="nav">
    <table>
	<tr>
	<td style=" padding-top:10px;border-bottom:1px solid rgba(158, 158, 158, 0.55);background-color:#26734d;color:white;text-align:center;"  ><b>User Options</b></td>
	</tr>
	<tr>
	<td
	      style="padding-top:10px;border-bottom:1px solid rgba(158, 158, 158, 0.55);text-align:center;" ><b>Task Options</b></td>
		  </tr>
		  <tr>
		  <td
         style="padding-top:10px;border-bottom:1px solid rgba(158, 158, 158, 0.55);"><a href="#section-ct" class="ct">Create Task</a>
         </td>
		 </tr>
		 <tr>
		  <td
		 style="padding-top:10px;border-bottom:1px solid rgba(158, 158, 158, 0.55);"><a href="#section-cst" class="cst">Create Specific Task</a>
		 </td>
		 </tr>
		 <tr>
		 <td
		 
		  style="padding-top:10px;border-bottom:1px solid rgba(158, 158, 158, 0.55);"><a href="#section-mpt" class="mpt">My Pending Task</a>
		 </td>
		 </tr>
		 <tr>
		 <td
		 style="padding-top:10px;border-bottom:1px solid rgba(158, 158, 158, 0.55);"><a href="#section-mot" class="mot">My Open Task</a>
		 </td>
		 </tr>
		 <tr>
		 <td
		 style="padding-top:10px;border-bottom:1px solid rgba(158, 158, 158, 0.55);"><a href="#section-mct" class="mct">My closed Task</a>
		 </td>
		 </tr>
		 <tr>
		 <td
		 style="padding-top:10px;border-bottom:1px solid rgba(158, 158, 158, 0.55);text-align:center;"><b>Schedule Task</b>
		 </td>
		 </tr>
		 <tr>
		 <td
		 style="padding-top:10px;border-bottom:1px solid rgba(158, 158, 158, 0.55);"><a href="#section-cg" class="cg">Create Group</a>
		 </td>
		 </tr>
		 <tr>
		 <td
		 style="padding-top:10px;border-bottom:1px solid rgba(158, 158, 158, 0.55);"><a href="#section-mug" class="mug">My User Group</a>
		 </td>
		 </tr>
		 <tr>
		 <td
		 style="padding-top:10px;border-bottom:1px solid rgba(158, 158, 158, 0.55);"><a href="#section-moc" class="moc">Create Scheduled Task</a>
		 </td>
		 </tr>
		 <tr>
		 <td
		 style="padding-top:10px;border-bottom:1px solid rgba(158, 158, 158, 0.55);"><a href="#section-csu" class="csu">My Outbound Scheduled Tasks Open</a>
		 </td>
		 </tr>
		 <tr>
		 <td
		 style="padding-top:10px;border-bottom:1px solid rgba(158, 158, 158, 0.55);"><a href="#section-mos" class="mos">My Outbound Scheduled Tasks Closed</a>
		 </td>
		 </tr>
		 <tr>
		 <td
		 style="padding-top:10px;border-bottom:1px solid rgba(158, 158, 158, 0.55);"><a href="#section-mio" class="mio">My Inbound Tasks Open</a>
		</td>
		</tr>
		<tr>
		<td
		style="padding-top:10px;border-bottom:1px solid rgba(158, 158, 158, 0.55);"><a href="#section-mic" class="mic">My Inbound Tasks Closed</a>
		 </td>
		 </tr>
		 <tr>
		 <td
		 style="padding-top:10px;border-bottom:1px solid rgba(158, 158, 158, 0.55);text-align:center;"><b>FAQ Options</b>
		 </td>
		 </tr>
		 <tr>
		 <td
		 style="padding-top:10px;border-bottom:1px solid rgba(158, 158, 158, 0.55);"><a href="#section-kb" class="kb">Knowledge Base</a>
		 </td>
		 </tr>
		 <tr>
		 <td
		 style="padding-top:10px;border-bottom:1px solid rgba(158, 158, 158, 0.55);text-align:center;"><b>User Options</b>
		</td>
		</tr>
		<tr>
		<td
		style="padding-top:10px;border-bottom:1px solid rgba(158, 158, 158, 0.55);"><a href="#section-ep" class="ep">Edit Profile</a>
		</td>
		</tr>
		</table>
    
</div>
<div id="section-ct" >
<table>
<tr>

<h4 style="text-align:center;background-color:#26734d;color:white;padding-top:3px;font-size:20px;margin-bottom:10px;">
Create Task
</tr>

<tr>
<td style="background-color:#26734d;color:white;">Task Manager Info</td>

<td><br>
<td colspan="2" style="text-align:right;">Task Manager Group:</td>
<td>
<select style="width:150px;">
<option selected=""value="Default">select</option>
</select>
</td>

<td colspan="2"style="text-align:right;">Task Priority</td>
<td>
<select>
<option selected=""value="Default">select</option>
<option value="high">High</option>
<option value="low">Low</option>
<option value="routine">Routine</option>
</select>
</td>
</tr>
<tr>
<td colspan="2"style="text-align:right;">Ticket Type:</td>
<td>
<select>
<option selected=""value="Default">select</option>
</select>
</td>
</tr>
<tr>


<tr>

<td style="background-color:#26734d;color:white;width:70%">User Info</td>

<td colspan="2"style="text-align:right;">
User Name:</td>
<td><input type="text" name="uname"></td>
<td colspan="2"style="text-align:right;">E-mail:</td>
<td><input type="text" name="email"></td>
</tr>
<tr>
</tr>
<tr>
<td colspan="2"style="text-align:right;">Office</td>
<td><input type="text" name="office"></td>
<td colspan="2"style="text-align:right;">Phone Number</td>
<td><input type="text" name="phone"></td>
</tr>
<tr>
</tr>
<tr>
<td colspan="2"style="text-align:right;">Select your Department:</td>
<td>
<select>
<option selected="" value="Default">select</option>
</select>
</td>
<td colspan="2"style="text-align:right;">Cabin no:</td>
<td><input type="text" name="cabin"></td>
</tr>
<tr>
</tr>
<tr>
<td colspan="2"style="text-align:right;">
Building:</td>
<td>
<select>
<option selected="" value="Default">select</option>
</select>
</td> 
<td colspan="2"style="text-align:right;">
Floor no:</td>
<td>
<select>
<option selected="" value="Default">select</option>
</select>
</td>
</tr>
<tr>
</tr>
<tr>
<td colspan="2"style="text-align:right;">
Select Your Department Head:</td>
<td>
<select>
<option selected="" value="Default">select</option>
</select>
</td>
</tr>
<tr>
</tr>
<tr>
</tr>
<tr>
<p style="background-color:#26734d;color:white;">Task Info</p>
</tr>
<tr>
</tr>
<tr>
<td colspan="2"style="text-align:right;">
Category:</td>
<td>
<select>
<option selected="" value="Default">select</option>
</select>
</td>
</tr>
<tr>
</tr>
<tr>
<td colspan="2"style="text-align:right;">
Short Description:</td>
<td>
<textarea rows="7" cols="15" name="short"></textarea>
</td>
</tr>
<tr>
</tr>
<tr>
<td colspan="2"style="text-align:right;">
Description:</td>
<td><textarea rows="10" cols="25" name="desc"></textarea>
</td>
</tr>
<tr>
</tr>
<tr>
<td colspan="2"style="text-align:right;">
Mark CC:</td>
<td><input type="text" name="cc"></td>
</tr>
<tr>
</tr>
<tr>
<td colspan="5">Get Hint</td>
</tr>
<tr>
<td colspan="5"><input type="text" name="hint"></td>
</tr>
<tr>
</tr>
<tr>
<td colspan="2">Suggestion</td>
</tr>
<tr>
<td colspan="2"><input type="checkbox" name="suggestion" value="Need Approval">Need Approval</td>
</tr>
<tr>
</tr>
<tr>
<td colspan="2"style="text-align:right;">Attachment:</td>
<td><input type="submit" name="attach" value="Choose File"></td>
</tr>
<tr>
<td colspan="2"style="text-align:right;">(maxsize=2MB)</td>
</tr>
<tr>
</tr>
<tr>
</tr>
<tr>
<td>
<input type="submit" name="task" value="Create Task"></td>
<td>
<input type="reset" name="reset" value="Reset"></td>
</tr>
</table>

</div>
<div id="section-cst">
<table>
<tr>
<h2 style="text-align:center;background-color:#26734d;color:white;padding-top:3px;font-size:20px;margin-bottom:10px;">Create specific Task</h2></tr>
<tr>
</tr>
<tr>
</tr>
<tr>
<p style="background-color:#26734d;color:white;">
Task Manager Info</p></tr>
<tr>
</tr>
<tr>
</tr>
<tr>
<td colspan="4"style="text-align:right;">Task Manager Group:</td>
<td><input type="text" name="Tmanager"></td></tr>
<tr>
</tr>
<tr>
<p style="background-color:#26734d;color:white;">Task Info</p>
</tr>
<tr>
</tr>
<tr>
<td colspan="4"style="text-align:right;">Short Description:</td>
<td><input type="text" name="shortdes"></td></tr>
<tr>
</tr>
<tr>
<td colspan="4"style="text-align:right;">Description:</td>
<td><textarea rows="5" cols="8" name="description"></textarea></td></tr>
<tr>
</tr>
<tr>
<td colspan="4"style="text-align:right;">Task Dead Line:</td>
<td><input type="text" name="deadline"></td></tr>
<tr>
</tr>
<tr>
<td><input type="submit" name="submit" value="Create"></td>
<td><input type="reset" name="reset" value="Reset"></td>
</tr>
</table>

 </div>
<div id="section-mpt">
<table>
<tr>
<td>
<h2>Your Pending Tasks</h2></td></tr>
<tr>
</tr>
<tr>
<th style="width:10%">Id</th>
<th style="width:10%">Task Manager</th>
<th style="width:10%">Group</th>
<th style="width:10%">Short Description</th>
<th style="width:10%">Created</th>
<th style="width:10%">Bcs</th>
<th style="width:10%">Wcs</th>
<th style="width:10%">Status</th>
</tr>
</table>
</div>
<div id="section-ep" >
<h2 style="text-align:center;">EDIT PROFILE</h2>
<table>
<tr>
<td>
<h3 style="padding-left:3px;">Edit Profile - Required</h3>
</td>
</tr>
<tr>
</tr>
<tr>
<td>
<b >User Name</b></td>
<td>
<input style="margin-left:350px; " type="text" name="uname"></td>
</tr>
<tr>
</tr>
<tr>
<td>
<b>First Name</b></td>
<td>
<input style="margin-left:350px; "type="text" name="fname"></td>
</tr>
<tr>
</tr>
<tr>
<td>
<b>Last Name</b></td>
<td>
<input style="margin-left:350px; "type="text" name="lname"></td></tr>
<tr>
</tr>
<tr>
<td>
<b>E-mail</b></td>
<td>
<input style="margin-left:350px; "type="text" name="email"></td>
</tr>
<tr>
</tr>
<tr>
<td>
<b>Password</b></td>
<td>
<input style="margin-left:350px; "type="text" name="pass"></td>
</tr>
<tr>
</tr>
<tr>
<td>
<b>Re-enter Password</b></td>
<td>
<input style="margin-left:350px; "type="text" name="repass"></td>
</tr>
<tr>
</tr>
<tr>
<td>

<h3>Edit Profile - Optional</h3></td>
</tr>
<tr>
</tr>
<tr>
<td>
<b>Address</b></td>
<td>
<textarea style="margin-left:350px; "rows="7" cols="20" name="address"></textarea></td>
</tr>
<tr>
</tr>
<tr>
<td>
<b>City</b></td>
<td>
<input style="margin-left:350px; "type="text" name="city"></td>
</tr>
<tr>
</tr>
<tr>
<td>
<b>Country</b></td>
<td>
<select style="margin-left:350px;" id="country" name ="country"> select a country</select>
<script language="javascript">
populateCountries("country", "state");
 </script>
</td>
</tr>
<tr>
</tr>
<tr>
<td>
<b>State</b></td>
<td>
 <select style="margin-left:350px;" name ="state" id ="state" placeholder="select the state">select the state</select>
 <script language="javascript">
populateCountries("country", "state");
 </script>
 </td>
</tr>
<tr>
</tr>
<tr>
<td>
<b>Phone Number</b></td>
<td>
<input style="margin-left:350px; "type="text" name="phnum"></td>
</tr>
<tr>
</tr>
<tr>
<td>
<b>Department</b></td>
<td>
<input style="margin-left:350px; "type="text" name="department"></td>
</tr>
<tr>
</tr>
<tr>
<td>

<h3>Edit Profile - Personal</h3>
</td>
</tr>
<tr>
</tr>
<tr>
<td>
<b>Secret Question </b></td>
<td>
<input style="margin-left:350px;" type="text" name="secret"></td>
</tr>
<tr>
</tr>
<tr>
<td>
<b>Answer </b></td>
<td>
<input style="margin-left:350px;" type="text" name="answer"></td>
</tr>
<tr>
</tr>


</table>


</div>
	<!--
<div class="footer">Footer</div>
-->
</body>
</html>
