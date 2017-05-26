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
