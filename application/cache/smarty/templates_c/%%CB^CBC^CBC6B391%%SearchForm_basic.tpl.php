<?php /* Smarty version 2.6.11, created on 2017-09-13 16:00:04
         compiled from cache/modules/Leads/SearchForm_basic.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'counter', 'cache/modules/Leads/SearchForm_basic.tpl', 34, false),array('function', 'math', 'cache/modules/Leads/SearchForm_basic.tpl', 35, false),array('function', 'sugar_translate', 'cache/modules/Leads/SearchForm_basic.tpl', 46, false),array('function', 'sugar_getimagepath', 'cache/modules/Leads/SearchForm_basic.tpl', 181, false),array('modifier', 'count', 'cache/modules/Leads/SearchForm_basic.tpl', 152, false),)), $this); ?>

<input type='hidden' id="orderByInput" name='orderBy' value=''/>
<input type='hidden' id="sortOrder" name='sortOrder' value=''/>
<?php if (! isset ( $this->_tpl_vars['templateMeta']['maxColumnsBasic'] )): ?>
	<?php $this->assign('basicMaxColumns', $this->_tpl_vars['templateMeta']['maxColumns']);  else: ?>
    <?php $this->assign('basicMaxColumns', $this->_tpl_vars['templateMeta']['maxColumnsBasic']);  endif; ?>
<script>
<?php echo '

	$(function() {
	var $dialog = $(\'<div></div>\')
		.html(SUGAR.language.get(\'app_strings\', \'LBL_SEARCH_HELP_TEXT\'))
		.dialog({
			autoOpen: false,
			title: SUGAR.language.get(\'app_strings\', \'LBL_HELP\'),
			width: 700
		});
		
		$(\'#filterHelp\').click(function() {
		$dialog.dialog(\'open\');
		// prevent the default action, e.g., following a link
	});
	
	});
'; ?>

</script>

<table width="100%" cellspacing="0" cellpadding="0" border="0">
<tr>
      
      
	<?php echo smarty_function_counter(array('assign' => 'index'), $this);?>

	<?php echo smarty_function_math(array('equation' => "left % right",'left' => $this->_tpl_vars['index'],'right' => $this->_tpl_vars['basicMaxColumns'],'assign' => 'modVal'), $this);?>

	<?php if (( $this->_tpl_vars['index'] % $this->_tpl_vars['basicMaxColumns'] == 1 && $this->_tpl_vars['index'] != 1 )): ?>
		</tr><tr>
	<?php endif; ?>
	
	<td scope="row" nowrap="nowrap" width='1%'">
	
		
		<label for='search_name_basic' ><?php echo smarty_function_sugar_translate(array('label' => 'LBL_NAME','module' => 'Leads'), $this);?>
</label>
    	</td>

	
	<td  nowrap="nowrap" width='1%'>
			
<?php if (strlen ( $this->_tpl_vars['fields']['search_name_basic']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['search_name_basic']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['search_name_basic']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['search_name_basic']['name']; ?>
' 
    id='<?php echo $this->_tpl_vars['fields']['search_name_basic']['name']; ?>
' size='30' 
     
    value='<?php echo $this->_tpl_vars['value']; ?>
' title=''      accesskey='9'  >
   	   	</td>
    
      
	<?php echo smarty_function_counter(array('assign' => 'index'), $this);?>

	<?php echo smarty_function_math(array('equation' => "left % right",'left' => $this->_tpl_vars['index'],'right' => $this->_tpl_vars['basicMaxColumns'],'assign' => 'modVal'), $this);?>

	<?php if (( $this->_tpl_vars['index'] % $this->_tpl_vars['basicMaxColumns'] == 1 && $this->_tpl_vars['index'] != 1 )): ?>
		</tr><tr>
	<?php endif; ?>
	
	<td scope="row" nowrap="nowrap" width='1%'">
	
		
		<label for='current_user_only_basic' ><?php echo smarty_function_sugar_translate(array('label' => 'LBL_CURRENT_USER_FILTER','module' => 'Leads'), $this);?>
</label>
    	</td>

	
	<td  nowrap="nowrap" width='1%'>
			
<?php if (strval ( $this->_tpl_vars['fields']['current_user_only_basic']['value'] ) == '1' || strval ( $this->_tpl_vars['fields']['current_user_only_basic']['value'] ) == 'yes' || strval ( $this->_tpl_vars['fields']['current_user_only_basic']['value'] ) == 'on'): ?> 
<?php $this->assign('checked', 'CHECKED');  else:  $this->assign('checked', "");  endif; ?>
<input type="hidden" name="<?php echo $this->_tpl_vars['fields']['current_user_only_basic']['name']; ?>
" value="0"> 
<input type="checkbox" id="<?php echo $this->_tpl_vars['fields']['current_user_only_basic']['name']; ?>
" 
name="<?php echo $this->_tpl_vars['fields']['current_user_only_basic']['name']; ?>
" 
value="1" title='' tabindex="" <?php echo $this->_tpl_vars['checked']; ?>
 >
   	   	</td>
    
      
	<?php echo smarty_function_counter(array('assign' => 'index'), $this);?>

	<?php echo smarty_function_math(array('equation' => "left % right",'left' => $this->_tpl_vars['index'],'right' => $this->_tpl_vars['basicMaxColumns'],'assign' => 'modVal'), $this);?>

	<?php if (( $this->_tpl_vars['index'] % $this->_tpl_vars['basicMaxColumns'] == 1 && $this->_tpl_vars['index'] != 1 )): ?>
		</tr><tr>
	<?php endif; ?>
	
	<td scope="row" nowrap="nowrap" width='1%'">
	
		
		<label for='open_only_basic' ><?php echo smarty_function_sugar_translate(array('label' => 'LBL_OPEN_ITEMS','module' => 'Leads'), $this);?>
</label>
    	</td>

	
	<td  nowrap="nowrap" width='1%'>
			
<?php if (strval ( $this->_tpl_vars['fields']['open_only_basic']['value'] ) == '1' || strval ( $this->_tpl_vars['fields']['open_only_basic']['value'] ) == 'yes' || strval ( $this->_tpl_vars['fields']['open_only_basic']['value'] ) == 'on'): ?> 
<?php $this->assign('checked', 'CHECKED');  else:  $this->assign('checked', "");  endif; ?>
<input type="hidden" name="<?php echo $this->_tpl_vars['fields']['open_only_basic']['name']; ?>
" value="0"> 
<input type="checkbox" id="<?php echo $this->_tpl_vars['fields']['open_only_basic']['name']; ?>
" 
name="<?php echo $this->_tpl_vars['fields']['open_only_basic']['name']; ?>
" 
value="1" title='' tabindex="" <?php echo $this->_tpl_vars['checked']; ?>
 >
   	   	</td>
    
      
	<?php echo smarty_function_counter(array('assign' => 'index'), $this);?>

	<?php echo smarty_function_math(array('equation' => "left % right",'left' => $this->_tpl_vars['index'],'right' => $this->_tpl_vars['basicMaxColumns'],'assign' => 'modVal'), $this);?>

	<?php if (( $this->_tpl_vars['index'] % $this->_tpl_vars['basicMaxColumns'] == 1 && $this->_tpl_vars['index'] != 1 )): ?>
		</tr><tr>
	<?php endif; ?>
	
	<td scope="row" nowrap="nowrap" width='1%'">
	
		
		<label for='favorites_only_basic' ><?php echo smarty_function_sugar_translate(array('label' => 'LBL_FAVORITES_FILTER','module' => 'Leads'), $this);?>
</label>
    	</td>

	
	<td  nowrap="nowrap" width='1%'>
			
<?php if (strval ( $this->_tpl_vars['fields']['favorites_only_basic']['value'] ) == '1' || strval ( $this->_tpl_vars['fields']['favorites_only_basic']['value'] ) == 'yes' || strval ( $this->_tpl_vars['fields']['favorites_only_basic']['value'] ) == 'on'): ?> 
<?php $this->assign('checked', 'CHECKED');  else:  $this->assign('checked', "");  endif; ?>
<input type="hidden" name="<?php echo $this->_tpl_vars['fields']['favorites_only_basic']['name']; ?>
" value="0"> 
<input type="checkbox" id="<?php echo $this->_tpl_vars['fields']['favorites_only_basic']['name']; ?>
" 
name="<?php echo $this->_tpl_vars['fields']['favorites_only_basic']['name']; ?>
" 
value="1" title='' tabindex="" <?php echo $this->_tpl_vars['checked']; ?>
 >
   	   	</td>
    <?php if (count($this->_tpl_vars['formData']) >= $this->_tpl_vars['basicMaxColumns']+1): ?>
    </tr>
    <tr>
	<td colspan="<?php echo $this->_tpl_vars['searchTableColumnCount']; ?>
">
    <?php else: ?>
	<td class="sumbitButtons">
    <?php endif; ?>
		&nbsp;&nbsp;&nbsp;&nbsp;
        <button tabindex="2" data-toggle="tooltip" data-placement="bottom" title="<?php echo $this->_tpl_vars['APP']['LBL_SEARCH_BUTTON_TITLE']; ?>
" onclick="SUGAR.savedViews.setChooser();" class="btn btn-outline-primary" type="submit" name="button" id="search_form_submit"/><i class="fa fa-search fa-lg btn-color-new" aria-hidden="true" ></i></button>
	    &nbsp;&nbsp;&nbsp;&nbsp;
	    <button type="button" tabindex='2' data-toggle="tooltip" data-placement="bottom" title='<?php echo $this->_tpl_vars['APP']['LBL_CLEAR_BUTTON_TITLE']; ?>
' onclick='SUGAR.searchForm.clear_form(this.form); return false;' class='btn btn-outline-primary' type='button' name='clear' id='search_form_clear' value='<?php echo $this->_tpl_vars['APP']['LBL_CLEAR_BUTTON_LABEL']; ?>
'/><i class="fa fa-times fa-lg btn-color-new
	    " aria-hidden="true" ></i>

</button> 
        <?php if ($this->_tpl_vars['HAS_ADVANCED_SEARCH']): ?>
        &nbsp;&nbsp;&nbsp;&nbsp;
	    <button type="button" id="advanced_search_link" class="btn btn-outline-primary" data-toggle="tooltip" data-placement="bottom" onclick="SUGAR.searchForm.searchFormSelect('<?php echo $this->_tpl_vars['module']; ?>
|advanced_search','<?php echo $this->_tpl_vars['module']; ?>
|basic_search')" accesskey="<?php echo $this->_tpl_vars['APP']['LBL_ADV_SEARCH_LNK_KEY']; ?>
" title="<?php echo $this->_tpl_vars['APP']['LNK_ADVANCED_SEARCH']; ?>
" ><i class="fa fa-filter fa-lg btn-color-new" aria-hidden="true" ></i>
	    </button>
	    <?php endif; ?>

		&nbsp;&nbsp;&nbsp;&nbsp;
		<button type="button" onclick="window.open('index.php?module=<?php echo $this->_tpl_vars['module']; ?>
&action=EditView&return_module=<?php echo $this->_tpl_vars['module']; ?>
&return_action=DetailView', '_blank');" id="create_link"class="btn btn-outline-primary" data-toggle="tooltip" data-placement="bottom" title="Create">
		<i class="fa fa-plus fa-lg btn-color-new" aria-hidden="true" ></i>
		</button>
		&nbsp;&nbsp;&nbsp;&nbsp;
		<button type="button" onclick="window.location='index.php?module=Import&action=Step1&import_module=<?php echo $this->_tpl_vars['module']; ?>
&return_module=<?php echo $this->_tpl_vars['module']; ?>
&return_action=index';" id="" class='btn btn-outline-primary' data-toggle="tooltip" data-placement="bottom" title="Import"> <i class="fa fa-download fa-lg btn-color-new" aria-hidden="true" ></i>
		</button>
		
    </td>
	<td class="helpIcon" width="*"><img alt="Help" border='0' id="filterHelp" src='<?php echo smarty_function_sugar_getimagepath(array('file' => "help-dashlet.gif"), $this);?>
'></td>
	</tr>
</table>
		
<?php echo '<script language="javascript">if(typeof sqs_objects == \'undefined\'){var sqs_objects = new Array;}sqs_objects[\'search_form_modified_by_name_basic\']={"form":"search_form","method":"get_user_array","field_list":["user_name","id"],"populate_list":["modified_by_name_basic","modified_user_id_basic"],"required_list":["modified_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"No Match"};sqs_objects[\'search_form_created_by_name_basic\']={"form":"search_form","method":"get_user_array","field_list":["user_name","id"],"populate_list":["created_by_name_basic","created_by_basic"],"required_list":["created_by"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"No Match"};sqs_objects[\'search_form_assigned_user_name_basic\']={"form":"search_form","method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name_basic","assigned_user_id_basic"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"No Match"};sqs_objects[\'search_form_report_to_name_basic\']={"form":"search_form","method":"get_contact_array","modules":["Contacts"],"field_list":["salutation","first_name","last_name","id"],"populate_list":["report_to_name_basic","reports_to_id_basic","reports_to_id_basic","reports_to_id_basic"],"required_list":["reports_to_id"],"group":"or","conditions":[{"name":"first_name","op":"like_custom","end":"%","value":""},{"name":"last_name","op":"like_custom","end":"%","value":""}],"order":"last_name","limit":"30","no_match_text":"No Match"};sqs_objects[\'search_form_campaign_name_basic\']={"form":"search_form","method":"query","modules":["Campaigns"],"group":"or","field_list":["name","id"],"populate_list":["campaign_id_basic","campaign_id_basic"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"required_list":["campaign_id"],"order":"name","limit":"30","no_match_text":"No Match"};sqs_objects[\'search_form_scrm_partner_contacts_leads_name_basic\']={"form":"search_form","method":"query","modules":["scrm_Partner_Contacts"],"group":"or","field_list":["name","id"],"populate_list":["scrm_partner_contacts_leads_name_basic","scrm_partner_contacts_leadsscrm_partner_contacts_ida_basic"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"No Match"};sqs_objects[\'search_form_scrm_partners_leads_1_name_basic\']={"form":"search_form","method":"query","modules":["scrm_Partners"],"group":"or","field_list":["name","id"],"populate_list":["scrm_partners_leads_1_name_basic","scrm_partners_leads_1scrm_partners_ida_basic"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"No Match"};</script>'; ?>