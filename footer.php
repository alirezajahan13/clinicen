<?php
$karenmed_footer_column1=get_field('karenmed_footer_column1','option');
$karenmed_footer_column2=get_field('karenmed_footer_column2','option');
$karenmed_footer_column3=get_field('karenmed_footer_column3','option');
$karenmed_footer_column4=get_field('karenmed_footer_column4','option');
/**

 * The template for displaying the footer

 *

 * Contains the closing of the #content div and all content after.

 *

 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials

 *

 * @package karenclinic

 */



?>



	<footer id="colophon" class="site-footer">

		<div class="mainFooterBack">

			<div class="mainFooter sectionPadding mainView">

				<div class="calssFooterColumn1 calssFooterColumn">

					<div class="elementorImg">

						<a href="<?php echo $karenmed_footer_column1['logo_link']['url']; ?>" target="<?php echo $karenmed_footer_column1['logo_link']['target']; ?><?php echo $karenmed_footer_column1['logo_link']['title']; ?>" class="desctopLogoPart">

							<?php echo $karenmed_footer_column1['logo'] ?>

						</a>

					</div>

					<div class="elementoriText">

						<p><?php echo $karenmed_footer_column1['text'] ?></p>

					</div>

					<div class="socialMedia">

						<a href="<?php echo $karenmed_footer_column1['link1']['url']; ?>" target="<?php echo $karenmed_footer_column1['link1']['target']; ?><?php echo $karenmed_footer_column1['link1']['title']; ?>">

							<?php echo $karenmed_footer_column1['svg1'] ?>

						</a>

						<a href="<?php echo $karenmed_footer_column1['link2']['url']; ?>" target="<?php echo $karenmed_footer_column1['link2']['target']; ?><?php echo $karenmed_footer_column1['link2']['title']; ?>">

							<?php echo $karenmed_footer_column1['svg2'] ?>

						</a>

						<a href="<?php echo $karenmed_footer_column1['link3']['url']; ?>" target="<?php echo $karenmed_footer_column1['link3']['target']; ?><?php echo $karenmed_footer_column1['link3']['title']; ?>">

							<?php echo $karenmed_footer_column1['svg3'] ?>

						</a>

						<a href="<?php echo $karenmed_footer_column1['link4']['url']; ?>" target="<?php echo $karenmed_footer_column1['link4']['target']; ?><?php echo $karenmed_footer_column1['link4']['title']; ?>">

							<?php echo $karenmed_footer_column1['svg4'] ?>

						</a>

					</div>

				</div>

				<div class="calssFooterColumn2 calssFooterColumn">

					<h3><?php echo $karenmed_footer_column2['title'] ?></h3>

					<div class="footerLi">

						<?php
						foreach ($karenmed_footer_column2['item'] as $item) {
						?>
							<li>

								<a href="<?php echo $item['link']['url']; ?>" target="<?php echo $item['link']['target']; ?><?php echo $item['link']['title']; ?>"><?php echo $item['text'] ?></a>

							</li>
						<?php
						}
						?>

					</div>

				</div>

				<div class="calssFooterColumn3 calssFooterColumn">

					<h3><?php echo $karenmed_footer_column3['title'] ?></h3>

					<div class="footerLi">

					<?php
						foreach ($karenmed_footer_column3['item'] as $item) {
						?>
							<li>

								<a href="<?php echo $item['link']['url']; ?>" target="<?php echo $item['link']['target']; ?><?php echo $item['link']['title']; ?>"><?php echo $item['text'] ?></a>

							</li>
					<?php
					}
					?>

					</div>

				</div>

				<div class="calssFooterColumn4 calssFooterColumn">

					<h3><?php echo $karenmed_footer_column4['title'] ?></h3>

					<div class="workTime">

						<div class="svg">

							<?php echo $karenmed_footer_column4['time_svg'] ?>

						</div>
						<p><?php echo $karenmed_footer_column4['time'] ?></p>

					</div>
					<div class="address">
						<div class="svg">
						<?php echo $karenmed_footer_column4['location_svg'] ?>
						</div>
						<p><?php echo $karenmed_footer_column4['location'] ?></p>
					</div>

					<a href="tel://<?php echo $karenmed_footer_column4['phone'] ?>" class="callUs">
						<div class="callUsSvg">

							<?php echo $karenmed_footer_column4['phone_svg'] ?>

							</div>

							<div class="callUsText">

							<h4><?php echo $karenmed_footer_column4['text'] ?></h4>

							<p><?php echo $karenmed_footer_column4['phone'] ?></p>

						</div>
					</a>


				</div>

			</div>

			<div class="copyRightFooterBack">

				<div class="copyRightFooter mainView">

					<p class="copyRightP1 noMargin">کلیه حقوق وبسایت برای کلینیک کارن طب محفوظ است. طراحی و توسعه توسط <a href="https://idechy.ir/" target="_blank">ایده‌چی</a></p>

					<p class="copyRightP2 noMargin">کلینیک کارن طب ، بهترین در خاورمیانه</p>

				</div>

			</div>

		</div>

	</footer><!-- #colophon -->

</div><!-- #page -->



<?php wp_footer(); ?>



</body>

</html>

