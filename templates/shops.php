<?php
if(!$meta){
	$meta = array(
		'name'=>'Все магазины',
		'title'=>'Каталог магазинов',
		'description'=>'Каталог магазинов для покупок с кэшбэком'
	);
}
include('header.php');
?>
<!--Container/-->
<div class="container wrap row vw1000-row-col">

	<div class="col-3">
		<aside class="sidebar">
			<div class="box vw1000-hide">
				<div class="pad">
					<div class="title js-add-button-to-accord" data-group="cat" data-index="0">Категории</div>
					<div class="js-add-content-to-accord" data-group="cat" data-index="0">
						<?php echo $lemon->getCategoryMenu(); ?>
					</div>
				</div>
			</div>
			<div class="js-create-accord" data-viewport-width="1000" data-group="cat"></div>
		</aside>
	</div>

	<div class="col-9 pad-0">

		<div class="pad mb-28">
			<div class="box">
				<div class="pad">
					<h1><?php echo $meta['name'];?></h1>
				</div>
			</div>
		</div>

		<div id="flex-wrap" class="flex-wrap">
			<?php
			if(!empty($content['shops'])){
				foreach($content['shops'] as $item){
					?>	
					<div class="shop-item">
						<div class="inner">
							<div class="logo mid-image-wrap">
								<a href="/shop/<?php echo $item['alias'];?>" title="Подробнее о <?php echo $item['name']; ?>"><img src="/images/logo/<?php echo $item['alias']; ?>.png" alt="<?php echo $item['name']; ?>" class="mid-image"></a>
							</div>
							<div class="cashback"><span><?php echo $item['cashback']; ?></span></div>
							<a rel="nofollow" href="/go/shop/<?php echo $item['id']; ?>" target="_blank" onclick="ga('send', 'event', 'outbound', 'click'); yaCounter39630900.reachGoal('outbound');" class="shop-item__button" title="Перейти в <?php echo $item['name']; ?>">В магазин</a>

							<a href="/shop/<?php echo $item['alias'];?>" class="more" title="Подробнее о <?php echo $item['name']; ?>">Подробнее</a>
						</div>
					</div>
					<?php	
				}
			}
			?>
		</div>

		<?php $pnav = $lemon->getPagenav();
		if (!empty($pnav)) { ?>
		<div class="pagination">
			<?php echo $pnav; ?>
		</div>
		<?php } ?>

	</div>

</div>
<!--/Container-->
<?php
$js_include = array('accord.js'); 
include('footer.php');
?>