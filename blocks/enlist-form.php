<?php
define('IN_PHPBB', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : './';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);

// Start session management
$user->session_begin();
$auth->acl($user->data);
$user->setup();

    if ($user->data['user_id'] == ANONYMOUS)
    {
       echo 'You must have a Registered Forum Account before you can acess this Membership Application form. Please visit <a href="http//www.infernalblaze.com/forum/register.php" /a> to register a forum account.
       
       If you already have a Forum Account, please login before completing this.';
    }

    else
    {
       echo 'Thanks for logging in, ' . $user->data['username_clean'];
    }
    ?>
              <div class="container">
	<div class="row">
		<div id="myModal2" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
 
                <div class="modal-header">
                    <a class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span></a>
                    <h4 class="modal-title" id="myModalLabel">Enlist Today!</h4>
                </div>
                <div class="modal-body">
                    
                    <div class="well">
<form class="form-horizontal" action="MAILTO:application@infernalblaze.com" method="post" enctype="text/plain">
Enter as much information as possible. The more we know about you, the better we can make a decision on your application. Remember, you want your application to look as good as possible. If you do not enter a lot of information, we will have a hard time understanding who you are and your application may be rejected. If you cannot enter any information into one of the boxes, put N/A or NONE. <b>ALL Answers MUST be written in <i>English</i></b>. If you do not speak English, please use <a href="http://www.translate.google.com">Google Translate</a> to translate your answers into English. If you submit an application written in anything but English, it will automatically be rejected.<br>
<br>
<fieldset>

<!-- Form Name -->
<legend>Form Name</legend>

<!-- Prepended text-->
<div class="form-group">
  <label class="col-md-4 control-label" for="clanname">Clan Name</label>
  <div class="col-md-5">
    <div class="input-group">
      <span class="input-group-addon">-IB-</span>
      <input id="clanname" name="clanname" class="form-control" placeholder="Name" required="" type="text">
    </div>
    <p class="help-block">Remember: You will start off with the -IB- Recruit Tags</p>
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="reason">Why Did You Choose This Name?</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="reason" name="reason">Is there a Specific Reason you chose this name? Tell us here!</textarea>
  </div>
</div>

<!-- Multiple Checkboxes -->
<div class="form-group">
  <label class="col-md-4 control-label" for="division">Game Division (Choose One or More)</label>
  <div class="col-md-4">
  <div class="checkbox">
    <label for="division-0">
      <input name="division" id="division-0" value="Halo PC / CE" type="checkbox">
      Halo PC / CE
    </label>
	</div>
  <div class="checkbox">
    <label for="division-1">
      <input name="division" id="division-1" value="WarGaming Series" type="checkbox">
      WarGaming Series
    </label>
	</div>
  <div class="checkbox">
    <label for="division-2">
      <input name="division" id="division-2" value="Tribes: Ascend" type="checkbox">
      Tribes: Ascend
    </label>
	</div>
  <div class="checkbox">
    <label for="division-3">
      <input name="division" id="division-3" value="ARMA Series" type="checkbox">
      ARMA Series
    </label>
	</div>
  <div class="checkbox">
    <label for="division-4">
      <input name="division" id="division-4" value="Planetside 2" type="checkbox">
      Planetside 2
    </label>
	</div>
  <div class="checkbox">
    <label for="division-5">
      <input name="division" id="division-5" value="Killing Floor" type="checkbox">
      Killing Floor
    </label>
	</div>
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Gender">Gender</label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="Gender-0">
      <input name="Gender" id="Gender-0" value="Male" checked="checked" type="radio">
      Male
    </label> 
    <label class="radio-inline" for="Gender-1">
      <input name="Gender" id="Gender-1" value="Female" type="radio">
      Female
    </label>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="age">Age</label>  
  <div class="col-md-5">
  <input id="age" name="age" placeholder="Example: 13" class="form-control input-md" required="" type="text">
  <span class="help-block">All Ages Are Accepted!</span>  
  </div>
</div>

