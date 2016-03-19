<?php
class Created extends EMongoEmbeddedDocument
{
    public $date;
 
    // We may define rules for embedded document too
    public function rules()
    { 
        return array(
            // ...
        );
    }
 
    // And attribute names too
    public function attributeNames() { /* ... */ }
 
    // NOTE: for embedded documents we do not define static model method!
    //       we do not define getCollectionName method either.
}