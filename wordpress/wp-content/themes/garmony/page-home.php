<?php
/*
Template Name: Home
*/
?>

<?php
get_header();
?>
  <!-- HEADER -->
  <header class="main-header">
    <div class="header-container">
      <div class="header-logo">
        <a href="/"><img class="main-logo"
                         src="<?php echo get_template_directory_uri() . '/media/icon/logo/logo.svg'; ?>" alt=""></a>
        <a href="/"><img class="single-logo"
                         src="<?php echo get_template_directory_uri() . '/media/icon/logo/logo-img.svg'; ?>" alt=""></a>
      </div>
      <div class="header-nav">
        <nav class="overlayMenu anhors">
          <ul>
            <li><a href="#products" class="anchor">Продукция</a></li>
            <li><a href="#about" class="anchor">О нас</a></li>
            <li><a href="#benefits" class="anchor">Преимущества</a></li>
            <li><a href="#contact" class="anchor">Контакты</a></li>
          </ul>
          <a href="#contact" class="header-btn mobile-btn anchor">Cвяжитесь с нами</a>
        </nav>
      </div>
      <div class="header-contact">
        <a href="tel:<?php the_field( 'tel' ) ?>"><?php the_field( 'tel' ) ?></a>
        <a class="header-btn anchor" href="#contact">Cвяжитесь с нами</a>
      </div>
      <div class="navBurger" role="navigation" id="navToggle"></div>
    </div>
  </header>


  <!-- MAIN CONTENT -->
  <section class="main-section">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="main-content">
            <h1><?php the_field( 'header' ); ?></h1>
            <h3><?php the_field( 'text' ); ?></h3>
            <a href="#contact" class="main-btn anchor">Cвяжитесь с нами</a>
          </div>
        </div>
      </div>
    </div>
  </section>



  <!-- Partners section   slider -->
  <section class="partners">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2>Наши партнеры</h2>
        </div>
      </div>
    </div>
    <div class="partners__slider owl-carousel owl-theme">
		<?php
		$args = array(
			'numberposts'      => - 1, // если -1 то выводит все
			'orderby'          => 'date',
			'order'            => 'DESC',
			'post_type'        => 'slider', // тип поста
			'suppress_filters' => true,
		);

		$posts = get_posts( $args );

		foreach ( $posts as $post ) {
			setup_postdata( $post );
			?>
          <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>" alt="img">
			<?php
		}
		wp_reset_postdata(); // сброс
		?>

    </div>
  </section>


  <!-- products section -->

<?php
$pack  = get_field( 'bottle_in_pack' );
$pack1 = get_field( 'bottle_in_pack1' );
$pack2 = get_field( 'bottle_in_pack2' );

