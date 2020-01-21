<?php

namespace Form\Form;


use Zend\Form\Element;
use Zend\Form\Form;

class FormElement extends Form
{
    public function __construct()
    {
        parent::__construct();
        $fullname = new Element('fullname');
        $fullname->setLabel('Fullname: ');
        $fullname->getLabelAttributes([
            'id' => 'fullname',
            'class' => 'control-lable'
        ]);
        $fullname->setAttributes([
            'type' => 'text',
            'class' => 'form-control',
            'id' => 'fullname',
            'placeholder' => "Nhập họ tên: "
        ]);

        $this->add($fullname);
    }
}
