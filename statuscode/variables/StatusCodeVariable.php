<?php

namespace Craft;

class StatusCodeVariable {

	/**
	 * Get HTTP status
	 */
  public function getHttpStatus()
  {
    return http_response_code();
  }

}