?>
  <section id="products" class="products">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="products-title">
            <h2>Продукция</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-lg-6 col-md-12 order-last order-lg-first">
          <div class="products-content">
            <h3>Подсолнечное рафинированное дезодорированное масло марки “Премиум”</h3>
            <div class="product-item">
              <div class="text">Гост</div>
              <div class="text"><?php the_field( 'gost' ); ?></div>
            </div>

            <div class="product-item">
              <div class="text">Марка</div>
              <div class="text"><?php the_field( 'marka' ); ?></div>
            </div>

            <div class="product-item">
              <div class="text">Бутылка</div>
              <div class="text"><?php the_field( 'bottle' ); ?></div>
            </div>

            <div class="product-item">
              <div class="text">Упаковка</div>
              <div class="text"><?php the_field( 'pack' ); ?></div>
            </div>

            <div class="product-item">
              <div class="text">ЖИР</div>
              <div class="text"><?php the_field( 'fat' ); ?></div>
            </div>

            <div class="product-item">
              <div class="text">Энегретическая ценность</div>
              <div class="text"><?php the_field( 'energy' ); ?></div>
            </div>

            <div class="product-item">
              <div class="text">Срок годности:</div>
              <div class="text"><?php the_field( 'time' ); ?></div>
            </div>

            <div class="product-item pack">
              <div class="text">Бутылок в упаковке:</div>
            </div>
            <div class="product-table">
              <div class="table-item">
                <p>0,5 л</p>
                <p><?php echo $pack['number']; ?></p>
              </div>
              <div class="table-item">
                <p>0,97 л</p>
                <p><?php echo $pack['number-1']; ?></p>
              </div>
              <div class="table-item">
                <p>1,7 л</p>
                <p><?php echo $pack['number-2']; ?></p>
              </div>
              <div class="table-item">
                <p>3 л</p>
                <p><?php echo $pack['number-3']; ?></p>
              </div>
              <div class="table-item">
                <p>5 л</p>
                <p><?php echo $pack['number-4']; ?></p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-6 col-md-12 order-lg-last order-first">
          <div class="products-img">
			  <?php $img = get_field( 'img' ); ?>


            <img src="<?php echo $img; ?>" alt="">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-lg-6 order-last">
          <div class="products-content">
            <h3>Кукурузное рафинированное дезодорированное масло</h3>
            <div class="product-item">
              <div class="text">Гост</div>
              <div class="text"><?php the_field( 'gost1' ); ?></div>
            </div>

            <div class="product-item">
              <div class="text">Марка</div>
              <div class="text"><?php the_field( 'marka1' ); ?></div>
            </div>

            <div class="product-item">
              <div class="text">Бутылка</div>
              <div class="text"><?php the_field( 'bottle1' ); ?></div>
            </div>

            <div class="product-item">
              <div class="text">Упаковка</div>
              <div class="text"><?php the_field( 'pack1' ); ?></div>
            </div>

            <div class="product-item">
              <div class="text">ЖИР</div>
              <div class="text"><?php the_field( 'fat1' ); ?></div>
            </div>

            <div class="product-item">
              <div class="text">Энегретическая ценность</div>
              <div class="text"><?php the_field( 'energy1' ); ?></div>
            </div>

            <div class="product-item">
              <div class="text">Срок годности:</div>
              <div class="text"><?php the_field( 'time1' ); ?></div>
            </div>

            <div class="product-item pack">
              <div class="text">Бутылок в упаковке:</div>
            </div>
            <div class="product-table">
              <div class="table-item">
                <p>0,5 л</p>
                <p><?php echo $pack1['number2.1']; ?></p>
              </div>
              <div class="table-item">
                <p>0,97 л</p>
                <p><?php echo $pack1['number2.2']; ?></p>
              </div>
              <div class="table-item">
                <p>1,7 л</p>
                <p><?php echo $pack1['number2.3']; ?></p>
              </div>
              <div class="table-item">
                <p>3 л</p>
                <p><?php echo $pack1['number2.4']; ?></p>
              </div>
              <div class="table-item">
                <p>5 л</p>
                <p><?php echo $pack1['number2.5']; ?></p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12  col-lg-6 col-md-12">
          <div class="products-img">

			  <?php $img1 = get_field( 'img1' ); ?>


            <img src="<?php echo $img1; ?>" alt="">

          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-lg-6 order-last order-lg-first">
          <div class="products-content">
            <h3>Подсолнечное рафинированное дезодорированное с добавлением оливкового масла</h3>
            <div class="product-item">
              <div class="text">Гост</div>
              <div class="text"><?php the_field( 'gost2' ); ?></div>
            </div>

            <div class="product-item">
              <div class="text">Марка</div>
              <div class="text"><?php the_field( 'marka2' ); ?></div>
            </div>

            <div class="product-item">
              <div class="text">Бутылка</div>
              <div class="text"><?php the_field( 'bottle2' ); ?></div>
            </div>

            <div class="product-item">
              <div class="text">Упаковка</div>
              <div class="text"><?php the_field( 'pack2' ); ?></div>
            </div>

            <div class="product-item">
              <div class="text">ЖИР</div>
              <div class="text"><?php the_field( 'fat2' ); ?></div>
            </div>

            <div class="product-item">
              <div class="text">Энегретическая ценность</div>
              <div class="text"><?php the_field( 'energy2' ); ?></div>
            </div>

            <div class="product-item">
              <div class="text">Срок годности:</div>
              <div class="text"><?php the_field( 'time2' ); ?></div>
            </div>

            <div class="product-item pack">
              <div class="text">Бутылок в упаковке:</div>
            </div>
            <div class="product-table">
              <div class="table-item">
                <p>0,5 л</p>
                <p><?php echo $pack2['number2.1']; ?></p>
              </div>
              <div class="table-item">
                <p>0,97 л</p>
                <p><?php echo $pack2['number2.2']; ?></p>
              </div>
              <div class="table-item">
                <p>1,7 л</p>
                <p><?php echo $pack2['number2.3']; ?></p>
              </div>
              <div class="table-item">
                <p>3 л</p>
                <p><?php echo $pack2['number2.4']; ?></p>
              </div>
              <div class="table-item">
                <p>5 л</p>
                <p><?php echo $pack2['number2.5']; ?></p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-6 col-md-">
          <div class="products-img">
			  <?php $img2 = get_field( 'img2' ); ?>


            <img src="<?php echo $img2; ?>" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="about" class="about">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-6 col-md-12">
          <div class="about-content">
            <h2><?php the_field( 'about-title' ); ?></h2>
            <p><?php the_field( 'about-text' ); ?></p>
          </div>
        </div>
        <div class="col-12 col-lg-6 col-md-12">
          <div class="about-img">

			  <?php $about_img = get_field( 'about-img' ); ?>


            <img src="<?php echo $about_img; ?>" alt="about us">

          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- about section -->
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="geography-title">
          <h2>География работы</h2>
        </div>
      </div>
    </div>
  </div>


<?php
$geography  = get_field( 'geography-block' );
$geography1 = get_field( 'geography-networks' );
$geography2 = get_field( 'else' );

