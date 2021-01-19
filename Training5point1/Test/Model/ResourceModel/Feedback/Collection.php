<?php

namespace Training5point1\Test\Model\ResourceModel\Feedback;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected $_eventPrefix = 'training_feedback_collection';
    protected $_eventObject = 'feedback_collection';

    protected function _construct()
    {
        $this->_init(
            \Training5point1\Test\Model\Feedback::class,
            \Training5point1\Test\Model\ResourceModel\FeedbackResource::class
        );
    }

}