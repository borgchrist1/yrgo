<?php
function add_your_fields_meta_box() {
  add_meta_box(
    'your_fields_meta_box', // $id
    'Your Fields', // $title
    'show_your_fields_meta_box', // $callback
    'your_post', // $screen
    'normal', // $context
    'high' // $priority
  );
}
add_action( 'add_meta_boxes', 'add_your_fields_meta_box' );

function show_your_fields_meta_box() {
  global $post;
  $meta = get_post_meta( $post->ID, 'your_fields', true ); ?>

  <input type="hidden" name="your_meta_box_nonce" value="<?php echo wp_create_nonce( basename(__FILE__) ); ?>">

  <span class="fields">
    <label for="Kurs titel">Kurs Titel</label>
    <input type="text" name="Kurs titel" value=""><br>
    <label for="Utbildningstyp">Utbildningstyp och poäng</label>
    <input type="text" name="Utbildningstyp" value="">
    <p>
	<label for="your_fields[image]">Image Upload</label><br>
	<input type="text" name="your_fields[image]" id="your_fields[image]" class="meta-image regular-text" value="<?php if(isset($meta['image'])) echo $meta['image']; ?>">
	<input type="button" class="button image-upload" value="Browse">
</p>
<div class="image-preview"><img src="<?php if(isset($meta['image'])) echo $meta['image']; ?>" style="max-width: 250px;"></div>
  <p>
<label for="your_fields[image2]">Image Upload</label><br>
<input type="text" name="your_fields[image2]" id="your_fields[image2]" class="meta-image regular-text" value="<?php if(isset($meta['image2'])) echo $meta['image2']; ?>">
<input type="button" class="button image-upload" value="Browse">
</p>
<div class="image-preview"><img src="<?php if(isset($meta['image2'])) echo $meta['image']; ?>" style="max-width: 250px;"></div>
    <script>
jQuery(document).ready(function ($) {

	// Instantiates the variable that holds the media library frame.
	var meta_image_frame;
	// Runs when the image button is clicked.
	$('.image-upload').click(function (e) {
		e.preventDefault();
		var meta_image = $(this).parent().children('.meta-image');

		// If the frame already exists, re-open it.
		if (meta_image_frame) {
			meta_image_frame.open();
			return;
		}
		// Sets up the media library frame
		meta_image_frame = wp.media.frames.meta_image_frame = wp.media({
			title: meta_image.title,
			button: {
				text: meta_image.button
			}
		});
		// Runs when an image is selected.
		meta_image_frame.on('select', function () {
			// Grabs the attachment selection and creates a JSON representation of the model.
			var media_attachment = meta_image_frame.state().get('selection').first().toJSON();
			// Sends the attachment URL to our custom image input field.
			meta_image.val(media_attachment.url);
		});
		// Opens the media library frame.
		meta_image_frame.open();
	});
});
</script>

  </span>

<div class="add" ><a>Add Fields</a></div>
<div id="type" >
    <select class="test" name="">
      <option value="subHeader">Sub Header</option>
      <option value="textBox">Textarea</option>
    </select>
</div>

<script>

let fields = document.querySelectorAll('.field');
let subHeaderKey = 0;

let customFields = {
 textBox : `<p>
	<label for="your_fields[textarea${subHeaderKey}]">Textarea</label>
	<br>
	<textarea name="your_fields[textarea${subHeaderKey}]" id="your_fields[textarea${subHeaderKey}]" rows="5" cols="30" style="width:500px;"><?php if(isset($meta['textarea'])) echo $meta['textarea']; ?></textarea>
</p>`,

 subHeader : `<p>
  <label for="your_fields[text${subHeaderKey}]">Input Text</label>
  <br>
  <input type="text" name="your_fields[text${subHeaderKey}]" id="your_fields[text${subHeaderKey}]" class="regular-text" value="">
  </p>`
};

  function appendChild (element){
    let addField = document.querySelector('.fields');
    //let key = fields.lenght;
    console.log(subHeaderKey);


    console.log('hello');
    addField.insertAdjacentHTML( 'beforeend', element  );
  }

  let addClicked = document.querySelector('.add');

  addClicked.addEventListener('click', (event) => {
      subHeaderKey++;
      let optionValue = document.querySelector('.test').value;
      //console.log(customFields[optionValue]);
      appendChild(customFields[optionValue]);
  });
</script>
  <?php }

  function save_your_fields_meta( $post_id ) {
    // verify nonce
    if ( !wp_verify_nonce( $_POST['your_meta_box_nonce'], basename(__FILE__) ) ) {
      return $post_id;
    }
    // check autosave
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
      return $post_id;
    }
    // check permissions
    if ( 'page' === $_POST['post_type'] ) {
      if ( !current_user_can( 'edit_page', $post_id ) ) {
        return $post_id;
      } elseif ( !current_user_can( 'edit_post', $post_id ) ) {
        return $post_id;
      }
    }

    $old = get_post_meta( $post_id, 'your_fields', true );
    $new = $_POST['your_fields'];

    if ( $new && $new !== $old ) {
      update_post_meta( $post_id, 'your_fields', $new );
    } elseif ( '' === $new && $old ) {
      delete_post_meta( $post_id, 'your_fields', $old );
    }
  }
  add_action( 'save_post', 'save_your_fields_meta' );
