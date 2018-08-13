[{if $oxid!=-1}]
  <tr>
    <td class="edittext" width="70">[{oxmultilang ident="USERGROUP_OXID"}]</td>
    <td class="edittext">[{ $oxid }]</td>
  </tr>
[{/if}]

[{$smarty.block.parent}]
