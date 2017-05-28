
<div class="row" style="margin-bottom: 10px">
    <div class="col-md-4">
        <?php echo anchor(site_url('api/create'),'Add Api', 'class="btn btn-primary"'); ?>
    </div>
    <div class="col-md-4 text-center">
        <div style="margin-top: 8px" id="message">
            <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
        </div>
    </div>
    <div class="col-md-4 text-right">
        <form action="<?php echo site_url('api/index'); ?>" class="form-inline" method="get">
            <div class="input-group">
                <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                <span class="input-group-btn">
                    <?php 
                    if ($q <> '')
                    {
                        ?>
                        <a href="<?php echo site_url('api'); ?>" class="btn btn-default">Reset</a>
                        <?php
                    }
                    ?>
                    <button class="btn btn-primary" type="submit">Search</button>
                </span>
            </div>
        </form>
    </div>
</div>
<table class="table table-bordered" style="margin-bottom: 10px">
    <tr>
        <th>No</th>
        <th>Created Date</th>
        <th>Title</th>
        <th>Action</th>
    </tr><?php
    foreach ($api_data as $api)
    {
        ?>
        <tr>
         <td><?php echo ++$start ?></td>
         <td class="format-date"><?php echo $api->created_date ?></td>
         <td><?php echo $api->title ?></td>
         <td style="text-align:center">
            <?php 
            echo anchor(site_url('api/read/'.$api->id_post),'<span class="btn btn-primary btn-sm"><i class="fa fa-eye"></i></span>','data-toggle="tooltip" title="View"');  
            echo anchor(site_url('api/update/'.$api->id_post),'<span class="btn btn-info btn-sm"><i class="fa fa-edit"></i></span>','data-toggle="tooltip" title="Edit"'); 
            echo anchor(site_url('api/image/'.$api->id_post),'<span class="btn btn-success btn-sm"><i class="fa fa-image"></i></span>','data-toggle="tooltip" title="Image"');  
            echo anchor(site_url('api/delete/'.$api->id_post),'<span class="btn btn-danger btn-sm"><i class="fa fa-close"></i></span>','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
            ?>
        </td>
    </tr>
    <?php
}
?>
</table>
<div class="row">
    <div class="col-md-6">
        <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
        <?php echo anchor(site_url('api/excel'), 'Excel', 'class="btn btn-primary"'); ?>
        <?php echo anchor(site_url('api/word'), 'Word', 'class="btn btn-primary"'); ?>
    </div>
    <div class="col-md-6 text-right">
        <?php echo $pagination ?>
    </div>
</div>
