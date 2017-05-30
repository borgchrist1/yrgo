<?php get_header(); ?>

<?php if (have_posts()) : ?>

    <?php while (have_posts()): the_post(); ?>

        <div class="col-xs-12 course-jumbo" style="background: url('<?php the_field('contact_background'); ?>'); background-size: cover;">
            <span class="jumbo-top"></span>
            <div class="jumbo-content">
                <h1><?php the_field('contact_title'); ?></h1>
                <h2 class="jumbo-h2"><?php the_field('contact_subTitle'); ?><br></h2>
            </div>
        </div>

        <div class="container zeropadding">
            <div class="row">

                <div class="col-xs-12 col-md-7">
                    <h2><?php the_field('contact_about'); ?></h2>
                    <p><?php the_field('contact_aboutText'); ?></p>
                </div>
                <div class="col-xs-12 col-md-3">
                    <h2><?php the_field('contact_contact'); ?></h2>
                    <?php if( have_rows('contact_contacts') ): ?>
                        <?php while ( have_rows('contact_contacts') ) : the_row(); ?>
                            <p><strong><?php the_sub_field('contact_addressTitle'); ?></strong>
                            <br><?php the_sub_field('contact_addressName'); ?>
                            <br><?php the_sub_field('contact_addressStreet'); ?>
                            <br><?php the_sub_field('contact_adressZip'); ?>
                            <br><?php the_sub_field('contact_addressCity'); ?>
                            <br><?php the_sub_field('contact_addressPhone'); ?></p>
                            <br>
                        <?php endwhile; ?>
                    <?php endif;?>
                </div>


            </div> <!-- end row-->

            <div class="row">

              <div class="col-xs-12 map">
                  <h2>Karta</h2>
                      <div id="map">

                      </div>
              </div>

            </div>
        </div>
        <script>
        function initMap() {

          var uluru = {lat: 57.706036, lng: 11.936399};
          // Create a new StyledMapType object, passing it an array of styles,
          // and the name to be displayed on the map type control.
          var styledMapType = new google.maps.StyledMapType(
            [
              {elementType: 'geometry', stylers: [{color: '#ebe3cd'}]},
              {elementType: 'labels.text.fill', stylers: [{color: '#523735'}]},
              {elementType: 'labels.text.stroke', stylers: [{color: '#f5f1e6'}]},
              {
                featureType: 'administrative',
                elementType: 'geometry.stroke',
                stylers: [{color: '#f52a3b'}]
              },
              {
                featureType: 'administrative.land_parcel',
                elementType: 'geometry.stroke',
                stylers: [{color: '#f52a3b'}]
              },
              {
                featureType: 'administrative.land_parcel',
                elementType: 'labels.text.fill',
                stylers: [{color: '#f52a3b'}]
              },
              {
                featureType: "landscape",
                elementType: "all",
                stylers: [
                  {
                    color: "#f2f2f2 "
                  }
                ]
              },
              {
                featureType: "landscape.man_made",
                elementType: "geometry.fill",
                stylers: [
                  {
                    color: "#e4e9eb "
                  }
                ]
              },
              {
                featureType: 'landscape.natural',
                elementType: 'geometry',
                stylers: [{color: '#e4e9eb'}]
              },
              {
                featureType: 'poi',
                elementType: 'geometry',
                stylers: [{color: '#dfd2ae'}]
              },
              {
                featureType: 'poi',
                elementType: 'labels.text.fill',
                stylers: [{color: '#93817c'}]
              },
              {
                featureType: 'poi.park',
                elementType: 'geometry.fill',
                stylers: [{color: '#a5b076'}]
              },
              {
                featureType: 'poi.park',
                elementType: 'labels.text.fill',
                stylers: [{color: '#447530'}]
              },
              {
                featureType: 'road',
                elementType: 'geometry',
                stylers: [{color: '#f5f1e6'}]
              },
              {
                featureType: 'road.arterial',
                elementType: 'geometry',
                stylers: [{color: '#fdfcf8'}]
              },
              {
                featureType: 'road.highway',
                elementType: 'geometry',
                stylers: [{color: '#f8c967'}]
              },
              {
                featureType: 'road.highway',
                elementType: 'geometry.stroke',
                stylers: [{color: '#e9bc62'}]
              },
              {
                featureType: 'road.highway.controlled_access',
                elementType: 'geometry',
                stylers: [{color: '#e98d58'}]
              },
              {
                featureType: 'road.highway.controlled_access',
                elementType: 'geometry.stroke',
                stylers: [{color: '#db8555'}]
              },
              {
                featureType: 'road.local',
                elementType: 'labels.text.fill',
                stylers: [{color: '#806b63'}]
              },
              {
                featureType: 'transit.line',
                elementType: 'geometry',
                stylers: [{color: '#dfd2ae'}]
              },
              {
                featureType: 'transit.line',
                elementType: 'labels.text.fill',
                stylers: [{color: '#8f7d77'}]
              },
              {
                featureType: 'transit.line',
                elementType: 'labels.text.stroke',
                stylers: [{color: '#ebe3cd'}]
              },
              {
                featureType: 'transit.station',
                elementType: 'geometry',
                stylers: [{color: '#dfd2ae'}]
              },
              {
                featureType: 'water',
                elementType: 'geometry.fill',
                stylers: [{color: '#001a52'}]
              },
              {
                featureType: 'water',
                elementType: 'labels.text.fill',
                stylers: [{color: '#001a52'}]
              }
            ],
            {name: 'Styled Map'});



            // Create a map object, and include the MapTypeId to add
            // to the map type control.
            var map = new google.maps.Map(document.getElementById('map'), {
              center: uluru,
              zoom: 15,
              mapTypeControlOptions: {
                mapTypeIds: [
                ]
              }
            });
            var marker = new google.maps.Marker({
              position: uluru,
              map: map
            });

            //Associate the styled map with the MapTypeId and set it to display.
            map.mapTypes.set('styled_map', styledMapType);
            map.setMapTypeId('styled_map');
          }
          </script>
          <script async defer
          src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDNAwwHgdZP6_t0-RhrcTFaHtQUDHcFSpk&callback=initMap">
          </script>
    <?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>
