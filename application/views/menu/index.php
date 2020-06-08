 <div class="container-fluid">


     <h1 class="h3 mb-4 text-grey-800">
         <?= $title; ?>
     </h1>

     <div class="row">
         <div class="col-lg-12">

             <?= form_error(
                    'menu',
                    '<div class="alert alert-danger" role="alert">',
                    '</div>'
                ); ?>

            <?= $this->session->flashdata('massage'); ?>

             <table class="table table-striped table-dark">

                 <thead>
                     <tr>
                         <th scope="col">#</th>
                         <th scope="col">Menu</th>
                         <th scope="col">action</th>
                     </tr>
                 </thead>

                 <tbody>
                     <?php $i = 1; ?>
                     <?php foreach ($menu as $u) : ?>
                         <tr>
                             <th scope="row"><?= $i; ?></th>
                             <td><?= $u['menu']; ?></td>
                             <td>
                                 <a href=""><i class="fas fa-fw fa-edit text-info float-left" data-toggle="tooltip" data-placement="bottom" title="edit"></i></a>
                                 <a href=""><i class="fas fa-trash text-danger float-left ml-3" data-toggle="tooltip" data-placement="bottom" title="delete"></i></a>

                             </td>
                         </tr>
                         <?php $i++; ?>
                     <?php endforeach; ?>
                 </tbody>

             </table>
             <a href="" class="btn btn-info" data-toggle="modal" data-target="#newModal">Add New Menu</a>
         </div>
     </div>

 </div>

 <!-- Modal -->
 <div class="modal fade" id="newModal" tabindex="-1" role="dialog" aria-labelledby="newModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content bg-dark text-light">
             <div class="modal-header">
                 <h5 class="modal-title" id="newModalLabel">Add New Menu</h5>
                 <button type="button" class="close btn-danger text-light" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">
                 <form action="<?= base_url('menu') ?>" method="post">
                     <div class="form-group">
                         <input type="text" autofocus class="form-control" name="menu" id="menu" placeholder="Menu Name" >
                     </div>

             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                 <button type="submit" class="btn btn-info">Add</button>
             </div>
             </form>
         </div>
     </div>
 </div>