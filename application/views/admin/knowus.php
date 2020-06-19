
<div class="content-wrapper">
    
    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                  <h1 class="m-0 text-dark"><i class="far fa-address-card"></i>&nbsp;&nbsp;Know Us</h1>
              </div><!-- /.col -->
              <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?=base_url('Admin')?>">Dashboard</a></li>
                    <li class="breadcrumb-item active">Know Us</li>
                  </ol>
              </div><!-- /.col -->
            </div><!-- /.row -->
        </div>
    </div> <!-- /.Content header -->
    
    <!-- Content Main-->
    <div class="content">
      <div class="container-fluid pt-3">
        <span class=" text-lg mt-5">Youtube Video link :</span>
        <div class="row mt-3">
        <?php foreach ($data as $d){?>
          <div class="col-md-6 col-sm-12">
            <input type="text" class="form-control col-md-12 mb-3" value="<?=$d->link?>" readonly disabled>
            <button class="btn btn-primary col-md-12" data-toggle="modal" data-target="#edit<?=$d->id?>" title="Edit Ad Banner"><i class="fa fa-edit"></i>&nbsp; Edit</button>
          </div>

          <!-- edit modal -->
          <div class="modal fade" id="edit<?=$d->id?>">
              <div class="modal-dialog">
                  <div class="modal-content">
                  <div class="modal-header">
                      <h4 class="modal-title"> <i class="fa fa-edit"></i> &nbsp; Edit Youtube link:</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                      <form role="form" method="post" enctype= "multipart/form-data" action="<?php echo base_url();?>Edit/KnowUs/<?=$d->id?>">
                         <div class="row">
                            <input type="text" class="form-control" name="link" value="<?=$d->link?>"  required>
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
          <!-- /edit  modal -->

        <?php }?>
        </div>

      </div><!-- /.container-fluid -->
    </div>

</div> <!-- /.Wrapper -->

<script>
    // Name of the file appearing on selecting image
    $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });

    $(document).ready(function() {
        $('#editor').summernote();
    });
</script>

