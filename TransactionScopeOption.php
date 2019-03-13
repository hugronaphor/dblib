<?php

namespace Drupal\Driver\Database\dblib;

class TransactionScopeOption extends Enum {
  const RequiresNew = 'RequiresNew';
  const Suppress = 'Suppress';
  const Required = 'Required';
}
