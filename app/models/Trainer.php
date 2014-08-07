<?php
class Trainer extends Eloquent {
public function comment() {
          
            return $this->hasMany('Comment');
        }
	
	
}
