<?php 

// print_r($data); 
?>
<main class="container mb-5">
    <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
            <h1 class="display-4 fst-italic"><?php echo $data['article']->title; ?></h1>
            <p class="lead my-3"><?php echo $data['article']->description; ?></p>
            <p class="lead mb-0"><?php echo $data['article']->date; ?></p>
        </div>
    </div>
    <div class='h2 mt-4 mb-2'>
        <?php echo $data['User']->username; ?>
    </div>
    <div class='mt-4 mb-2'>
      
        <?php echo $data['article']->article ?>
        
    </div>
</main>    