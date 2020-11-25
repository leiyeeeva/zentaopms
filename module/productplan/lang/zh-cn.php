<?php
/**
 * The productplan module zh-cn file of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2015 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL (http://zpl.pub/page/zplv12.html)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     productplan
 * @version     $Id: zh-cn.php 4659 2013-04-17 06:45:08Z chencongzhi520@gmail.com $
 * @link        http://www.zentao.net
 */
$lang->productplan->common     = $lang->productCommon . $lang->planCommon;
$lang->productplan->browse     = "浏览{$lang->planCommon}";
$lang->productplan->index      = "{$lang->planCommon}列表";
$lang->productplan->create     = "创建{$lang->planCommon}";
$lang->productplan->edit       = "编辑{$lang->planCommon}";
$lang->productplan->delete     = "删除{$lang->planCommon}";
$lang->productplan->view       = "{$lang->planCommon}详情";
$lang->productplan->bugSummary = "本页共 <strong>%s</strong> 个Bug";
$lang->productplan->basicInfo  = '基本信息';
$lang->productplan->batchEdit  = '批量编辑';

$lang->productplan->batchUnlink      = "批量移除";
$lang->productplan->linkStory        = "关联{$lang->productSRCommon}";
$lang->productplan->unlinkStory      = "移除{$lang->productSRCommon}";
$lang->productplan->unlinkStoryAB    = "移除";
$lang->productplan->batchUnlinkStory = "批量移除{$lang->productSRCommon}";
$lang->productplan->linkedStories    = $lang->productSRCommon;
$lang->productplan->unlinkedStories  = "未关联{$lang->productSRCommon}";
$lang->productplan->updateOrder      = '排序';
$lang->productplan->createChildren   = "创建子{$lang->planCommon}";

$lang->productplan->linkBug          = "关联Bug";
$lang->productplan->unlinkBug        = "移除Bug";
$lang->productplan->batchUnlinkBug   = "批量移除Bug";
$lang->productplan->linkedBugs       = 'Bug';
$lang->productplan->unlinkedBugs     = '未关联Bug';
$lang->productplan->unexpired        = "未过期{$lang->planCommon}";
$lang->productplan->all              = "所有{$lang->planCommon}";

$lang->productplan->confirmDelete      = "您确认删除该{$lang->planCommon}吗？";
$lang->productplan->confirmUnlinkStory = "您确认移除该{$lang->productSRCommon}吗？";
$lang->productplan->confirmUnlinkBug   = "您确认移除该Bug吗？";
$lang->productplan->noPlan             = "暂时没有{$lang->planCommon}。";
$lang->productplan->cannotDeleteParent = "不能删除父{$lang->planCommon}";

$lang->productplan->id         = '编号';
$lang->productplan->product    = $lang->productCommon;
$lang->productplan->branch     = '平台/分支';
$lang->productplan->title      = '名称';
$lang->productplan->desc       = '描述';
$lang->productplan->begin      = '开始日期';
$lang->productplan->end        = '结束日期';
$lang->productplan->last       = "上次{$lang->planCommon}";
$lang->productplan->future     = '待定';
$lang->productplan->stories    = "{$lang->productSRCommon}数";
$lang->productplan->bugs       = 'Bug数';
$lang->productplan->hour       = $lang->hourCommon;
$lang->productplan->project    = $lang->projectCommon;
$lang->productplan->parent     = "父{$lang->planCommon}";
$lang->productplan->parentAB   = "父";
$lang->productplan->children   = "子{$lang->planCommon}";
$lang->productplan->childrenAB = "子";
$lang->productplan->order      = "排序";
$lang->productplan->deleted    = "已删除";

$lang->productplan->endList[7]   = '一星期';
$lang->productplan->endList[14]  = '两星期';
$lang->productplan->endList[31]  = '一个月';
$lang->productplan->endList[62]  = '两个月';
$lang->productplan->endList[93]  = '三个月';
$lang->productplan->endList[186] = '半年';
$lang->productplan->endList[365] = '一年';

$lang->productplan->errorNoTitle = 'ID %s 标题不能为空';
$lang->productplan->errorNoBegin = 'ID %s 开始时间不能为空';
$lang->productplan->errorNoEnd   = 'ID %s 结束时间不能为空';
$lang->productplan->beginGeEnd   = 'ID %s 开始时间不能大于结束时间';

$lang->productplan->featureBar['browse']['all']       = '全部';
$lang->productplan->featureBar['browse']['unexpired'] = '未过期';
$lang->productplan->featureBar['browse']['overdue']   = '已过期';
