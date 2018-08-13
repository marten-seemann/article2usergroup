[{$smarty.block.parent}]

<tr>
  <td class="edittext" width="120">[{oxmultilang ident="ARTICLE_MAIN_SPECIALRIGHTS"}]</td>
  <td class="edittext">
    <input type="hidden" name="editval[oxarticles__specialrights]" value="0">
    <input class="edittext" type="checkbox" name="editval[oxarticles__specialrights]" value='1' [{if $edit->oxarticles__specialrights->value == 1}]checked[{/if}]>
    [{ oxinputhelp ident="HELP_ARTICLE_MAIN_SPECIALRIGHTS" }]
  </td>
</tr>
