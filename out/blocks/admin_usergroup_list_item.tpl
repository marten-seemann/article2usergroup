[{ if $listitem->blacklist == 1}]
    [{assign var="listclass" value=listitem3 }]
[{ else}]
    [{assign var="listclass" value=listitem$blWhite }]
[{ /if}]
[{ if $listitem->getId() == $oxid }]
    [{assign var="listclass" value=listitem4 }]
[{ /if}]
<td valign="top" class="[{ $listclass}]" height="15"><div class="listitemfloating"><a href="Javascript:top.oxid.admin.editThis('[{ $listitem->oxgroups__oxid->value}]');" class="[{ $listclass}]">[{ $listitem->oxgroups__oxtitle->value }]</a></div></td>
<td class="[{ $listclass}]">[{ $listitem->oxgroups__oxid->value}]</td>
<td class="[{ $listclass}]">
    [{ if !$listitem->isOx() && !$readonly}]
    <a href="Javascript:top.oxid.admin.deleteThis('[{ $listitem->oxgroups__oxid->value }]');" class="delete" id="del.[{$_cnt}]" [{include file="help.tpl" helpid=item_delete}]></a>
    [{/if}]
</td>
