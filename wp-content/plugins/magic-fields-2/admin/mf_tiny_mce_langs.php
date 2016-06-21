<?php
/**
 * Direct copy from latest Wordpress 3.2 wp-includes/js/tinymce/langs/wp-langs.php
 * This was deprecated in 3.3, but we need it
 */

// escape text only if it needs translating
function mce_escape($text) {
  global $language;

  if ( 'en' == $language )
    return $text;
  else
    return esc_js($text);
}

$lang = 'tinyMCE.addI18n({' . $language . ':{
common:{
edit_confirm:"' . mce_escape( __('Do you want to use the WYSIWYG mode for this textarea?') ) . '",
apply:"' . mce_escape( __('Apply') ) . '",
insert:"' . mce_escape( __('Insert') ) . '",
update:"' . mce_escape( __('Update') ) . '",
cancel:"' . mce_escape( __('Cancel') ) . '",
close:"' . mce_escape( __('Close') ) . '",
browse:"' . mce_escape( __('Browse') ) . '",
class_name:"' . mce_escape( __('Class') ) . '",
not_set:"' . mce_escape( __('-- Not set --') ) . '",
clipboard_msg:"' . mce_escape( __('Copy/Cut/Paste is not available in Mozilla and Firefox.') ) . '",
clipboard_no_support:"' . mce_escape( __('Currently not supported by your browser, use keyboard shortcuts instead.') ) . '",
popup_blocked:"' . mce_escape( __('Sorry, but we have noticed that your popup-blocker has disabled a window that provides application functionality. You will need to disable popup blocking on this site in order to fully utilize this tool.') ) . '",
invalid_data:"' . mce_escape( __('ERROR: Invalid values entered, these are marked in red.') ) . '",
invalid_data_number:"' . mce_escape( __('{#field} must be a number') ) . '",
invalid_data_min:"' . mce_escape( __('{#field} must be a number greater than {#min}') ) . '",
invalid_data_size:"' . mce_escape( __('{#field} must be a number or percentage') ) . '",
more_colors:"' . mce_escape( __('More colors') ) . '"
},
colors:{
"000000":"' . mce_escape( __('Black') ) . '",
"993300":"' . mce_escape( __('Burnt orange') ) . '",
"333300":"' . mce_escape( __('Dark olive') ) . '",
"003300":"' . mce_escape( __('Dark green') ) . '",
"003366":"' . mce_escape( __('Dark azure') ) . '",
"000080":"' . mce_escape( __('Navy Blue') ) . '",
"333399":"' . mce_escape( __('Indigo') ) . '",
"333333":"' . mce_escape( __('Very dark gray') ) . '",
"800000":"' . mce_escape( __('Maroon') ) . '",
"FF6600":"' . mce_escape( __('Orange') ) . '",
"808000":"' . mce_escape( __('Olive') ) . '",
"008000":"' . mce_escape( __('Green') ) . '",
"008080":"' . mce_escape( __('Teal') ) . '",
"0000FF":"' . mce_escape( __('Blue') ) . '",
"666699":"' . mce_escape( __('Grayish blue') ) . '",
"808080":"' . mce_escape( __('Gray') ) . '",
"FF0000":"' . mce_escape( __('Red') ) . '",
"FF9900":"' . mce_escape( __('Amber') ) . '",
"99CC00":"' . mce_escape( __('Yellow green') ) . '",
"339966":"' . mce_escape( __('Sea green') ) . '",
"33CCCC":"' . mce_escape( __('Turquoise') ) . '",
"3366FF":"' . mce_escape( __('Royal blue') ) . '",
"800080":"' . mce_escape( __('Purple') ) . '",
"999999":"' . mce_escape( __('Medium gray') ) . '",
"FF00FF":"' . mce_escape( __('Magenta') ) . '",
"FFCC00":"' . mce_escape( __('Gold') ) . '",
"FFFF00":"' . mce_escape( __('Yellow') ) . '",
"00FF00":"' . mce_escape( __('Lime') ) . '",
"00FFFF":"' . mce_escape( __('Aqua') ) . '",
"00CCFF":"' . mce_escape( __('Sky blue') ) . '",
"993366":"' . mce_escape( __('Brown') ) . '",
"C0C0C0":"' . mce_escape( __('Silver') ) . '",
"FF99CC":"' . mce_escape( __('Pink') ) . '",
"FFCC99":"' . mce_escape( __('Peach') ) . '",
"FFFF99":"' . mce_escape( __('Light yellow') ) . '",
"CCFFCC":"' . mce_escape( __('Pale green') ) . '",
"CCFFFF":"' . mce_escape( __('Pale cyan') ) . '",
"99CCFF":"' . mce_escape( __('Light sky blue') ) . '",
"CC99FF":"' . mce_escape( __('Plum') ) . '",
"FFFFFF":"' . mce_escape( __('White') ) . '"
},
contextmenu:{
align:"' . mce_escape( /* translators: alignment */ __('Alignment') ) . '",
left:"' . mce_escape( /* translators: alignment */ __('Left') ) . '",
center:"' . mce_escape( /* translators: alignment */ __('Center') ) . '",
right:"' . mce_escape( /* translators: alignment */ __('Right') ) . '",
full:"' . mce_escape( /* translators: alignment */ __('Full') ) . '"
},
insertdatetime:{
date_fmt:"' . mce_escape( /* translators: year, month, date */ __('%Y-%m-%d') ) . '",
time_fmt:"' . mce_escape( /* translators: hours, minutes, seconds */ __('%H:%M:%S') ) . '",
insertdate_desc:"' . mce_escape( __('Insert date') ) . '",
inserttime_desc:"' . mce_escape( __('Insert time') ) . '",
months_long:"' . mce_escape( __('January').','.__('February').','.__('March').','.__('April').','.__('May').','.__('June').','.__('July').','.__('August').','.__('September').','.__('October').','.__('November').','.__('December') ) . '",
months_short:"' . mce_escape( __('Jan_January_abbreviation').','.__('Feb_February_abbreviation').','.__('Mar_March_abbreviation').','.__('Apr_April_abbreviation').','.__('May_May_abbreviation').','.__('Jun_June_abbreviation').','.__('Jul_July_abbreviation').','.__('Aug_August_abbreviation').','.__('Sep_September_abbreviation').','.__('Oct_October_abbreviation').','.__('Nov_November_abbreviation').','.__('Dec_December_abbreviation') ) . '",
day_long:"' . mce_escape( __('Sunday').','.__('Monday').','.__('Tuesday').','.__('Wednesday').','.__('Thursday').','.__('Friday').','.__('Saturday') ) . '",
day_short:"' . mce_escape( __('Sun').','.__('Mon').','.__('Tue').','.__('Wed').','.__('Thu').','.__('Fri').','.__('Sat') ) . '"
},
print:{
print_desc:"' . mce_escape( __('Print') ) . '"
},
preview:{
preview_desc:"' . mce_escape( __('Preview') ) . '"
},
directionality:{
ltr_desc:"' . mce_escape( __('Direction left to right') ) . '",
rtl_desc:"' . mce_escape( __('Direction right to left') ) . '"
},
layer:{
insertlayer_desc:"' . mce_escape( __('Insert new layer') ) . '",
forward_desc:"' . mce_escape( __('Move forward') ) . '",
backward_desc:"' . mce_escape( __('Move backward') ) . '",
absolute_desc:"' . mce_escape( __('Toggle absolute positioning') ) . '",
content:"' . mce_escape( __('New layer...') ) . '"
},
save:{
save_desc:"' . mce_escape( __('Save') ) . '",
cancel_desc:"' . mce_escape( __('Cancel all changes') ) . '"
},
nonbreaking:{
nonbreaking_desc:"' . mce_escape( __('Insert non-breaking space character') ) . '"
},
iespell:{
iespell_desc:"' . mce_escape( __('Run spell checking') ) . '",
download:"' . mce_escape( __('ieSpell not detected. Do you want to install it now?') ) . '"
},
advhr:{
advhr_desc:"' . mce_escape( __('Horizontale rule') ) . '"
},
emotions:{
emotions_desc:"' . mce_escape( __('Emotions') ) . '"
},
searchreplace:{
search_desc:"' . mce_escape( __('Find') ) . '",
replace_desc:"' . mce_escape( __('Find/Replace') ) . '"
},
advimage:{
image_desc:"' . mce_escape( __('Insert/edit image') ) . '"
},
advlink:{
link_desc:"' . mce_escape( __('Insert/edit link') ) . '"
},
xhtmlxtras:{
cite_desc:"' . mce_escape( __('Citation') ) . '",
abbr_desc:"' . mce_escape( __('Abbreviation') ) . '",
acronym_desc:"' . mce_escape( __('Acronym') ) . '",
del_desc:"' . mce_escape( __('Deletion') ) . '",
ins_desc:"' . mce_escape( __('Insertion') ) . '",
attribs_desc:"' . mce_escape( __('Insert/Edit Attributes') ) . '"
},
style:{
desc:"' . mce_escape( __('Edit CSS Style') ) . '"
},
paste:{
paste_text_desc:"' . mce_escape( __('Paste as Plain Text') ) . '",
paste_word_desc:"' . mce_escape( __('Paste from Word') ) . '",
selectall_desc:"' . mce_escape( __('Select All') ) . '",
plaintext_mode_sticky:"' . mce_escape( __('Paste is now in plain text mode. Click again to toggle back to regular paste mode. After you paste something you will be returned to regular paste mode.') ) . '",
plaintext_mode:"' . mce_escape( __('Paste is now in plain text mode. Click again to toggle back to regular paste mode.') ) . '"
},
paste_dlg:{
text_title:"' . mce_escape( __('Use CTRL+V on your keyboard to paste the text into the window.') ) . '",
text_linebreaks:"' . mce_escape( __('Keep linebreaks') ) . '",
word_title:"' . mce_escape( __('Use CTRL+V on your keyboard to paste the text into the window.') ) . '"
},
table:{
desc:"' . mce_escape( __('Inserts a new table') ) . '",
row_before_desc:"' . mce_escape( __('Insert row before') ) . '",
row_after_desc:"' . mce_escape( __('Insert row after') ) . '",
delete_row_desc:"' . mce_escape( __('Delete row') ) . '",
col_before_desc:"' . mce_escape( __('Insert column before') ) . '",
col_after_desc:"' . mce_escape( __('Insert column after') ) . '",
delete_col_desc:"' . mce_escape( __('Remove column') ) . '",
split_cells_desc:"' . mce_escape( __('Split merged table cells') ) . '",
merge_cells_desc:"' . mce_escape( __('Merge table cells') ) . '",
row_desc:"' . mce_escape( __('Table row properties') ) . '",
cell_desc:"' . mce_escape( __('Table cell properties') ) . '",
props_desc:"' . mce_escape( __('Table properties') ) . '",
paste_row_before_desc:"' . mce_escape( __('Paste table row before') ) . '",
paste_row_after_desc:"' . mce_escape( __('Paste table row after') ) . '",
cut_row_desc:"' . mce_escape( __('Cut table row') ) . '",
copy_row_desc:"' . mce_escape( __('Copy table row') ) . '",
del:"' . mce_escape( __('Delete table') ) . '",
row:"' . mce_escape( __('Row') ) . '",
col:"' . mce_escape( __('Column') ) . '",
cell:"' . mce_escape( __('Cell') ) . '"
},
autosave:{
unload_msg:"' . mce_escape( __('The changes you made will be lost if you navigate away from this page.') ) . '"
},
fullscreen:{
desc:"' . mce_escape( __('Toggle fullscreen mode (Alt + Shift + G)') ) . '"
},
media:{
desc:"' . mce_escape( __('Insert / edit embedded media') ) . '",
edit:"' . mce_escape( __('Edit embedded media') ) . '"
},
fullpage:{
desc:"' . mce_escape( __('Document properties') ) . '"
},
template:{
desc:"' . mce_escape( __('Insert predefined template content') ) . '"
},
visualchars:{
desc:"' . mce_escape( __('Visual control characters on/off.') ) . '"
},
spellchecker:{
desc:"' . mce_escape( __('Toggle spellchecker (Alt + Shift + N)') ) . '",
menu:"' . mce_escape( __('Spellchecker settings') ) . '",
ignore_word:"' . mce_escape( __('Ignore word') ) . '",
ignore_words:"' . mce_escape( __('Ignore all') ) . '",
langs:"' . mce_escape( __('Languages') ) . '",
wait:"' . mce_escape( __('Please wait...') ) . '",
sug:"' . mce_escape( __('Suggestions') ) . '",
no_sug:"' . mce_escape( __('No suggestions') ) . '",
no_mpell:"' . mce_escape( __('No misspellings found.') ) . '",
learn_word:"' . mce_escape( __('Learn word') ) . '"
},
pagebreak:{
desc:"' . mce_escape( __('Insert Page Break') ) . '"
},
advlist:{
types:"' . mce_escape( __('Types') ) . '",
def:"' . mce_escape( __('Default') ) . '",
lower_alpha:"' . mce_escape( __('Lower alpha') ) . '",
lower_greek:"' . mce_escape( __('Lower greek') ) . '",
lower_roman:"' . mce_escape( __('Lower roman') ) . '",
upper_alpha:"' . mce_escape( __('Upper alpha') ) . '",
upper_roman:"' . mce_escape( __('Upper roman') ) . '",
circle:"' . mce_escape( __('Circle') ) . '",
disc:"' . mce_escape( __('Disc') ) . '",
square:"' . mce_escape( __('Square') ) . '"
},
aria:{
rich_text_area:"' . mce_escape( __('Rich Text Area') ) . '"
},
wordcount:{
words:"' . mce_escape( __('Words:') ) . ' "
}
}});

