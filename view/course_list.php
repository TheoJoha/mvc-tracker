<?php include('view/header.php') ?>

<?php if ($courses) { ?>
        <section id="list" class="list">
            <header class="list__row list__header">
                <h1>Coruse List</h1>
    </header>   
    <?php } else { ?>
            <p>No courses exist yet.</p>
    <?php } ?>

<?php include('view/footer.php') ?>