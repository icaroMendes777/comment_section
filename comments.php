<h3>Comentários:</h3>
<?php
//debug($GLOBALS['comments']);

foreach($GLOBALS['comments'] as $comment):
?>
<div class='comment_sent'>
    <div class="c_name">
        <?=$comment['name']; ?>
    </div>

    <div class="c_date">
        <small><i><?=formatTimeYM($comment['time']);   ?></i></small>

        <a href="?deleteId=<?=$comment['id'];   ?>" class="btn_delete">Delete</a>
    </div>

    <div class="c_text">
        <?=$comment['description']; ?>
        
    </div>

</div>





<?php
endforeach;
?>
<hr>
</main>

    <footer class="rounded_05">
        Desenvolvido Por <a href="http://icaromendes.epizy.com/">Icaro Mendes.</a>
    </footer>
</div>

</body>
</html>
