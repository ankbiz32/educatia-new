
<div class="content-wrapper">
    
    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"><i class="fa fa-circle"></i>&nbsp;&nbsp;Courses</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="<?=base_url('Admin')?>">Dashboard</a></li>
                  <li class="breadcrumb-item active">Courses</li>
                </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div>
    </div> <!-- /.Content header -->
    
    <!-- Content Main-->
    <div class="content">
      <div class="container-fluid">

        <div class="row mt-3">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">
              <div class="card-header row">
                <h2 class="card-title col">List of courses:</h2>
                <button class="btn btn-primary ml-auto" data-toggle="modal" data-target="#add">+ Add new Course</button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="bookdt" class="table table-bordered table-hover" style="width:100%">
                  <thead>
                    <tr>
                      <th>Course name</th>
                      <th>Category</th>
                      <th>Image</th>
                      <th>Price</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <!-- display Data-->
                    <?php foreach ($data as $d){?>
                      <tr>
                        <td><?=$d->name?></td>
                        <td><?=$d->cat_name?></td>
                        <td><img src="<?=base_url()."assets/images/$d->img_src"?>" alt="Image" height="50" style="object-fit:cover;"></td>
                        <td><?=$d->new_price?>&emsp;&emsp;<del><?=$d->old_price?></del></td>
                        <td>
                          <a href="<?=base_url('Delete/Course/'.$d->id)?>" onclick="confirmation(event)" class="btn del-btn btn-danger mb-1" title="Delete Service"><i class="fa fa-trash-alt"></i></a>
                          <button class="btn btn-primary mb-1" data-toggle="modal" data-target="#edit<?=$d->id?>" title="Edit Event"><i class="fa fa-edit"></i></button>
                        </td>
                      </tr>

                      <!-- edit modal -->
                        <div class="modal fade" id="edit<?=$d->id?>">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title"> <i class="fa fa-edit"></i> &nbsp; Edit Course:</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form role="form" method="post" action="<?php echo base_url();?>Edit/Course/<?=$d->id?>" enctype="multipart/form-data">
                                        <div class="form-group col-12">
                                            <label for="heading" class="m-0">Course name:</label>
                                            <p class="text-sm text-muted m-0">(Max. 100 Characters)</p>
                                            <input type="text" class="form-control mt-2" maxlength="100" name="name" value="<?=$d->name?>" id="name" required>
                                        </div>
                                        <div class="form-group col-12">
                                          <label for="img" class="m-0">Image for course:</label>
                                          <p class="m-0 text-muted">( Choose only if you want to change the current image )</p>
                                          <p class="text-sm text-muted mt-0 mb-2">( Max image size : 1MB )</p>
                                          <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="img" name="img">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                          </div>
                                        </div>
                                        <div class="form-group col-12">
                                            <label for="content" class="m-0">Overview:</label>
                                            <p class="m-0 text-sm text-muted">(Max. 900 Characters)</p>
                                            <textarea name="overview" id="overview" maxlength="900" class="form-control mt-2" rows="10"><?=$d->overview?></textarea>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="content" class="m-0">Category:</label>
                                                <select name="cat_id" id="" class="form-control mt-2">
                                                    <option value="">-- Choose category --</option>
                                                    <?php foreach($cat as $c){?>
                                                        <option value="<?=$c->cat_id?>" <?=$c->cat_id==$d->cat_id?' selected':''?>><?=$c->cat_name?></option>
                                                    <?php }?>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="heading" class="m-0">Rating</label>
                                                <span class="text-sm text-muted m-0">(Out of 5)</span>
                                                <input type="number" class="form-control mt-2" max="5" step="0.1" name="rating" value="<?=$d->rating?>" id="rating" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="lang" class="m-0">Language</label>
                                                <input type="text" class="form-control mt-2" name="lang" value="<?=$d->lang?>" id="lang" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="heading" class="m-0">Skill level</label>
                                                <input type="text" class="form-control mt-2" name="level" value="<?=$d->level?>" id="level" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="heading" class="m-0">New Price</label>
                                                <input type="text" class="form-control mt-2" name="new_price" value="<?=$d->new_price?>" id="new_price" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="heading" class="m-0">Old Price</label>
                                                <input type="text" class="form-control mt-2" name="old_price" value="<?=$d->old_price?>" id="old_price" required>
                                            </div>
                                        </div>
                                </div>
                                <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-recycle"></i>&nbsp; Update</button>
                                    </form>
                                </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                      <!-- /edit modal -->

                    <?php }?>

                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>

      </div><!-- /.container-fluid -->
    </div>

</div> <!-- /.Wrapper -->


 <!-- Add modal -->
  <div class="modal fade" id="add">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">+ Add Course:</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form role="form" method="post" action="<?php echo base_url();?>Add/Course" enctype="multipart/form-data">
                <div class="form-group col-12">
                    <label for="heading" class="m-0">Course name:</label>
                    <p class="text-sm text-muted m-0">(Max. 100 Characters)</p>
                    <input type="text" class="form-control mt-2" maxlength="100" name="name" id="name" required>
                </div>
                <div class="form-group col-12">
                    <label for="img" class="m-0">Image for course:</label>
                    <p class="text-sm text-muted mt-0 mb-2">( Max image size : 1MB )</p>
                    <div class="custom-file">
                    <input type="file" class="custom-file-input" id="img" name="img">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                </div>
                <div class="form-group col-12">
                    <label for="content" class="m-0">Overview:</label>
                    <p class="m-0 text-sm text-muted">(Max. 900 Characters)</p>
                    <textarea name="overview" id="overview" maxlength="900" class="form-control mt-2" rows="10"></textarea>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="content" class="m-0">Category:</label>
                        <select name="cat_id" id="" class="form-control mt-2">
                            <option value="">-- Choose category --</option>
                            <?php foreach($cat as $c){?>
                                <option value="<?=$c->cat_id?>"><?=$c->cat_name?></option>
                            <?php }?>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="heading" class="m-0">Rating</label>
                        <span class="text-sm text-muted m-0">(Out of 5)</span>
                        <input type="number" class="form-control mt-2" max="5" step="0.1" name="rating" id="rating" placeholder="Example:4.5" required>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="lang" class="m-0">Language</label>
                        <input type="text" class="form-control mt-2" name="lang" id="lang" placeholder="Example: English" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="heading" class="m-0">Skill level</label>
                        <input type="text" class="form-control mt-2" name="level" id="level" placeholder="Example: Advanced or beginner" required>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="heading" class="m-0">New Price</label>
                        <input type="text" class="form-control mt-2" name="new_price" id="new_price" placeholder="Example: FREE or Rs. 1099/-" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="heading" class="m-0">Old Price</label>
                        <input type="text" class="form-control mt-2" name="old_price" id="old_price" placeholder="Example: FREE or Rs. 1099/-" required>
                    </div>
                </div>
        </div>
        <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary">+ Add</button>
            </form>
        </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
<!-- /Add modal -->

<!-- DataTable assets -->
<script src="<?php echo base_url(); ?>assets/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>


<script>

// Init Datatable
  $(function () {
    $('#bookdt').DataTable({
      "pageLength": 10,
      "paging": true,
      "lengthChange": true,
      "searching": true,
      // "ordering": true,
      "info": true,
      "autoWidth": true,
      "scrollX": true
    });
  });


// Name of the file appearing on selecting image
  $(".custom-file-input").on("change", function() {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
  });

</script>
