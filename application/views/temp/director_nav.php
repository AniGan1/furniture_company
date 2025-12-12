<nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <img src="/public/img/logo.jpg" width="100px">
            <div class="collapse navbar-collapse justify-content-between" id="navbarNav">      
            <ul class="navbar-nav">
                <?php if (isset($_SESSION['id_user'])) {?>
                <li class="nav-item">
                    <a class="nav-link active text-light" aria-current="page"><?=$_SESSION['login']?></a>
                </li>
                <?php }?>
                <li class="nav-item">
                    <a class="nav-link active text-light" aria-current="page" href="Director/information_work">Сведения о ходе работ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-light" aria-current="page" href="Director/information_income">Сведения о доходах</a>
                </li>
                <?php if (isset($_SESSION['id_user']) && $_SESSION['id_role'] == 2) {
                    echo'<div>
                        <a class="btn btn-outline-success" href="Main/logout" type="submit">Выйти</a>
                    </div>';
                }?>
            </div>
        </div>
    </nav>