<?php /**
 * Theme Name: 404
 * @package silohon */ get_header(); ?>
<style>
    ._404{
    width: 100%;
    max-width: 500px;
    margin: 40px auto;
    text-align: center;
}
.__404_header{
    font-family: 'Anton';
    color: var(--bl2);
    font-size: 60px;
    letter-spacing: 1px;
    margin-bottom: 20px;
}
.___404{
    font-family: 'Oswald';
    color: var(--bl5);
    font-size: 18px;
}
</style>
<div class="container">
    <div class="_404">
        <h1 class="__404_header">404</h1>
        <p class="___404">Page Not Found, Please Visit another page to Read amazing article.</p>
    </div>
</div>

<?php get_footer(); ?>