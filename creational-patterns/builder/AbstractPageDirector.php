<?php

abstract class AbstractPageDirector{
    abstract function __construct(AbstractPageBuilder $builder);
    abstract function buildpage();
    abstract function getpage();
}
