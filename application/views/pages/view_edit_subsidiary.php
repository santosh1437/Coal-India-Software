<div class="container">
	<div class="row">
		<div class="col-md-2 col-sm-2">
		</div>
		<div class="col-md-8 col-sm-8">
			<?php echo form_open_multipart('subsidiary/update_subsidiary'); ?>

			<div class="row">
			    <div class="col-md-12  ">

			        <!-- Error Form-->
			        <?php if ($error):?>
			            <div class="alert alert-danger alert-dismissible">
			                <?php echo $error; ?>
			            </div>
			        <?php endif; ?>


			        <div class="box box-solid box-primary">
			            <div class="box-header">
			                <h3 class="box-title" align="center"><?php echo $header.'<br><br>';?></h3>
			            </div>

			            <div class="box-body">

			                <div class="row">
			                	<div class="col-md-2">
			                	</div>
			                	<?php 
			                		$data=array('sub_id'=>$subsidiary['sub_id']);
			                		echo form_hidden($data);
			                	?>

			                    <div class="col-md-3">
			                        <div class="form-group">
			                            <label for="subsidiary">Subsidiary<i style="color:red; font-size:14px;" >*</i></label>
			                        </div>
			                    </div>

			                    <div class="col-md-3">
			                        <div class="form-group">
			                            <?php echo form_input(array('name' => 'sub_name', 'id' => 'sub_name', 'value' => $subsidiary['sub_name'], 'required' =>'required', 'class' => 'form-control')) ?>
			                        </div>
			                    </div>

			                </div>

			            </div>
			        </div>

			        <div class="box-footer">
			            <div class="row">
			                <div class="col-md-5">
			                </div>
			                <div class="col-md-2">
			                    <?php echo form_submit('submit', 'Save', ' class="btn btn-primary",  style="padding-left:25px;padding-right:25px;"'); ?>
			                </div>
			            </div>
			        </div>

			    </div>
			</div>
			<?php echo form_close(); ?>

		</div>

	</div>
</div>