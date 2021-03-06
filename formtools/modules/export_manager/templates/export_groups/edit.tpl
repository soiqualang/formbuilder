{ft_include file='modules_header.tpl'}

    <table cellpadding="0" cellspacing="0" class="margin_bottom_large">
    <tr>
        <td width="45"><a href="../"><img src="../images/icon_export.gif" border="0" width="34" height="34" /></a></td>
        <td class="title">
            <a href="../../../admin/modules">{$LANG.word_modules}</a>
            <span class="joiner">&raquo;</span>
            <a href="../">{$L.module_name}</a>
            <span class="joiner">&raquo;</span>
            {eval var=$export_group_info.group_name}
        </td>
    </tr>
    </table>

    {ft_include file='tabset_open.tpl'}

    {if $page == "main"}
        {include file='./tab_main.tpl'}
    {elseif $page == "permissions"}
        {include file='./tab_permissions.tpl'}
    {elseif $page == "export_types"}
        {include file='./tab_export_types.tpl'}
    {elseif $page == "forms"}
        {include file='./tab_forms.tpl'}
    {elseif $page == "add_export_type"}
        {include file='./tab_add_export_type.tpl'}
    {elseif $page == "edit_export_type"}
        {include file='./tab_edit_export_type.tpl'}
    {else}
        {include file='./tab_main.tpl'}
    {/if}

    {ft_include file='tabset_close.tpl'}

{ft_include file='modules_footer.tpl'}
