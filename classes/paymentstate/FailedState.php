<?php

namespace OFFLINE\Mall\Classes\PaymentState;

class FailedState extends PaymentState
{
    public static function getAvailableTransitions(): array
    {
        return [
            PendingState::class,
            RefundedState::class,
            PaidState::class,
        ];
    }
}
