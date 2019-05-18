<div class="row">
    <div class="col-12">
        <ol>
            <?php foreach ($text->info() as $key => $val): ?>
                <li><h6><?php echo ucfirst($text->info()['description']) ?>: </h6> <strong><?php echo $val; ?></strong><br><br></li>
            <?php endforeach ?>
        </ol>
        <ol>
            <?php foreach ($fullText->info() as $key => $val): ?>
                <li><h6><?php echo ucfirst($fullText->info()['description']) ?>: </h6> <strong><?php echo $val; ?></strong><br><br></li>
            <?php endforeach ?>
        </ol>
        <ol>
            <?php foreach ($cropHint->info() as $key => $val): ?>
                <li><h6><?php echo ucfirst($cropHint->info()['description']) ?>: </h6> <strong><?php echo $val; ?></strong><br><br></li>
            <?php endforeach ?>
        </ol>
    </div>
</div>