tinyMCE.addI18n("' . $language . '.advanced",{
style_select:"' . mce_escape( /* translators: TinyMCE font styles */ _x('Styles', 'TinyMCE font styles') ) . '",
font_size:"' . mce_escape( __('Font size') ) . '",
fontdefault:"' . mce_escape( __('Font family') ) . '",
block:"' . mce_escape( __('Format') ) . '",
paragraph:"' . mce_escape( __('Paragraph') ) . '",
div:"' . mce_escape( __('Div') ) . '",
address:"' . mce_escape( __('Address') ) . '",
pre:"' . mce_escape( __('Preformatted') ) . '",
h1:"' . mce_escape( __('Heading 1') ) . '",
h2:"' . mce_escape( __('Heading 2') ) . '",
h3:"' . mce_escape( __('Heading 3') ) . '",
h4:"' . mce_escape( __('Heading 4') ) . '",
h5:"' . mce_escape( __('Heading 5') ) . '",
h6:"' . mce_escape( __('Heading 6') ) . '",
blockquote:"' . mce_escape( __('Blockquote') ) . '",
code:"' . mce_escape( __('Code') ) . '",
samp:"' . mce_escape( __('Code sample') ) . '",
dt:"' . mce_escape( __('Definition term ') ) . '",
dd:"' . mce_escape( __('Definition description') ) . '",
bold_desc:"' . mce_escape( __('Bold (Ctrl + B)') ) . '",
italic_desc:"' . mce_escape( __('Italic (Ctrl + I)') ) . '",
underline_desc:"' . mce_escape( __('Underline') ) . '",
striketrough_desc:"' . mce_escape( __('Strikethrough (Alt + Shift + D)') ) . '",
justifyleft_desc:"' . mce_escape( __('Align Left (Alt + Shift + L)') ) . '",
justifycenter_desc:"' . mce_escape( __('Align Center (Alt + Shift + C)') ) . '",
justifyright_desc:"' . mce_escape( __('Align Right (Alt + Shift + R)') ) . '",
justifyfull_desc:"' . mce_escape( __('Align Full (Alt + Shift + J)') ) . '",
bullist_desc:"' . mce_escape( __('Unordered list (Alt + Shift + U)') ) . '",
numlist_desc:"' . mce_escape( __('Ordered list (Alt + Shift + O)') ) . '",
outdent_desc:"' . mce_escape( __('Outdent') ) . '",
indent_desc:"' . mce_escape( __('Indent') ) . '",
undo_desc:"' . mce_escape( __('Undo (Ctrl + Z)') ) . '",
redo_desc:"' . mce_escape( __('Redo (Ctrl + Y)') ) . '",
link_desc:"' . mce_escape( __('Insert/edit link (Alt + Shift + A)') ) . '",
unlink_desc:"' . mce_escape( __('Unlink (Alt + Shift + S)') ) . '",
image_desc:"' . mce_escape( __('Insert/edit image (Alt + Shift + M)') ) . '",
cleanup_desc:"' . mce_escape( __('Cleanup messy code') ) . '",
code_desc:"' . mce_escape( __('Edit HTML Source') ) . '",
sub_desc:"' . mce_escape( __('Subscript') ) . '",
sup_desc:"' . mce_escape( __('Superscript') ) . '",
hr_desc:"' . mce_escape( __('Insert horizontal ruler') ) . '",
removeformat_desc:"' . mce_escape( __('Remove formatting') ) . '",
forecolor_desc:"' . mce_escape( __('Select text color') ) . '",
backcolor_desc:"' . mce_escape( __('Select background color') ) . '",
charmap_desc:"' . mce_escape( __('Insert custom character') ) . '",
visualaid_desc:"' . mce_escape( __('Toggle guidelines/invisible elements') ) . '",
anchor_desc:"' . mce_escape( __('Insert/edit anchor') ) . '",
cut_desc:"' . mce_escape( __('Cut') ) . '",
copy_desc:"' . mce_escape( __('Copy') ) . '",
paste_desc:"' . mce_escape( __('Paste') ) . '",
image_props_desc:"' . mce_escape( __('Image properties') ) . '",
newdocument_desc:"' . mce_escape( __('New document') ) . '",
help_desc:"' . mce_escape( __('Help') ) . '",
blockquote_desc:"' . mce_escape( __('Blockquote (Alt + Shift + Q)') ) . '",
clipboard_msg:"' . mce_escape( __('Copy/Cut/Paste is not available in Mozilla and Firefox.') ) . '",
path:"' . mce_escape( __('Path') ) . '",
newdocument:"' . mce_escape( __('Are you sure you want to clear all contents?') ) . '",
toolbar_focus:"' . mce_escape( __('Jump to tool buttons - Alt+Q, Jump to editor - Alt-Z, Jump to element path - Alt-X') ) . '",
more_colors:"' . mce_escape( __('More colors') ) . '",
shortcuts_desc:"' . mce_escape( __('Accessibility Help') ) . '",
help_shortcut:" ' . mce_escape( __('Press ALT F10 for toolbar. Press ALT 0 for help.') ) . '",
rich_text_area:"' . mce_escape( __('Rich Text Area') ) . '",
toolbar:"' . mce_escape( __('Toolbar') ) . '"
});

