<?php

namespace Myblog\Domain\Admin;

use Myblog\Domain\Admin;
use Myblog\Domain\Viewer;

class Premium extends Viewer implements Admin {
    public function getMonthlyFee() {
        return 10.0;
    }

    public function getAmountToBorrow() {
        return 10;
    }

    public function getType() {
        return 'Premium';
    }

    public function pay($amount) {
        echo "Paying $amount.";
    }

    public function isExtentOfTaxes() {
        return true;
    }
}
