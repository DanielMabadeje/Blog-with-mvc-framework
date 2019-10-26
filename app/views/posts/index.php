<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="row">
    <div class="col-md-6">
        <h1>Posts</h1>
    </div>
    <div class="col-md-6">
        <a href="<?= URLROOT; ?>/posts/add" class="btn btn-primary pull-right">
            <i class="fa fa-pencil"></i>Add Post
        </a>
    </div>
</div>
<?php flash('post_message'); ?>
<?php foreach ($data['posts'] as $post) : ?>
    <div class="card card-body mb-3">
        <h4 class="card-title">
            <?= $post->title; ?>
        </h4>
        <div class="bg-light p-2 mb-3">
            Written by
            <!-- <?= $post->name; ?> on <?= $post->created_at; ?> -->
            <?php if ($post->name == $_SESSION['user_name']) {
                    echo 'You on ' . $post->created_at;
                } else {
                    echo $post->name . ' on ' . $post->created_at;
                }
                ?>
        </div>
        <p class="card-text"><?= $post->body; ?> </p>
        <a href="<?= URLROOT; ?>posts/show/<?= $post->postId; ?>" class="btn btn-dark">Read More</a>
    </div>

<?php endforeach; ?>
<?php require APPROOT . '/views/inc/footer.php'; ?>