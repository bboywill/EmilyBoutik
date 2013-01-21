<?php
namespace emily\BoutikBundle\Core\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ContactForm extends AbstractType {
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add("name");
        $builder->add("email", "email");
        $builder->add("subject");
        $builder->add("body", "textarea");
    }

    public function getName() {
        return "emilyBoutikBundleCoreForm_contact";
    }
}