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

        //hidden
        $hidden = new Element('hidden_input');
        $hidden->setAttributes([
            'type' => 'hidden',
            'value' => 'Zend Framework'
        ]);
        $this->add($hidden);

        //number
        $age = new Element\Number('number_input');
        $age->setLabel('Chọn tuổi: ');
        $age->setLabelAttributes([
            'id' => 'age',
            'class' => 'control-lable'
        ]);
        $age->setAttributes([
            'min' => 10,
            'max' => 50,
            'id' => 'age',
            'class' => 'form-control',
            'value' => 20
        ]);

        $this->add($age);

        //email
        $email = new Element\Email('email_input');
        $email->setLabel('Nhập email: ')
            ->setLabelAttributes([
                'id' => 'email',
                'class' => 'control-lable'
            ]);
        $email->setAttribute('class', 'form-control');
        $email->setAttributes([
            'placeholder' => "Nhập email:",
            'id' => 'email',
            'requỉred' => true
        ]);

        $this->add($email);
    }
}
