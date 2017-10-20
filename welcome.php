<!DOCTYPE>

<html>
    <head>
        <meta charset=""UTF-8>
        <title>Document</title>
    </head>
    <body>
        <heading>
            <h1>
                <?= $a.' '.$b?>
            </h1>
        </heading>

        <ul>
<!--            --><?php //foreach ($names as $key => $name) : ?>
<!--                <li><strong>--><?//= $key ; ?><!-- : </strong>--><?//=$name; ?><!--</li>-->
<!--            --><?php //endforeach;?>

            <?php
//                foreach($names as $name){
//                        echo "<li>$name</li>";
//                }
            ?>

<!--            --><?php //foreach ($person as $key => $feature) : ?>
<!--                <li><strong>--><?//= $key; ?><!-- : </strong>--><?//= $feature; ?><!--</li>-->
<!--            --><?php //endforeach; ?>
<!---->
<!--            --><?php //foreach ($tasks as $key => $task): ?>
<!--                <li><strong>--><?//= ucwords($key); ?><!-- : </strong>--><?//= ucwords($task); ?><!--</li>-->
<!--            --><?php //endforeach; ?>

            <?php foreach ($tasks as $task) : ?>
                <li>
                    <?php if ($task->completed) : ?>
                        <strike><?= $task->description; ?></strike>
                    <?php else: ?>
                        <?= $task->description; ?>
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </body>
</html>