?>
  <section class="geography">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="geography-content">
            <div class="geography-item">
              <h4><?php echo $geography['number']; ?></h4>
              <p><?php echo $geography['desc']; ?></p>
            </div>
            <div class="geography-item">
              <h4><?php echo $geography1['number']; ?></h4>
              <p><?php echo $geography1['desc']; ?></p>
            </div>
            <div class="geography-item">
              <h4><?php echo $geography2['number']; ?></h4>
              <p><?php echo $geography2['desc']; ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Benefits -->

<?php
$benefits = get_field( 'benefits-block' );


?>
  <section id="benefits" class="benefits">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="benefits-title">
            <h2><?php the_field( 'benefits-title' ); ?></h2>
            <p><?php the_field( 'benefits-desc' ); ?></p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="benefits-content">
            <div class="benefits-item">
              <img src="<?php echo $benefits['benefits-img']; ?>" alt="" width="52" height="70">
              <h4><?php echo $benefits['description']; ?></h4>
            </div>
            <div class="benefits-item">
              <img src="<?php echo $benefits['benefits-img1']; ?>" alt="" width="52" height="70">
              <h4><?php echo $benefits['description1']; ?></h4>
            </div>
            <div class="benefits-item">
              <img src="<?php echo $benefits['benefits-img2']; ?>" alt="" width="52" height="70">
              <h4><?php echo $benefits['description2']; ?></h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Gallery section -->

<?php
$gallery = get_field( 'advantages-img' );


?>


  <div class="gallery">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="gallery-title">
            <h2>Галерея</h2>
          </div>
        </div>
      </div>
      <div class="row">
		  <?php
		  $args = array(
			  'numberposts'      => 6, // если -1 то выводит все
			  'orderby'          => 'date',
			  'order'            => 'DESC',
			  'post_type'        => 'catalog', // тип поста
			  'suppress_filters' => true,
		  );

		  $posts         = get_posts( $args );
		  $gallery_count = 0;
		  foreach ($posts as $post) {
			  setup_postdata( $post );
			  $gallery_count++;
			  if ( $gallery_count === 1 ) {
				  ?>
                <div class="col-12 col-md-8 col-lg-8 gallery-col">
                  <div class="gallery-content">
                    <a href="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>">
                      <img class="item" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>"
                           alt="<?php the_title(); ?>">
                    </a>
                  </div>
                </div>
				  <?php
			  } elseif ( $gallery_count === 2 ) {
				  ?>
                <div class="col-12 col-md-4 col-lg-4 gallery-col">
                <div class="gallery-content gallery-block">
                <a href="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>">
                  <img class="item" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>"
                       alt="<?php the_title(); ?>">
                </a>
				  <?php
			  } elseif ( $gallery_count === 3 ) {
				  ?>
                <a href="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>">
                  <img class="item" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>"
                       alt="<?php the_title(); ?>">
                </a>
                </div>
                </div>
				  <?php
			  } else {
			    ?>
          <div class="col-12 col-md-4 col-lg-4 gallery-col">
            <div class="gallery-content">
              <a href="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>">
                <img class="item" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>"
                     alt="<?php the_title(); ?>">
              </a>
            </div>
          </div>
          <?php
        }
		  }
		  wp_reset_postdata(); // сброс
		  ?>
      </div>
    </div>
  </div>

  <!-- contacts section -->
  <section id="contact" class="contacts">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-6">
          <div class="contact-block">
            <h2>Свяжитесь с нами</h2>
            <p><span>Телефон:</span> <a href="tel:<?php the_field( 'tel' ) ?>"><?php the_field( 'tel' ) ?></a></p>
            <p><span>Email:</span> <a href="mailto:<?php the_field( 'email' ); ?>"><?php the_field( 'email' ); ?></a>
            </p>
            <p><span>Адрес:</span> <?php the_field( 'address' ) ?></p>
            <div class="social-icon">
              <a href="<?php the_field( 'facebook' ); ?>" target="_blank"><img
                  src="<?php echo get_template_directory_uri() . '/media/icon/facebook.svg'; ?>" alt="" width="32"
                  height="32"></a>
              <a href="<?php the_field( 'instagram' ); ?>" target="_blank"><img
                  src="<?php echo get_template_directory_uri() . '/media/icon/instagram.svg'; ?>" alt="" width="32"
                  height="32"></a>
              <a href="<?php the_field( 'vk' ); ?>" target="_blank"><img
                  src="<?php echo get_template_directory_uri() . '/media/icon/social.svg'; ?>" alt="" width="32"
                  height="32"></a>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-6">
          <div class="contact-form-block">
            <form id="contact-form">
              <div class="input-wrapper input-wrapper--name">
                <input type="text" name="name">
              </div>
              <div class="input-double">
                <div class="input-wrapper input-wrapper--email">
                  <input type="text" name="email">
                </div>
                <div class="input-wrapper input-wrapper--tel">
                  <input type="text" name="tel">
                </div>
              </div>
              <div class="input-wrapper input-wrapper--comment">
                <input type="text" name="question">
              </div>
              <button type="submit" class="submit">Отправить</button>
            </form>
            <p>Нажимая вы соглашаетесь с политикой обработки персональных данных</p>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php get_footer(); ?>