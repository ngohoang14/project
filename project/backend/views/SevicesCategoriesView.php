<!-- load file layout chung -->
<?php $this->layoutPath = "Layout.php"; ?>
<div class="col-md-12">
                   <style type="text/css">
                                    .pagination{padding:0px; margin:0px; float: right;}
                                </style>
                <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                                <div style=" float: right;">
                                    <a href="index.php?controller=sevicescategories&action=create" class="btn btn-primary"><h6>ADD SEVICES&nbsp; <i class="link-icon" data-feather="user-plus"></i></h6></a>
                                </div>
                                <h6 class="card-title">List sevices</h6>
                                <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>NAME</th>
                                                    <th style="width: 150px;"></th>  
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach($data as $rows): ?>
                                                <tr>
                                                <td><?php echo $rows->name; ?></td>
                    <td style="text-align:center;">
                        <a class="btn btn-success" href="index.php?controller=sevicescategories&action=update&id=<?php echo $rows->id; ?>">Edit</a>&nbsp;
                        <a class="btn btn-danger" href="index.php?controller=sevicescategories&action=delete&id=<?php echo $rows->id; ?>" onclick="return window.confirm('Are you sure?');">Delete</a>
                    </td>
                </tr>
                    <?php 
                        //lay cac danh muc con thuoc danh muc nay
                        $dataSub = $this->modelReadSubSevicesCategories($rows->id);
                     ?>
                     <?php foreach($dataSub as $rowsSub): ?>
                        <tr>
                            <td style="padding-left: 50px;">+ <?php echo $rowsSub->name; ?></td>
                            <td style="text-align:center;">
                                <a class="btn btn-success" href="index.php?controller=sevicescategories&action=update&id=<?php echo $rowsSub->id; ?>">Edit</a>&nbsp;
                                <a class="btn btn-danger" href="index.php?controller=sevicescategories&action=delete&id=<?php echo $rowsSub->id; ?>" onclick="return window.confirm('Are you sure?');">Delete</a>
                            </td> 
                        </tr>
                     <?php endforeach; ?>
                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                        <nav aria-label="Page navigation example">
                                        <ul class="pagination">
                                            <li class="page-item disabled"><a class="page-link" href="#">Page</a></li>
                                            <?php for($i = 1;$i <= $numPage; $i++): ?>
                                                <li><a class="page-link" href="index.php?controller=users&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                                                <?php endfor; ?>
                                        </ul>
                                        </nav>
                                </div>
                    </div>
                </div>
                    </div>
</div>