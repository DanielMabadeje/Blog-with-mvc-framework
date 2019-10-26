<?php require APPROOT . '/views/inc/header.php'; ?>
<!-- <div class="row"> -->
<a href="<? URLROOT; ?>posts" class="btn btn-light"> <i class="fa fa-backward"></i> Back</a>
<div class="col-md-6 mx-auto">
    <div class="card card-body bg-light mt-5">
        <h2>Edit Post</h2>
        <p>update a post</p>
        <form action="<?= URLROOT ?>posts/edit/<?= $data['id']; ?>" method="post">
            <div class="form-group">
                <label for="title">Title <sup>*</sup></label>
                <input type="text" name="title" class="form-control form-control-lg <?= (!empty($data['title_err'])) ? 'is-invalid' : ''; ?>" value="<?= $data['title']; ?>">
                <span class="invalid-feedback"><?= $data['title_err']; ?></span>
            </div>
            <div class="form-group">
                <label for="body">Body: <sup>*</sup></label>
                <textarea type="text" name="body" class="form-control form-control-lg <?= (!empty($data['body_err'])) ? 'is-invalid' : ''; ?>" value="<?= $data['body']; ?>"><?= $data['body']; ?> </textarea>
                <span class="invalid-feedback"><?= $data['body_err']; ?></span>
            </div>
            <input type="submit" class="btn btn-success" value="Submit">
            <!-- <?php var_dump($data['id']); ?> -->
        </form>
    </div>
    <!-- </div> -->
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>