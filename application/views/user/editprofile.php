 <!-- Begin Page Content -->
 <div class="container-fluid">

     <!-- Page Heading -->
     <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>

     <div class="row">
         <div class="col-lg-8">

             <?= form_open_multipart('user/editprofile'); ?>
             <div class="form-group row">
                 <label for="email" class="col-sm-2" col-form-label>Email</label>
                 <div class="col-sm-10">
                     <input type="text" class="form-control" id="email" name="email" value=<?= $user['email']; ?> readonly>
                 </div>
             </div>
             <div class="form-group row">
                 <label for="name" class="col-sm-2" col-form-label>Full Name</label>
                 <div class="col-sm-10">
                     <input type="text" class="form-control" id="name" name="name" value=<?= $user['name']; ?>>
                     <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                 </div>
             </div>
             <div class="form-group row">
                 <div class="col-sm-2">Picture</div>
                 <div class="col-sm-10">
                     <div class="row">
                         <div class="col-sm-3">
                             <img src="<?= $user['image'] ? base_url('assets/img/profile/') . $user['image'] : 'https://cdn.icon-icons.com/icons2/2506/PNG/512/user_icon_150670.png'; ?>" class="img-thumbnail">
                         </div>
                         <div class="col-sm-9">
                             <div class="form-group">
                                 <input type="file" class="form-control" id="image" name="image">
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="form-grup row justify-content-end">
                 <div class="col-sm-10">
                     <button type="submit" class="btn btn-primary">Edit</button>
                 </div>
             </div>
             </form>
         </div>
     </div>
 </div>
 </div>

 <!-- /.container-fluid -->

 <!-- End of Main Content -->