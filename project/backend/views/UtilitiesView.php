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
                <a href="index.php?controller=utilities&action=create" class="btn btn-primary"><h6>Thêm tiện ích&nbsp; <i class="link-icon" data-feather="plus-square"></i></h6></a>
            </div>
            <h6 class="card-title">Danh sách lợi ích</h6>
            <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th style="width: 150px;">Photo</th>
                                <th style="width: 800px;">Name</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data as $rows): ?>
                            <tr>
                                <td style="text-align:center;">
                                    <?php if($rows->photo != "" && file_exists("../assets/upload/utilities/".$rows->photo)): ?>
                                    <img src="../assets/upload/utilities/<?php echo $rows->photo; ?>" style="width: 80px; border-radius: 0; height: auto;">
                                    <?php endif; ?>
                                </td>
                                <td  style="text-align:center; width: 150px;">
                                    <?php echo $rows->name; ?>
                                </td>
                                <td style="text-align:center;">
                        <a class="btn btn-success" href="index.php?controller=utilities&action=update&id=<?php echo $rows->id; ?>">EDIT</a>&nbsp;
                        <a class="btn btn-danger" href="index.php?controller=utilities&action=delete&id=<?php echo $rows->id; ?>" onclick="return window.confirm('Bạn chắc chưa?');">DELETE</a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item disabled"><a class="page-link" href="#">Page</a></li>
                        <?php for($i = 1;$i <= $numPage; $i++): ?>
                            <li><a class="page-link" href="index.php?controller=utilities&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                            <?php endfor; ?>
                    </ul>
                    </nav>
            </div>
</div>
</div>
</div>
</div>