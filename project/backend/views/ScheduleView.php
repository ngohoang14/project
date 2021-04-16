<!-- load file layout chung -->
<?php $this->layoutPath = "Layout.php"; ?> 
<div class="col-md-12">
                <style type="text/css">
                    .pagination{padding:0px; margin:0px; float: right; margin-top: 5px;}
                </style>
        <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Lịch đặt trước</h6>
                <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th style="width: 150px;">Name</th>
                            <th style="width: 150px;">Phone</th> 
                            <th style="width: 100px;">Time</th>
                            <th style="width: 100px;">Date</th>
                            <th style="width: 150px;">Sevices</th>
                            <th style="width: 150px;">Note</th>
                            <th style="width: 100px;"></th>
                        </tr>
                    </thead>
                <?php foreach($data as $rows): ?>
                <tbody>
                    <tr>
                     <td><?php echo $rows->name; ?></td>
                     <td><?php echo $rows->phone; ?></td>
                     <td><?php echo $rows->time; ?></td>
                     <td><?php $date = Date_create($rows->date); echo Date_format($date, "d/m/Y"); ?></td>
                     <td style="text-align: center;">
                         <?php echo $rows->sevice; ?>
                     </td>
                     <td><?php echo $rows->note; ?></td>
                     <td style="text-align: center;">
                        <a class="btn btn-success" href="index.php?controller=schedule&action=update&id=<?php echo $rows->id; ?>">EDIT</a>&nbsp;
                        <a class="btn btn-danger" href="index.php?controller=schedule&action=delete&id=<?php echo $rows->id; ?>" onclick="return window.confirm('Bạn chắc chưa?');">DELETE</a>
                     </td>
                 </tr>
                    <?php endforeach; ?>
                </tbody>
                </table>
                <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item disabled"><a class="page-link" href="#">Page</a></li>
                    <?php for($i = 1;$i <= $numPage; $i++): ?>
                        <li><a class="page-link" href="index.php?controller=schedule&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                        <?php endfor; ?>
                </ul>
                </nav>
        </div>
            </div>
        </div>
    </div>
    </div>