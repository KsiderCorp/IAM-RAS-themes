<nav id="navig" class="clearfix gettop <?php if ( is_user_logged_in() ) {echo 'logged';} else {echo 'dislogged';};?>">


<div class="pure-g">
<div class="block">
<div class="pure-u-1-2 pure-u-sm-1-2">

<?php if ( !is_front_page() ) : ?>
<div class="logoblock">
<a href="/" class="logo">ИПРИМ РАН</a>
</div>
<?php else : ?>
&nbsp;
<?php endif ; ?>

</div>

<div class="pure-u-1-2 pure-u-sm-1-2">
<ul class="sidem">

<li>
<a class="" id="searchopen"><i class="icon-search-1"></i></a>
<?php  include(TEMPLATEPATH . '/tp/searchform.php'); ?>
</li>

<li>
<a href="#side_menu" class="" id="opensider"><i class="icon-menu"></i></a>
</li>
</ul>
</div>
</div>
</div>

</nav>


<?php if ( is_user_logged_in() ) : ?>
<?php else : ?>
<?php endif ; ?>

<?php  include(TEMPLATEPATH . '/tp/menu.php'); ?>