tinyMCE.addI18n("' . $language . '.advanced_dlg",{
about_title:"' . mce_escape( __('About TinyMCE') ) . '",
about_general:"' . mce_escape( __('About') ) . '",
about_help:"' . mce_escape( __('Help') ) . '",
about_license:"' . mce_escape( __('License') ) . '",
about_plugins:"' . mce_escape( __('Plugins') ) . '",
about_plugin:"' . mce_escape( __('Plugin') ) . '",
about_author:"' . mce_escape( __('Author') ) . '",
about_version:"' . mce_escape( __('Version') ) . '",
about_loaded:"' . mce_escape( __('Loaded plugins') ) . '",
anchor_title:"' . mce_escape( __('Insert/edit anchor') ) . '",
anchor_name:"' . mce_escape( __('Anchor name') ) . '",
code_title:"' . mce_escape( __('HTML Source Editor') ) . '",
code_wordwrap:"' . mce_escape( __('Word wrap') ) . '",
colorpicker_title:"' . mce_escape( __('Select a color') ) . '",
colorpicker_picker_tab:"' . mce_escape( __('Picker') ) . '",
colorpicker_picker_title:"' . mce_escape( __('Color picker') ) . '",
colorpicker_palette_tab:"' . mce_escape( __('Palette') ) . '",
colorpicker_palette_title:"' . mce_escape( __('Palette colors') ) . '",
colorpicker_named_tab:"' . mce_escape( __('Named') ) . '",
colorpicker_named_title:"' . mce_escape( __('Named colors') ) . '",
colorpicker_color:"' . mce_escape( __('Color:') ) . '",
colorpicker_name:"' . mce_escape( _x('Name:', 'html attribute') ) . '",
charmap_title:"' . mce_escape( __('Select custom character') ) . '",
image_title:"' . mce_escape( __('Insert/edit image') ) . '",
image_src:"' . mce_escape( __('Image URL') ) . '",
image_alt:"' . mce_escape( __('Image description') ) . '",
image_list:"' . mce_escape( __('Image list') ) . '",
image_border:"' . mce_escape( __('Border') ) . '",
image_dimensions:"' . mce_escape( __('Dimensions') ) . '",
image_vspace:"' . mce_escape( __('Vertical space') ) . '",
image_hspace:"' . mce_escape( __('Horizontal space') ) . '",
image_align:"' . mce_escape( __('Alignment') ) . '",
image_align_baseline:"' . mce_escape( __('Baseline') ) . '",
image_align_top:"' . mce_escape( __('Top') ) . '",
image_align_middle:"' . mce_escape( __('Middle') ) . '",
image_align_bottom:"' . mce_escape( __('Bottom') ) . '",
image_align_texttop:"' . mce_escape( __('Text top') ) . '",
image_align_textbottom:"' . mce_escape( __('Text bottom') ) . '",
image_align_left:"' . mce_escape( __('Left') ) . '",
image_align_right:"' . mce_escape( __('Right') ) . '",
link_title:"' . mce_escape( __('Insert/edit link') ) . '",
link_url:"' . mce_escape( __('Link URL') ) . '",
link_target:"' . mce_escape( __('Target') ) . '",
link_target_same:"' . mce_escape( __('Open link in the same window') ) . '",
link_target_blank:"' . mce_escape( __('Open link in a new window') ) . '",
link_titlefield:"' . mce_escape( __('Title') ) . '",
link_is_email:"' . mce_escape( __('The URL you entered seems to be an email address, do you want to add the required mailto: prefix?') ) . '",
link_is_external:"' . mce_escape( __('The URL you entered seems to external link, do you want to add the required http:// prefix?') ) . '",
link_list:"' . mce_escape( __('Link list') ) . '",
accessibility_help:"' . mce_escape( __('Accessibility Help') ) . '",
accessibility_usage_title:"' . mce_escape( __('General Usage') ) . '"
});

