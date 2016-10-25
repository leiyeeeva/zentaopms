<?php
/**
 * The browse view file of doc module of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2015 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL (http://zpl.pub/page/zplv12.html)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     lib
 * @version     $Id: browse.html.php 958 2010-07-22 08:09:42Z wwccss $
 * @link        http://www.zentao.net
 */
?>
<?php include '../../common/view/header.html.php';?>
<?php include '../../common/view/datepicker.html.php';?>
<?php js::set('confirmDelete', $lang->doc->confirmDelete)?>
<?php if(!$fixedMenu) js::set('type', $type);?>;
<script language='Javascript'>
var browseType = '<?php echo $browseType;?>';
</script>
<div id='featurebar'>
  <ul class='nav'>
    <li id='allTab'><?php echo html::a(inlink('browse', "libID=$libID&browseType=all&param=0&orderBy=$orderBy"), $lang->doc->allDoc)?></li>
    <li id='bymoduleTab'><?php echo html::a(inlink('browse', "libID=$libID&browseType=byModule&param=0&orderBy=$orderBy"), $lang->doc->moduleDoc)?></li>
    <li id='openedbymeTab'><?php echo html::a(inlink('browse', "libID=$libID&browseType=openedByMe&param=0&orderBy=$orderBy"), $lang->doc->openedByMe)?></li>
    <li id='bysearchTab'><a href='#'><i class='icon-search icon'></i>&nbsp;<?php echo $lang->doc->searchDoc;?></a></li>
  </ul>
  <div class='actions'>
    <?php common::printIcon('doc', 'create', "libID=$libID&moduleID=$moduleID&product=0&prject=0&from=doc");?>
  </div>
  <div id='querybox' class='<?php if($browseType == 'bysearch') echo 'show';?>'></div>
</div>
<div class='side' id='treebox'>
  <a class='side-handle' data-id='treebox'><i class='icon-caret-left'></i></a>
  <div class='side-body'>
    <div class='panel panel-sm'>
      <div class='panel-heading nobr'><?php echo html::icon('folder-close-alt');?> <strong><?php echo $libName;?></strong></div>
      <div class='panel-body'>
        <?php echo $moduleTree;?>
        <div class='text-right'>
          <?php common::printLink('doc', 'editLib', "rootID=$libID", $lang->edit, '', "data-toggle='modal' data-type='iframe' data-width='600px'");?>
          <?php common::printLink('doc', 'deleteLib', "rootID=$libID", $lang->delete, 'hiddenwin');?>
          <?php common::printLink('tree', 'browse', "rootID=$libID&view=doc", $lang->doc->manageType);?>
          <?php echo '<br />' . html::a(inlink('ajaxFixedMenu', "libID=$libID&type=" . ($fixedMenu ? 'remove' : 'fixed')), $fixedMenu ? $lang->doc->removeMenu : $lang->doc->fixedMenu, "hiddenwin");?>
        </div>
      </div>
    </div>
  </div>
</div>
<div class='main'>
  <table class='table table-condensed table-hover table-striped tablesorter table-fixed' id='docList'>
    <thead>
      <tr>
        <?php $vars = "libID=$libID&browseType=$browseType&param=$param&orderBy=%s&recTotal={$pager->recTotal}&recPerPage={$pager->recPerPage}";?>
        <th class='w-id'>   <?php common::printOrderLink('id',        $orderBy, $vars, $lang->idAB);?></th>
        <th>                <?php common::printOrderLink('title',     $orderBy, $vars, $lang->doc->title);?></th>
        <th class='w-100px'><?php common::printOrderLink('addedBy',   $orderBy, $vars, $lang->doc->addedBy);?></th>
        <th class='w-120px'><?php common::printOrderLink('addedDate', $orderBy, $vars, $lang->doc->addedDate);?></th>
        <th class='w-120px'><?php common::printOrderLink('editedDate', $orderBy, $vars, $lang->doc->editedDate);?></th>
        <th class='w-100px {sorter:false}'><?php echo $lang->actions;?></th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($docs as $key => $doc):?>
      <?php
      $viewLink = $this->createLink('doc', 'view', "docID=$doc->id");
      $canView  = common::hasPriv('doc', 'view');
      ?>
      <tr class='text-center'>
        <td><?php if($canView) echo html::a($viewLink, sprintf('%03d', $doc->id)); else printf('%03d', $doc->id);?></td>
        <td class='text-left' title="<?php echo $doc->title?>"><nobr><?php echo html::a($viewLink, $doc->title);?></nobr></td>
        <td><?php isset($users[$doc->addedBy]) ? print($users[$doc->addedBy]) : print($doc->addedBy);?></td>
        <td><?php echo substr($doc->addedDate, 5, 11);?></td>
        <td><?php echo substr($doc->editedDate, 5, 11);?></td>
        <td>
          <?php 
          common::printIcon('doc', 'edit', "doc={$doc->id}", '', 'list');
          if(common::hasPriv('doc', 'delete'))
          {
              $deleteURL = $this->createLink('doc', 'delete', "docID=$doc->id&confirm=yes");
              echo html::a("javascript:ajaxDelete(\"$deleteURL\",\"docList\",confirmDelete)", '<i class="icon-remove"></i>', '', "class='btn-icon' title='{$lang->doc->delete}'");
          }
          ?>
        </td>
      </tr>
      <?php endforeach;?>
    </tbody>
    <tfoot><tr><td colspan='6'><?php $pager->show();?></td></tr></tfoot>
  </table>
</div>
<?php include '../../common/view/footer.html.php';?>
