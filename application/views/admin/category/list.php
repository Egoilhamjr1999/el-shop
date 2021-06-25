<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Categories</h1>
    <?php if ($this->session->flashdata('message')) : ?>
        <div class="alert alert-success" role="alert">
            <?= $this->session->flashdata('message'); ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="<?php echo site_url('admin/categories/add') ?>"><i class="fas fa-plus"></i> Add New</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Category</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Category</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach ($categories as $category) : ?>
                            <tr>
                                <td><?= $category['category']; ?></td>
                                <td><?= $category['desc_category']; ?></td>
                                <td>
                                    <a href="<?= base_url('admin/categories/edit/') . $category['id_category']; ?>" class="btn btn-info btn-circle btn-sm">
                                        <i class="fas fa-pen"></i>
                                    </a>
                                    <a class="btn btn-danger btn-circle btn-sm" onclick="deleteConfirm('<?= base_url('admin/categories/delete/' . $category['id_category']); ?>')">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->