<?php
//http://my-cakephp.blogspot.in/2009/11/how-to-create-category-tree-with.html
class CategoriesController extends AppController {
    var $name = 'Categories';
    function index() {
        $categories = $this->Category->generatetreelist(null, null, null, ' > ');
        //debug ($this->data);
        $this->set(compact('categories'));
    }
}
?>
