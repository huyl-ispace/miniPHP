        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Lớp</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
			   <div class="col-sm-2 col-lg-2"></div>
               <div class="col-sm-8 col-lg-8">
					<div class="panel panel-default">
						<?php
							$lop = $this->controller->lop->getLopID($lopId);
							$gV = $this->controller->lop->getIDLop();
						?>
                        <div class="panel-heading">
                            <i class="fa fa-pencil"></i> Update Lớp
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                     <form action="#" id="form-update-lop" method="post" >
										<div class="form-group">
											<label>Name Class <span class='text-danger'>*</span></label>
											<input dir="auto" type="text" name="name" class="form-control" maxlength="30" value="<?= $lop["ten"] ?>" placeholder = "Nhập Tên" required>
										</div>
										<div class="form-group">
											<label>Giáo Viên Chủ Nhiệm <span class='text-danger'>*</span></label>
											<select name="giaovien" class="form-control" size="1">
                                                <?php foreach($gV as $value){ ?>
														<option <?= $lop['giaovienchunhiem']==$value['id']?'selected':'' ?> value="<?= $value['id'];?>"><?=     $value["ten"] ?></option>
                                                <?php } ?>
                                            </select>
										</div>
										<div class="form-group form-actions text-right">
											<button type="submit" name="submit" value="submit" class="btn btn-md btn-primary">
												<i class="fa fa-check"></i> Update
											</button>
										</div>
									</form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
				</div>
			<!-- END Profile Block -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->
