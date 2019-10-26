<nav class="navbar navbar-expand-lg navbar-dark bg-dark  mb-3">
    <div class="container">
        <a class="navbar-brand" href="<?= URLROOT ?>"><?php echo SITENAME; ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?= URLROOT ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= URLROOT ?>pages/about">About</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <?php if (isset($_SESSION['user_id'])) : ?> <li class="nav-item active">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Welcome <?= $_SESSION['user_name']; ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= URLROOT ?>users/logout">Logout</a>
                    </li>
                <?php else : ?>
                    <a class="nav-link" href="<?= URLROOT ?>users/register">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= URLROOT ?>users/login">Login</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>