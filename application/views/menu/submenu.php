<div class="container-fluid">


    <h1 class="h3 mb-4 text-grey-800">
        <?= $title; ?>
    </h1>

    <div class="row">
        <div class="col-lg-12">
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flashdata'); ?>">

            </div>
            <?php if ($this->session->flashdata('flashdata')) :  ?>
                
            <?php endif; ?>
            <?= $this->session->flashdata('flashdata'); ?>

            <table class="table table-striped table-dark">

                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Menu</th>
                        <th scope="col">Url</th>
                        <th scope="col">Icon</th>
                        <th scope="col">Active</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($subMenu as $sm) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $sm['title']; ?></td>
                            <td><?= $sm['menu']; ?></td>
                            <td><?= $sm['url']; ?></td>
                            <td><?= $sm['icon']; ?></td>
                            <td><?= $sm['is_active']; ?></td>
                            <td>
                                <a href=""><i class="fas fa-fw fa-edit text-info float-left" data-toggle="tooltip" data-placement="bottom" title="edit"></i></a>
                                <a href="<?= base_url('menu/delete/') . $sm['id'];?>" class="delete-button" ><i class="fas fa-trash text-danger float-left ml-3" confirm="Sure want to delete this?" data-toggle="tooltip" data-placement="bottom" title="delete"></i></a>

                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>

            </table>
            <a href="" class="btn btn-info" data-toggle="modal" data-target="#newModal">Add New Sub Menu</a>
        </div>
    </div>

</div>

<!-- Modal -->
<div class="modal fade" id="newModal" tabindex="-1" role="dialog" aria-labelledby="newModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content bg-dark text-light">
            <div class="modal-header">
                <h5 class="modal-title" id="newModalLabel">Add New Sub Menu</h5>
                <button type="button" class="close btn-danger text-light" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('menu/submenu') ?>" method="post">
                    <div class="form-group">
                        <label for="title"> Title Menu : </label>
                        <input type="text" class="form-control" name="title" id="title" placeholder="Title Menu">
                    </div>
                    <div class="form-group">
                        <label for="title"> Menu Name : </label>
                        <select class="form-control" name="menu_id" id="menu_id">
                            <option value="">Select Menu</option>

                            <?php foreach ($menu as $m) : ?>

                                <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>

                            <?php endforeach; ?>

                        </select>
                    </div>

                    <div class="form-group">
                        <label for="title"> Menu Url : </label>
                        <input type="text" class="form-control" name="url" id="url" placeholder="Menu Url">
                    </div>

                    <div class="form-group">
                        <label for="title"> Menu Icon : </label>
                        <input type="text" class="form-control" name="icon" id="icon" placeholder="Menu Icon">
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" name="is_active" id="is_active">
                            <label class="form-check-label" for="is_active">Active?</label>
                        </div>
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