<!-- Multiple Checkboxes (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="messenger">Xfire or Steam? (Choose One or More)</label>
  <div class="col-md-4">
    <label class="checkbox-inline" for="messenger-0">
      <input name="messenger" id="messenger-0" value="Xfire" type="checkbox">
      Xfire
    </label>
    <label class="checkbox-inline" for="messenger-1">
      <input name="messenger" id="messenger-1" value="Steam" type="checkbox">
      Steam
    </label>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="userid">User ID</label>  
  <div class="col-md-5">
  <input id="userid" name="userid" placeholder="Xfire ID and/or Steam ID" class="form-control input-md" required="" type="text">
  <span class="help-block">If you chose both Xfire and Seam, place your Xfire ID before your Steam ID</span>  
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="cheating">Have You Ever Cheated In Online Multiplayer Before?</label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="cheating-0">
      <input name="cheating" id="cheating-0" value="Yes" checked="checked" type="radio">
      Yes
    </label> 
    <label class="radio-inline" for="cheating-1">
      <input name="cheating" id="cheating-1" value="No" type="radio">
      No
    </label>
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="yescheating">IF YES, Please EXPLAIN Why</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="yescheating" name="yescheating"></textarea>
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="banned">Have You Ever Been Banned In An Infernal Blaze Server?</label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="banned-0">
      <input name="banned" id="banned-0" value="Yes" checked="checked" type="radio">
      Yes
    </label> 
    <label class="radio-inline" for="banned-1">
      <input name="banned" id="banned-1" value="No" type="radio">
      No
    </label>
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="yesbanned">IF YES, Please EXPLAIN Why</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="yesbanned" name="yesbanned">Please provide as many details as possible.</textarea>
  </div>
</div>

<!-- Multiple Checkboxes -->
<div class="form-group">
  <label class="col-md-4 control-label" for="referral">How Did You Find Us? (Choose One or More)</label>
  <div class="col-md-4">
  <div class="checkbox">
    <label for="referral-0">
      <input name="referral" id="referral-0" value="Servers" type="checkbox">
      Servers
    </label>
	</div>
  <div class="checkbox">
    <label for="referral-1">
      <input name="referral" id="referral-1" value="Website" type="checkbox">
      Website
    </label>
	</div>
  <div class="checkbox">
    <label for="referral-2">
      <input name="referral" id="referral-2" value="Referral" type="checkbox">
      Referral
    </label>
	</div>
  <div class="checkbox">
    <label for="referral-3">
      <input name="referral" id="referral-3" value="Advertisement" type="checkbox">
      Advertisement
    </label>
	</div>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="member_name">If You Were Referred By A Member, Please List Their Name</label>  
  <div class="col-md-5">
  <input id="member_name" name="member_name" placeholder="-IB-, {IB}, ‹IB›, or «IB»" class="form-control input-md" type="text">
  <span class="help-block">Please list their tags as well if you know them.</span>  
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="skills">Do You Have Any Specalized Computer Skills?</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="skills" name="skills">Such as HTML, PHP, Java, CSS, Video Editing, Software Design, etc.</textarea>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="backup">Backup Name</label>  
  <div class="col-md-5">
  <input id="backup" name="backup" placeholder="Name" class="form-control input-md" required="" type="text">
  <span class="help-block">Just In-Case the Name You Requested Above Has Already Been Taken</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="forum">Forum Username</label>  
  <div class="col-md-5">
  <input id="forum" name="forum" placeholder="(Enter Username)" class="form-control input-md" required="" type="text">
  <span class="help-block">You Must Have A Registered Forum Account To Receive Notifications About Your Application</span>  
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="xifre_community">Are You In 5 or MORE Xfire Communities? (Steam Users, Always Click No)</label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="xifre_community-0">
      <input name="xifre_community" id="xifre_community-0" value="Yes" checked="checked" type="radio">
      Yes
    </label> 
    <label class="radio-inline" for="xifre_community-1">
      <input name="xifre_community" id="xifre_community-1" value="No" type="radio">
      No
    </label>
  </div>
</div>

<!-- Multiple Checkboxes (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="edits">I Understand That Once I Hit Submit That I Cannot Ask To Make ANY Changes To My Application</label>
  <div class="col-md-4">
    <label class="checkbox-inline" for="edits-0">
      <input name="edits" id="edits-0" value="Yes" type="checkbox">
      Yes
    </label>
    <label class="checkbox-inline" for="edits-1">
      <input name="edits" id="edits-1" value="No" type="checkbox">
      No
    </label>
  </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-8">
    <button id="submit" name="submit" class="btn btn-success">Submit Application</button>
    <button id="clear" name="clear" class="btn btn-danger">Clear All Fields</button>
  </div>
</div>

</fieldset>
</form>

            </div>
                    
                    
                </div>
                <div class="modal-footer">
                    <div class="btn-group">
                    <button class="btn btn-danger" data-dismiss="modal">Close Form</button>
                    
                </div>
                </div>
 
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dalog -->
</div><!-- /.modal -->
