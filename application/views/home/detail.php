<div class="container">
        <div class="row justify-content-center align-self-center mt-2 pt-2">
            <div class="justify-content-center align-self-center col-md-10 mb-5">
                <h1 class="text-center"><?= $post['title']; ?></h1>
                <!-- <h6 class="text-muted text-center">Ditulis oleh admin, dipublikasikan pada <?= $post['date']; ?>. Kategori <?= $post['name_kategori']; ?></h6> -->
                <h6 class="text-muted text-center">Ditulis oleh admin, dipublikasikan pada <?= $post['date']; ?>. </h6>
                <img src="<?= base_url('assets/article/img/post/' . $post['image']); ?>" class="img-fluid rounded" alt="Responsive image">
                <p><?= $post['body']; ?></p>
            </div>
        </div>
    </div>


