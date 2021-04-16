<!-- load file layout chung --> 
<?php $this->layoutPath = "Layout.php" ?>
                    <div class="col-md-12">
                                <style type="text/css">
                                    .pagination{padding:0px; margin:0px; float: right; margin-top: 5px;}
                                </style>
                <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                    <div style="float: right; margin-bottom: 5px;">
                        <a href="index.php?controller=news&action=create" class="btn btn-primary"><h6>Thêm tin mới&nbsp; <i class="link-icon" data-feather="plus-square"></i></h6></a>
                    </div>
                    <h6 class="card-title">Danh sách tin tức</h6>
                    <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th style="width: 150px;">Photo</th>
                                        <th style="width: 150px;">Name</th>
                                        <th style="width: 100px;">Hot</th>
                                        <th style="width: 150px;"></th>  
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data as $rows): ?>
                                    <tr>
                                        <td style="text-align:center;">
                                            <?php if($rows->photo != "" && file_exists("../assets/upload/news/".$rows->photo)): ?>
                                            <img src="../assets/upload/news/<?php echo $rows->photo; ?>" style="width: 100px; border-radius: 0; height: auto;">
                                            <?php endif; ?>
                                        </td>
                                        <td  style="text-align:center; width: 150px;">
                                            <?php echo $rows->name; ?>
                                        </td>
                                        <td style="text-align:center;">
                                            <?php if($rows->hot == 1): ?>
                                                <span data-feather="check"></span>
                                            <?php endif; ?>
                                        </td>
                                        <td style="text-align:center;">
                                <a class="btn btn-success" href="index.php?controller=news&action=update&id=<?php echo $rows->id; ?>">EDIT</a>&nbsp;
                                <a class="btn btn-danger" href="index.php?controller=news&action=delete&id=<?php echo $rows->id; ?>" onclick="return window.confirm('Mày chắc chưa?');">DELETE</a>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                            <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item disabled"><a class="page-link" href="#">Page</a></li>
                                <?php for($i = 1;$i <= $numPage; $i++): ?>
                                    <li><a class="page-link" href="index.php?controller=news&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                                    <?php endfor; ?>
                            </ul>
                            </nav>
                    </div>
                    </div>
                </div>
                    </div>
                    </div>