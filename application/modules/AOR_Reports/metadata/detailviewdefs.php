<?php
/**
 * Advanced OpenReports, SugarCRM Reporting.
 * @package Advanced OpenReports for SugarCRM
 * @copyright SalesAgility Ltd http://www.salesagility.com
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU AFFERO GENERAL PUBLIC LICENSE as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU AFFERO GENERAL PUBLIC LICENSE
 * along with this program; if not, see http://www.gnu.org/licenses
 * or write to the Free Software Foundation,Inc., 51 Franklin Street,
 * Fifth Floor, Boston, MA 02110-1301  USA
 *
 * @author SalesAgility <info@salesagility.com>
 */

$viewdefs['AOR_Reports']['DetailView'] = array(
'templateMeta' => array(
    'form' => array(
        'buttons'=>array(
            'EDIT',
            'DUPLICATE',
            'DELETE',
            array (
                'customCode' => '<input type="button" class="button" id="download_csv_button_old" value="{$MOD.LBL_EXPORT}">',
            ),
            array (
                'customCode' => '<input type="button" class="button" id="download_pdf_button_old" value="{$MOD.LBL_DOWNLOAD_PDF}">',
            ),
            array (
                'customCode' => '<input type="button" class="button" onClick="openProspectPopup();" value="{$MOD.LBL_ADD_TO_PROSPECT_LIST}">',
            ),
            array (
              'customCode' => '<input  type="submit" class="button" name="create" id="create" value="Create Report" onClick="document.location=\'index.php?module=AOR_Reports&action=EditView&return_module=AOR_Reports&return_action=DetailView\'">',
            ),
        ),
        'footerTpl' => 'modules/AOR_Reports/tpls/report.tpl',
    ),
    'maxColumns' => '2',
    'widths' => array(
                    array('label' => '10', 'field' => '30'),
                    array('label' => '10', 'field' => '30')
                    ),
    'includes'=> array(
        array('file'=>'modules/AOR_Reports/AOR_Report.js'),
    ),
    'tabDefs' =>
        array (
            'DEFAULT' =>
                array (
                    'newTab' => false,
                    'panelDefault' => 'collapsed',
                ),
        ),
),

'panels' =>array (
    'default' =>
    array (
  array (
    'name',
    'assigned_user_name',
  ),

  array (
	array (
      'name' => 'date_entered',
      'customCode' => '{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}',
      'label' => 'LBL_DATE_ENTERED',
    ),
    array (
      'name' => 'date_modified',
      'customCode' => '{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}',
      'label' => 'LBL_DATE_MODIFIED',
    ),
  ),

  array (
    'description',
  ),
    ),
)
);
?>
