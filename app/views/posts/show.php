<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="card card-body mb-3">
    <h4 class="card-title">
        <?= $data['post']->title; ?>
    </h4>
    <div class="bg-light p-2 mb-3">
        Written by
        <!-- <?= $data['user']->name; ?> on <?= $data['post']->created_at; ?> -->
        <?php if ($data['user']->name == $_SESSION['user_name']) {
            echo 'You on ' . $data['post']->created_at;
        } else {
            echo $data['user']->name . ' on ' . $data['post']->created_at;
        }
        ?>
    </div>
    <p class="card-text"><?= $data['post']->body; ?> </p>
    <?php if ($data['post']->user_id == $_SESSION['user_id']) : ?>
        <hr>
        <div class="d-flex">
            <a href="<?= URLROOT; ?>posts/edit/<?php echo $data['post']->id; ?>" class="btn btn-dark">Edit</a>
            <form class="text-right float-right" action="<?= URLROOT; ?>posts/delete/<?= $data['post']->id; ?> " method="post">
                <input type="submit" value="Delete" class="btn btn-danger">
            </form>
        </div>
    <?php endif; ?>
    <a href="<?= URLROOT; ?>posts/" class="btn btn-dark">Back</a>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>