tinyMCE.addI18n("' . $language . '.media_dlg",{
title:"' . mce_escape( __('Insert / edit embedded media') ) . '",
general:"' . mce_escape( __('General') ) . '",
advanced:"' . mce_escape( __('Advanced') ) . '",
file:"' . mce_escape( __('File/URL') ) . '",
list:"' . mce_escape( __('List') ) . '",
size:"' . mce_escape( __('Dimensions') ) . '",
preview:"' . mce_escape( __('Preview') ) . '",
constrain_proportions:"' . mce_escape( __('Constrain proportions') ) . '",
type:"' . mce_escape( __('Type') ) . '",
id:"' . mce_escape( __('Id') ) . '",
name:"' . mce_escape( _x('Name', 'html attribute') ) . '",
class_name:"' . mce_escape( __('Class') ) . '",
vspace:"' . mce_escape( __('V-Space') ) . '",
hspace:"' . mce_escape( __('H-Space') ) . '",
play:"' . mce_escape( __('Auto play') ) . '",
loop:"' . mce_escape( __('Loop') ) . '",
menu:"' . mce_escape( __('Show menu') ) . '",
quality:"' . mce_escape( __('Quality') ) . '",
scale:"' . mce_escape( __('Scale') ) . '",
align:"' . mce_escape( __('Align') ) . '",
salign:"' . mce_escape( __('SAlign') ) . '",
wmode:"' . mce_escape( __('WMode') ) . '",
bgcolor:"' . mce_escape( __('Background') ) . '",
base:"' . mce_escape( __('Base') ) . '",
flashvars:"' . mce_escape( __('Flashvars') ) . '",
liveconnect:"' . mce_escape( __('SWLiveConnect') ) . '",
autohref:"' . mce_escape( __('AutoHREF') ) . '",
cache:"' . mce_escape( __('Cache') ) . '",
hidden:"' . mce_escape( __('Hidden') ) . '",
controller:"' . mce_escape( __('Controller') ) . '",
kioskmode:"' . mce_escape( __('Kiosk mode') ) . '",
playeveryframe:"' . mce_escape( __('Play every frame') ) . '",
targetcache:"' . mce_escape( __('Target cache') ) . '",
correction:"' . mce_escape( __('No correction') ) . '",
enablejavascript:"' . mce_escape( __('Enable JavaScript') ) . '",
starttime:"' . mce_escape( __('Start time') ) . '",
endtime:"' . mce_escape( __('End time') ) . '",
href:"' . mce_escape( __('href') ) . '",
qtsrcchokespeed:"' . mce_escape( __('Choke speed') ) . '",
target:"' . mce_escape( __('Target') ) . '",
volume:"' . mce_escape( __('Volume') ) . '",
autostart:"' . mce_escape( __('Auto start') ) . '",
enabled:"' . mce_escape( __('Enabled') ) . '",
fullscreen:"' . mce_escape( __('Fullscreen') ) . '",
invokeurls:"' . mce_escape( __('Invoke URLs') ) . '",
mute:"' . mce_escape( __('Mute') ) . '",
stretchtofit:"' . mce_escape( __('Stretch to fit') ) . '",
windowlessvideo:"' . mce_escape( __('Windowless video') ) . '",
balance:"' . mce_escape( __('Balance') ) . '",
baseurl:"' . mce_escape( __('Base URL') ) . '",
captioningid:"' . mce_escape( __('Captioning id') ) . '",
currentmarker:"' . mce_escape( __('Current marker') ) . '",
currentposition:"' . mce_escape( __('Current position') ) . '",
defaultframe:"' . mce_escape( __('Default frame') ) . '",
playcount:"' . mce_escape( __('Play count') ) . '",
rate:"' . mce_escape( __('Rate') ) . '",
uimode:"' . mce_escape( __('UI Mode') ) . '",
flash_options:"' . mce_escape( __('Flash options') ) . '",
qt_options:"' . mce_escape( __('Quicktime options') ) . '",
wmp_options:"' . mce_escape( __('Windows media player options') ) . '",
rmp_options:"' . mce_escape( __('Real media player options') ) . '",
shockwave_options:"' . mce_escape( __('Shockwave options') ) . '",
autogotourl:"' . mce_escape( __('Auto goto URL') ) . '",
center:"' . mce_escape( __('Center') ) . '",
imagestatus:"' . mce_escape( __('Image status') ) . '",
maintainaspect:"' . mce_escape( __('Maintain aspect') ) . '",
nojava:"' . mce_escape( __('No java') ) . '",
prefetch:"' . mce_escape( __('Prefetch') ) . '",
shuffle:"' . mce_escape( __('Shuffle') ) . '",
console:"' . mce_escape( __('Console') ) . '",
numloop:"' . mce_escape( __('Num loops') ) . '",
controls:"' . mce_escape( __('Controls') ) . '",
scriptcallbacks:"' . mce_escape( __('Script callbacks') ) . '",
swstretchstyle:"' . mce_escape( __('Stretch style') ) . '",
swstretchhalign:"' . mce_escape( __('Stretch H-Align') ) . '",
swstretchvalign:"' . mce_escape( __('Stretch V-Align') ) . '",
sound:"' . mce_escape( __('Sound') ) . '",
progress:"' . mce_escape( __('Progress') ) . '",
qtsrc:"' . mce_escape( __('QT Src') ) . '",
qt_stream_warn:"' . mce_escape( __('Streamed rtsp resources should be added to the QT Src field under the advanced tab.') ) . '",
align_top:"' . mce_escape( __('Top') ) . '",
align_right:"' . mce_escape( __('Right') ) . '",
align_bottom:"' . mce_escape( __('Bottom') ) . '",
align_left:"' . mce_escape( __('Left') ) . '",
align_center:"' . mce_escape( __('Center') ) . '",
align_top_left:"' . mce_escape( __('Top left') ) . '",
align_top_right:"' . mce_escape( __('Top right') ) . '",
align_bottom_left:"' . mce_escape( __('Bottom left') ) . '",
align_bottom_right:"' . mce_escape( __('Bottom right') ) . '",
flv_options:"' . mce_escape( __('Flash video options') ) . '",
flv_scalemode:"' . mce_escape( __('Scale mode') ) . '",
flv_buffer:"' . mce_escape( __('Buffer') ) . '",
flv_startimage:"' . mce_escape( __('Start image') ) . '",
flv_starttime:"' . mce_escape( __('Start time') ) . '",
flv_defaultvolume:"' . mce_escape( __('Default volume') ) . '",
flv_hiddengui:"' . mce_escape( __('Hidden GUI') ) . '",
flv_autostart:"' . mce_escape( __('Auto start') ) . '",
flv_loop:"' . mce_escape( __('Loop') ) . '",
flv_showscalemodes:"' . mce_escape( __('Show scale modes') ) . '",
flv_smoothvideo:"' . mce_escape( __('Smooth video') ) . '",
flv_jscallback:"' . mce_escape( __('JS Callback') ) . '",
html5_video_options:"' . mce_escape( __('HTML5 Video Options') ) . '",
altsource1:"' . mce_escape( __('Alternative source 1') ) . '",
altsource2:"' . mce_escape( __('Alternative source 2') ) . '",
preload:"' . mce_escape( __('Preload') ) . '",
poster:"' . mce_escape( __('Poster') ) . '",
source:"' . mce_escape( __('Source') ) . '"
});

