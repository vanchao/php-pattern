<?php

include_once('AbstractPageBuilder.php');
include_once('AbstractPageDirector.php');

class HTMLPageDirector extends AbstractPageDirector {
    private $builder = NULL;

    public function __construct(AbstractPageBuilder $builder) {
        $this->builder = $builder;
    }

    public function buildPage() {
        $this->builder->setTitle('Testing the HTMLPage');
        $this->builder->setHeading('Testing the HTMLPage');
        $this->builder->setText('Testing, testing, testing!');
        $this->builder->setText('Testing, testing, testing, or!');
        $this->builder->setText('Testing, testing, testing, more!');
        $this->builder->formatPage();
    }

    public function getPage() {
        return $this->builder->getPage();
    }
}
