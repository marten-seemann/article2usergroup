<td valign="top" class="listfilter first" height="20" colspan="3">
    <div class="r1"><div class="b1">
        <div class="find">
        <select name="changelang" class="editinput" onChange="Javascript:top.oxid.admin.changeLanguage();">
        [{foreach from=$languages item=lang}]
        <option value="[{ $lang->id }]" [{ if $lang->selected}]SELECTED[{/if}]>[{ $lang->name }]</option>
        [{/foreach}]
        </select>
        <input class="listedit" type="submit" name="submitit" value="[{ oxmultilang ident="GENERAL_SEARCH" }]"></div>
        <input class="listedit" type="text" size="60" maxlength="128" name="where[oxgroups][oxtitle]" value="[{ $where.oxgroups.oxtitle }]">
    </div></div>
</td>
