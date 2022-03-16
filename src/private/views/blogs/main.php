<?php
// print_r($data);
?>

<main class="container">
    <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
            <h1 class="display-4 fst-italic">Title of a longer featured blog post</h1>
            <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.</p>
            <p class="lead mb-0"><a href="./blog/signup.php" class="text-white fw-bold">Get Started .....</a></p>
        </div>
    </div>
    <div class="row g-5 mt-5">
        <div class="col-md-8">
            <h3 class="pb-4 mb-4 fst-italic border-bottom">
                Read
            </h3>
            <?php

            foreach ($data['posts'] as $key => $value) {
                if ($value->status == 'Published') {
                    echo "<div class='row mb-2'>
                   <div class='col'> 
                   <div class='row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative'>
                           <div class='col p-4 d-flex flex-column position-static'>
                               <strong class='d-inline-block mb-2 text-primary'>World</strong>
                               <h3 class='mb-0'>$value->title</h3>
                               <div class='mb-1 text-muted'>$value->date</div>
                               <p class='card-text mb-auto'>$value->description</p>
                               <form method='post' action='http://localhost:8080/pages/fullArticle' >
                                <input type='hidden' name='blog_id' value='$value->blog_id' />
                                <input type='hidden' name='user_id' value='$value->post_user_id' />
                               <input type='submit' class='stretched-link border-0' name='continue' value='Continue Reading ...'></input>
                               </form >     
                               </div>
                           <div class='col-auto d-none d-lg-block'>
                               <svg class='bd-placeholder-img' width='200' height='250' xmlns='http://www.w3.org/2000/svg' role='img' aria-label='Placeholder: Thumbnail' preserveAspectRatio='xMidYMid slice' focusable='false'>
                                   <title>Placeholder</title>
                                   <rect width='100%' height='100%' fill='#55595c' /><text x='50%' y='50%' fill='#eceeef' dy='.3em'>Thumbnail</text>
                               </svg>
                           </div>
                       </div>
                   </div>
               </div>";
                }
            }
            ?>

        </div>
        <div class="col-md-4">
            <div class="position-sticky" style="top: 2rem;">
                <div class="p-4 mb-3 bg-light rounded">
                    <h4 class="fst-italic h3 mb-3">Trending</h4>
                    <?php foreach ($data['posts'] as $key => $value) {
                        if ($value->trending == 'Yes') {
                            echo "<div class='row border p-3'>
                            <p class='mt-2 h5'> $value->title</p>
                            <p class='small mt-0'>$value->description</p>
                        </div>
                        <hr>
                            ";
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</main>