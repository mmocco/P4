<?php
class Comment extends Eloquent {
public function trainer() {

            return $this->belongsTo('Trainer');
        }


}
 


