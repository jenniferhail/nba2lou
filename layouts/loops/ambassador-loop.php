<?php
    $contacts = Wild_Apricot_Api_Public::get_contacts();
    $category_contacts = array();
    $the_array = null;
    $category = get_sub_field('category');
        $enable_cat = $category['enable_category'];
        $the_cat = $category['ambassador_category'];

    if(isset($contacts)) {
        if($enable_cat) {
            foreach($contacts as $contact) {
                if(isset($contact->MembershipLevel)) {
                    if($contact->MembershipLevel->Id == $the_cat) {
                        array_push($category_contacts, $contact);
                    }
                }
            }
            $the_array = $category_contacts;
        } else {
            $the_array = $contacts;
    
        }
    }
    

?>

<?php if($the_array) : ?>
    <div class="row">
        <ul class="items">
            <?php foreach($the_array as $contact) : ?>
                <li class="item">
                    <h4 class="h5 title"><?php echo $contact->FirstName . ' ' . $contact->LastName; ?></h4>
                    <?php if($contact->FieldValues[14]->Value) : ?>
                        <p><?php echo date('F j, Y', strtotime($contact->FieldValues[14]->Value)); ?></p> 
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ul>
        <div class="buttons load-more">
            <button class="btn">Load more</button>
        </div>
    </div>
<?php endif; ?>