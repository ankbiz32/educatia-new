<link rel="stylesheet" href="<?=base_url()?>assets/plugins/kipso-icons/style.css">

<div class="content-wrapper">
    
    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"><i class="fa fa-circle"></i>&nbsp;&nbsp;Categories</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="<?=base_url('Admin')?>">Dashboard</a></li>
                  <li class="breadcrumb-item active">Courses</li>
                  <li class="breadcrumb-item active">Categories</li>
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
                <h2 class="card-title col">List of categories:</h2>
                <button class="btn btn-primary ml-auto" data-toggle="modal" data-target="#add">+ Add new category</button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="bookdt" class="table table-bordered table-hover" style="width:100%">
                  <thead>
                    <tr>
                      <th>Category</th>
                      <th>Color</th>
                      <th>Image</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <!-- display Data-->
                    <?php foreach ($data as $d){?>
                      <tr>
                        <td><?=$d->cat_name?></td>
                        <td class=""><div style="height:20px; width:20px;" class="<?=$d->cat_color?>"></div></td>
                        <td><div class="<?=$d->cat_img_src?> text-dark text-xl text-bold"></div></td>
                        <td>
                          <a href="<?=base_url('Delete/Category/'.$d->cat_id)?>" onclick="confirmation(event)" class="btn del-btn btn-danger mb-1" title="Delete Category"><i class="fa fa-trash-alt"></i></a>
                          <button class="btn btn-primary mb-1" data-toggle="modal" data-target="#edit<?=$d->cat_id?>" title="Edit Category"><i class="fa fa-edit"></i></button>
                        </td>
                      </tr>

                      <!-- edit modal -->
                        <div class="modal fade" id="edit<?=$d->cat_id?>">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title"> <i class="fa fa-edit"></i> &nbsp; Edit Category:</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form role="form" method="post" action="<?php echo base_url();?>Edit/Category/<?=$d->cat_id?>" enctype="multipart/form-data">
                                      <div class="col">
                                        <div class="form-group">
                                            <label for="heading" class="m-0">Category name:</label>
                                            <input type="text" class="form-control mt-2" maxlength="100" name="cat_name" value="<?=$d->cat_name?>" id="heading" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="content" class="m-0">Color:</label>
                                            <select name="cat_color" id="" class="form-control" required>
                                                <option value="">-- Choose Color --</option>
                                                <option value="color-1" <?=$d->cat_color=='color-1'?' selected':''?>>
                                                    color-1
                                                </option>
                                                <option value="color-2" <?=$d->cat_color=='color-2'?' selected':''?>>
                                                    color-2
                                                </option>
                                                <option value="color-3" <?=$d->cat_color=='color-3'?' selected':''?>>
                                                    color-3
                                                </option>
                                                <option value="color-4" <?=$d->cat_color=='color-4'?' selected':''?>>
                                                    color-4
                                                </option>
                                                <option value="color-5" <?=$d->cat_color=='color-5'?' selected':''?>>
                                                    color-5
                                                </option>
                                                <option value="color-6" <?=$d->cat_color=='color-6'?' selected':''?>>
                                                    color-6
                                                </option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="content" class="m-0">Icon:</label>
                                            <select name="cat_img_src" id="" class="form-control" required>
                                                <option value="">-- Choose Icon --</option>
                                                <option value="kipso-icon-plus-symbol" <?=$d->cat_img_src=='kipso-icon-plus-symbol'?' selected':''?>>Plus</option>
                                                <option value="kipso-icon-contact" <?=$d->cat_img_src=='kipso-icon-contact'?' selected':''?>>Contact</option>
                                                <option value="kipso-icon-placeholder" <?=$d->cat_img_src=='kipso-icon-placeholder'?' selected':''?>>placeholder</option>
                                                <option value="kipso-icon-manager" <?=$d->cat_img_src=='kipso-icon-manager'?' selected':''?>>manager</option>
                                                <option value="kipso-icon-programming" <?=$d->cat_img_src=='kipso-icon-web-programming'?' selected':''?>>programming</option>
                                                <option value="kipso-icon-training" <?=$d->cat_img_src=='kipso-icon-training'?' selected':''?>>training</option>
                                                <option value="kipso-icon-targeting" <?=$d->cat_img_src=='kipso-icon-targeting'?' selected':''?>>targeting</option>
                                                <option value="kipso-icon-strategy" <?=$d->cat_img_src=='kipso-icon-strategy'?' selected':''?>>strategy</option>
                                                <option value="kipso-icon-professor" <?=$d->cat_img_src=='kipso-icon-professor'?' selected':''?>>professor</option>
                                                <option value="kipso-icon-music-player" <?=$d->cat_img_src=='kipso-icon-music-player'?' selected':''?>>music</option>
                                                <option value="kipso-icon-magnifying-glass" <?=$d->cat_img_src=='kipso-icon-magnifying-glass'?' selected':''?>>magnify</option>
                                                <option value="kipso-icon-knowledge" <?=$d->cat_img_src=='kipso-icon-knowledge'?' selected':''?>>knowledge</option>
                                                <option value="kipso-icon-human-resources" <?=$d->cat_img_src=='kipso-icon-human-resources'?' selected':''?>>HR</option>
                                                <option value="kipso-icon-health" <?=$d->cat_img_src=='kipso-icon-health'?' selected':''?>>health</option>
                                                <option value="kipso-icon-email" <?=$d->cat_img_src=='kipso-icon-email'?' selected':''?>>email</option>
                                                <option value="kipso-icon-camera" <?=$d->cat_img_src=='kipso-icon-camera'?' selected':''?>>camera</option>
                                                <option value="kipso-icon-desktop" <?=$d->cat_img_src=='kipso-icon-desktop'?' selected':''?>>desktop</option>
                                                <option value="kipso-icon-black-graduation-cap-tool-of-university-student-for-head " <?=$d->cat_img_src=='kipso-icon-black-graduation-cap-tool-of-university-student-for-head '?' selected':''?>>graduation-cap</option>
                                            </select>
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

                <p class="text-danger text-bold">* Deleting any category will also delete all the courses under that category.</p>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>


        <div class="row mt-4">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">
              <div class="card-header row">
                <h2 class="card-title col">Legend:</h2>
              </div>
              <!-- /.card-header -->
              <div class="card-body row">
                  <h6 class="col-12 text-bold mb-2">Colors:</h6>
                  <p class="col-2"><span style="display:inline-block; height:15px; width:15px;" class="color-1"></span> color-1</p>
                  <p class="col-2"><span style="display:inline-block; height:15px; width:15px;" class="color-2"></span> color-2</p>
                  <p class="col-2"><span style="display:inline-block; height:15px; width:15px;" class="color-3"></span> color-3</p>
                  <p class="col-2"><span style="display:inline-block; height:15px; width:15px;" class="color-4"></span> color-4</p>
                  <p class="col-2"><span style="display:inline-block; height:15px; width:15px;" class="color-5"></span> color-5</p>
                  <p class="col-2"><span style="display:inline-block; height:15px; width:15px;" class="color-6"></span> color-6</p>

                  <h6 class="col-12 text-bold mb-3 mt-4">Icons:</h6>
                  <p class="col-md-2 col-xs-4"><span class="kipso-icon-plus-symbol text-xl"></span> Plus</p>
                  <p class="col-md-2 col-xs-4"><span class="kipso-icon-contact text-xl"></span> Contact</p>
                  <p class="col-md-2 col-xs-4"><span class="kipso-icon-placeholder text-xl"></span> placeholder</p>
                  <p class="col-md-2 col-xs-4"><span class="kipso-icon-manager text-xl"></span> manager</p>
                  <p class="col-md-2 col-xs-4"><span class="kipso-icon-web-programming text-xl"></span> programming</p>
                  <p class="col-md-2 col-xs-4"><span class="kipso-icon-training text-xl"></span> training</p>
                  <p class="col-md-2 col-xs-4"><span class="kipso-icon-targeting text-xl"></span> targeting</p>
                  <p class="col-md-2 col-xs-4"><span class="kipso-icon-strategy text-xl"></span> strategy</p>
                  <p class="col-md-2 col-xs-4"><span class="kipso-icon-professor text-xl"></span> professor</p>
                  <p class="col-md-2 col-xs-4"><span class="kipso-icon-music-player text-xl"></span> music</p>
                  <p class="col-md-2 col-xs-4"><span class="kipso-icon-magnifying-glass text-xl"></span> magnify</p>
                  <p class="col-md-2 col-xs-4"><span class="kipso-icon-knowledge text-xl"></span> knowledge</p>
                  <p class="col-md-2 col-xs-4"><span class="kipso-icon-human-resources text-xl"></span> HR</p>
                  <p class="col-md-2 col-xs-4"><span class="kipso-icon-health text-xl"></span> health</p>
                  <p class="col-md-2 col-xs-4"><span class="kipso-icon-email text-xl"></span> email</p>
                  <p class="col-md-2 col-xs-4"><span class="kipso-icon-camera text-xl"></span> camera</p>
                  <p class="col-md-2 col-xs-4"><span class="kipso-icon-desktop text-xl"></span> desktop</p>
                  <p class="col-md-2 col-xs-4"><span class="kipso-icon-black-graduation-cap-tool-of-university-student-for-head text-xl"></span> graduation-cap</p>
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
            <h4 class="modal-title">+ Add Category:</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form role="form" method="post" action="<?php echo base_url();?>Add/Category" enctype="multipart/form-data">
              <div class="col">
                <div class="form-group">
                    <label for="heading" class="m-0">Category name:</label>
                    <input type="text" class="form-control mt-2" maxlength="100" name="cat_name" id="cat_name" required>
                </div>
                <div class="form-group">
                    <label for="content" class="m-0">Color:</label>
                    <select name="cat_color" id="" class="form-control" required>
                        <option value="">-- Choose color --</option>
                        <option value="color-1">color-1</option>
                        <option value="color-2">color-2</option>
                        <option value="color-3">color-3</option>
                        <option value="color-4">color-4</option>
                        <option value="color-5">color-5</option>
                        <option value="color-6">color-6</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="content" class="m-0">Icon:</label>
                    <select name="cat_img_src" id="" class="form-control" required>
                        <option value="">-- Choose Icon --</option>
                        <option value="kipso-icon-plus-symbol">Plus</option>
                        <option value="kipso-icon-contact">Contact</option>
                        <option value="kipso-icon-placeholder">placeholder</option>
                        <option value="kipso-icon-manager">manager</option>
                        <option value="kipso-icon-programming">programming</option>
                        <option value="kipso-icon-training">training</option>
                        <option value="kipso-icon-targeting">targeting</option>
                        <option value="kipso-icon-strategy">strategy</option>
                        <option value="kipso-icon-professor">professor</option>
                        <option value="kipso-icon-music-player">music</option>
                        <option value="kipso-icon-magnifying-glass">magnify</option>
                        <option value="kipso-icon-knowledge">knowledge</option>
                        <option value="kipso-icon-human-resources">HR</option>
                        <option value="kipso-icon-health">health</option>
                        <option value="kipso-icon-email">email</option>
                        <option value="kipso-icon-camera">camera</option>
                        <option value="kipso-icon-desktop">desktop</option>
                        <option value="kipso-icon-black-graduation-cap-tool-of-university-student-for-head ">graduation-cap</option>
                    </select>
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