tinyMCE.addI18n("' . $language . '.wordpress",{
wp_adv_desc:"' . mce_escape( __('Show/Hide Kitchen Sink (Alt + Shift + Z)') )  . '",
wp_more_desc:"' . mce_escape( __('Insert More Tag (Alt + Shift + T)') ) . '",
wp_page_desc:"' . mce_escape( __('Insert Page break (Alt + Shift + P)') ) . '",
wp_help_desc:"' . mce_escape( __('Help (Alt + Shift + H)') ) . '",
wp_more_alt:"' . mce_escape( __('More...') ) . '",
wp_page_alt:"' . mce_escape( __('Next page...') ) . '",
add_media:"' . mce_escape( __('Add Media') ) . '",
add_image:"' . mce_escape( __('Add an Image') ) . '",
add_video:"' . mce_escape( __('Add Video') ) . '",
add_audio:"' . mce_escape( __('Add Audio') ) . '",
editgallery:"' . mce_escape( __('Edit Gallery') ) . '",
delgallery:"' . mce_escape( __('Delete Gallery') ) . '"
});

tinyMCE.addI18n("' . $language . '.wpeditimage",{
edit_img:"' . mce_escape( __('Edit Image') )  . '",
del_img:"' . mce_escape( __('Delete Image') )  . '",
adv_settings:"' . mce_escape( __('Advanced Settings') )  . '",
none:"' . mce_escape( __('None') )  . '",
size:"' . mce_escape( __('Size') ) . '",
thumbnail:"' . mce_escape( __('Thumbnail') ) . '",
medium:"' . mce_escape( __('Medium') ) . '",
full_size:"' . mce_escape( __('Full Size') ) . '",
current_link:"' . mce_escape( __('Current Link') ) . '",
link_to_img:"' . mce_escape( __('Link to Image') ) . '",
link_help:"' . mce_escape( __('Enter a link URL or click above for presets.') ) . '",
adv_img_settings:"' . mce_escape( __('Advanced Image Settings') ) . '",
source:"' . mce_escape( __('Source') )  . '",
width:"' . mce_escape( __('Width') ) . '",
height:"' . mce_escape( __('Height') ) . '",
orig_size:"' . mce_escape( __('Original Size') ) . '",
css:"' . mce_escape( __('CSS Class') ) . '",
adv_link_settings:"' . mce_escape( __('Advanced Link Settings') )  . '",
link_rel:"' . mce_escape( __('Link Rel') ) . '",
height:"' . mce_escape( __('Height') ) . '",
orig_size:"' . mce_escape( __('Original Size') ) . '",
css:"' . mce_escape( __('CSS Class') ) . '",
s60:"' . mce_escape( __('60%') ) . '",
s70:"' . mce_escape( __('70%') ) . '",
s80:"' . mce_escape( __('80%') ) . '",
s90:"' . mce_escape( __('90%') ) . '",
s100:"' . mce_escape( __('100%') ) . '",
s110:"' . mce_escape( __('110%') ) . '",
s120:"' . mce_escape( __('120%') ) . '",
s130:"' . mce_escape( __('130%') ) . '",
img_title:"' . mce_escape( __('Title') ) . '",
caption:"' . mce_escape( __('Caption') ) . '",
alt:"' . mce_escape( __('Alternate Text') ) . '"
});
';