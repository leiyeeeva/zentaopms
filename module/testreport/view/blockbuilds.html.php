<table class='table' id='builds'>
  <thead>
    <tr>
      <th class='w-id'>  <?php echo $lang->build->id;?></th>
      <th>               <?php echo $lang->build->name;?></th>
      <th class='w-user'><?php echo $lang->build->builder;?></th>
      <th class='w-date'><?php echo $lang->build->date;?></th>
    </tr>
  </thead>
  <?php if($builds):?>
  <tbody class='text-center'>
    <?php foreach($builds as $build):?>
    <tr>
      <td><?php echo $build->id . html::hidden('builds[]', $build->id)?></td>
      <td class='text-left' title='<?php echo $build->name?>'><?php echo $build->name?></td>
      <td><?php echo zget($users, $build->builder);?></td>
      <td><?php echo $build->date;?></td>
    </tr>
    <?php endforeach;?>
  </tbody>
  <?php else:?>
  <tr><td class='none-data'><?php echo 'Trunk'?></td></tr>
  <?php endif;?>
</table>
