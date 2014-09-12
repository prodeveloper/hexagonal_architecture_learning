<?php

/**
 * Description of Ticket
 *
 * @author jacob
 */
class Ticket extends Model {
    function assignStaffer(Staffer $staffer) {
        if(!$staffer->categories->contains($this->category)){
            throw new DomainException("Staffer can't be assigned to ". $this->category);
        }
        $this->staffer()->associate($staffer);//Set relationship
        return $this;
    }
    function setCategory(Category $category){
        if($this->staffer instanceof  Staffer && 
                !$this->staffer->categories->contains($category)){
            //Unset staffer if cant be assigned to set category
            $this->staffer=null;
        }
        $this->category()->associate($category);//Set relationship
        return $this;
    }
}
