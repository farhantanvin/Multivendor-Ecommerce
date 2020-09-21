<div class="table-responsive">
    <div class="access-control-list">
        <table id="access_table" class="table table-striped table-bordered table-vcenter">
            <thead>
                <tr>
                    <th class="headcol" style="border-top: 1px solid #ddd;">Module Name</th>
                    <?php
                    if (!empty($all_activity)) {

                        foreach ($all_activity as $activity) {
                            ?>
                            <th>
                    <div class="checkbox checkbox-success">
                        <input type="checkbox" name="activity[]" value="<?php echo $activity->id; ?>" id="activity_header_<?php echo $activity->id; ?>" class="m_activity" data-column-id="<?php echo $activity->id; ?>">
                        <label for="activity_header_<?php echo $activity->id; ?>" style="font-weight: bold;"><?php echo $activity->name; ?></label>
                    </div>
                    </th>
                    <?php
                }//foreach
            }//if
            ?>
            </tr>
            </thead>
            <tbody>
                <?php
                // print_r($modules);exit;
                if (!empty($modules)) {
                    $count = 0;
                    $headcol = ($count % count($all_activity) == 0) ? 'class="headcol"' : '';
                    foreach ($modules as $module) {
                        ?>
                        <tr>
                            <td <?php echo $headcol; ?>><?php echo $module->name ?> </td>
                            <?php
                            
                            
                            if (!empty($all_activity)) {

                                foreach ($all_activity as $activity) {
                                    
                                    //print_r($m_activity);exit;
                                    
                                    if (!empty($m_activity[$module->id][$activity->id])) {
                                        ?>
                                        <td>
                                            <div class="checkbox checkbox-success">
                                                <input class="activity_<?php echo $activity->id; ?> activitycell" data-column-id="<?php echo $activity->id; ?>" type="checkbox" id="item_<?php echo $module->id . '_' . $activity->id; ?>"  name="module_activity[<?php echo $module->id ?>][<?php echo $activity->id; ?>]" value="1" <?php if ($m_activity[$module->id][$activity->id] == 2) echo 'checked="true"'; ?> />
                                                <label for="item_<?php echo $module->id . '_' . $activity->id; ?>"><?php echo $activity->name; ?></label>
                                            </div>
                                        </td>
                                    <?php }else { ?>
                                        <td> &nbsp;</td>
                                        <?php
                                    }//else
                                }//foeeach
                            }//if  
                            ?>
                        </tr>
                        <?php
                        $count++;
                    }//foreach
                    ?>
                    <tr>
                        <td class="headcol" style="border-bottom: 0;border-left: 0;">&nbsp;</td>
                        <td colspan="<?php echo count($all_activity); ?>">
                            <div class="checkbox checkbox-success">
                                <input type="checkbox" name="update_exist" class="activity checkbox" data-column-id="1" id="activity_header" value="1" /> 
                                <label for="activity_header" style="font-weight: bold;margin-bottom:15px;">Update Existing User</label>
                            </div>
                            <input type="hidden" name="role_id" value="<?php echo $role_id ?>" />
                            <!--<input type="submit" name="form_submit" value="Save" />-->
                            <div class="col-sm-8 col-sm-offset-0">
                                @if(!empty($aclList[2][3]))
                                    <button class="btn btn-primary" type="submit">Save</button>
                                 @endif
                                <a class="btn btn-default" href="{!! URL::to('dashboard') !!}">Cancel</a>
                            </div>
                        </td>
                    </tr>
                    <?php
                } else {
                    echo '<tr>';
                    echo '<td colspan="5">' . 'No Data Found' . '</td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<style type="text/css">
    div.access-control-list { 
        width: 850px; 
        overflow-x:scroll;  
        margin-left:180px; 
        overflow-y:visible;
        padding-bottom:1px;
    }
    table#access_table th.headcol,
    table#access_table td.headcol{
        position:absolute; 
        width:180px; 
        left:20px;
        top:auto;
        height: 49px;
        border-bottom: 0px;
        border-right: 0px;
    }
    table#access_table th.headcol:before,
    table#access_table td.headcol:before{content: ' ';}
</style>
